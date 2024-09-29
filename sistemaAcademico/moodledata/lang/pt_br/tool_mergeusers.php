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
 * Strings for component 'tool_mergeusers', language 'pt_br', version '4.1'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Escolha os usuários para mesclar';
$string['clear_selection'] = 'Limpar seleção do usuário atual';
$string['cligathering:description'] = 'Introduza pares de ID do usuário para mesclar o primeiro no\\n
segundo. O primeiro ID de usuário (fromid) \'perderá\' todos os seus dados para serem \'migrados\'\\n
no segundo (toid). O usuário \'toid\' incluirá dados de ambos os usuários.';
$string['cligathering:fromid'] = 'ID do usuário de origem (fromid):';
$string['cligathering:stopping'] = 'Para interromper a mesclagem, Ctrl+C ou digite -1 nos campos fromid ou toid.';
$string['cligathering:toid'] = 'ID do usuário de destino (toid):';
$string['dbko_no_transactions'] = '<strong>Falha na mesclagem!</strong> <br/>Seu mecanismo de banco de dados
    não suporta transações. Portanto, seu banco de dados <strong>foi atualizado</strong>.
    O status do seu banco de dados pode estar inconsistente. <br/>Mas, dê uma olhada no log de mesclagem
    e, por favor, informe sobre o erro aos desenvolvedores do plugin. Você obterá uma solução
    em pouco tempo. Após atualizar o plugin para sua última versão, que incluirá a solução
    para esse problema, repita a ação de mesclagem para concluí-la com sucesso.';
$string['dbko_transactions'] = '<strong>Falha na mesclagem!</strong> <br/>Seu gerenciador de banco de dados suporta transações. Portanto, toda a transação atual foi revertida e <strong>nenhuma modificação foi feita em seu banco de dados</strong>.';
$string['dbok'] = 'Mesclagem com sucesso';
$string['deleted'] = 'O usuário com ID {$a} foi excluído';
$string['error_return'] = 'Voltar ao formulário de pesquisa';
$string['errorsameuser'] = 'Tentando mesclar o mesmo usuário';
$string['errortransactionsonly'] = 'Erro: transações são obrigatórias, mas seu tipo de banco de dados {$a}
    nãotem suporte. Se necessário, você pode permitir a mesclagem de usuários sem transações.
    Por favor, revise as configurações do plugin para configurá-las adequadamente.';
$string['eventusermergedfailure'] = 'Falha na mesclagem';
$string['eventusermergedsuccess'] = 'Mesclando com sucesso';
$string['excluded_exceptions'] = 'Excluir exceções';
$string['excluded_exceptions_desc'] = 'A experiência neste assunto sugere
    que todas essas tabelas de banco de dados devem ser excluídas da mesclagem. Ver
    LEIA-ME para mais detalhes. <br>
    Portanto, para aplicar o comportamento padrão do plugin, você precisa escolher \'{$a}\'
    para excluir todas essas tabelas do processo de mesclagem (recomendado).<br>
    Se preferir, você pode excluir qualquer uma dessas tabelas e incluí-las no
    processo de mesclagem (não recomendado).';
$string['exportlogs'] = 'Exportar registros como CSV';
$string['finishtime'] = 'A mesclagem foi concluída em {$a}';
$string['form_description'] = '<p>Você pode pesquisar usuários aqui se não quiser
    saber o nome de usuário/número de identificação do usuário. Caso contrário, você pode expandir o formulário para
    insira essas informações diretamente.  Por favor, veja a ajuda nos campos para mais
    informações</p>';
$string['form_header'] = 'Encontre usuários para mesclar';
$string['header'] = 'Mesclar dois usuários em uma única conta';
$string['header_help'] = '<p>Dado um usuário a ser excluído e um usuário a ser mantido, isso mesclará os dados do usuário
 associado ao usuário anterior no último usuário. Observe que ambos os usuários devem
 já existem e nenhuma conta será realmente excluída. Esse processo é deixado para o
 administrador faça manualmente.</p>
 <p><strong>Só faça isso se você souber o que está fazendo, pois não é reversível!</strong></p>';
