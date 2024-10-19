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
    <title>Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    echo "<h4>Notas e Situações: " . htmlspecialchars($course_name) . "
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
    $aprovados = [];
    $reprovados = [];
    $evadidos = [];

    foreach ($enrolled_users as $user) {
        $userid = intval($user['id']);

        // Verifica se o aluno acessou o curso
        $log_sql = "SELECT COUNT(l.id) as accesscount
                    FROM {logstore_standard_log} l
                    WHERE l.courseid = :courseid AND l.userid = :userid";
        $log_data = $DB->get_record_sql($log_sql, ['courseid' => $courseid, 'userid' => $userid]);
        $access_count = isset($log_data->accesscount) ? $log_data->accesscount : 0;

        // Calcula a média das notas de todas as atividades do curso
        $grade_sql = "SELECT gi.id, gi.grademin, gi.grademax
                      FROM {grade_items} gi
                      WHERE gi.courseid = :courseid";
        $items = $DB->get_records_sql($grade_sql, ['courseid' => $courseid]);

        // Total de atividades criadas
        $total_atividades = count($items);
        $total_notas_ajustadas = 0;

        // Itera pelas atividades do curso
        foreach ($items as $item) {
            $grade_sql = "SELECT gg.finalgrade
                          FROM {grade_grades} gg
                          WHERE gg.itemid = :itemid AND gg.userid = :userid";
            $grade = $DB->get_record_sql($grade_sql, ['itemid' => $item->id, 'userid' => $userid]);

            // Se a nota for nula (sem nota), considera 0 para o cálculo da média
            $nota_final = !is_null($grade->finalgrade) ? $grade->finalgrade : 0;

            // Ajusta a nota para o intervalo de 0 a 100, considerando o intervalo mínimo e máximo
            $grademin = $item->grademin;
            $grademax = $item->grademax;

            // Evita divisão por zero
            if ($grademax > $grademin) {
                $nota_ajustada = (($nota_final - $grademin) / ($grademax - $grademin)) * 100;
            } else {
                $nota_ajustada = 0;
            }

            // Adiciona a nota ajustada ao total
            $total_notas_ajustadas += $nota_ajustada;
        }

        // Calcula a média ajustada
        $media = $total_atividades > 0 ? ($total_notas_ajustadas / $total_atividades) : null;
        $grade_formatada = is_numeric($media) ? number_format($media, 2) : 'N/A';

        // Obtém a data de inscrição do aluno
        $enrol_sql = "SELECT ue.timecreated
                      FROM {user_enrolments} ue
                      JOIN {enrol} e ON e.id = ue.enrolid
                      WHERE e.courseid = :courseid AND ue.userid = :userid";
        $enrol_data = $DB->get_record_sql($enrol_sql, ['courseid' => $courseid, 'userid' => $userid]);

        // Converte a data de inscrição para formato legível
        $data_inscricao = !empty($enrol_data->timecreated) ? date('d/m/Y', $enrol_data->timecreated) : 'Não disponível';

        // Define a situação do aluno
        if ($access_count == 0) {
            $situacao = 'Evadido(a)';
            $grade_formatada = 'Evadido(a)';
        } elseif ($media !== null) {
            $situacao = ($media >= 60.0) ? 'Aprovado(a)' : 'Reprovado(a)';
        } else {
            $situacao = 'Evadido(a)';
        }

        // Agrupa os alunos de acordo com a situação
        $aluno = [
            'id' => $userid,
            'fullname' => $user['fullname'],
            'email' => $user['email'],
            'enrolldate' => $data_inscricao,
            'grade' => $grade_formatada,
            'situacao' => $situacao,
        ];

        if ($situacao == 'Aprovado(a)') {
            $aprovados[] = $aluno;
        } elseif ($situacao == 'Reprovado(a)') {
            $reprovados[] = $aluno;
        } else {
            $evadidos[] = $aluno;
        }
    }

    // Função para exibir alunos
    function exibir_tabela($alunos, $titulo)
    {
        if (!empty($alunos)) {
            echo '<h5>' . $titulo . '</h5>';
            echo '<table>
                   <tr>
                       <th>Nome Completo</th>
                       <th>E-mail</th>
                       <th>Data de Inscrição</th>
                       <th>Nota Final</th>
                       <th>Situação</th>
                   </tr>';
            foreach ($alunos as $user) {
                echo '<tr>
                       <td>' . htmlspecialchars($user['fullname']) . '</td>
                       <td>' . htmlspecialchars($user['email']) . '</td>
                       <td>' . htmlspecialchars($user['enrolldate']) . '</td>
                       <td>' . htmlspecialchars($user['grade']) . '</td>
                       <td>' . htmlspecialchars($user['situacao']) . '</td>
                      </tr>';
            }
            echo '</table>';
        }
    }

    // Exibe os alunos agrupados por situação
    exibir_tabela($aprovados, 'Alunos Aprovados');
    exibir_tabela($reprovados, 'Alunos Reprovados');
    exibir_tabela($evadidos, 'Alunos Evadidos');
}
?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
