<?php
require_once("../config.php");
require_login(); // Exige que o usuário esteja logado 
require 'vendor/autoload.php'; // Carrega o autoloader do Composer para PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;

// Verifica se o ID do curso foi passado via GET
if (isset($_GET['course_id']) && is_numeric($_GET['course_id'])) {
    $courseid = intval($_GET['course_id']); // Captura o ID do curso da URL
} else {
    die("ID do curso não fornecido ou inválido.");
}

// Buscar o nome do curso baseado no ID do curso
$sql = "SELECT fullname FROM {course} WHERE id = :courseid";
$course = $DB->get_record_sql($sql, ['courseid' => $courseid]);

if (!$course) {
    die('Curso não encontrado.');
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
if (curl_errno($curl)) {
    die('Erro: ' . curl_error($curl));
}

curl_close($curl);

// Decodifica a resposta JSON
$enrolled_users = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Erro ao decodificar JSON: ' . json_last_error_msg());
}

// Verifica se houve erro na resposta da API
if (isset($enrolled_users['exception'])) {
    die("Erro: " . htmlspecialchars($enrolled_users['message']));
}

// Criando uma nova planilha
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Relatório de Inscritos');

// Adicionar o título com o nome do curso
$sheet->setCellValue('A1', 'Relatório de Inscritos - ' . $course->fullname);
$sheet->mergeCells('A1:D1'); // Mescla as células A1 a D1
$sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14); // Define o título como negrito e tamanho 14
$sheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER); // Centraliza o texto

// Definindo cabeçalho da tabela (A2, B2, etc.)
$sheet->setCellValue('A2', 'Nome Completo');
$sheet->setCellValue('B2', 'E-mail');
$sheet->setCellValue('C2', 'Data de Inscrição');
$sheet->setCellValue('D2', 'Status');

// Estilizando os cabeçalhos
$headerStyle = [
    'font' => [
        'bold' => true,
        'color' => ['argb' => Color::COLOR_WHITE],
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => ['argb' => 'FF4CAF50'], // Verde claro
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER,
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['argb' => 'FF000000'],
        ],
    ],
];

// Aplicando estilo aos cabeçalhos
$sheet->getStyle('A2:D2')->applyFromArray($headerStyle);

// Ajustando a largura das colunas automaticamente
foreach (range('A', 'D') as $columnID) {
    $sheet->getColumnDimension($columnID)->setAutoSize(true);
}

// Inicializando arrays para armazenar os alunos por status
$active_students = [];
$suspended_students = [];

// Dividindo os alunos por status
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

    // Agrupar os alunos por status
    if ($status == 'Ativo') {
        $active_students[] = [
            'fullname' => htmlspecialchars($user['fullname']),
            'email' => htmlspecialchars($user['email']),
            'enrolldate' => htmlspecialchars($enrolldate),
            'status' => htmlspecialchars($status),
        ];
    } else {
        $suspended_students[] = [
            'fullname' => htmlspecialchars($user['fullname']),
            'email' => htmlspecialchars($user['email']),
            'enrolldate' => htmlspecialchars($enrolldate),
            'status' => htmlspecialchars($status),
        ];
    }
}

// Definir título "Alunos Ativos"
$row = 3;
$sheet->setCellValue('A' . $row, 'Alunos Ativos');
$sheet->mergeCells('A' . $row . ':D' . $row); 
$sheet->getStyle('A' . $row)->getFont()->setBold(true);
$row++;

// Preenchendo alunos ativos
foreach ($active_students as $student) {
    $sheet->setCellValue('A' . $row, $student['fullname']);
    $sheet->setCellValue('B' . $row, $student['email']);
    $sheet->setCellValue('C' . $row, $student['enrolldate']);
    $sheet->setCellValue('D' . $row, $student['status']);
    $row++;
}

// Definir título "Alunos Suspensos"
$sheet->setCellValue('A' . $row, 'Alunos Suspensos');
$sheet->mergeCells('A' . $row . ':D' . $row);
$sheet->getStyle('A' . $row)->getFont()->setBold(true);
$row++;

// Preenchendo alunos suspensos
foreach ($suspended_students as $student) {
    $sheet->setCellValue('A' . $row, $student['fullname']);
    $sheet->setCellValue('B' . $row, $student['email']);
    $sheet->setCellValue('C' . $row, $student['enrolldate']);
    $sheet->setCellValue('D' . $row, $student['status']);
    $row++;
}

// Definindo cabeçalhos para o download do Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Relatório de Inscritos.xlsx"');
header('Cache-Control: max-age=0');

// Criando o arquivo Excel
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;

?>
