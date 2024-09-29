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
 * Strings for component 'block_workflow', language 'pt_br', version '4.1'.
 *
 * @package     block_workflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetasktitle'] = 'Tarefa atualmente ativa';
$string['addanotherworkflow'] = 'Adicionar outro fluxo de trabalho';
$string['addaworkflow'] = 'Adicionar um fluxo de trabalho';
$string['addemail'] = 'Adicionar modelo de e-mail';
$string['addroletostep'] = 'Adicionar papel à etapa';
$string['addstep'] = 'Adicione uma etapa adicional a este fluxo de trabalho';
$string['addstepafter'] = 'Adicione uma etapa após este ponto';
$string['addtask'] = 'Adicionar tarefa';
$string['any'] = 'Qualquer';
$string['appliesto'] = 'Aplica-se a';
$string['atendfinishworkflow'] = 'terminar o fluxo de trabalho';
$string['atendgobackatworkflowcreate'] = 'Uma configuração atendgobacktostep não pode ser especificada na criação do fluxo de trabalho, pois não existem etapas para referência';
$string['atendgobacktostep'] = 'No final da etapa {$a}';
$string['atendgobacktostepinfo'] = 'Após a etapa {$a->stepcount}, volte para a etapa número {$a->atendgobacktostep}.';
$string['atendgobacktostepno'] = 'volte para a etapa {$a->stepno} ({$a->name})';
$string['atendstop'] = 'Após a etapa {$a->stepcount}, este fluxo de trabalho terminará.';
$string['automaticallyfinish'] = 'Concluir automaticamente';
$string['cannotdeleteworkflowinuseby'] = 'Não é possível excluir, este fluxo de trabalho é usado em {$a} locais.';
$string['cannotremoveemailinuse'] = 'Não foi possível remover o modelo de e-mail. Este modelo está em uso no momento';
$string['cannotremoveonlystep'] = 'Não foi possível remover a etapa. Este é o único fluxo de trabalho na etapa';
$string['cannotremovestepsinuse'] = 'Não foi possível remover a etapa. Esta etapa está atualmente ativa em {$a} fluxos de trabalho';
$string['cannotremoveworkflowinuse'] = 'Não foi possível remover o fluxo de trabalho. Este fluxo de trabalho está em uso no momento';
$string['cannotstepflowinuse'] = 'Não foi possível remover a etapa. Esta etapa está em uso no momento';
$string['clone'] = 'Clone';
$string['clonedname'] = '{$a} (clonado)';
$string['clonedshortname'] = '{$a}_clonado';
$string['cloneworkflow'] = 'Clonar fluxo de trabalho';
$string['cloneworkflowinstructions'] = 'Clonar instruções de fluxo de trabalho';
$string['cloneworkflowname'] = 'Clonar fluxo de trabalho \'{$a}\'';
$string['commentlabel'] = 'Atualizar comentário do fluxo de trabalho';
$string['comments'] = 'Comentários';
$string['confirm'] = 'Confirme';
$string['confirmemaildeletetitle'] = 'Excluir modelo de e-mail \'{$a}\'?';
$string['confirmfinishstep'] = 'Tem certeza de que deseja marcar esta etapa ({$a}) como concluída?';
$string['confirmjumptostep'] = 'Tem certeza de que deseja pular para a etapa {$a->stepno} ({$a->stepname})?';
$string['confirmstepdeletetitle'] = 'Excluir etapa \'{$a}\'?';
$string['confirmworkflowdeletetitle'] = 'Excluir fluxo de trabalho \'{$a}\'?';
$string['contexthasactiveworkflow'] = 'Este contexto já possui um fluxo de trabalho ativo.';
$string['coursestartdate'] = 'a data de início do curso';
$string['coursestudentclose'] = 'o curso é fechado para estudantes';
$string['coursestudentopen'] = 'o curso é aberto a estudantes';
$string['coursetutorclose'] = 'o curso é fechado para tutores';
$string['coursetutoropen'] = 'o curso é aberto a tutores';
$string['create'] = 'Criar';
$string['createemail'] = 'Criar novo modelo de e-mail';
$string['createstep'] = 'Criar etapa';
$string['createstepinstructions'] = 'Algumas instruções sobre como criar uma etapa';
$string['createstepname'] = 'Crie uma nova etapa para o fluxo de trabalho \'{$a}\'';
$string['createtask'] = 'Criando nova tarefa para a etapa {$a}';
$string['createtemplate'] = 'Crie modelos';
$string['createworkflow'] = 'Criar novo fluxo de trabalho';
$string['crontaskautostepfinisher'] = 'Finalizador da etapa do fluxo de trabalho';
$string['crontaskextranotify'] = 'Notificação extra da etapa do fluxo de trabalho';
$string['currentlyinuseby'] = 'Este fluxo de trabalho está atualmente em uso por';
$string['dayafter'] = '{$a} dia depois';
$string['dayas'] = 'mesmo dia que';
$string['daybefore'] = '{$a} dia antes';
$string['days'] = 'Dias';
$string['daysafter'] = '{$a} dias depois';
$string['daysbefore'] = '{$a} dias antes';
$string['defaultonactivescript'] = '# Você pode colocar um conjunto de ações para completar ao marcar esta etapa como ativa aqui';
$string['defaultoncompletescript'] = '# Você pode colocar um conjunto de ações para concluir ao marcar esta etapa como concluída aqui';
$string['defaultonextranotifyscript'] = '# Você pode colocar um conjunto de ações para marcar esta etapa enviar notificação';
$string['defaultstepdescription'] = 'Uma descrição para esta etapa deve estar aqui';
$string['defaultstepinstructions'] = 'Faça x, depois y, depois z.';
$string['defaultstepname'] = 'Primeiro passo';
$string['defaultworkflowdescription'] = 'Uma descrição para este fluxo de trabalho';
$string['delete'] = 'Excluir';
$string['deleteemail'] = 'Excluir e-mail';
$string['deleteemailcheck'] = 'Você tem certeza absoluta de que deseja excluir completamente o modelo de e-mail \'{$a}\'?';
$string['deletestep'] = 'Excluir etapa';
$string['deletestepcheck'] = 'Você tem certeza absoluta de que deseja excluir completamente a etapa \'{$a}\'?';
$string['deletetask'] = 'Excluir tarefa';
$string['deletetaskcheck'] = 'Tem certeza de que deseja excluir a tarefa \'{$a->taskname}\' da etapa \'{$a->stepname}\'?';
$string['deletetasktitle'] = 'Exclua a tarefa \'{$a->taskname}\' para confirmação da etapa \'{$a->stepname}\'';
$string['deletetemplate'] = 'Excluir modelo';
$string['deleteworkflow'] = 'Excluir fluxo de trabalho';
$string['deleteworkflowcheck'] = 'Você tem certeza absoluta de que deseja excluir completamente o fluxo de trabalho {$a}?';
$string['description'] = 'Descrição';
$string['disabled'] = 'Desabilitado';
$string['disableworkflow'] = 'Desabilitar fluxo de trabalho';
$string['doerstitle'] = 'Papéis';
$string['doertitle'] = 'Papéis responsáveis por esta etapa';
$string['donotautomaticallyfinish'] = 'Não termine automaticamente';
$string['donotnotify'] = 'Não envie notificação extra';
$string['edit'] = 'Editar';
$string['editcomments'] = 'Editar comentários';
$string['editemail'] = 'Editar modelo de e-mail \'{$a}\'';
$string['editingcommentfor'] = 'Editando comentário para \'{$a->stepname}\' em {$a->contextname}';
$string['editstep'] = 'Editar etapa';
$string['editstepinstructions'] = 'Algumas instruções sobre a finalidade desta página e uma introdução geral da página. Mencione os scripts, mas seus arquivos de ajuda devem fornecer mais informações sobre como funcionam.';
$string['editstepname'] = 'Etapa de edição \'{$a}\'';
$string['editsteps'] = 'Editar etapas do fluxo de trabalho \'{$a}\'';
$string['edittask'] = 'Editar tarefa';
$string['edittemplate'] = 'Editar modelo';
$string['edittemplateinstructions'] = 'Algumas instruções sobre como criar um modelo de e-mail';
$string['editworkflow'] = 'Editando fluxo de trabalho \'{$a}\'';
$string['editworkflowinstructions'] = 'Editar instruções de fluxo de trabalho';
$string['emaildescription'] = 'Os modelos de email podem ser usados pelos vários scripts em uma etapa do fluxo de trabalho';
$string['emailfrom'] = '{$a} sistema de fluxo de trabalho';
$string['emaillist'] = 'Modelos de e-mail de e-mail';
$string['emailmessage'] = 'Mensagem';
$string['emailmessage_help'] = 'Os seguintes espaços reservados podem ser usados na linha de assunto e na mensagem:

