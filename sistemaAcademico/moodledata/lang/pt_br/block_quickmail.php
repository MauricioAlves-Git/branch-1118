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
 * Strings for component 'block_quickmail', language 'pt_br', version '4.1'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['additional_emails'] = 'E-mails adicionais';
$string['additional_emails_help'] = 'Outros endereços de e-mail que você gostaria de adicionar a uma mesma mensagem, devem ser separados por "vírgula" ou "ponto e vírgula". Exemplo: email1@exemplo.com.br,email2@exemplo.com.br ou email1@exemplo.com.br;email2@exemplo.com.br';
$string['additionalemail'] = 'Permitir e-mails para endereços de e-mail externos';
$string['additionalemail_desc'] = 'Se esta opção estiver habilitada, o remetente terá a capacidade de enviar mensagens para e-mails adicionais fora do Moodle';
$string['all_in_course'] = 'Todos no Curso';
$string['allow_mentor_copy'] = 'Permitir que os remetentes enviem automaticamente mensagens aos mentores dos destinatários';
$string['allow_mentor_copy_help'] = 'Se não, esta opção não será visível para os remetentes e os mentores nunca serão copiados. Se sim, o remetente terá a opção de escolher por mensagem. Se forçado, esta opção será forçada sem opção de desmarcar.';
$string['allowstudents'] = 'Permitir que os estudantes usem o Correio Eletrônico';
$string['allowstudents_desc'] = 'Permitir que os estudantes usem o Quickmail. Se você escolher "Nunca", o bloco não poderá ser configurado para permitir o acesso dos estudantes no nível do curso.';
$string['alternate'] = 'E-mails alternativos';
$string['alternate_activated'] = 'E-mail alternativo {$a} agora pode ser usado!';
$string['alternate_already_confirmed'] = 'Esse e-mail já foi confirmado.';
$string['alternate_availability'] = 'Quem pode enviar deste email?';
$string['alternate_availability_course'] = 'Todos os papéis permitidos em {$a->courseshortname}';
$string['alternate_availability_only'] = 'Somente eu, apenas em {$a->courseshortname}';
$string['alternate_availability_user'] = 'Somente eu, em qualquer curso';
$string['alternate_body'] = '<p>
{$a->fullname} adicionou o endereço {$a->address} como um endereço alternativo para o curso {$a->course}.
</p>

<p>
O propósito deste e-mail é verificar se este endereço existe e se o dono
deste endereço possui as permissões apropriadas no Moodle.
</p>

<p>
Se vocẽ deseja completar o processo de verificação, por favor acesse o
link: {$a->url}.
</p>

<p>
Se a descrição deste e-mail não faz sentido para você, você pode tê-la recebido
por engano. Simplesmente ignore esta mensagem.
</p>