$string['into'] = 'em';
$string['invalid_option'] = 'Opção de formulário inválida';
$string['invaliduser'] = 'Usuário inválido';
$string['logid'] = 'Para referência futura, esses resultados são registrados no ID de log {$a}.';
$string['logko'] = 'Ocorreu algum erro:';
$string['loglist'] = 'Todos esses registros são ações de mesclagem realizadas, mostrando se deram certo:';
$string['logok'] = 'Aqui estão as consultas que foram enviadas ao banco de dados:';
$string['mergedbyuseridonlog'] = 'Mesclado por';
$string['mergeusers'] = 'Mesclar contas de usuário';
$string['mergeusers:mergeusers'] = 'Mesclar contas de usuário';
$string['mergeusers:view'] = 'Mesclar contas de usuário';
$string['mergeusers_confirm'] = 'Após a confirmação, o processo de mesclagem será iniciado.
    <br /><strong>Isso não poderá ser revertido</strong>
    Tem certeza de que deseja continuar?';
$string['mergeusersadvanced'] = '<strong>Entrada direta do usuário</strong>';
$string['mergeusersadvanced_help'] = 'Aqui você pode inserir os campos abaixo se
    você sabe exatamente quais usuários deseja mesclar.<br /><br />
    Clique no botão "pesquisar" para verificar/confirmar se a entrada inserida
    são de fato usuários.';
$string['merging'] = 'Mesclado';
$string['newuser'] = 'Usuário a ser mantido';
$string['newuserid'] = 'ID do usuário a ser mantido';
$string['newuseridonlog'] = 'Usuário mantido';
$string['no_saveselection'] = 'Você não selecionou um usuário antigo ou novo.';
$string['nologs'] = 'Ainda não há mesclagem de logs. Bom para você!';
$string['nomergedby'] = 'Não registrado';
$string['olduser'] = 'Usuário a ser removido';
$string['olduserid'] = 'ID do usuário a ser removido';
$string['olduseridonlog'] = 'Usuário removido';
$string['pluginname'] = 'Mesclar contas de usuário';
$string['privacy:metadata'] = 'O plugin Merge User Accounts não armazena nenhum dado pessoal.';
$string['qa_action_delete_fromid'] = 'Manter tentativas do novo usuário';
$string['qa_action_delete_toid'] = 'Manter tentativas do usuário antigo';
$string['qa_action_remain'] = 'Não faça nada: não mescle nem exclua';
$string['qa_action_remain_log'] = 'Os dados do usuário da tabela <strong>{$a}</strong> não são atualizados.';
$string['qa_action_renumber'] = 'Mesclar tentativas de ambos os usuários e renumerar';
$string['qa_chosen_action'] = 'Opção ativa para tentativas de quiz: {$a}.';
$string['qa_grades'] = 'Notas recalculadas para questionários: {$a}.';
$string['quizattemptsaction'] = 'Como resolver tentativas de questionário';
$string['quizattemptsaction_desc'] = 'Ao mesclar tentativas de questionário, podem existir três casos:
    <ol>
    <li>Somente o usuário antigo tem tentativas de teste. Todas as tentativas aparecerão como se tivessem sido feitas pelo novo usuário.</li>
    <li>Somente o novo usuário tem tentativas de teste. Tudo está correto e nada foi feito.</li>
    <li>Ambos os usuários têm tentativas para o mesmo questionário. <strong>Você tem que escolher o que fazer neste caso de conflito.
    </strong>. Você deve escolher uma das seguintes ações:
        <ul>
        <li><strong>{$a->renumerar}</strong>. As tentativas do usuário antigo são mescladas com as do novo usuário
        e renumerados no momento em que foram iniciados.</li>
        <li><strong>{$a->delete_fromid}</strong>. As tentativas do usuário antigo são removidas. Tentativas do novo usuário
        são mantidos, pois esta opção os considera os mais importantes.</li>
        <li><strong>{$a->delete_toid}</strong>. As tentativas do novo usuário são removidas. Tentativas de
        os usuários antigos são mantidos, pois esta opção os considera os mais importantes.</li>
        <li><strong>{$a->remain}</strong> (por padrão). As tentativas não são mescladas nem excluídas, permanecendo relacionadas a
        o usuário que os criou. Esta é a ação mais segura, mas mesclar usuários do usuário A para o usuário B ou de B para A pode
        produzir diferentes notas de questionário.</li>
        </ul>
    </li>
    </ol>

