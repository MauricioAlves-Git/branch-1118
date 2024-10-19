<?php
require_once("../config.php");
require_login(); // Exige que o usuário esteja logado
?>

<?php
// Verifica se a requisição é um POST (normalmente webhooks são enviados via POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados enviados no corpo da requisição
    $data = file_get_contents('php://input');

    // Decodifica os dados, geralmente são enviados em JSON
    $data = json_decode($data, true);

    // Verifica se os dados foram decodificados corretamente
    if ($data) {
        // Converte os dados do webhook para uma string JSON, para enviar ao JavaScript
        $jsonData = json_encode($data);

        // Exibe os dados e envia para o JavaScript como um alerta
        echo "<script>
                alert('Webhook recebido: ' + JSON.stringify($jsonData));
              </script>";

        // Envia uma resposta HTTP 200 para confirmar o recebimento
        http_response_code(200);
    } else {
        // Se os dados não puderem ser decodificados, envia uma resposta de erro
        echo "<script>alert('Erro ao decodificar os dados do webhook.');</script>";
        http_response_code(400);
    }
} else {
    // Se a requisição não for um POST, envia uma resposta de erro
    echo "<script>alert('Método não permitido. Use POST.');</script>";
    http_response_code(405);
}
?>
