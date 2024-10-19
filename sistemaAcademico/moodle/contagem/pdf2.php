<?php
require_once("../config.php");
require_login(); // Exige que o usuário esteja logado 
require 'pdf/vendor/autoload.php'; // Carrega o autoloader do Composer para PhpSpreadsheet

use Dompdf\Dompdf;
use Dompdf\Options;

if (isset($_GET['course_id']) && is_numeric($_GET['course_id'])) {
    $courseid = intval($_GET['course_id']); // Captura o ID do curso da URL

    // Consulta para buscar o nome do curso
    $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
    $course_name = $course->fullname; // Nome completo do curso

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

    if (curl_errno($curl)) {
        echo '<div class="alert alert-danger">Erro: ' . curl_error($curl) . '</div>';
        exit();
    }

    curl_close($curl);

    // Decodifica a resposta JSON
    $enrolled_users = json_decode($response, true);

    // Separar os usuários por status
    $active_users = [];
    $suspended_users = [];

    foreach ($enrolled_users as $user) {
        $userid = intval($user['id']);

        // Buscar a data de inscrição e o status diretamente no banco de dados
        $sql = "SELECT ue.timecreated, ue.status 
                FROM {user_enrolments} ue 
                JOIN {enrol} e ON ue.enrolid = e.id 
                WHERE ue.userid = :userid AND e.courseid = :courseid";
        $enrol_data = $DB->get_record_sql($sql, ['userid' => $userid, 'courseid' => $courseid]);

        $enrolldate = isset($enrol_data->timecreated) ? date('d/m/Y', $enrol_data->timecreated) : 'N/D';
        $status = isset($enrol_data->status) ? ($enrol_data->status == 0 ? 'Ativo' : 'Suspenso') : 'Desconhecido';

        if ($status == 'Ativo') {
            $active_users[] = [
                'fullname' => $user['fullname'],
                'email' => $user['email'],
                'enrolldate' => $enrolldate,
                'status' => 'Ativo'
            ];
        } else {
            $suspended_users[] = [
                'fullname' => $user['fullname'],
                'email' => $user['email'],
                'enrolldate' => $enrolldate,
                'status' => 'Suspenso'
            ];
        }
    }

    // Preparar o conteúdo HTML para o PDF com melhorias de estilo
    $html = '<style>
                body { font-family: Helvetica, Arial, sans-serif; color: #333; font-size: 10pt; }
                h1 { font-size: 16pt; text-align: center; margin-bottom: 10px; }
                h2 { font-size: 14pt; text-align: center; margin-bottom: 5px; }
                table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                th, td { padding: 8px; text-align: left; border: 1px solid #ddd; font-size: 10pt; }
                th { background-color: #f4f4f4; }
                tbody tr:nth-child(odd) { background-color: #f9f9f9; }
                tbody tr:hover { background-color: #f1f1f1; }
                .no-users { text-align: center; font-style: italic; color: #666; }
            </style>';

    $html .= '<h1>Relatório de Inscritos - ' . htmlspecialchars($course_name) . '</h1>';

    // Alunos Ativos
    $html .= '<h2>Alunos Ativos</h2>';
    if (!empty($active_users)) {
        $html .= '<table>
                    <thead>
                        <tr>
                            <th>Nome Completo</th>
                            <th>E-mail</th>
                            <th>Data de Inscrição</th>
                            <th>Status</th> <!-- Nova coluna Status -->
                        </tr>
                    </thead>
                    <tbody>';
        foreach ($active_users as $user) {
            $html .= '<tr>
                        <td>' . htmlspecialchars($user['fullname']) . '</td>
                        <td>' . htmlspecialchars($user['email']) . '</td>
                        <td>' . htmlspecialchars($user['enrolldate']) . '</td>
                        <td>' . htmlspecialchars($user['status']) . '</td> <!-- Exibindo o Status -->
                      </tr>';
        }
        $html .= '</tbody></table>';
    } else {
        $html .= '<p class="no-users">Nenhum aluno ativo encontrado.</p>';
    }

    // Alunos Suspensos
    $html .= '<h2>Alunos Suspensos</h2>';
    if (!empty($suspended_users)) {
        $html .= '<table>
                    <thead>
                        <tr>
                            <th>Nome Completo</th>
                            <th>E-mail</th>
                            <th>Data de Inscrição</th>
                            <th>Status</th> <!-- Nova coluna Status -->
                        </tr>
                    </thead>
                    <tbody>';
        foreach ($suspended_users as $user) {
            $html .= '<tr>
                        <td>' . htmlspecialchars($user['fullname']) . '</td>
                        <td>' . htmlspecialchars($user['email']) . '</td>
                        <td>' . htmlspecialchars($user['enrolldate']) . '</td>
                        <td>' . htmlspecialchars($user['status']) . '</td> <!-- Exibindo o Status -->
                      </tr>';
        }
        $html .= '</tbody></table>';
    } else {
        $html .= '<p class="no-users">Nenhum aluno suspenso encontrado.</p>';
    }

    // Configurar o Dompdf
    $options = new Options();
    $options->set('defaultFont', 'Helvetica');
    $dompdf = new Dompdf($options);

    // Carregar o HTML no Dompdf
    $dompdf->loadHtml($html);

    // Definir o tamanho do papel e a orientação (opcional)
    $dompdf->setPaper('A4', 'portrait');

    // Renderizar o PDF
    $dompdf->render();

    // Enviar o PDF para o navegador
    $dompdf->stream('Relatorio de Inscritos.pdf', ['Attachment' => 0]); // Para forçar o download, troque '0' por '1'
} else {
    echo "<div class='alert alert-danger'>ID do curso não fornecido ou inválido.</div>";
}
?>