* %%workflowname%% - o nome do fluxo de trabalho.
* %%stepname%% - o nome da etapa atual.
* %%contextname%% - o nome do item ao qual o fluxo de trabalho se aplica, por exemplo, o site ou o nome do questionário.
* %%contexturl%% - link para aquilo ao qual o fluxo de trabalho se aplica.
* %%coursename%% - o nome do site em que o item está (apenas realmente útil para fluxos de trabalho de atividades)
* %%coursestartdate%% - a data de início do curso.
* %%courseenddate%% - a data em que o curso termina.
* %%activityopendate%% - para atividades com data aberta (por exemplo, Questionário) nessa data.
* %%activityclosedate%% - para atividades com data de encerramento (por exemplo, Questionário) nessa data.
* %%usernames%% - os nomes de todas as pessoas para quem este e-mail será enviado, como uma lista separada por vírgulas.
* %%currentusername%% - o nome da pessoa cuja ação acionou o e-mail atual. Isso funcionará apenas para e-mails de tarefas concluídas, e não para e-mails enviados de acordo com uma programação.

Os seguintes tokens podem ser usados somente no corpo da mensagem:

* %%instructions%% - as instruções desta etapa do fluxo de trabalho.
* %%tasks%% - a lista de caixas de seleção de tarefas, formatada como uma lista de marcadores.
* %%comment%% - o comentário do fluxo de trabalho. Normalmente o comentário da tarefa atual, mas às vezes o comentário da tarefa anterior, quando faz mais sentido.';
$string['emailsettings'] = 'Configurações do modelo de e-mail';
$string['emailsubject'] = 'Assunto';
$string['emailtemplateexists'] = 'O modelo de e-mail \'{$a}\' que foi tentado importar já existe. O modelo existente é preservado.';
$string['emptyfield'] = 'O campo obrigatório está vazio: {$a}';
$string['enabled'] = 'Habilitado';
$string['enabledworkflow'] = 'Habilitado';
$string['enableworkflow'] = 'Habilitar fluxo de trabalho';
$string['eventstepaborted'] = 'Etapa abortada';
$string['eventstepactivated'] = 'Etapa ativada';
$string['eventstepcompleted'] = 'Etapa concluída';
$string['eventstepextranotification'] = 'Notificação extra de etapa processada';
$string['eventtodotriggered'] = 'Todo acionado';
$string['export'] = 'Exportar';
$string['exportworkflow'] = 'Fluxo de trabalho de exportação';
$string['finish'] = 'Terminar';
$string['finishstep'] = 'Concluir etapa';
$string['finishstepautomatically'] = 'Esta etapa foi finalizada automaticamente pelo sistema de workflow em {$a}.';
$string['finishstepfor'] = 'Conclua a etapa \'{$a->stepname}\' em {$a->contextname}';
$string['finishstepinstructions'] = 'Você está prestes a marcar esta etapa como concluída e passar para a próxima etapa do fluxo de trabalho. Um resumo da etapa é mostrado abaixo - você pode atualizar o comentário abaixo.';
$string['format_html'] = 'html';
$string['format_plain'] = 'simples';
$string['format_unknown'] = 'desconhecido';
$string['general'] = 'Em geral';
$string['hidetask'] = 'Desabilitar tarefa';
$string['importfile'] = 'Arquivo';
$string['importsuccess'] = 'Importação realizada com sucesso. Você será redirecionado para a página de edição do fluxo de trabalho em breve.';
$string['importworkflow'] = 'Importar Fluxo de trabalho';
$string['instructions'] = 'Instruções';
$string['inuseby'] = 'Atualmente está em uso em {$a} locais.';
$string['invalidactivitysettingcolumn'] = 'A coluna especificada ({$a}) não existe.';
$string['invalidappliestomodule'] = 'Um valor de applyto inválido foi especificado';
$string['invalidappliestotable'] = 'A tabela do banco de dados para {$a} não foi encontrada. Talvez não seja possível usar este comando para este tipo de fluxo de trabalho';
$string['invalidbody'] = 'Um corpo inválido foi especificado';
$string['invalidcapability'] = 'Capacidade inválida especificada.';
$string['invalidclearmustendcommand'] = 'Não deve haver nada após a palavra \'claro\'.';
$string['invalidcommand'] = 'O comando de script \'{$a}\' não foi reconhecido.';
$string['invalidemailemail'] = 'O modelo de e-mail \'{$a}\' não existe.';
$string['invalidemailshortname'] = 'Nome abreviado inválido especificado ({$a})';
$string['invalidfield'] = 'Um campo inválido foi especificado nos dados. O campo era \'{$a}\'';
$string['invalidformat'] = 'Foi especificado um formato inválido: {$a}';
$string['invalidid'] = 'Um ID inválido foi especificado';
$string['invalidinstructions'] = 'Instruções de etapa inválidas foram especificadas';
$string['invalidmissingvalue'] = 'Comando inválido, valor está faltando.';
$string['invalidname'] = 'Um nome inválido foi especificado';
$string['invalidobsoletesetting'] = 'Um valor obsoleto inválido foi especificado. As configurações válidas são 0 ou 1';
$string['invalidpermission'] = 'Permissão inválida especificada. As permissões válidas são herdar, permitir, impedir ou proibir.';
$string['invalidrole'] = 'Um papel inválido ({$a}) foi definido durante o processamento do script';
$string['invalidscript'] = 'O script que você especificou era inválido. {$a}';
$string['invalidshortname'] = 'Um nome abreviado inválido foi especificado';
$string['invalidstate'] = 'Estado inválido';
$string['invalidstep'] = 'Etapa inválida especificada.';
$string['invalidstepid'] = 'ID de etapa inválido especificado.';
$string['invalidstepno'] = 'Número de etapa inválido especificado.';
$string['invalidsubject'] = 'Um assunto inválido foi especificado';
$string['invalidsyntaxmissingto'] = 'Sintaxe de comando inválida – faltando no componente';
$string['invalidsyntaxmissingx'] = 'Sintaxe de comando inválida - faltando \'{$a}\'.';
$string['invalidtarget'] = 'Meta de atividade inválida';
$string['invalidtodo'] = 'Tarefa inválida especificada';
$string['invalidvisibilitysetting'] = 'A opção de visibilidade \'{$a}\' é inválida. Deve ser \'visível\' ou \'oculto\'.';
$string['invalidwordnotclearorset'] = 'Esperado \'limpo\' ou \'definido\'.';
$string['invalidworkflow'] = 'Fluxo de trabalho inválido especificado.';
$string['invalidworkflowid'] = 'Um fluxo de trabalho inválido foi especificado';
$string['invalidworkflowname'] = 'Um nome de fluxo de trabalho inválido foi especificado';
$string['invalidworkflowstepno'] = 'O número da etapa especificado não foi encontrado neste fluxo de trabalho';
$string['jumpstep'] = 'Ir para o passo';
$string['jumptostep'] = 'Ir para o passo';
$string['jumptostepcheck'] = 'Tem certeza de que deseja pular da etapa \'{$a->fromstep}\' para a etapa \'{$a->tostep}\' do fluxo de trabalho em {$a->workflowon}?';
$string['jumptostepcommentaddition'] = '<p>[Nota: o fluxo de trabalho acabou de saltar da etapa \'{$a->fromstep}\'. Este comentário pode parecer fora de contexto.]</p>{$a->comment}';
$string['jumptostepon'] = 'Vá para a etapa \'{$a->stepname}\' em {$a->contextname}';
$string['jumptosteptitle'] = 'Vá para a etapa \'{$a->tostep}\' para confirmação de \'{$a->workflowon}\'';
$string['lastmodified'] = 'Última modificação';
$string['managedescription'] = 'Nesta página você pode criar fluxos de trabalho de edição final e os modelos de email que eles usam.';
$string['manageemails'] = 'Gerenciar modelos de e-mail';
$string['manageworkflows'] = 'Gerenciar fluxos de trabalho';
$string['messageprovider:notification'] = 'Notificações e alertas de fluxo de trabalho';
$string['missingfield'] = 'O campo obrigatório está faltando: {$a}';
$string['movedown'] = 'Mover para baixo';
$string['moveup'] = 'Subir';
$string['name'] = 'Nome';
$string['nameinuse'] = 'O nome especificado já está em uso. Os nomes devem ser exclusivos';
$string['nameshortname'] = '{$a->name} ({$a->shortname})';
$string['noactiveworkflow'] = 'Atualmente não há fluxo de trabalho ativo.';
$string['nocomment'] = 'Nenhum comentário ainda...';
$string['nocomments'] = 'Nenhum comentário foi feito sobre esta etapa ainda';
$string['nomorestepsleft'] = 'O fluxo de trabalho foi concluído.';
$string['norolesspecified'] = 'Nenhum papel foi definido';
$string['nosuchrole'] = 'O papel {$a} não existe';
$string['notacourse'] = 'Este não é um curso';
$string['notallowedtodothisstep'] = 'Você não tem permissão para fazer alterações nesta etapa no momento';
$string['notanactivity'] = 'O comando {$a} só pode ser usado com uma atividade';
$string['notaworkflow'] = 'Este não é um arquivo de fluxo de trabalho válido';
$string['notcontrollablegradeitem'] = 'O comando {$a} só pode ser usado com uma atividade onde a visibilidade da nota NÃO é controlada pela atividade';
$string['notcurrentlyinuse'] = 'Atualmente não está em uso.';
$string['notgradesupported'] = 'O comando {$a} só pode ser usado com uma atividade que tenha nota';
$string['notificationdate'] = 'Data de notificação';
$string['notuniquestep'] = 'A etapa {$a} não é única';
$string['notutfencoding'] = 'Este arquivo não é codificado em UTF-8';
$string['noworkflow'] = 'Atualmente não há fluxo de trabalho atribuído para esta página';
$string['noworkflows'] = 'Atualmente não há fluxos de trabalho disponíveis';
$string['obsoleteworkflow'] = 'Obsoleto';
$string['onactivescript'] = 'Ativação na etapa';
$string['oncompletescript'] = 'Na conclusão da etapa';
$string['onextranotifyscript'] = 'Notificar enquanto a etapa estiver ativa';
$string['overview'] = 'Visão geral';
$string['overviewtitle'] = 'Visão geral do fluxo de trabalho {$a->workflowname} em {$a->contexttitle}';
$string['percentcomplete'] = '{$a}% concluído';
$string['pluginname'] = 'Fluxos de trabalho';
$string['privacy:metadata'] = 'O bloco Calendário exibe apenas dados de calendário existentes.';
$string['privacy:metadata:block_workflow_state_changes'] = 'Mudanças nos estados.';
$string['privacy:metadata:block_workflow_state_changes:newstate'] = 'O estado para o qual esta etapa foi alterada.';
$string['privacy:metadata:block_workflow_state_changes:userid'] = 'O usuário que causou a mudança de estado.';
$string['privacy:metadata:block_workflow_todo_done'] = 'Alterações em cada etapa do fluxo de trabalho.';
$string['privacy:metadata:block_workflow_todo_done:steptodoid'] = 'A etapa de tarefas para a qual o usuário mudou.';
$string['privacy:metadata:block_workflow_todo_done:userid'] = 'O usuário que causou a mudança de estado.';
$string['privacy_somebodyelse'] = 'Outra pessoa';
$string['privacy_you'] = 'Você';
$string['quizclosedate'] = 'a data de encerramento do questionário';
$string['quizopendate'] = 'a data de abertura do questionário';
$string['remove'] = 'Remover';
$string['removerolefromstep'] = 'Remover papel da etapa';
$string['removestep'] = 'Remover etapa';
$string['removetask'] = 'Remover tarefa';
$string['removeworkflow'] = 'Remover fluxo de trabalho';
$string['removeworkflowcheck'] = 'Tem certeza de que deseja remover o fluxo de trabalho \'{$a->workflowname}\' de {$a->contexttitle}? Esta ação remove todos os dados associados e não pode ser revertida!';
$string['removeworkflowfromcontext'] = 'Remover o fluxo de trabalho \'{$a->workflowname}\' de {$a->contexttitle}?';
$string['roles'] = 'Papéis';
$string['shortname'] = 'Nome curto';
$string['shortnameinuse'] = 'O nome abreviado especificado já está em uso. Os nomes curtos devem ser exclusivos';
$string['shortnametaken'] = 'Este nome abreviado já está em uso por outro fluxo de trabalho ({$a})';
$string['shortnametakenemail'] = 'Este nome abreviado já está em uso por outro modelo de e-mail ({$a})';
$string['shownamesx'] = 'Mostrar nomes ({$a})';
$string['showpeoplecandotask'] = 'Pessoas que podem fazer esta tarefa';
$string['showtask'] = 'Habilitar tarefa';
$string['state'] = 'Estado';
$string['state_aborted'] = 'Abortado';
$string['state_active'] = 'Ativo';
$string['state_completed'] = 'Completo';
$string['state_history'] = 'História';
$string['state_history_aborted'] = 'Abortado';
$string['state_history_active'] = 'Ativado';
$string['state_history_completed'] = 'Concluído';
$string['state_history_detail'] = '{$a->newstate} by {$a->user} at {$a->time}.';
$string['state_notstarted'] = 'Não foi iniciado';
$string['status'] = 'Status atual';
$string['step'] = 'Etapa';
$string['stepactivation'] = 'Ativação de etapa';
$string['stepactivation_help'] = 'Ativação de etapa';
$string['stepactivation_link'] = 'bloco/fluxo de trabalho';
$string['stepcompletion'] = 'Conclusão da etapa';
$string['stepcompletion_help'] = 'Conclusão da etapa';
$string['stepcompletion_link'] = 'bloco/fluxo de trabalho';
$string['stepextranotify'] = 'Etapa extra de notificação';
$string['stepextranotify_help'] = 'Configure a notificação por e-mail para ser enviada automaticamente aos destinatários escolhidos na data de notificação selecionada.';
$string['stepextranotify_link'] = 'bloco/fluxo de trabalho';
$string['stepfinishconfirmation'] = 'A etapa foi concluída com sucesso. Você concluiu todo o trabalho necessário nesta fase';
$string['stepinstructions'] = 'Instruções';
$string['stepname'] = 'Nome da etapa';
$string['stepno'] = 'Passo nº.';
$string['stepnotexist'] = 'A etapa final não existe nos dados importados: {$a}';
$string['steps'] = 'Passos';
$string['stepsettings'] = 'Configurações de etapas';
$string['task'] = 'Tarefa';
$string['taskcomplete'] = 'Tarefa completa';
$string['tasknotspecified'] = 'Nenhuma tarefa foi especificada';
$string['thisworkflowappliesto'] = 'Este fluxo de trabalho se aplica a';
$string['tobecompletedby'] = 'A ser concluído até';
$string['todocannotchangestepid'] = 'Não é possível alterar o stepid de uma tarefa existente';
$string['tododone'] = 'Marcado {$a} como concluído';
$string['todolisttitle'] = 'Tarefas para conclusão';
$string['todotask'] = 'Tarefa';
$string['todotitle'] = 'Itens a serem concluídos nesta etapa';
$string['todoundone'] = 'Marcado {$a} como incompleto';
$string['updatecomment'] = 'Atualizar comentário';
$string['vieweditemail'] = 'Ver/Editar e-mail';
$string['vieweditworkflow'] = 'Visualizar/Editar fluxo de trabalho';
$string['workflow'] = 'Fluxo de trabalho';
$string['workflow:addinstance'] = 'Adicione um novo bloco de fluxo de trabalho';
$string['workflow:dostep'] = 'Permissão para executar uma etapa';
$string['workflow:editdefinitions'] = 'Permissão para editar detalhes do fluxo de trabalho';
$string['workflow:manage'] = 'Permissão para gerenciar fluxos de trabalho';
$string['workflow:view'] = 'Permissão para visualizar informações do fluxo de trabalho';
$string['workflowactive'] = 'Este fluxo de trabalho está ativado no momento (<a href="{$a}" title="Desativar este fluxo de trabalho">desative-o</a>).';
$string['workflowalreadyassigned'] = 'Um fluxo de trabalho já está atribuído a este contexto. Somente um fluxo de trabalho pode ser atribuído a qualquer contexto por vez.';
$string['workflowalreadyset'] = 'Um fluxo de trabalho já foi definido para esta etapa. As etapas não podem ser reatribuídas a um fluxo de trabalho diferente';
$string['workflowimport'] = 'Importação de fluxo de trabalho';
$string['workflowinformation'] = 'Informações sobre fluxo de trabalho';
$string['workflowlist'] = 'Fluxos de trabalho';
$string['workflownotassigned'] = 'O fluxo de trabalho \'{$a->workflowname}\' não está atribuído ao contexto especificado';
$string['workflownotassignedtocontext'] = 'O fluxo de trabalho \'{$a->workflowname}\' não está atribuído a {$a->contexttitle}';
$string['workflowobsolete'] = 'Este fluxo de trabalho está atualmente marcado como desabilitado (<a href="{$a}" title="Re-enable this workflow">habilite-o</a>).';
$string['workflowoverview'] = 'Visão geral do fluxo de trabalho';
$string['workflowsettings'] = 'Configurações de fluxo de trabalho';
$string['workflowstatus'] = 'Status do fluxo de trabalho';
$string['workflowsteps'] = 'Etapas do fluxo de trabalho';
$string['workflowusage'] = 'Uso do fluxo de trabalho';
$string['xmlloadfailed'] = 'Falha ao carregar XML com os seguintes problemas:';
$string['youandanyother'] = 'Você ou qualquer outro';
