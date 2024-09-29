<?php
require_once("../config.php");
require_login(); // Exige que o usuário esteja logado 
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualização de Inscritos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Alunos Inscritos
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div> <!-- Fechando a div card-header -->
                    <div class="card-body"> <!-- Adicionando a div card-body -->
<?php 
// Verifica se o ID do curso foi passado via GET
if (isset($_GET['course_id']) && is_numeric($_GET['course_id'])) {
    $courseid = intval($_GET['course_id']); // Captura o ID do curso da URL
} else {
    echo "<div class='alert alert-danger'>ID do curso não fornecido ou inválido.</div>";
    exit();
}

// Defina a URL do seu Moodle e o token do usuário com permissões adequadas.
$token = '7249c9e43a8c5d9ecb0dac7a7b8ef5d6';  // Substitua pelo seu token
$domainname = 'http://localhost/moodle/';   // URL do seu Moodle
$functionname = 'core_enrol_get_enrolled_users';  // Função para listar usuários inscritos

// Defina o formato de retorno (geralmente JSON)
$restformat = 'json';

// Construir a URL para a API
$serverurl = $domainname . 'webservice/rest/server.php?wstoken=' . $token . '&wsfunction=' . $functionname . '&moodlewsrestformat=' . $restformat;

// Parâmetros para a chamada
$params = [
    'courseid' => $courseid, // Utilize a variável correta
];

// Inicializando cURL para enviar o pedido
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $serverurl);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));  
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

// Executando a requisição
$response = curl_exec($curl);

// Verifica por erros na requisição cURL
if (curl_errno($curl)) {
    echo '<div class="alert alert-danger">Erro: ' . curl_error($curl) . '</div>';
    exit();
}

curl_close($curl);

// Decodifica a resposta JSON e verifica se houve erro
$enrolled_users = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo '<div class="alert alert-danger">Erro ao decodificar JSON: ' . json_last_error_msg() . '</div>';
    exit();
}

// Verifica se houve erro na resposta da API
if (isset($enrolled_users['exception'])) {
    echo "<div class='alert alert-danger'>Erro: " . htmlspecialchars($enrolled_users['message']) . "</div>";
} else {
    // Exibe a lista de usuários inscritos no curso em uma tabela HTML com estilo CSS
    echo '<style>
            table {
                font-family: Arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
                color: #333;
                font-size: 16px;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            td {
                font-size: 14px;
                color: #555;
            }
          </style>';

    echo '<table>
            <tr>
                <th>Nome Completo</th>
                <th>E-mail</th>
                <th>Data de Inscrição</th>
                <th>Status</th>
            </tr>';

    // Para cada usuário, consultar diretamente a tabela mdl_user_enrolments
    foreach ($enrolled_users as $user) {
        $userid = intval($user['id']);
        
        // Buscar a data de inscrição e o status diretamente no banco de dados
        $sql = "SELECT ue.timecreated, ue.status 
                FROM {user_enrolments} ue 
                JOIN {enrol} e ON ue.enrolid = e.id 
                WHERE ue.userid = :userid AND e.courseid = :courseid";
        $enrol_data = $DB->get_record_sql($sql, ['userid' => $userid, 'courseid' => $courseid]);

        // Formatar a data de inscrição
        $enrolldate = isset($enrol_data->timecreated) ? date('d/m/Y', $enrol_data->timecreated) : 'N/D';
        $status = isset($enrol_data->status) ? ($enrol_data->status == 0 ? 'Ativo' : 'Suspenso') : 'Desconhecido';

        echo '<tr>
                <td>' . htmlspecialchars($user['fullname']) . '</td>
                <td>' . htmlspecialchars($user['email']) . '</td>
                <td>' . htmlspecialchars($enrolldate) . '</td>
                <td>' . htmlspecialchars($status) . '</td>
              </tr>';
    }
    echo '</table>';
}
?>
                    </div> <!-- Fechando a div card-body -->
                </div> <!-- Fechando a div card -->
            </div> <!-- Fechando a div col-md-12 -->
        </div> <!-- Fechando a div row -->
    </div> <!-- Fechando a div container -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

