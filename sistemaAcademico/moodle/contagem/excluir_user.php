
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
  </head>
  <body>
    <?php include 'navbar.php';?>
    <div class="container mt-5">
      <?php include 'mensagem.php';?>
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-header">
              <h4> Excluir
                <a href="web_delete.php" class="btn btn-primary float-end">Voltar</a>
              </h4>
            </div>


<?php
require_once "../config.php"; // Inclua o arquivo de configuração
require_login(); // Verifique se o usuário está logado

// Receber os parâmetros userid e courseid da URL
$userid = optional_param('userid', 0, PARAM_INT);
$courseid = optional_param('courseid', 0, PARAM_INT);

// Verificar se ambos os parâmetros foram passados
if ($userid && $courseid) {
    // Verificar se o curso existe
    $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);

    if ($course) {
        // Verificar se o usuário existe
        $user = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);

        if ($user) {
            // Tentar excluir a inscrição do usuário no curso
            $enrol = enrol_get_plugin('manual'); // Usar o plugin de inscrição manual
            $instances = enrol_get_instances($courseid, true);

            foreach ($instances as $instance) {
                if ($instance->enrol === 'manual') {
                    // Remover a inscrição do usuário
                    $enrol->unenrol_user($instance, $userid);
                    echo '<div class="alert alert-success">Usuário excluído do curso com sucesso.</div>';
                    break;
                }
            }
        } else {
            echo '<div class="alert alert-danger">Usuário não encontrado.</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Curso não encontrado.</div>';
    }
} else {
    echo '<div class="alert alert-danger">ID do usuário ou do curso não fornecido.</div>';
}

// Redirecionar de volta para a página do curso
//echo '<a href="web_delete.php?course_id=' . $courseid . '" class="btn btn-primary">
//<i class="bi bi-arrow-left-circle"></i> Voltar para a lista de inscritos
//</a>';
