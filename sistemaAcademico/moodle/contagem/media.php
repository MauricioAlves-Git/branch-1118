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
    <title>Notas e Atividades</title>
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
if (isset($_GET['course_id']) && is_numeric($_GET['course_id'])) {
    $courseid = intval($_GET['course_id']);
    $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
    $course_name = $course->fullname;

    echo "<h4>Atividades e Notas: " . htmlspecialchars($course_name) . "
    <a href='javascript:history.back()' class='btn btn-primary float-end'>
        <i class='fas fa-arrow-left'></i> Voltar
    </a>
    </h4>";

} else {
    echo "<div class='alert alert-danger'>ID do curso não fornecido ou inválido.</div>";
    exit();
}
?>
                    </div>
                    <div class="card-body">

                        <?php
// Configurações de cURL para consultar usuários inscritos
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

if (isset($enrolled_users['exception'])) {
    echo "<div class='alert alert-danger'>Erro: " . htmlspecialchars($enrolled_users['message']) . "</div>";
} else {
    echo '<table class="table">
              <thead>
                  <tr>
                      <th>Aluno</th>
                      <th>Atividades</th>
                      <th>Nota Média</th>
                      <th>Mais resultados</th>
                  </tr>
              </thead>
              <tbody>';

    foreach ($enrolled_users as $user) {
        $userid = intval($user['id']);

        // Consulta para obter todas as atividades do curso, mesmo que não tenham nota
        $activities_sql = "SELECT gi.itemname, gg.finalgrade
                           FROM {grade_items} gi
                           LEFT JOIN {grade_grades} gg ON gi.id = gg.itemid AND gg.userid = :userid
                           WHERE gi.courseid = :courseid";
        $activities = $DB->get_records_sql($activities_sql, ['courseid' => $courseid, 'userid' => $userid]);

        // Variáveis para acumular o total de pontos e contar todas as atividades
        $total_pontos = 0;
        $total_atividades = 0;

        foreach ($activities as $activity) {
            if (empty($activity->itemname)) {
                continue;
            }

            $grade = isset($activity->finalgrade) ? floatval($activity->finalgrade) : null;

            if ($grade !== null) {
                $total_pontos += $grade;
            }
            $total_atividades++;
        }

        // Calcula a média de notas
        $media_notas = ($total_atividades > 0 && $total_pontos > 0) ? ($total_pontos / $total_atividades) : 0;

        // Exibe os dados na tabela
        echo '<tr>
                <td>' . htmlspecialchars($user['fullname']) . '</td>
                <td>' . htmlspecialchars($total_atividades) . '</td>
                <td>' . number_format($media_notas, 2) . '</td>

                <td><a href="detalhes.php?userid=' . $userid . '&course_id=' . $courseid . '" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i>Visualizar</a></td>

                </tr>';
    }

    echo '</tbody></table>';
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
