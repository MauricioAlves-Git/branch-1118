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
 * Strings for component 'surveypro', language 'pt_br', version '4.1'.
 *
 * @package     surveypro
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned_submission_deleted'] = 'Resposta abandonada excluída';
$string['action'] = 'Elementos pré-existentes';
$string['action_help'] = 'Executar nos elementos já presentes na pesquisa com a seguinte ação.';
$string['addnewsubmission'] = 'Nova resposta';
$string['anonymous'] = 'Respostas anônimas';
$string['anonymous_help'] = 'A tabela de gerenciamento de respostas não mostrará o proprietário das respostas e os relatórios e a exportação serão anônimos.';
$string['answerisnoanswer'] = 'Resposta recusada';
$string['answernotsubmitted'] = 'Resposta não enviada';
$string['apply'] = 'Aplicar';
$string['applymastertemplates'] = '<a href="{$a}">Aplicar modelos mestre</a>';
$string['applyusertemplatedenied01'] = 'Você não tem permissão para aplicar um modelo de usuário porque a pesquisa atual já foi respondida';
$string['applyusertemplatedenied02'] = 'Você não tem permissão para aplicar um modelo de usuário sobre um modelo mestre';
$string['applyusertemplates'] = '<a href="{$a}">Aplicar modelos de usuário</a>';
$string['arrayexpected'] = 'Array é esperado em {$a}';
$string['attemptinfo'] = 'Informações de pesquisas e respostas';
$string['availability'] = 'Disponibilidade';
$string['availability_fs'] = 'Disponibilidade';
$string['available_title'] = 'Elemento disponível. Clique para torná-lo reservado.';
$string['badchildparentvalue'] = 'Condição malformada: "{$a}".<br>Pode nunca ser verificada.';
$string['badtablenamefound'] = 'Erro de análise ao ler xml. "{$a}" foi encontrado como nome de tabela e, muito provavelmente, é inválido.';
$string['basic_editthanks'] = 'Obrigado. Sua resposta foi modificada com sucesso!';
$string['basic_submitthanks'] = 'Obrigado. Sua resposta foi enviada com sucesso!';
$string['branching'] = 'Ramificação';
$string['bulkaction'] = 'Ações em lote';
$string['bulkaction_help'] = 'Use este menu para executar ações em elementos conforme descrito pelos rótulos.';
$string['calendar_close_description'] = 'Surveypro "{$a}" fechado.';
$string['calendar_close_time'] = 'Surveypro "{$a}" não está mais disponível.';
$string['calendar_open_description'] = 'Preencha surveypro "{$a}", por favor.';
$string['calendar_open_time'] = 'Surveypro "{$a}" está disponível.';
$string['canneversubmit'] = 'Você não tem permissão para enviar uma resposta';
$string['cannotsubmittooearly'] = 'A pesquisa ainda não está aberta. Você tem que esperar até {$a}';
$string['cannotsubmittoolate'] = 'Esta pesquisa foi encerrada em {$a}';
$string['captcha'] = 'Adicionar captcha';
$string['captcha_help'] = 'Adicione a esta coleção o captcha para aumentar a segurança.';
$string['category'] = 'Categoria do curso';
$string['changeorder_title'] = 'Reordenar';
$string['closed'] = 'Esta pesquisa foi encerrada às';
$string['closedsubmissions'] = 'Respostas fechadas';
$string['collesactual'] = 'COLLES (Atual)';
$string['collespreferred'] = 'COLLES (preferencial)';
$string['common_fs'] = 'Configurações Gerais';
$string['completiondetail:entries'] = 'Fazer inscrições: {$a}';
$string['completionsubmit'] = 'este é o título da \'ajuda\'. Onde isso aparece?';
$string['completionsubmit_check'] = 'O estudante deve enviar a pesquisa pelo menos';
$string['completionsubmit_group'] = 'Exigir envio';
$string['completionsubmit_group_help'] = 'Esta pesquisa é considerada concluída quando o estudante a submete pelo menos tantas vezes quanto está escrito aqui.';
$string['completionsubmitdesc'] = 'Número mínimo de envios exigidos: {$a}';
$string['confirm_delete1item'] = 'Tem certeza de que deseja excluir o elemento \'{$a->pluginname}\': {$a->content}';
$string['confirm_delete1utemplate'] = 'Tem certeza de que deseja excluir o modelo de usuário "{$a}"';
$string['confirm_deleteallitems'] = 'Você confirma que deseja excluir CADA elemento?';
$string['confirm_deleteallresponses'] = 'Tem certeza de que deseja excluir CADA resposta salva?';
$string['confirm_deletechainitems'] = 'O elemento atual possui elementos filhos que também serão excluídos. A posição do(s) elemento(s) filho(s) é: {$a}.';
$string['confirm_deletehiddenitems'] = 'Você confirma que deseja excluir CADA elemento oculto?';
$string['confirm_deletemyresponse_modified'] = 'Tem certeza de que deseja excluir a resposta criada em {$a->timecreated} e modificada em {$a->timemodified}?';
$string['confirm_deletemyresponse_original'] = 'Tem certeza de que deseja excluir a resposta criada em {$a->timecreated} e nunca modificada?';
$string['confirm_deleteotherresponse_modified'] = 'Tem certeza de que deseja excluir a resposta de propriedade de {$a->fullname}, criada em {$a->timecreated} e modificada em {$a->timemodified}?';
$string['confirm_deleteotherresponse_original'] = 'Tem certeza de que deseja excluir a resposta de propriedade de {$a->fullname}, criada em {$a->timecreated} e nunca modificada?';
$string['confirm_deletevisibleitems'] = 'Tem certeza de que deseja excluir CADA elemento visível?';
$string['confirm_dropmultilang'] = 'A pesquisa atual oferece suporte a vários idiomas, conforme importado de um modelo mestre.<br>Isso significa que a pesquisa exibe perguntas e rótulos de acordo com o idioma preferido do usuário (se disponível).<br>Ao editar esse tipo de pesquisa, você perderá o retorno do suporte a vários idiomas. aos rótulos indiferenciados padrão ao longo de toda a pesquisa.<br>Esteja avisado que uma vez que você abandone o suporte multilíngue, mesmo gerando novamente um modelo mestre, você ainda não terá mais idiomas perdidos e, por último mas não menos importante, a queda do suporte multilíngue não pode ser desfeito.<br>Tem certeza de que deseja editar esta pesquisa multilíngue?';
$string['confirm_duplicatemyresponse_modified'] = 'Tem certeza de que deseja duplicar a resposta criada em {$a->timecreated} e modificada em {$a->timemodified}?';
$string['confirm_duplicatemyresponse_original'] = 'Tem certeza de que deseja duplicar a resposta criada em {$a->timecreated} e nunca modificada?';
$string['confirm_duplicateotherresponse_modified'] = 'Tem certeza de que deseja duplicar a resposta de propriedade de {$a->fullname}, criada em {$a->timecreated} e modificada em {$a->timemodified}?';
$string['confirm_duplicateotherresponse_original'] = 'Tem certeza de que deseja duplicar a resposta de propriedade de {$a->fullname}, criada em {$a->timecreated} e nunca modificada?';
$string['confirm_free1item'] = 'Disponibilizando o elemento "{$a->itemcontent}" você disponibilizará seu ancestral.<br>Ancestral é o elemento na posição: {$a->ancestors}.<br>Você confirma esta ação?';
$string['confirm_freechainitems'] = 'Disponibilizando o elemento "{$a->itemcontent}" você disponibilizará todas as suas dependências.<br>Dependências são os elementos na posição: {$a->dependencies}.<br>Você confirma esta ação?';
$string['confirm_freechainitems_newparent'] = 'Disponibilizando o elemento "{$a->itemcontent}", todas as dependências do elemento "{$a->parentcontent}" serão disponibilizadas também.<br>Então, além do elemento escolhido, você irá disponibilizar os elementos na posição: {$a->dependencies}.<br>Você confirma esta ação?';
$string['confirm_hide1item'] = 'Ocultando o elemento "{$a->itemcontent}" sua dependência também ficará oculta.<br>Dependência é o elemento na posição: {$a->dependencies}.<br>Você confirma esta ação?';
$string['confirm_hideallitems'] = 'Você confirma que deseja ocultar CADA elemento?';
$string['confirm_hidechainitems'] = 'Escondendo o elemento "{$a->itemcontent}" todas as suas dependências também serão ocultadas.<br>Dependências são os elementos na posição: {$a->dependencies}.<br>Você confirma esta ação?';
$string['confirm_reserve1item'] = 'Reservando o elemento "{$a->itemcontent}" você também reservará sua dependência.<br>Dependência é o elemento na posição: {$a->dependencies}.<br>Você confirma esta ação?';
$string['confirm_reservechainitems'] = 'Reservando o elemento "{$a->itemcontent}" você irá reservar todas as suas dependências também.<br>Dependências são os elementos na posição: {$a->dependencies}.<br>Você confirma esta ação?';
$string['confirm_reservechainitems_newparent'] = 'Reservando o elemento "{$a->itemcontent}", todas as dependências do elemento "{$a->parentcontent}" serão reservadas também.<br>Então, além do elemento escolhido, você irá reservar o elementos na posição: {$a->dependencies}.<br>Você confirma esta ação?';
$string['confirm_show1item'] = 'Mostrando o elemento {$a->lastitem} você vai mostrar seu(s) ancestral(es).<br>Ancestral(es) é(são) o(s) elemento(s) na posição: {$a->ancestors}.<br>Você confirma esta ação?';
$string['confirm_showallitems'] = 'Você confirma que deseja mostrar CADA elemento?';
$string['confirm_showchainitems'] = 'Mostrando o elemento {$a->lastitem} você vai mostrar todos os seus ancestrais.<br>Ancestrais são os elementos na posição: {$a->ancestors}.<br>Você confirma esta ação?';
$string['content'] = 'Conteúdo';
$string['content_editor'] = 'Conteúdo';
$string['content_editor_err'] = 'O conteúdo é obrigatório';
$string['content_editor_help'] = 'O conteúdo do elemento conforme será mostrado ao usuário remoto.';
$string['content_err'] = 'O conteúdo é obrigatório';
$string['content_help'] = 'O conteúdo do elemento conforme será mostrado ao usuário remoto.';
$string['count_allitems'] = 'Pesquisa construída em {$a} elementos.';
$string['count_hiddenitems'] = '({$a} oculto)';
$string['count_pages'] = 'Dividido em {$a} páginas.';
$string['course'] = 'Curso';
$string['currentcategory'] = 'Esta categoria de curso';
$string['currentcourse'] = 'Este curso';
$string['currenttotemplate'] = 'Salve a pesquisa atual como modelo mestre em formato zip.<br>Para instalar um modelo mestre, descompacte-o em mod/surveypro/template/ e visite a página de notificação.';
$string['customnumber'] = 'Elemento número';
$string['customnumber_header'] = '#';
$string['customnumber_help'] = 'Use este campo para fornecer um número personalizado ao elemento. Pode ser um número natural como 1 ou o que você precisar: 1a, A, 1.1.a, #1, A, A.1... Lembre-se de que você é responsável pela coerência desses números. Por isso tome cuidado se você planeja alterar a ordem dos elementos.';
$string['dataimport'] = 'Importar dados';
$string['deleteabandoned_task'] = 'Excluindo envios incompletos';
$string['deleteallitems'] = 'Excluir todos os elementos';
$string['deleteallsubmissions'] = 'Excluir todas as respostas';
$string['deletehiddenitems'] = 'Excluir elementos ocultos';
$string['deletepluginmessage'] = 'Você está prestes a excluir completamente o plugin de pesquisa "{$a}". Isso excluirá completamente tudo no banco de dados associado a este plugin. Você tem certeza que quer continuar?';
$string['deletevisibleitems'] = 'Excluir elementos visíveis';
$string['deletingplugin'] = 'Excluindo plug-in {$a}.';
$string['downloadformat'] = 'Formato de download';
$string['downloadpdf'] = 'baixar em pdf';
$string['downloadtocsv'] = 'Valores Separados Por Virgula';
$string['downloadtotsv'] = 'valores separados por tabulação';
$string['downloadtoxls'] = 'Excel';
$string['downloadtozipbysubmission'] = 'baixar anexos por item para zip';
$string['downloadtozipbyuser'] = 'baixar anexos por usuário para zip';
$string['downloadtype'] = 'Baixar tipo de arquivo';
$string['duplicateemail'] = 'Os endereços de e-mail devem ser diferentes entre si';
$string['editcopy'] = 'Editar cópia';
$string['editingcopy'] = 'Você está editando uma cópia da resposta original para preservar o histórico do seu trabalho.';
$string['emptyanswer'] = 'Resposta em branco';
$string['emptydownload'] = 'Nenhuma resposta foi encontrada para exportação';
$string['enteruniquename'] = 'Por favor escolha um nome único ou marque a opção "{$a->overwrite}" pois "{$a->filename}" já existe no contexto escolhido';
$string['event_all_submissions_exported'] = 'Todos os envios foram exportados';
$string['event_all_submissions_viewed'] = 'Todos os envios foram visualizados';
$string['event_all_usertemplates_viewed'] = 'Todos os modelos de usuário foram visualizados';
$string['event_form_previewed'] = 'O layout da pesquisa foi visualizado';
$string['event_item_created'] = 'Um item foi criado';
$string['event_item_deleted'] = 'Um item foi excluído';
$string['event_item_hidden'] = 'Um item foi ocultado';
$string['event_item_modified'] = 'Um item foi modificado';
$string['event_item_shown'] = 'Um item foi mostrado';
$string['event_mailneverstarted_sent'] = 'E-mail enviado para pesquisa nunca iniciada';
$string['event_mailoneshotmp_sent'] = 'E-mail enviado para pesquisa de várias páginas abandonada';
$string['event_mailpauseresume_sent'] = 'E-mail enviado para pesquisa abandonada e pausada';
$string['event_mastertemplate_applied'] = 'Um modelo principal foi aplicado';
$string['event_mastertemplate_saved'] = 'Um modelo principal foi salvo';
$string['event_submission_created'] = 'Uma resposta foi criada';
$string['event_submission_deleted'] = 'Uma resposta foi excluída';
$string['event_submission_modified'] = 'Uma resposta foi modificada';
$string['event_submission_viewed'] = 'Uma resposta foi visualizada';
$string['event_submissions_imported'] = 'Respostas importadas';
$string['event_submissiontopdf_downloaded'] = 'Uma resposta foi baixada em pdf';
$string['event_usertemplate_applied'] = 'Um modelo de usuário foi aplicado';
$string['event_usertemplate_deleted'] = 'Um modelo de usuário foi excluído';
$string['event_usertemplate_exported'] = 'Um modelo de usuário foi exportado';
$string['event_usertemplate_imported'] = 'Um modelo de usuário foi importado';
$string['event_usertemplate_saved'] = 'Um modelo de usuário foi salvo';
$string['exporttemplate'] = 'exportar modelo';
$string['extranote'] = 'Anotação adicional';
$string['extranote_help'] = 'Escreva aqui uma descrição/anotação sobre as informações extras que o usuário deve saber sobre este elemento.';
$string['extranoteinsearch'] = 'Anotação extra no formulário de pesquisa';
$string['extranoteinsearch_descr'] = 'As anotações do usuário são necessárias no formulário de pesquisa?';
$string['feedback_delete1item'] = 'O elemento \'{$a->pluginname}\': {$a->content} foi excluído com sucesso';
$string['feedback_delete1response'] = 'A resposta do usuário foi excluída com sucesso';
$string['feedback_delete1utemplate'] = 'O modelo de usuário "{$a}" foi excluído com sucesso';
$string['feedback_deleteallitems'] = 'Todos os elementos foram excluídos com sucesso';
$string['feedback_deleteallresponses'] = 'Todas as respostas desta pesquisa foram excluídas com sucesso';
$string['feedback_deletechainitems'] = 'O elemento \'{$a->pluginname}\': {$a->content} e elemento(s) descendente(s) foram excluídos com sucesso';
$string['feedback_deletehiddenitems'] = 'Todos os elementos ocultos foram excluídos com sucesso';
$string['feedback_deletevisibleitems'] = 'Todos os elementos visíveis foram excluídos com sucesso';
$string['feedback_duplicateresponse'] = 'A resposta do usuário foi duplicada com sucesso';
$string['feedback_hideallitems'] = 'Todos os elementos foram ocultados com sucesso';
$string['feedback_itemadd_ko'] = 'O novo elemento não foi adicionado';
$string['feedback_itemadd_ok'] = 'O elemento foi adicionado com sucesso';
$string['feedback_itemediting_freechainitems'] = 'Disponibilizando este elemento, também foram disponibilizados alguns elementos ascendentes.';
