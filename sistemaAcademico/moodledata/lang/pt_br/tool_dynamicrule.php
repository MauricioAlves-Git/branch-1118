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
 * Strings for component 'tool_dynamicrule', language 'pt_br', version '4.1'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Ativa';
$string['activerules'] = 'Regras ativas';
$string['addcondition'] = 'Adicionar condição';
$string['addconditions'] = 'Adicione condições a esta regra';
$string['addoutcome'] = 'Adicionar ação';
$string['addoutcomes'] = 'Adicionar ações nessa regra';
$string['archive'] = 'Arquivo';
$string['archived'] = 'Arquivada';
$string['archivedrules'] = 'Regras arquivadas';
$string['availableplaceholders'] = 'Variáveis disponíveis';
$string['body'] = 'Corpo';
$string['cannotenablecomponentrule'] = 'Não é possível habilitar a regra  \'{$a}\' a menos que ela tenha ações e não tenha qualquer erro.';
$string['cannotenablerule'] = 'Não é possível habilitar a regra  \'{$a}\' a menos que ela tenha condições e não tenha qualquer erro.';
$string['cohort'] = 'Coorte';
$string['conditioncohortmember'] = 'Usuário é membro do coorte';
$string['conditioncohortmemberdescription'] = 'Usuários que são membros do coorte \'{$a}\'';
$string['conditioncohortnotmember'] = 'Usuário não é membro do coorte';
$string['conditioncohortnotmemberdescription'] = 'Usuários que não são membros do coorte \'{$a}\'';
$string['conditioncompetencydescription'] = 'Usuários que alcançaram a competência \'{$a}\'';
$string['conditioncompetencyselector'] = 'Selecionar competência';
$string['conditioncompetencytitle'] = 'O usuário adquiriu a competência';
$string['conditioncoursecompleted'] = 'Curso concluído';
$string['conditioncoursecompletedafter'] = 'Data de conclusão após {$a}';
$string['conditioncoursecompletedbefore'] = 'Data de conclusão antes de {$a}';
$string['conditioncoursecompleteddescription'] = 'Usuários que concluíram o curso \'{$a}\'';
$string['conditioncourselastaccess'] = 'Último acesso ao curso';
$string['conditioncoursenotcompleted'] = 'Curso não concluído';
$string['conditioncoursenotcompleteddescription'] = 'Usuários que não concluíram o curso \'{$a}\'';
$string['conditioncriteria'] = 'Critério';
$string['conditioncriterianotavailableyet'] = 'Ainda não disponível';
$string['conditionisbroken'] = 'Essa condição contém um erro.';
$string['conditionisnotavailable'] = 'Essa condição não está disponível.';
$string['conditionnotsaved'] = 'Condição não está salva.';
$string['conditions'] = 'Condições';
$string['conditionusercreated'] = 'Tempo desde a criação do usuário';
$string['conditionusercreateddescriptionbefore'] = 'Usuários que foram criados durante o último {$a}';
$string['conditionuserenrolled'] = 'Usuário inscrito';
$string['conditionuserfirstlogindescriptionever'] = 'Usuários que fizeram login pelo menos uma vez';
$string['conditionuserfirstlogindescriptioninlast'] = 'Usuários que fizeram login pela primeira vez nos últimos {$a}';
$string['conditionuserlastlogin'] = 'Último login do usuário';
$string['conditionuserlastlogindescriptionbefore'] = 'Usuários que fizeram o último login antes do último {$a}';
$string['conditionuserlastlogindescriptionever'] = 'Usuários que fizeram login pelo menos uma vez';
$string['conditionuserlastlogindescriptioninlast'] = 'Usuários que não fizeram login nos últimos {$a}';
$string['conditionuserlastlogindescriptionnever'] = 'Usuários que nunca fizeram login';
$string['conditionusernotenrolled'] = 'Usuário não inscrito';
$string['conditionuserprofilefield'] = 'Campo de perfil do usuário';
$string['confirmduplicaterule'] = 'Tem a certeza de que pretende duplicar a regra \'{$a}\'?';
$string['confirmeditrule'] = 'Como alguns usuários casaram com essa regra no passado, você só poderá editar as ações da regra. Você pode considerar duplicar essa regra e mudar suas condições.';
$string['confirmenablecomponentrule'] = 'Tem a certeza de que pretende ativar esta regra? A ativação desta regra irá afetar os usuários {$a}.';
$string['countmatchingusers'] = '{$a} correspondências no total';
$string['coursecompletiondate'] = 'Data de conclusão';
$string['courselastaccesstime'] = 'O último acesso do usuário ao curso';
$string['courseurl'] = 'URL do curso';
$string['creationdate'] = 'Data de criação';
$string['creationdate_help'] = 'Você pode selecionar uma data relativa a data atual para coincidir com usuários criados em um período de tempo específico.';
$string['dateinthefuture'] = 'Está no futuro';
$string['dateinthepast'] = 'Está no passado';
$string['datelast'] = 'Último {$a} dia';
$string['datelastdays'] = 'Últimos ... dias';
$string['datelastplural'] = 'Últimos {$a} dias';
$string['datenext'] = 'Próximo {$a} dia';
$string['datenextdays'] = 'Próximos ... dias';
$string['datenextplural'] = 'Próximos {$a} dias';
$string['datetypeever'] = 'Alguma vez';
$string['datetypeinlast'] = 'Na última ...';
$string['datetypenever'] = 'Nunca';
$string['datetypenone'] = 'Não definido';
$string['datetypepast'] = 'Antes da última...';
$string['datetyperange'] = 'Intervalo';
$string['deletecondition'] = 'Excluir condição';
$string['deleteoutcome'] = 'Excluir ação';
$string['disablerulemsg'] = 'Desabilitar regra';
$string['duplicate'] = 'Duplicar';
$string['dynamicrule:manage'] = 'Gerenciar regras dinâmicas';
$string['editanyway'] = 'Editar mesmo assim';
$string['editcondition'] = 'Editar condição';
$string['editdetails'] = 'Editar detalhes da regra \'{$a}\'';
$string['editoutcome'] = 'Editar ação';
$string['editrulename'] = 'Editar o nome da regra \'{$a}\'';
$string['enable'] = 'Habilitar';
$string['enabled'] = 'Habilitada';
$string['enablehelp'] = 'habilitando regra';
$string['enablehelp_help'] = 'Um regra requer ao menos uma condição e uma ação para ser habilitada. Todas as condições ou ações não devem conter erros.';
$string['enablehelpmodal'] = 'habilitando regra';
$string['enablehelpmodal_help'] = 'Uma regra precisa de pelo menos uma ação para ser habilitada.';
$string['enablerulemsg'] = 'Habilitar regra';
$string['enddate'] = 'Data final';
$string['errorcannotcreate'] = 'Você não tem permissão para criar regras';
$string['errorcannotmanage'] = 'Você não tem permissão para gerenciar essa regra';
$string['errorcannotmanagecondition'] = 'Você não tem permissão para gerenciar essa condição';
$string['errorcannotmanageoutcome'] = 'Você não tem permissão para gerenciar essa ação';
$string['errorcompletionnotenabled'] = 'A conclusão não está ativa para este curso';
$string['errorinvalidbadge'] = 'Emblema inválido';
$string['errorinvalidcertificatetenant'] = 'O certificado não pode ser utilizado neste tenant';
$string['errorinvalidcohort'] = 'Coorte inválido';
$string['errorinvalidcohorttenant'] = 'O coorte não pode ser utilizado neste tenant';
$string['errorinvalidcompetency'] = 'Competência inválida';
$string['errorinvalidcourse'] = 'Curso inválido';
$string['errorinvalidcoursetenant'] = 'O curso não pode ser utilizado neste tenant';
$string['errorinvaliddates'] = 'Datas de início e fim inválidas';
$string['errorinvalidlearningplan'] = 'Plano de aprendizagem inválido';
$string['errorinvalidoperator'] = 'Operador inválido.';
$string['errorinvaliduserfirstlogin'] = 'Data de primeiro login inválida';
$string['errorinvaliduserlastcourseaccess'] = 'Data do último acesso ao curso inválida';
$string['errorinvaliduserlastlogin'] = 'Data do último login inválida';
$string['errorinvaliduserlastlogintype'] = 'Último tipo de login inválido';
$string['errorinvaliduserprofilefield'] = 'Campo de perfil inválido';
$string['errorinvaliduserprofilefieldvalue'] = 'Valor do campo de perfil inválido';
$string['ever'] = 'alguma vez';
$string['exporterdescription'] = 'Definições de regras dinâmicas, condições e ações';
$string['exportselectactive'] = 'Selecionar todas as regras dinâmicas (excluindo as arquivadas)';
$string['exportselectall'] = 'Selecionar todas as regras dinâmicas (incluindo as arquivadas)';
$string['exportselectenabled'] = 'Selecionar todas as regras dinâmicas ativadas';
$string['exportsettings'] = 'Definições de regras, condições e ações';
$string['field'] = 'Campo';
$string['filterrulename'] = 'Nome da regra';
$string['general'] = 'Geral';
$string['importlogsuccess'] = 'Criada nova regra \'{$a->name}\' com {$a->conditionscount} condições e {$a->outcomescount} ações';
$string['importlogsuccesslink'] = 'Criada nova regra \'<a href="{$a->url}">{$a->name}</a>\' com {$a->conditionscount} condições e {$a->outcomescount} ações';
$string['importselectspecified'] = 'Selecionar manualmente...';
$string['includesuspendedusers'] = 'Incluir usuários suspensos';
$string['lastlogin'] = 'O último login do usuário foi';
$string['limitreached'] = 'Limite de regras dinâmicas atingido';
$string['managebadges'] = 'Gerenciar emblemas';
$string['managecohorts'] = 'Gerenciar coortes';
$string['managecompetencies'] = 'Gerenciar competências';
$string['managerules'] = 'Gerenciar regras';
$string['match'] = 'Correspondência';
$string['matchedtime'] = 'Combinado em';
$string['matchstatus'] = 'Status';
$string['matchstatusdone'] = 'Concluído';
$string['matchstatuserror'] = 'Falhou';
$string['matchstatusprogress'] = 'Em progresso';
$string['messageprovider:notificationoutcome'] = 'Ação de notificação da ferramenta Regras Dinâmicas';
$string['missingcondition'] = 'Faltando condição';
$string['missingoutcome'] = 'Faltando ação';
$string['newnameforrule'] = 'Novo nome para a regra \'{$a}\'';
$string['newrule'] = 'Nova regra';
$string['noavailablebadges'] = 'Sem emblemas disponíveis';
$string['noavailablecohorts'] = 'Sem coortes disponíveis';
$string['noavailablecompetencies'] = 'Sem competências disponíveis';
$string['noavailablecompletioncourses'] = 'Sem cursos com a conclusão habilitada';
$string['noavailableenrolledcourses'] = 'Sem cursos onde você pode acessar a lista de participantes';
$string['noruleconditions'] = 'Sem condições para essa regra';
$string['noruleoutcomes'] = 'Nenhuma ação nessa regra';
$string['operatorafter'] = 'Depois';
$string['operatoranytime'] = 'Qualquer momento';
$string['operatorbefore'] = 'Antes';
$string['outcomebadge'] = 'Emitir emblema';
$string['outcomebadgedescription'] = 'Emitir o emblema \'{$a}\' para os usuários';
$string['outcomecertificate'] = 'Emitir certificado';
$string['outcomecertificatedescription'] = 'Emitir o certificado \'{$a}\' para os usuários';
$string['outcomecohort'] = 'Adicionar a coorte';
$string['outcomecohortbroken'] = 'Coorte com o ID \'{$a}\' não existe.';
$string['outcomecohortdescription'] = 'Adicionar usuários ao coorte \'{$a}\'';
$string['outcomecohortremove'] = 'Remover de coorte';
$string['outcomecohortremovedescription'] = 'Remova usuários do coorte \'{$a}\'';
$string['outcomecompetency'] = 'Emitir comeptência';
$string['outcomecompetencybroken'] = 'A competência com o ID \'{$a}\' não existe.';
$string['outcomeisbroken'] = 'Essa ação contém um erro.';
$string['outcomeisnotavailable'] = 'Essa ação não está disponível.';
$string['outcomelearningplan'] = 'Atribuir plano de aprendizagem';
$string['outcomelearningplanbroken'] = 'O plano de aprendizagem com o ID \'{$a}\' não existe.';
$string['outcomenotification'] = 'Notificação';
$string['outcomenotificationdescription'] = 'Enviar notificação \'{$a}\' para os usuários';
$string['outcomenotsaved'] = 'Ação não está salva.';
$string['outcomes'] = 'Ações';
$string['placeholdersdesc'] = 'Variáveis';
$string['pluginname'] = 'Regras dinâmicas';
$string['previewcoursefullname'] = 'Nome completo do curso';
$string['previewcourseshortname'] = 'Nome breve do curso';
$string['privacy:metadata:tool_dynamicrule_match'] = 'Informação sobre os usuários que casam com as condições de uma regra em particular. Como resultado de casar o usuário ele será afetado pelas ações definidas na regra.';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = 'O ID da regra.';
$string['rolemanager'] = 'Gerente de Regras Dinâmicas';
$string['rolemanagerdescription'] = 'Permite criar e gerenciar regras dinâmicas dentro do tenant atual';
$string['rulearchive'] = 'Arquivo';
$string['ruleeditactions'] = 'Editar ações';
$string['rulematchfreq'] = 'Limites da ação da regra';
$string['rulematchfreq_help'] = 'Assim que usuários casem com as condições da regra as ações serão aplicadas a eles. Essas ações não serão aplicadas novamente se o usuário continuar casando com as condições. De qualquer modo, se um usuário deixar de casar com a regra e voltar a casar depois, as ações serão aplicadas novamente. Essa configuiração define o máximo de vezes que as ações serão aplicadas.';
$string['rulematchfreqenable'] = 'Limite o número de vezes que as ações serão aplicadas a cada usuário';
$string['rulename'] = 'Nome';
$string['rulenotfound'] = 'A regra não foi encontrada.';
$string['ruleselectitemarchived'] = '{$a} (arquivada)';
$string['ruleviewreport'] = 'Ver relatório';
$string['scheduledtask'] = 'Tarefa agendada';
$string['seedetails'] = 'Ver detalhes';
$string['seemore'] = 'Ver mais...';
$string['select'] = 'Selecionar';
$string['selectbadge'] = 'Selecionar emblema';
$string['selectcertificate'] = 'Selecionar certificado';
$string['selectcompetency'] = 'Selecionar competência';
$string['selectlearningplan'] = 'Selecionar plano de aprendizagem';
$string['selectlearningplan_help'] = 'Selecionar modelo de plano de aprendizagem';
$string['sendto'] = 'Enviar para';
$string['sendtodptlead'] = 'Líder de departamento';
$string['sendtomanager'] = 'Gerente';
$string['sendtomatching'] = 'Usuários combinando';
$string['sitelink'] = 'Link do site';
$string['sitelinkspecific'] = 'Link do site específico do tenant';
$string['siteshortname'] = 'Nome breve do site';
$string['startdate'] = 'Data de início';
$string['subject'] = 'Assunto';
$string['taskprocessrules'] = 'Processar regras';
$string['timecreated'] = 'Criado';
$string['toomanybadgestoshow'] = 'Muitos emblemas para mostrar';
$string['toomanycohortstoshow'] = 'Muitos coortes ({$a}) para mostrar';
$string['toomanycompetenciestoshow'] = 'Muitas competências ({$a}) para mostrar';
$string['userdetailshidden'] = 'Detalhes estão escondidos';
$string['userfirstlogin'] = 'Primeiro login do usuário';
$string['viewmatchingusers'] = 'Ver usuários que combinam';
$string['warningchangeswillnotapplymatchedusers'] = 'As mudanças não serão aplicadas aos usuários que casaram com essa regra no passado';
