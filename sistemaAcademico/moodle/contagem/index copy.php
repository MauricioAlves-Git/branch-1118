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
    <title>Sistema Acadêmico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            padding-top: 50px; /* Ajuste para a navbar */
            background-color: #f8f9fa; /* Cor de fundo suave */
        }
        .container {
            margin-top: 5px; /* Aumenta a margem superior do conteúdo */
        }
        .card {
            margin-top: 10px; /* Margem superior para abaixar cada card */
            border-radius: 10px; /* Canto arredondado */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        .card-header {
            background-color: #007bff; /* Fundo azul para o cabeçalho */
            color: white; /* Texto branco */
            border-top-left-radius: 10px; /* Ajusta cantos do card */
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background-color: #28a745; /* Verde para o botão principal */
            border: none;
        }
        .btn-primary:hover {
            background-color: #218838; /* Tom mais escuro no hover */
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2; /* Alternância de cores nas linhas */
        }
        .table-hover tbody tr:hover {
            background-color: #e9ecef; /* Cor de fundo no hover das linhas */
        }
        th {
            position: sticky; /* Cabeçalho da tabela fixo */
            top: 0;
            background-color: #007bff; /* Fundo do cabeçalho da tabela */
            color: white;
            z-index: 1; /* Garantir que fique acima do conteúdo */
        }
        .btn-secondary, .btn-success, .btn-danger {
            border-radius: 5px; /* Cantos arredondados nos botões */
            font-size: 14px;
        }
    </style>
  </head>

  <body>
    <div class="container">
      <?php include('mensagem.php'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
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
                  echo '<table class="table table-hover table-striped table-bordered">
                          <thead>
                            <tr>
                             
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
                   // echo "<td>{$curso->course_id}</td>";
                    echo "<td>{$curso->course_name}</td>";
                    echo "<td>{$curso->enrolled_students}</td>";
                    echo "<td>{$curso->creation_date}</td>";
                    echo "<td>
                            <a href='webservice.php?course_id={$curso->course_id}' class='btn btn-secondary btn-sm'>
                              <span class='bi-eye-fill'></span>&nbsp;Visualizar
                            </a>
                          <a href='relatorio.php?course_id={$curso->course_id}' class='btn btn-success btn-sm'>
  <span class='bi-file-earmark-text'></span>&nbsp;Relatório XLSX
</a>
<a href='pdf.php?course_id={$curso->course_id}' class='btn btn-danger btn-sm'>
  <span class='bi-file-earmark-text'></span>&nbsp;Relatório PDF
</a>
                              </button>
                            </form>
                          </td>";
                    echo "</tr>";
                  }

                  echo '</tbody>
                        </table>';
              } else {
                  echo '<h5 class="text-center text-muted">Nenhum curso encontrado</h5>';
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
