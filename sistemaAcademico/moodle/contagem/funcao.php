
<?php
// Função para obter todos os alunos de um curso
function obter_numero_alunos($courseid) {
    $context = context_course::instance($courseid);
    // Obtem os usuários inscritos no curso
    $alunos = get_enrolled_users($context);
    return count($alunos);
}

// Loop para cada curso e exibe o número de alunos
foreach ($cursos as $curso) {
    $num_alunos = obter_numero_alunos($curso->id);
    echo "Curso: {$curso->fullname} - Alunos: $num_alunos<br>";
}

?>