Obrigado.';
$string['alternate_confirmation_email_resent'] = 'O email de confirmação foi reenviado!';
$string['alternate_confirmed'] = 'Confirmado';
$string['alternate_created'] = 'Email alternativo criado com sucesso!';
$string['alternate_delete'] = 'Deletar Endereço Alternativo';
$string['alternate_delete_confirm'] = 'Isso deletará permanentemente seu email alternativo, você tem certeza?';
$string['alternate_deleted'] = 'Seu email alternativo foi deletado.';
$string['alternate_email_not_found'] = 'Não foi possível encontrar esse email alternativo.';
$string['alternate_invalid_token'] = 'Token de confirmação inválido.';
$string['alternate_new'] = 'Adicionar endereço alternativo';
$string['alternate_owner_must_confirm'] = 'Deve ser o proprietário do email para confirmar.';
$string['alternate_owner_must_delete'] = 'Deve ser o proprietário do email para deletar.';
$string['alternate_resend_confirmation'] = 'Reenviar email de confirmação';
$string['alternate_subject'] = 'Validação de endereço de e-mail alternativo';
$string['alternate_waiting'] = 'Aguardando';
$string['altsendfrom'] = 'Permitir emails alternativos';
$string['altsendfrom_desc'] = 'Permitir emails alternativos (necessita de uma mudança no núcleo para isso).';
$string['attached_files'] = 'Arquivos Anexados ({$a})';
$string['attachments'] = 'Anexos';
$string['back_to_course'] = 'Voltar ao curso';
$string['back_to_mypage'] = 'Voltar à Minha página';
$string['backup_block_configuration'] = 'Backup  das definições da configuração de nínvel do bloco Quickmail (como [Permitir que os estudantes usem o Quickmail])';
$string['backup_history'] = 'Incluir histórico de mensagens';
$string['body'] = 'Mensagem';
$string['broadcast'] = 'Compor Mensagem do Administrador';
$string['cachedef_qm_controller_store'] = 'Armazenamento em cache para instâncias de controladores.';
$string['cachedef_qm_event_notif_last_fired_at'] = 'Armazenamento em cache para carimbos de data/hora quando a notificação de evento foi disparada pela última vez.';
$string['cachedef_qm_msg_addl_email_count'] = 'Contagens de emails adicionais de mensagens em cache.';
$string['cachedef_qm_msg_attach_count'] = 'Contagens de anexos de mensagens em cache.';
$string['cachedef_qm_msg_deliv_count'] = 'Contagens de mensagens entregues em cache.';
$string['cachedef_qm_msg_recip_count'] = 'Contagens de destinatários de mensagens em cache.';
$string['compose'] = 'Compor Mensagem do Curso';
$string['condition_grade_greater_than'] = 'Nota maior que';
$string['condition_grade_less_than'] = 'Nota menor que';
$string['condition_summary_reminder_course_grade_range'] = 'Todos que têm uma nota entre {$a->grade_greater_than} e {$a->grade_less_than}';
$string['condition_summary_reminder_course_non_participation'] = 'Todos que não acessaram o curso em {$a->time_amount} {$a->time_unit}';
$string['could_not_duplicate'] = 'Não foi possível duplicar este rascunho. Por favor, tente novamente.';
$string['course_required'] = 'Um curso é necessário.';
$string['coursealternate_not_allowed'] = 'Você não pode compartilhar este email alternativo neste curso.';
$string['courseferpa'] = 'Respeitar a configuração de grupos';
$string['courseneveraccessed'] = 'Nunca Acessado';
$string['create_new'] = 'Criar Novo';
$string['create_notification'] = 'Criar Notificação';
$string['create_notification_message'] = 'Criar Mensagem de Notificação {$a->model} {$a->type}';
$string['create_notification_message_description'] = 'Agora crie a mensagem que você gostaria que fosse enviada quando esta notificação for disparada.';
$string['created'] = 'Criado';
$string['critical_error'] = 'Erro crítico';
$string['default_message_type'] = 'Método de envio de mensagem preferido';
$string['default_message_type_configuration'] = 'Esta configuração será o método de envio padrão para qualquer pessoa que compuser uma mensagem neste curso. O remetente poderá substituir ao compor a mensagem.';
$string['default_message_type_configuration_help'] = 'Esta configuração será o método de envio padrão para qualquer pessoa que compuser uma mensagem neste curso. O remetente poderá substituir ao compor a mensagem.';
$string['default_message_type_desc'] = 'Envie suas mensagens como Mensagens do Moodle ou email tradicional.';
$string['delete_draft_confirm_message'] = 'Isso deletará permanentemente seu rascunho de mensagem, você tem certeza?';
$string['delete_draft_modal_title'] = 'Deletar Rascunho de Mensagem';
$string['delete_signature'] = 'Deletar Assinatura';
$string['delete_signature_confirm_message'] = 'Isso deletará permanentemente sua assinatura, você tem certeza?';
$string['delete_signature_modal_title'] = 'Deletar Assinatura';
$string['deleted'] = 'Deletado';
$string['download_file_content'] = 'Baixar Conteúdo do Arquivo';
$string['downloads'] = 'Exigir login para baixar os anexos';
$string['downloads_desc'] = 'Esta configuração determina se os anexos estão disponíveis apenas para usuários logados no Moodle';
$string['draft_no_record'] = 'Não foi possível encontrar esse rascunho de mensagem.';
$string['drafted'] = 'Rascunhado';
$string['drafts'] = 'Rascunhos';
$string['duplicate'] = 'Duplicar';
$string['duplicate_draft_confirm_message'] = 'Isso fará uma cópia do rascunho, você tem certeza?';
$string['duplicate_draft_modal_title'] = 'Duplicar Rascunho de Mensagem';
$string['edit'] = 'Editar';
$string['edit_conditions'] = 'Editar Condições';
$string['edit_event_details'] = 'Editar Detalhes do Evento';
$string['edit_message'] = 'Editar Mensagem';
$string['edit_messages'] = 'Editar Mensagens';
$string['edit_notification'] = 'Editar Notificação';
$string['edit_schedule'] = 'Editar Agenda';
$string['email_profile_fields'] = 'Campos de perfil de email';
$string['email_profile_fields_desc'] = 'Esses campos de perfil serão automaticamente enviados por email se estiverem configurados para o usuário destinatário.';
$string['enable_notification'] = 'Habilitar Notificação';
$string['eventalternateemailadded'] = 'E-mail alternativo adicionado';
$string['eventalternateemailadded_desc'] = 'O usuário com id {$a->user_id} adicionou um email alternativo: {$a->email}';
$string['excluded_ids_label'] = 'Excluir';
$string['excluded_recipients_desc'] = 'Quem NÃO deve receber esta mensagem?';
$string['failed_recipients'] = 'Destinatários com Falha ou Pendentes';
$string['failed_recipients_promise'] = 'Continuaremos tentando enviar para esses destinatários até que a mensagem seja enviada com sucesso.';
$string['ferpa'] = 'FERPA(Group) Mode';
$string['ferpa_desc'] = 'Permite ao sistema ajustar-se de acordo com as configurações de grupo do curso, ignorando as configurações de grupo mas separando os grupos ou ignorando os grupos completamente.';
$string['found_filtered_users'] = 'Encontrado(s) {$a} usuário(s)';
$string['from_email'] = 'Endereço de email do remetente';
$string['from_email_help'] = 'O endereço de email do qual esta mensagem será enviada. Você pode adicionar endereços alternativos adicionais através do menu do bloco na página do curso.';
$string['here'] = 'aqui';
$string['included_ids_label'] = 'Para';
$string['included_recipients_desc'] = 'Quem deve receber esta mensagem?';
$string['invalid_additional_email'] = 'O email adicional "{$a}" que você inseriu é inválido';
$string['invalid_additional_emails_validation'] = 'Alguns dos emails adicionais que você inseriu eram inválidos.';
$string['invalid_availability'] = 'Valor de disponibilidade inválido.';
$string['invalid_condition_grade_greater_than'] = 'Valor de nota maior que inválido.';
$string['invalid_condition_grade_less_than'] = 'Valor de nota menor que inválido.';
$string['invalid_condition_time_amount'] = 'Quantidade de tempo inválida para condição.';
$string['invalid_condition_time_unit'] = 'Unidade de tempo inválida para condição.';
$string['invalid_custom_data_delimiters'] = 'Códigos de substituição do corpo da mensagem não formatados corretamente.';
$string['invalid_custom_data_key'] = 'Chave de dados personalizada "{$a}" não é permitida.';
$string['invalid_custom_data_not_allowed'] = 'Códigos de substituição personalizados não são permitidos para esta mensagem.';
$string['invalid_email'] = 'Endereço de email inválido.';
$string['invalid_notification_model'] = 'Seleção de modelo de notificação inválida.';
$string['invalid_notification_type'] = 'O tipo de notificação deve ser "Lembrete" ou "Evento".';
$string['invalid_schedule_time_amount'] = 'Quantidade de tempo inválida para agenda.';
$string['invalid_schedule_time_unit'] = 'Unidade de tempo inválida para agenda.';
$string['invalid_send_method'] = 'Esse método de envio não é permitido.';
$string['invalid_time_amount'] = 'Quantidade de tempo inválida.';
$string['invalid_time_relation'] = 'Deve ser "antes" ou "depois".';
$string['invalid_time_unit'] = 'Unidade de tempo inválida.';
$string['is_enabled'] = 'Habilitado';
$string['last_run_at'] = 'Última Execução';
$string['last_updated'] = 'Última Atualização';
$string['manage_alternates'] = 'Emails Alternativos';
$string['manage_drafts'] = 'Ver Rascunhos';
$string['manage_signatures'] = 'Minhas Assinaturas';
$string['mentor_copy'] = 'Enviar cópias para mentores dos destinatários?';
$string['mentor_copy_help'] = 'Se selecionado, qualquer mentor dos seus destinatários receberá uma cópia da mensagem.';
$string['mentor_copy_message_prefix'] = '<p><strong>Você está recebendo esta mensagem porque você é designado como mentor de</strong>: {$a}. A seguir está uma cópia da mensagem que também foi enviada ao seu mentorado.</p>';
$string['mentor_copy_subject_prefix'] = '[Cópia do Mentor]';
$string['mentors_copied'] = 'Enviar cópias para mentores';
$string['message_deleted'] = 'Mensagem deletada';
$string['message_details'] = 'Detalhes da Mensagem';
$string['message_no_record'] = 'Não foi possível encontrar essa mensagem.';
$string['message_not_found'] = 'Não foi possível encontrar essa mensagem';
$string['message_preview'] = 'Pré-visualização da Mensagem';
$string['message_queued'] = 'Mensagem agendada para ser enviada';
$string['message_sent_asap'] = 'Mensagem será enviada em breve';
$string['message_sent_now'] = 'Mensagem enviada';
$string['message_type'] = 'Enviar mensagens do Quickmail como';
$string['message_type_available_all'] = 'Sem restrições, preferência do remetente';
$string['message_type_available_email'] = 'Restringir apenas para email tradicional';
$string['message_type_available_message'] = 'Restringir apenas para mensagens do Moodle';
$string['message_type_desc'] = 'Permite que as mensagens do Quickmail sejam enviadas como uma mensagem do Moodle, email tradicional, ou preferência do remetente.';
$string['message_type_email'] = 'Email';
$string['message_type_message'] = 'Mensagem do Moodle';
$string['message_types_available'] = 'Restrições de tipo de mensagem';
$string['message_types_available_desc'] = 'Restringir mensagens do Quickmail para serem enviadas como Mensagens do Moodle, emails tradicionais, ou preferência do remetente.';
$string['message_unqueued'] = 'Mensagem desagendada';
$string['messageprovider:quickmessage'] = 'Mensagem Quickmail';
$string['migrate'] = 'Migrar Dados';
$string['migrate_legacy_data_task'] = 'Migrar dados históricos do Quickmail v1 para v2';
$string['migration_chunk_size'] = 'Tamanho do Lote de Migração';
$string['migration_chunk_size_desc'] = 'Número de registros que devem ser processados pela tarefa de migração de dados legados cada vez que for executada, se habilitada.';
$string['missing_body'] = 'Corpo da mensagem ausente.';
$string['missing_email'] = 'Endereço de email ausente.';
$string['missing_firstname'] = 'Primeiro nome ausente.';
$string['missing_lastname'] = 'Último nome ausente.';
$string['missing_notification_name'] = 'Nome da notificação ausente.';
$string['missing_subject'] = 'Linha de assunto ausente.';
$string['ms_alternate'] = 'Emails Alternativos';
$string['ms_compose'] = 'Compor';
$string['ms_config'] = 'Configurar';
$string['ms_create_notification'] = 'Criar Notificação';
$string['ms_drafts'] = 'Rascunhos';
$string['ms_notifications'] = 'Notificações';
$string['ms_queued'] = 'Agendados';
$string['ms_sent'] = 'Emails Enviados';
$string['ms_signatures'] = 'Minhas Assinaturas';
$string['must_be_draft_to_duplicate'] = 'A mensagem deve ser um rascunho para ser duplicada.';
$string['must_be_owner_to_duplicate'] = 'Desculpe, esse rascunho não pertence a você e não pode ser duplicado.';
$string['mute_time_summary'] = 'Tempo de Silenciamento';
$string['mute_time_unit'] = 'Tempo de Silenciamento';
$string['mute_time_unit_help'] = 'Uma quantidade opcional de tempo que deve passar entre o envio automático desta notificação.';
$string['never'] = 'Nunca';
$string['next_run_at'] = 'Próxima Execução';
$string['no_alternates'] = 'Não foram encontrados e-mails alternativos para {$a->fullname}. Continue para adicionar um.';
$string['no_drafts'] = 'Você não possui rascunhos de e-mails.';
$string['no_excluded_recipients'] = 'Nenhum destinatário excluído';
$string['no_included_recipients'] = 'Nenhum destinatário incluído';
$string['no_included_recipients_validation'] = 'Você deve selecionar pelo menos um destinatário.';
$string['no_notifications'] = 'Você não tem notificações criadas.';
$string['no_queued'] = 'Você não tem mensagens agendadas.';
$string['no_sents'] = 'Você não tem histórico de mensagens enviadas.';
$string['no_signatures_create'] = 'Você não tem assinaturas. {$a}.';
$string['noferpa'] = 'Não respeitar configuração de grupos';
$string['notification_already_sent'] = 'Esta notificação já foi enviada pelo menos uma vez.';
$string['notification_conditions'] = 'Condições';
$string['notification_conditions_description'] = 'Especifique as condições desta notificação. Qualquer destinatário que atenda a essas condições será notificado.';
$string['notification_created'] = 'Notificação criada.';
$string['notification_deleted'] = 'Notificação deletada.';
$string['notification_is_enabled'] = 'Notificação Habilitada';
$string['notification_is_enabled_help'] = 'Se habilitado, esta notificação estará ativa, caso contrário, a notificação será desativada até que você a habilite.';
$string['notification_model'] = 'Modelo de Notificação';
$string['notification_model_event_course_entered'] = 'Curso Acessado';
$string['notification_model_event_course_entered_description'] = 'Notificar um participante do curso quando ele acessar o curso pela primeira vez.';
$string['notification_model_reminder_course_grade_range'] = 'Intervalo de Notas do Curso';
$string['notification_model_reminder_course_grade_range_condition_description'] = 'Especifique o intervalo de notas. Se um participante do curso atualmente estiver dentro desse intervalo, ele será notificado.';
$string['notification_model_reminder_course_grade_range_description'] = 'Notificar participantes do curso que atualmente têm uma nota dentro do intervalo especificado.';
$string['notification_model_reminder_course_non_participation'] = 'Não Participação no Curso';
$string['notification_model_reminder_course_non_participation_condition_description'] = 'Especifique a quantidade de tempo desde o último acesso ao curso. Se um participante do curso não acessou o curso nesse período de tempo, ele será notificado.';
$string['notification_model_reminder_course_non_participation_description'] = 'Notificar participantes do curso que não acessaram o curso em um determinado período de tempo.';
$string['notification_name'] = 'Título';
$string['notification_name_help'] = 'Uma breve descrição desta notificação para ajudá-lo a identificá-la facilmente de outras notificações que você possa ter configurado.';
$string['notification_name_too_long'] = 'O nome da notificação deve ter 40 caracteres ou menos.';
$string['notification_not_found'] = 'Não foi possível encontrar essa notificação.';
$string['notification_not_updated'] = 'Notificação atualizada.';
$string['notification_review'] = 'Revisar Sua Notificação';
$string['notification_schedule'] = 'Agenda';
$string['notification_type'] = 'Tipo de Notificação';
$string['notification_type_event'] = 'Evento';
$string['notification_type_event_description'] = 'Uma mensagem automatizada que é enviada como uma reação a um evento específico. Eventos podem ser usados para alertar destinatários que atividades foram concluídas, tarefas foram enviadas ou avaliadas, e mais.';
$string['notification_type_reminder'] = 'Lembrete';
$string['notification_type_reminder_description'] = 'Uma mensagem recorrente que será enviada automaticamente em uma base programada. Lembretes podem ser usados para alertar destinatários sobre atividades futuras, datas de vencimento, participação em aulas e mais.';
$string['notification_updated'] = 'Notificação atualizada.';
$string['notifications'] = 'Notificações';
$string['notifications_enabled'] = 'Habilitar Notificações do Quickmail';
$string['notifications_enabled_desc'] = 'Permitir que os cursos criem notificações automatizadas, incluindo lembretes e respostas a eventos.';
$string['notified_by'] = 'Notificado Por';
$string['open'] = 'Abrir';
$string['open_broadcast'] = 'Compor Mensagem';
$string['open_compose'] = 'Compor Mensagem';
$string['overwrite_history'] = 'Sobrescrever histórico de mensagens';
$string['pending_recipients'] = 'Destinatários Pendentes';
$string['pending_recipients_promise'] = 'Esses destinatários estão atualmente sendo enviados, volte mais tarde para ver quaisquer falhas.';
$string['picker_style_autocomplete'] = 'Autocompletar';
$string['picker_style_multiselect'] = 'Multiseleção';
$string['picker_style_option_title'] = 'Meu Estilo Preferido de Seleção de Destinatários';
$string['picker_style_option_title_help'] = 'Sua interface pessoalmente preferida para selecionar destinatários ao compor uma mensagem.';
$string['pluginname'] = 'Correio eletrônico';
$string['prepend_class'] = 'Adicionar nome do curso como prefixo';
$string['prepend_class_configuration'] = 'Prefixar informações de identificação do curso ao assunto da mensagem.';
$string['prepend_class_configuration_help'] = 'Prefixar informações de identificação do curso ao assunto da mensagem.';
$string['prepend_class_desc'] = 'Adicionar o nome curto do curso como prefixo no assunto do e-mail.';
$string['preview_no_body'] = '(Sem conteúdo)';
$string['preview_no_subject'] = '(Sem assunto)';
$string['profile_mentor_copy_message_prefix'] = '<p><strong>Você está recebendo esta mensagem porque você é designado como {$a} do destinatário pretendido</strong>. A seguir está uma cópia do que foi enviado ao destinatário.</p>';
$string['queue_scheduled_notifications_task'] = 'Agendar qualquer notificação do Quickmail para ser enviada';
$string['queued'] = 'Agendado';
$string['queued_no_record'] = 'Não foi possível encontrar essa mensagem agendada.';
$string['quickmail:addinstance'] = 'Adicionar um novo bloco Correio Eletrônico';
$string['quickmail:allowalternate'] = 'Permite aos usuários adicionar e-mails alternativos (externos ao curso) no formulário de envio de e-mails.';
$string['quickmail:allowcoursealternate'] = 'Criar endereços de email alternativos para compartilhar com outros instrutores do curso';
$string['quickmail:canconfig'] = 'Permite os usuários configurar a instância do Correio Eletrônico.';
$string['quickmail:cansend'] = 'Permite os usuários encaminhar e-mails através do Correio Eletrônico';
$string['quickmail:createnotifications'] = 'Criar notificações automáticas no Quickmail';
$string['quickmail:myaddinstance'] = 'Adicionar um novo Correio Eletrônico à Minha página inicial';
$string['quickmail:viewgroupusers'] = 'Ver todos os usuários em todos os grupos';
$string['receipt'] = 'Receber uma cópia';
$string['receipt_configuration'] = 'Enviar um email de confirmação para o remetente da mensagem quando a mensagem for enviada. Esta configuração será a preferência padrão para o remetente.';
$string['receipt_configuration_help'] = 'Enviar um email de confirmação para o remetente da mensagem quando a mensagem for enviada. Esta configuração será a preferência padrão para o remetente.';
$string['receipt_email_body'] = '<p>Sua mensagem foi enviada! Você pode ver mais detalhes desta mensagem enviada {$a->sent_message_link}.</p>

