<?php
require_once "../config.php";
require_login(); // Exige que o usuário esteja logado
require_once $CFG->dirroot . '/mod/simplecertificate/lib.php'; // Inclui a biblioteca do Simple Certificate
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notas e Atividades Individuais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #00a86b;
            color: white;
        }
        td {
            background-color: #f9f9f9;
            color: #333;
        }
        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }
        tr:hover td {
            background-color: #e9ecef;
        }
        h5 {
            margin-top: 30px;
            color: #000000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php
// Verifica se course_id e userid foram passados via URL
if (isset($_GET['course_id']) && is_numeric($_GET['course_id']) && isset($_GET['userid']) && is_numeric($_GET['userid'])) {
    $courseid = intval($_GET['course_id']);
    $userid = intval($_GET['userid']);

    // Obter o nome do curso
    $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
    $course_name = $course->fullname;

    echo "<h4>Atividades e Notas Individuais: " . htmlspecialchars($course_name) . "
    <a href='javascript:history.back()' class='btn btn-primary float-end'>
        <i class='fas fa-arrow-left'></i> Voltar
    </a>
    </h4>";

} else {
    echo "<div class='alert alert-danger'>ID do curso ou ID do aluno não fornecido ou inválido.</div>";
    exit();
}
?>
                    </div>
                    <div class="card-body">

                        <?php
// Verificar se o aluno está inscrito no curso
$token = '7249c9e43a8c5d9ecb0dac7a7b8ef5d6';
$domainname = 'http://localhost/moodle/';
$functionname = 'core_enrol_get_enrolled_users';
$restformat = 'json';

$serverurl = $domainname . 'webservice/rest/server.php?wstoken=' . $token . '&wsfunction=' . $functionname . '&moodlewsrestformat=' . $restformat;
$params = ['courseid' => $courseid];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $serverurl);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo '<div class="alert alert-danger">Erro: ' . curl_error($curl) . '</div>';
    exit();
}
curl_close($curl);

$enrolled_users = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo '<div class="alert alert-danger">Erro ao decodificar JSON: ' . json_last_error_msg() . '</div>';
    exit();
}

$found_user = null;
foreach ($enrolled_users as $user) {
    if ($user['id'] == $userid) {
        $found_user = $user;
        break;
    }
}

if ($found_user) {
    // Consultar todas as atividades do curso, independentemente de conclusão ou nota
    $activities_sql = "SELECT gi.itemname, gi.grademax, gg.finalgrade
                       FROM {grade_items} gi
                       LEFT JOIN {grade_grades} gg ON gi.id = gg.itemid AND gg.userid = :userid
                       WHERE gi.courseid = :courseid";
    $activities = $DB->get_records_sql($activities_sql, ['courseid' => $courseid, 'userid' => $userid]);

    // Exibe o nome do aluno
    echo '<h5>' . htmlspecialchars($found_user['fullname']) . ' (' . htmlspecialchars($found_user['email']) . ')</h5>';
    echo '<table>
           <thead>
               <tr>
                   <th>Atividades</th>
                   <th>Nota</th>
               </tr>
           </thead>
           <tbody>';

    // Variáveis para calcular a média
    $total_pontos = 0;
    $total_atividades = 0;

    foreach ($activities as $activity) {
        if (empty($activity->itemname)) {
            continue;
        }

        $grade = isset($activity->finalgrade) ? number_format($activity->finalgrade, 2) : 'Sem nota';

        echo '<tr>
                <td>' . htmlspecialchars($activity->itemname) . '</td>
                <td>' . htmlspecialchars($grade) . '</td>
              </tr>';

        // Se a atividade tiver uma nota válida, incluímos no cálculo da média
        if ($grade !== 'Sem nota') {
            $total_pontos += floatval($activity->finalgrade);
        }
        $total_atividades++;
    }

    echo '</tbody>';

    // Calcula a média das notas de todas as atividades, incluindo as não concluídas
    echo '<tfoot>';
    if ($total_atividades > 0) {
        $media_notas = $total_pontos / $total_atividades;
        echo '<tr>
                <td><strong>Média de Notas</strong></td>
                <td><strong>' . number_format($media_notas, 2) . '</strong></td>
              </tr>';
    } else {
        echo '<tr>
                <td><strong>Média de Notas</strong></td>
                <td><strong>Sem atividades disponíveis</strong></td>
              </tr>';
    }
    echo '</tfoot>';
    echo '</table>';
} else {
    echo "<div class='alert alert-danger'>Aluno não encontrado no curso.</div>";
}
?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55ND"></script>
</body>
</html>
