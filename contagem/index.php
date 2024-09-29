<?php
require_once("../config.php");
require_login(); // Exige que o usuário esteja logado
include('navbar.php'); 
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Margem superior para abaixar a navbar */
        body {
            padding-top: 60px; /* Ajuste para a navbar */
        }
        .container {
            margin-top: 60px; /* Aumenta a margem superior do conteúdo */
        }
        .card {
            margin-top: 30px; /* Margem superior para abaixar cada card */
        }
    </style>
  </head>

  <body>
    <div class="container"> <!-- Aumentada a margem superior -->
      <?php include('mensagem.php'); ?>
      <div class="row mt-4"> <!-- Aumentada a margem superior dessa linha -->
        <div class="col-md-12">
          <div class="card"> <!-- Margem superior aumentada -->
            <div class="card-header">
              <h4> Lista de Cursos e Inscritos
                <a href="usuario-creat.php" class="btn btn-primary float-end">Adicionar usuário</a>
              </h4>
            </div>
            <div class="card-body">
              <?php
              // Configurações da página
              $PAGE->set_url(new moodle_url('/localhost/moodle/'));
              $PAGE->set_context(context_system::instance());
              $PAGE->set_title('Relatório de Cursos');
              $PAGE->set_heading('Relatório de Cursos');

              // Cabeçalho da página
              echo $OUTPUT->header();

              // SQL para consultar cursos, alunos inscritos e data de criação
              global $DB;
              $sql = "SELECT 
                          c.id AS course_id,
                          c.fullname AS course_name,
                          COUNT(ue.userid) AS enrolled_students,
                          FROM_UNIXTIME(c.timecreated, '%d/%m/%Y') AS creation_date
                      FROM 
                          {course} c
                      LEFT JOIN 
                          {enrol} e ON e.courseid = c.id
                      LEFT JOIN 
                          {user_enrolments} ue ON ue.enrolid = e.id
                      GROUP BY 
                          c.id, c.fullname, c.timecreated
                      ORDER BY 
                          enrolled_students DESC";

              // Executando a consulta
              $cursos = $DB->get_records_sql($sql);

              // Exibindo os resultados em uma tabela HTML
              if (!empty($cursos)) {
                  echo "<h3>Relatório de Cursos, Alunos Inscritos e Data de Criação:</h3>";
                  echo '<table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nome do Curso</th>
                              <th>Alunos Inscritos</th>
                              <th>Data de Criação</th>
                              <th>Ações</th>
                            </tr>
                          </thead>
                          <tbody>';

                  // Loop pelos cursos
                  foreach ($cursos as $curso) {
                    echo "<tr>";
                    echo "<td>{$curso->course_id}</td>";
                    echo "<td>{$curso->course_name}</td>";
                    echo "<td>{$curso->enrolled_students}</td>";
                    echo "<td>{$curso->creation_date}</td>";
                    echo "<td>
                            <a href='webservice.php?course_id={$curso->course_id}' class='btn btn-secondary btn-sm'>
                              <span class='bi-eye-fill'></span>&nbsp;Visualizar
                            </a>
                            <a href='usuario-edit.php?id={$curso->course_id}' class='btn btn-success btn-sm'>
                              <span class='bi-pencil-fill'></span>&nbsp;Editar
                            </a>
                            <form action='acoes.php' method='POST' class='d-inline'>
                              <button onclick=\"return confirm('Tem certeza que deseja excluir?')\" type='submit' name='delete_usuario' value='{$curso->course_id}' class='btn btn-danger btn-sm'>
                                <span class='bi-trash3-fill'></span>&nbsp;Excluir
                              </button>
                            </form>
                          </td>";
                    echo "</tr>";
                  }

                  echo '</tbody>
                        </table>';
              } else {
                  echo '<h5>Nenhum curso encontrado</h5>';
              }

              // Rodapé da página
              echo $OUTPUT->footer();
              ?>
            </div> <!-- Fechando a div card-body -->
          </div> <!-- Fechando a div card -->
        </div> <!-- Fechando a div col-md-12 -->
      </div> <!-- Fechando a div row -->
    </div> <!-- Fechando a div container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