<p>
    <strong>Resumo dos detalhes da mensagem:</strong><br><br>
    <strong>Curso:</strong> {$a->course_name}<br><br>
    <strong>Assunto da Mensagem:</strong> {$a->subject}<br><br>
    <strong>Destinatários:</strong> {$a->recipient_count}<br><br>
    <strong>Emails de Destinatários Adicionais:</strong> {$a->addition_emails_string}<br><br>
    <strong>Enviado para Mentores:</strong> {$a->sent_to_mentors}<br><br>
    <strong>Contagem de Anexos de Arquivos:</strong> {$a->attachment_count}<br><br>
    <strong>Corpo da Mensagem:</strong>
</p>

{$a->message_body}';
$string['receipt_help'] = 'Receber uma cópia do e-mail enviado';
$string['recipients'] = 'Destinatários';
$string['redirect_back_from_message_detail_message_deleted'] = 'A mensagem que você está tentando visualizar foi deletada.';
$string['redirect_back_from_message_detail_no_access'] = 'Você não pode visualizar esta mensagem.';
$string['redirect_back_to_course_from_message_after_duplicate'] = 'Sua mensagem foi duplicada com sucesso.';
$string['redirect_back_to_course_from_message_after_save'] = 'Seu rascunho foi salvo.';
$string['redirect_back_to_course_from_notifications_not_enabled'] = 'As notificações do Quickmail estão desativadas para o seu site.';
$string['reset_success_message'] = 'As configurações padrão do Quickmail foram restauradas!';
$string['restore_default_confirm_message'] = 'Isso restaurará as configurações do Quickmail deste curso para o padrão, você tem certeza?';
$string['restore_default_modal_title'] = 'Restaurar Configuração Padrão';
$string['restore_history'] = 'Restaurar histórico de mensagens';
$string['save'] = 'Salvar';
$string['save_draft'] = 'Salvar rascunho';
$string['save_signature'] = 'Salvar Assinatura';
$string['schedule_begin_at'] = 'Data de Início';
$string['schedule_end_at'] = 'Data de Término';
$string['scheduled_time'] = 'Hora Agendada';
$string['select_allowed_user_fields'] = 'Campos de dados do usuário suportados';
$string['select_allowed_user_fields_desc'] = 'Os remetentes poderão referenciar os campos selecionados para tornar o conteúdo da mensagem dinâmico e específico para o destinatário. Ex: "[:firstname:]"';
$string['select_message_type'] = 'Enviar mensagem como';
$string['select_notification_model'] = 'Selecione o Modelo de Notificação {$a}';
$string['select_signature_for_edit'] = 'Selecionar Assinatura Para Editar';
$string['selectable_roles'] = 'Papéis selecionáveis';
$string['selectable_roles_configuration'] = 'Esses papéis estarão disponíveis para seleção ao compor uma mensagem.';
$string['selectable_roles_configuration_help'] = 'Esses papéis estarão disponíveis para seleção ao compor uma mensagem.';
$string['selectable_roles_desc'] = 'Esses papéis estarão disponíveis para seleção ao compor uma mensagem. Esta configuração pode ser substituída pela configuração do curso.';
$string['send_all_ready_messages_task'] = 'Enviar todas as mensagens agendadas do Quickmail';
$string['send_as_tasks'] = 'Enviar todas as mensagens como tarefas em segundo plano.';
$string['send_as_tasks_help'] = 'Se selecionado, enviará todas as mensagens de forma assíncrona como tarefas cron. Caso contrário, enviará imediatamente.';
$string['send_at'] = 'Enviar em';
$string['send_message'] = 'Enviar Mensagem';
$string['send_now'] = 'Enviar Agora';
$string['send_now_scheduled_confirm_message'] = 'Isso esquecerá o agendamento e enviará a mensagem agora, você tem certeza?';
$string['send_now_scheduled_modal_title'] = 'Enviar Mensagem Agora';
$string['send_now_threshold'] = 'Limite de Envio Imediato';
$string['send_now_threshold_desc'] = 'Forçar uma mensagem não agendada a ser enviada imediatamente se o número de destinatários for este número ou menos, mesmo que o bloco esteja configurado para enviar mensagens como tarefas em segundo plano. Configuração de 0 ignorará esta configuração.';
$string['send_receipt_subject_addendage'] = 'Mensagem Enviada';
$string['send_schedule'] = 'Agendar Envio';
$string['sending'] = 'Enviando';
$string['sent'] = 'Enviado';
$string['sent_at'] = 'Enviado em';
$string['sent_messages'] = 'Histórico de Mensagens Enviadas';
$string['set_event_details'] = 'Definir Detalhes da Notificação de Evento {$a->model}';
$string['set_event_details_description'] = 'Especifique opções adicionais sobre o evento.';
$string['set_notification_conditions'] = 'Definir Condições de Notificação {$a->model} {$a->type}';
$string['set_notification_schedule'] = 'Definir Agenda de Notificação {$a->model} {$a->type}';
$string['set_notification_schedule_description'] = 'Especifique com que frequência esta notificação deve ser enviada, quando deve começar e quando deve terminar. Se nenhuma data de término for especificada, esta notificação continuará a ser enviada até que seja desativada ou deletada.';
$string['signature'] = 'Assinatura';
$string['signature_signature_required'] = 'Uma assinatura é necessária.';
$string['signature_title_must_be_unique'] = 'O título da assinatura deve ser único.';
$string['signature_title_required'] = 'Um título de assinatura é necessário.';
$string['signatures'] = 'Assinaturas';
$string['status'] = 'status';
$string['strictferpa'] = 'Sempre separar os grupos';
$string['subject'] = 'Assunto';
$string['success_recipients_promise'] = 'Esses destinatários foram todos enviados com sucesso pelo sistema.';
$string['time_amount'] = 'Quantidade de Tempo';
$string['time_beginning'] = 'Início';
$string['time_delay_summary'] = 'Atraso de Tempo';
$string['time_delay_unit'] = 'Atraso de Tempo';
$string['time_delay_unit_help'] = 'Uma quantidade opcional de tempo para esperar antes que a notificação seja enviada.';
$string['time_ending'] = 'Término';
$string['time_every'] = 'Todo';
$string['time_once_a'] = 'Uma vez por';
$string['time_relation'] = 'Antes ou Depois';
$string['time_unit'] = 'Unidade de Tempo';
$string['time_unit_day'] = 'Dia';
$string['time_unit_days'] = 'Dias';
$string['time_unit_month'] = 'Mês';
$string['time_unit_months'] = 'Meses';
$string['time_unit_week'] = 'Semana';
$string['time_unit_weeks'] = 'Semanas';
$string['title'] = 'Título';
$string['unqueue'] = 'Desagendar';
$string['unqueue_scheduled_confirm_message'] = 'Isso desagendará esta mensagem para ser enviada e salvará a mensagem como um rascunho, você tem certeza?';
$string['unqueue_scheduled_modal_title'] = 'Desagendar Mensagem Agendada';
$string['user_signature_deleted'] = 'Sua assinatura foi deletada.';
$string['validation_exception_message'] = 'Exceção de validação!';
$string['view'] = 'Ver';
$string['view_message_detail'] = 'Ver Detalhes da Mensagem';
$string['view_queued'] = 'Ver Agendados';
$string['view_sent'] = 'Ver Mensagens Enviadas';