Ícone "Verificada pela comunidade"';
$string['results'] = 'Mesclando resultados e log';
$string['review_users'] = 'Confirme os usuários para mesclar';
$string['saveselection_submit'] = 'Salvar seleção';
$string['searchuser'] = 'Pesquisar usuário';
$string['searchuser_help'] = 'Digite um nome de usuário, nome/sobrenome, endereço de e-mail
    ou ID do usuário para procurar usuários em potencial. Você também pode especificar se apenas
    deseja pesquisar em um campo específico.';
$string['starttime'] = 'A mesclagem começou em {$a}';
$string['suspenduser_setting'] = 'Suspender usuário antigo';
$string['suspenduser_setting_desc'] = 'Se ativado, suspende o usuário antigo
    automaticamente após um processo de mesclagem bem-sucedido, evitando que o usuário
    do login no Moodle (recomendado). Se desativado, o usuário antigo permanece ativo.
    Em ambos os casos, o usuário antigo não terá seus dados relacionados.';
$string['tableko'] = 'Tabela {$a} : atualização NÃO OK!';
$string['tableok'] = 'Tabela {$a}: atualização OK';
$string['tableskipped'] = 'Por motivos de registro ou de segurança, estamos ignorando <strong>{$a}</strong>.
 <br />Para remover essas entradas, exclua o usuário antigo assim que o script for executado com sucesso.';
$string['timetaken'] = 'A mesclagem levou {$a} segundos';
$string['transactions_not_supported'] = 'Para sua informação, seu banco de dados
    <strong>não suporta transações</strong>.';
$string['transactions_setting'] = 'Somente transações permitidas';
$string['transactions_setting_desc'] = 'Se ativado, mesclar usuários não funcionará
    em bancos de dados que NÃO suportam transações (recomendado).
    Ativá-lo é necessário para garantir que seu banco de dados permaneça consistente
    em caso de erros de mesclagem. <br />Se desativado, você sempre executará ações de mesclagem.
    Em caso de erros, o log de mesclagem mostrará qual foi o problema.
    Relatá-lo aos apoiadores do plugin lhe dará uma solução resumida.
    <br />Acima de tudo, as principais tabelas do Moodle e alguns plugins de terceiros já estão
    considerado por este plugin. Se você não possui plug-ins de terceiros
    na instalação do Moodle, você pode ficar tranquilo ao executar este plugin
    ativar ou desativar esta opção.';
$string['transactions_supported'] = 'Para sua informação, seu banco de dados
    <strong>suporta transações</strong>.';
$string['uniquekeynewidtomaintain'] = 'Mantenha os dados do novo usuário';
$string['uniquekeynewidtomaintain_desc'] = 'Em caso de conflito,
    como quando a coluna relacionada user.id é uma chave única, este plugin irá manter
    dados do novo usuário (por padrão). Isso também significa que os dados do usuário antigo são
    excluído para manter a consistência. Caso contrário, se você desmarcar esta opção,
    os dados do usuário antigo serão mantidos.';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (user ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Revisar usuários para mesclar</b>';
$string['userselecttable_legend'] = '<b>Selecionar usuários para mesclar</b>';
$string['viewlog'] = 'Ver mesclagem de registros';
$string['wronglogid'] = 'O log que você está solicitando não existe.';
