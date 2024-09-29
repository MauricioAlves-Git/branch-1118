<?php
    require_once("../config.php");
    require_login(); // Exige que o usuário esteja logado    
?>

<?php

// Defina a URL do seu Moodle e o token do usuário com permissões adequadas.
$token = '6a012a9f3141c1305a5baf6703b31ff8';  // Substitua pelo seu token
$domainname = 'http://localhost/moodle/';   // URL do seu Moodle
$functionname = 'core_enrol_get_enrolled_users';  // Função para listar usuários inscritos

// Defina o formato de retorno (geralmente JSON)
$restformat = 'json';

// ID do curso para o qual você deseja obter os inscritos
$courseid = 2;  // Substitua pelo ID do seu curso

// Construir a URL para a API
$serverurl = $domainname . 'webservice/rest/server.php?wstoken=' . $token . '&wsfunction=' . $functionname . '&moodlewsrestformat=' . $restformat;

// Parâmetros para a chamada
$params = [
    'courseid' => $courseid,
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
if(curl_errno($curl)){
    echo 'Erro: ' . curl_error($curl);
    exit();
}

curl_close($curl);

// Decodifica a resposta JSON e verifica se houve erro
$enrolled_users = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'Erro ao decodificar JSON: ' . json_last_error_msg();
    exit();
}

// Verifica se houve erro na resposta da API
if (isset($enrolled_users['exception'])) {
    echo "Erro: " . $enrolled_users['message'];
} else {
    // Exibe a lista de usuários inscritos no curso em uma tabela HTML
    echo '<table border="1"><tr><th>Nome Completo</th><th>E-mail</th></tr>';
    foreach ($enrolled_users as $user) {
        echo '<tr><td>' . htmlspecialchars($user['fullname']) . '</td><td>' . htmlspecialchars($user['email']) . '</td></tr>';
    }
    echo '</table>';
}