<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'pulse', language 'pt_br', version '4.1'.
 *
 * @package     pulse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['approve'] = 'Aprovar';
$string['approved'] = 'Aprovado';
$string['approvedeclined'] = 'Conclusão do usuário recusada';
$string['approvedon'] = 'Aprovado em {$a->date} por {$a->user}';
$string['approvedsuccess'] = 'Usuário aprovado com sucesso';
$string['approveduser'] = 'Aprovado por: {$a->user}';
$string['approveuser'] = 'Aprovar usuários - {$a->course}';
$string['approveuserbtn'] = 'Aprovar usuários';
$string['completereaction'] = 'Reação completa';
$string['completewhenavaialble'] = 'Conclusão quando disponível';
$string['completewhenavaialble_help'] = 'Se habilitada, a atividade será considerada concluída quando o usuário tiver acesso a ela (ou seja, quando estiver disponível com base nas restrições de disponibilidade).';
$string['completion:approval'] = 'Aprovação necessária';
$string['completion:available'] = 'As restrições devem ser atendidas';
$string['completion:self'] = 'Marcar como concluído';
$string['completionapproverules'] = 'Regras de aprovação de conclusão';
$string['completioncriteria'] = 'Critérios de conclusão';
$string['completionrequireapproval'] = 'Requer aprovação de um usuário com um dos seguintes papéis';
$string['completionrequireapproval_help'] = 'Se habilitada, a atividade será considerada concluída quando qualquer usuário com um dos papéis selecionados aprovar o usuário.';
$string['completionself'] = 'Marcar como concluído pelo estudante para concluir esta atividade';
$string['completionself_help'] = 'Se habilitada, a atividade será considerada concluída quando o estudante marcá-la como concluída na página do curso.';
$string['content'] = 'Conteúdo';
$string['content_help'] = 'O conteúdo será exibido na página do curso e usado como conteúdo do corpo da mensagem para o convite.';
$string['courserole'] = 'Papel do curso';
$string['decline'] = 'Recusar';
$string['declined'] = 'Recusado';
$string['diffnotification'] = 'Use conteúdo de notificação em vez de conteúdo geral';
$string['diffnotification_help'] = 'Se habilitado, o convite usará o conteúdo e o assunto da notificação (em vez do conteúdo e título geral).';
$string['dislike'] = 'Descurtir';
$string['displaytype:contentonly'] = 'Apenas conteúdo';
$string['displaytype:notificationcontent'] = 'Notificação e Conteúdo';
$string['displaytype:notificationonly'] = 'Apenas notificação';
$string['enable:disable'] = 'Habilitar/Desabilitar';
$string['enablereminder:first'] = 'Ativar primeiro lembrete';
$string['enablereminder:first_help'] = 'Se habilitado, o Pulse enviará o primeiro lembrete.';
$string['enablereminder:invitation'] = 'Habilitar convite';
$string['enablereminder:recurring'] = 'Ativar lembrete recorrente';
$string['enablereminder:recurring_help'] = 'Se habilitado, o Pulse enviará o lembrete recorrente para os destinatários selecionados. Lembretes recorrentes serão enviados ao usuário no intervalo determinado até o final da inscrição do usuário ou suspenso.';
$string['enablereminder:second'] = 'Ativar segundo lembrete';
$string['enablereminder:second_help'] = 'Se habilitado, o Pulse enviará o segundo lembrete aos destinatários selecionados com base no agendamento.';
$string['generatereport'] = 'Gerar relatório';
$string['head:firstreminder'] = 'Primeiro lembrete';
$string['head:recurringreminder'] = 'Lembrete recorrente';
$string['head:secondreminder'] = 'Segundo lembrete';
$string['instancename'] = 'Pulso';
$string['invitation'] = 'Convite';
$string['invitation_help'] = 'Envie o convite a todos os usuários com os papéis selecionados.';
$string['invitationsubject'] = 'Assunto da notificação';
$string['invitationsubject_help'] = 'Adicione o assunto do convite aqui.';
$string['like'] = 'Curtir';
$string['markcomplete'] = 'Marcar como concluído';
$string['messageprovider:mod_pulse'] = 'Enviar notificação';
$string['modulename'] = 'Pulso';
$string['modulename_help'] = 'Pulse é o canivete suíço do professor para melhorar o engajamento e a tendência dos estudantes nos cursos do moodle:
<ul><li><strong>Notificações</strong><br/>
Cada atividade do Pulse pode ser configurada para enviar uma notificação assim que estiver disponível para o estudante. Existem vários espaços reservados que podem ser usados para personalizar a mensagem, como o primeiro nome do estudante ou o nome do curso. A notificação pode ser enviada ao estudante, ao professor, ao professor não editor ou ao gerente. Outros contextos de curso ou papéis de usuário também são suportados, por exemplo. responsável ou gerente da equipe.</li>
<li><strong>Fluxos de trabalho de conclusão</strong><br/>
O Pulse oferece suporte à conclusão de atividades de três maneiras (além das principais do moodle): mediante disponibilidade, quando marcada como concluída pelo estudante e quando aprovada por outro papel.</li></ul>
<p>Como acontece com todas as atividades relacionadas à automação, é essencial pensar bastante sobre o que você realmente deseja. O ideal é anotar o que deve acontecer nesse caso. Isso também nos ajuda a apoiá-lo! Se não funcionar como esperado, aqui estão os problemas mais comuns:</p>
<ul>
<li>O curso não <b>começou</b>. O Pulse só funciona em um curso em andamento —> Verifique se a data de início já passou.</li>
<li>O curso <b>terminou</b>. O Pulse funciona apenas em um curso em andamento —> Verifique se a data de término está definida e, se estiver, certifique-se de que seja no futuro.</li>
<li>O curso tem <b>estudantes inscritos</b>. O Pulse (gratuito) funciona apenas para estudantes —> Verifique se o curso realmente tem um usuário inscrito com status de inscrição ativo.</li>
<li>A atividade Pulse está <b>disponível</b>. O Pulse só funciona se a atividade estiver disponível para o estudante. Esse é o “gatilho” ou “condição” que usamos para determinar se realmente faremos algo (por exemplo, conceder créditos). —> Verificar se a atividade Pulse está oculta ou possui alguma restrição que não é atendida pelo estudante; em ambos os casos, está "desabilitada" e não funcionará. Caso não tenha certeza, basta fazer login como estudante e verificar se o estudante vê a atividade Pulse — se o estudante pode ver, ela está habilitada; senão está desabilitada.</li>
<li>O <b>cron</b> não está em execução ou ainda não foi executado — a concessão de créditos é feita por meio de uma tarefa agendada. Portanto, é necessário que o cron esteja sendo executado regularmente. O Moodle recomenda cada minuto, e só podemos encorajá-lo a seguir essa recomendação!</li>
</ul>';
$string['modulenameplural'] = 'Pulsos';
$string['noreaction'] = 'Sem reação';
$string['notassignedgroup'] = 'O usuário deve fazer parte de um grupo para filtrar por participantes.';
$string['notifyusers'] = 'Notificar os estudantes do curso';
$string['notsameuser'] = 'Você não é o usuário correto para aplicar a reação';
$string['pluginadministration'] = 'Administração Pulso';
$string['pluginname'] = 'Pulso';
$string['previousreminders'] = 'Lembretes anteriores';
$string['privacy:metadata'] = 'O plugin pulse não armazena nenhum dado pessoal.';
$string['pulse:addinstance'] = 'Adicionar um novo pulso';
$string['pulse:notifyuser'] = 'Enviar notificação';
$string['pulse:view'] = 'Ver pulso';
$string['pulse_subject'] = 'Pulso de {Course_FullName} ({Site_FullName})';
$string['pulsenotavailable'] = 'Instância de pulso não adicionada no curso';
$string['pulsenotification'] = 'Notificação de pulso';
$string['pulsepro:viewreports'] = 'Ver relatórios do Pulse Pro';
$string['rate'] = 'Avaliar';
$string['reaction'] = 'Reação';
$string['reaction:approve'] = '<a href="{$a->reactionurl}" style="color: #fff;background: #0f6fc5;padding:.375rem .75rem;text-decoration-line: none;" > Aprovar </a>';
$string['reaction:markcomplete'] = '<a href="{$a->reactionurl}" style="color: #fff;background: #0f6fc5;padding: .375rem .75rem;text-decoration-line: none;" >Marcar como concluído</a>';
$string['reactiondisplaytype'] = 'Localização';
$string['reactiondisplaytype_help'] = 'Escolha onde a reação deve ser exibida.';
$string['reactions'] = 'Reação';
$string['reactionthankmsg'] = 'Obrigado! Sua resposta foi salva.<br><br><span>Agora você pode fechar esta janela</span>';
$string['reactiontype'] = 'Tipo';
$string['reactiontype_help'] = 'Lista de tipos de reação.';
$string['recipients'] = 'Destinatários de notificação';
$string['recipients_help'] = 'Escolha para quais papéis você deseja enviar a notificação. Somente usuários inscritos neste curso e com o papel selecionado irão receber notificações. Observe que os usuários com um papel de contexto de usuário não precisam estar inscritos no curso.';
$string['remindercontent'] = 'Conteúdo de notificação';
$string['remindercontent_help'] = 'O conteúdo inserido será enviado aos destinatários. Use os espaços reservados para usar os dados dos destinatários dinamicamente.';
$string['reminders:availabletime'] = 'Tempo de disponibilidade';
$string['reminders:first'] = 'Primeiro lembrete';
$string['reminders:recurring'] = 'Lembrete recorrente';
$string['reminders:second'] = 'Segundo lembrete';
$string['reminderschedule'] = 'Cronograma de notificação';
$string['reminderschedule_help'] = 'Defina o tipo de agendamento de notificação de lembrete, <br>
Se a data fixa estiver ativada, o lembrete será enviado para os papéis selecionados quando a data selecionada chegar.<br>
Se Data relativa estiver habilitada, o lembrete será enviado aos usuários uma vez, quando a duração fornecida corresponder à duração do usuário a partir do momento em que a atividade estiver disponível para o usuário.';
$string['remindersubject'] = 'Assunto de notificação';
$string['remindersubject_help'] = 'O conteúdo será usado como assunto para as notificações de lembrete.';
$string['reports'] = 'Relatórios de pulso';
$string['reportsfilename'] = 'Relatórios de pulso - {$a->name}';
$string['resendnotification'] = 'Reenviar Notificação';
$string['resendnotification_help'] = 'Se habilitado, o lembrete de convite será reagendado e enviará o convite também para usuários já notificados.';
$string['resendnotificationdesc'] = 'O convite foi agendado para reenvio';
$string['restrictionmet'] = 'Restrição cumprida';
$string['schedule:fixeddate'] = 'Data fixa';
$string['schedule:relativedate'] = 'Data relativa';
$string['search:activity'] = 'Pulso';
$string['selectpulse'] = 'Selecione a instância de pulso';
$string['self'] = 'Auto';
$string['selfmarked'] = 'Automarcado como concluído em {$a->date}';
$string['sendnotificaton'] = 'Enviar notificação';
$string['sendnotificaton_help'] = 'Se habilitado, o convite será enviado.';
$string['teacher'] = 'Professor';
$string['title'] = 'Título';
$string['title_help'] = 'O título é usado como nome da atividade. Ele é usado como assunto para enviar o convite.';
$string['updatecompletion'] = 'Atualizar a conclusão dos módulos de pulso';
$string['userrole'] = 'papel do usuário';
$string['viewreport'] = 'Ver relatório';
