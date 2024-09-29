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
 * Strings for component 'block_coupon', language 'pt_br', version '4.1'.
 *
 * @package     block_coupon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:coupon:delete'] = 'Excluir cupom';
$string['action:coupon:delete:confirm'] = 'Tem certeza que deseja excluir este cupom? Esta operação não poderá ser desfeita';
$string['action:coursegrouping:delete'] = 'Excluir agrupamento';
$string['action:coursegrouping:details'] = 'Ver detalhes do agrupamento';
$string['action:coursegrouping:edit'] = 'Editar agrupamento';
$string['action:error:delete'] = 'Excluir erro';
$string['addelement'] = 'Adicionar elemento';
$string['addpage'] = 'Adicionar página';
$string['aligncenter'] = 'Centralizado';
$string['alignleft'] = 'Alinhamento à esquerda';
$string['alignment'] = 'Alinhamento';
$string['alignment_help'] = 'Essa propriedade define o alinhamento horizontal do elemento. Alguns elementos podem não suportar o alinhamento, enquanto o comportamento de outros pode ser diferente.';
$string['alignright'] = 'Alinhamento à direita';
$string['alphachannel'] = 'Canal alpha';
$string['and'] = 'e';
$string['blockname'] = 'Cupom';
$string['button:continue'] = 'Continuar';
$string['button:next'] = 'Próximo';
$string['button:save'] = 'Gerar Cupons';
$string['button:submit_coupon_code'] = 'Enviar Cupom';
$string['capitals'] = 'Letras maiúsculas';
$string['close'] = 'Fechar';
$string['confirm:courseinfo'] = 'Informação do curso';
$string['confirm_coupons_sent_subject'] = 'Todos os Cupons foram enviados';
$string['copy'] = 'Copiar';
$string['coupon:addinstance'] = 'Adicionar um novo bloco de Cupom';
$string['coupon:administration'] = 'Administrar o bloco de Cupom';
$string['coupon:cleanup:heading'] = 'Limpar os cumpons';
$string['coupon:coursegrouping:heading'] = 'Configurar agrupamento do curso';
$string['coupon:deleted'] = 'Cupom foi excluído';
$string['coupon:expirationmethod'] = 'Método de expiração';
$string['coupon:generatecoupons'] = 'Gerar um novo cupom';
$string['coupon:inputcoupons'] = 'Usar o cupom para se inscrever';
$string['coupon:myaddinstance'] = 'Adicionar um novo bloco Cupom à pagina My Moodle';
$string['coupon:send:fail'] = 'Envio do e-mail falhou! Motivo: {$a}';
$string['coupon:timeframe'] = 'Tipo';
$string['coupon:type'] = 'Tipo';
$string['coupon:type:all'] = 'Todos';
$string['coupon_mail_content'] = '<p>Prezado(a) {$a->fullname},</p>
<p>Você está recebendo esta mensagem porque novos cupons foram gerados.<br/>
Os cupons estão disponíveis para download no ambiente de e-learning.<br /><br />
Por favor, clique em {$a->downloadlink} para obter seus cupons.</p>
<p>Atenciosamente,<br /><br />
{$a->signoff}</p>';
$string['coupon_mail_subject'] = 'Cupom Moodle gerado';
$string['coupon_notification_subject'] = 'Cupons gerados!';
$string['coupons:cleaned'] = 'O total de {$a} cupons foram limpos/removidos';
$string['course'] = 'curso';
$string['coursegrouping'] = 'Agrupamento de curso';
$string['courseimage'] = 'Imagem do curso: {$a}';
$string['createtemplate'] = 'Criar padrão';
$string['currentdate'] = 'Data corrente';
$string['dateformat'] = 'Formato da data';
$string['days_access'] = '{$a} dias de';
$string['fontcolour'] = 'Cor';
$string['fontcolour_help'] = 'A cor da fonte';
$string['heading:coupon_type'] = 'Tipo de cupom';
$string['heading:csvForm'] = 'Configurações CSV';
$string['heading:general_settings'] = 'Últimas configurações';
$string['heading:input_course'] = 'Selecionar o curso';
$string['heading:input_groups'] = 'Selecionar os grupos';
$string['heading:label_instructions'] = 'Instruções';
$string['heading:manualForm'] = 'Configuração manual';
$string['label:alternative_email'] = 'E-mail alternativo';
$string['label:alternative_email_help'] = 'Enviar os cupons por padrão para este endereço de e-mail.';
$string['label:api_enabled'] = 'Habilitar API';
$string['label:api_password'] = 'Senha API';
$string['label:api_user'] = 'Usuário API';
$string['label:api_user_desc'] = 'O usuário que pode ser utilizado para gerar um cupom usando a API.';
$string['label:cleanupage'] = 'Idade máxima?';
$string['label:cleanupage_help'] = 'Digite a idade máxima de um cupom não utilizado antes de ser removido';
$string['label:connected_courses'] = 'Curso(s) conectado(s)';
$string['label:coupon_amount'] = 'Quantidade de cupons';
$string['label:coupon_code'] = 'Código do Cupom';
$string['label:coupon_code_help'] = 'Este código de cupom é único e esta ligado à cada cupom individual. Você pode encontrar este código em seu cupom.';
$string['report:owner'] = 'Proprietário';
$string['report:senddate'] = 'Enviar data';
$string['report:status_completed'] = 'Curso concluído';
$string['report:status_not_started'] = 'Curso não iniciado ainda';
$string['report:status_started'] = 'Curso iniciado';
$string['showform-manual'] = 'Quero configurar manualmente os destinatários';
$string['str:mandatory'] = 'Obrigatório';
$string['str:optional'] = 'Opcional';
$string['success:coupon_used'] = 'Cupom utilizado - Agora você pode acessar o(s) curso(s)';
$string['tab:report'] = 'Relatório de progresso';
$string['tab:unused'] = 'Cupons não utilizados';
$string['tab:used'] = 'Cupons utilizados';
$string['tab:wzcouponimage'] = 'Modelo de imagem';
$string['tab:wzcoupons'] = 'Gerador de cupom(ns)';
$string['task:sendcoupons'] = 'Enviar cupons agendados';
$string['th:cohorts'] = 'Grupo';
$string['th:course'] = 'Curso';
$string['th:enrolperiod'] = 'Período de Matrícula';
$string['th:for_user_email'] = 'Planejado para';
$string['th:groups'] = 'Grupo(s)';
$string['th:immediately'] = 'Imediatamente';
$string['th:issend'] = 'Enviado?';
$string['th:owner'] = 'Proprietário';
$string['th:senddate'] = 'Enviar data';
$string['th:submission_code'] = 'Código de assinatura';
$string['url:generate_coupons'] = 'Gerador de Cupom';
$string['url:input_coupon'] = 'Cupom de entrada';
$string['url:uploadimage'] = 'Alterar imagem do cupom';
$string['url:view_reports'] = 'Visualizar relatórios';
$string['url:view_unused_coupons'] = 'Visualizar cupons não utilizados';
$string['view:generate_coupon:heading'] = 'Gerador de Cupom';
$string['view:generate_coupon:title'] = 'Gerador de Cupom';
$string['view:input_coupon:heading'] = 'Cupom de entrada';
$string['view:input_coupon:title'] = 'Cupom de entrada';
$string['view:reports-unused:heading'] = 'Relatório - Cupons não utilizados';
$string['view:reports-unused:title'] = 'Relatório - Cupons não utilizados';
$string['view:reports-used:heading'] = 'Relatório - Cupons utilizados';
$string['view:reports-used:title'] = 'Relatório - Cupons utilizados';
$string['view:reports:heading'] = 'Relatório - Cupom baseado no progresso';
$string['view:reports:title'] = 'Relatório - Cupom baseado no progresso';
$string['view:uploadimage:heading'] = 'Upload de uma nova imagem de fundo do cupom';
$string['view:uploadimage:title'] = 'Upload de uma  imagem de fundo do cupom';
