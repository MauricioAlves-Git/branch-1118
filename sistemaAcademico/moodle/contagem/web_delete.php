<?php
require_once "../config.php";
require_login(); // Exige que o usuário esteja logado
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualização de Inscritos</title>
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

        }        .btn-blue-dark {
            background-color: #0056b3; /* Cor azul escuro */
            color: white;
        }

        .btn-blue-dark:hover {
            background-color: #004494; /* Cor azul escuro mais escuro para hover */
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

    echo "<h4>Alunos Inscritos: " . htmlspecialchars($course_name) . "
                                  <a href='index.php' class='btn btn-primary float-end'>
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
    $active_users = [];
    $suspended_users = [];

    foreach ($enrolled_users as $user) {
        $userid = intval($user['id']);
        $sql = "SELECT ue.timecreated, ue.status
                                        FROM {user_enrolments} ue
                                        JOIN {enrol} e ON ue.enrolid = e.id
                                        WHERE ue.userid = :userid AND e.courseid = :courseid";
        $enrol_data = $DB->get_record_sql($sql, ['userid' => $userid, 'courseid' => $courseid]);

        $enrolldate = isset($enrol_data->timecreated) ? date('d/m/Y', $enrol_data->timecreated) : 'N/D';
        $status = isset($enrol_data->status) ? ($enrol_data->status == 0 ? 'Ativo' : 'Suspenso') : 'Desconhecido';

        if ($status == 'Ativo') {
            $active_users[] = [
                'id' => $userid,
                'fullname' => $user['fullname'],
                'email' => $user['email'],
                'enrolldate' => $enrolldate,
            ];
        } else {
            $suspended_users[] = [
                'id' => $userid,
                'fullname' => $user['fullname'],
                'email' => $user['email'],
                'enrolldate' => $enrolldate,
            ];
        }
    }

    // Tabela de Alunos Ativos
    echo '<h5>Alunos Ativos</h5>';
    if (!empty($active_users)) {
        echo '<table>
                                    <thead>
                                        <tr>
                                            <th>Nome Completo</th>
                                            <th>E-mail</th>
                                            <th>Data de Inscrição</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
        foreach ($active_users as $user) {
            echo '<tr>
                                        <td>' . htmlspecialchars($user['fullname']) . '</td>
                                        <td>' . htmlspecialchars($user['email']) . '</td>
                                        <td>' . htmlspecialchars($user['enrolldate']) . '</td>
                                        <td>Ativo</td>
                                        <td>
                                            <a href="editar.php?userid=' . $user['id'] . '&courseid=' . $courseid . '" class="btn btn-blue-dark btn-sm">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                            <a href="excluir_user.php?userid=' . $user['id'] . '&courseid=' . $courseid . '"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm(\'' . htmlspecialchars('Tem certeza que deseja excluir este usuário?') . '\')">
                                                <i class="fas fa-trash-alt"></i> Excluir
                                            </a>
                                        </td>
                                    </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p>Nenhum aluno ativo encontrado.</p>';
    }

    // Tabela de Alunos Suspensos
    echo '<h5>Alunos Suspensos</h5>';
    if (!empty($suspended_users)) {
        echo '<table>
                                    <thead>
                                        <tr>
                                            <th>Nome Completo</th>
                                            <th>E-mail</th>
                                            <th>Data de Inscrição</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
        foreach ($suspended_users as $user) {
            echo '<tr>
                                        <td>' . htmlspecialchars($user['fullname']) . '</td>
                                        <td>' . htmlspecialchars($user['email']) . '</td>
                                        <td>' . htmlspecialchars($user['enrolldate']) . '</td>
                                        <td>Suspenso</td>
                                        <td>
                                            <a href="editar.php?userid=' . $user['id'] . '&courseid=' . $courseid . '" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                            <a href="excluir_user.php?userid=' . $user['id'] . '&courseid=' . $courseid . '"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm(\'' . htmlspecialchars('Tem certeza que deseja excluir este usuário?') . '\')">
                                                <i class="fas fa-trash-alt"></i> Excluir
                                            </a>
                                        </td>
                                    </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p>Nenhum aluno suspenso encontrado.</p>';
    }
}
?>
                        <div class="mt-3">
                            <a href='certificado.php?course_id=<?php echo $courseid; ?>' class='btn btn-success float-start me-2'>
                                <i class='fas fa-chart-bar'></i> Notas/Menção
                            </a>
                            <a href='atividades.php?course_id=<?php echo $courseid; ?>' class='btn btn-success float-start me-2'>
                                <i class='fas fa-chart-bar'></i> Notas/Atividades
                            </a>
                            <a href='media.php?course_id=<?php echo $courseid; ?>' class='btn btn-success float-start me-2'>
                                <i class='fas fa-chart-bar'></i> Notas/Média
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
