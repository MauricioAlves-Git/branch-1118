
<?php

require_once "../config.php";
require_login(); // Exige que o usuário esteja logado
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>
    <?php include 'navbar.php';?>
    <div class="container mt-5">
      <?php include 'mensagem.php';?>
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-header">
            <h4>Atualizar
            <a href="javascript:void(0);" onclick="history.back();" class="btn btn-primary float-end">
  <i class="fas fa-arrow-left"></i> Voltar
</a></h4>


            <?php
require_once '../config.php';
require_login(); // Exige que o usuário esteja logado

// Verifica se os IDs do usuário e do curso foram passados via GET
if (isset($_GET['userid']) && is_numeric($_GET['userid']) && isset($_GET['courseid']) && is_numeric($_GET['courseid'])) {
    $userid = intval($_GET['userid']);
    $courseid = intval($_GET['courseid']);

    // Obtém os dados do usuário
    $user = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);

    if (!$user) {
        echo '<div class="alert alert-danger">Usuário não encontrado.</div>';
        exit();
    }
} else {
    echo '<div class="alert alert-danger">ID do usuário ou do curso não fornecido ou inválido.</div>';
    exit();
}

// Recebe os parâmetros do formulário
$firstname = required_param('firstname', PARAM_TEXT);
$lastname = required_param('lastname', PARAM_TEXT);
$username = required_param('username', PARAM_TEXT);
$email = required_param('email', PARAM_TEXT);
$password = optional_param('senha', '', PARAM_TEXT); // Senha é opcional

// Verifica se o usuário existe no banco de dados
$user_exists = $DB->record_exists('user', array('id' => $userid));
if (!$user_exists) {
    echo "Usuário não encontrado.";
    exit;
}

// Verificar se o nome de usuário ou e-mail já existe, excluindo o próprio usuário
$existLogin = $DB->record_exists_select('user', 'username = ? AND id != ?', array($username, $userid));
if ($existLogin) {
    echo "Nome de usuário já existe para outro usuário.<br>";
}

$existEmail = $DB->record_exists_select('user', 'email = ? AND id != ?', array($email, $userid));
if ($existEmail) {
    echo "E-mail já está em uso por outro usuário.<br>";
}

// Se não há conflitos, prosseguir com a atualização
if (!$existLogin && !$existEmail) {
    // Criar um objeto de atualização para o usuário
    $update_user = new stdClass();
    $update_user->id = $userid; // O ID do usuário a ser atualizado
    $update_user->firstname = $firstname;
    $update_user->lastname = $lastname;
    $update_user->username = $username;
    $update_user->email = $email;

    // Se uma nova senha foi fornecida, atualizá-la
    if (!empty($password)) {
        $update_user->password = hash_internal_user_password($password);
    }

    // Atualiza as informações no banco de dados
    $DB->update_record('user', $update_user);

    echo "Informações do usuário atualizadas com sucesso.";
} else {
    echo "Erro ao atualizar o usuário.";
}
