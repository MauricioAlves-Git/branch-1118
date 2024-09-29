
<?php
// Inclua o arquivo config do Moodle para usar as funções do sistema
require_once("../config.php");

// Carrega os cursos no sistema
$cursos = core_course_category::get(0)->get_courses();
$quantidade_cursos = count($cursos);

echo "Total de cursos: $quantidade_cursos";

?>
