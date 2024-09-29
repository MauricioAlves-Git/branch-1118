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
 * Strings for component 'block_stash', language 'pt_br', version '4.1'.
 *
 * @package     block_stash
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceitar';
$string['add'] = 'Adicionar';
$string['additem'] = 'Adicionar um item';
$string['addnewdrop'] = 'Adicionar nova localização';
$string['addnewtradeitem'] = 'Adicionar um novo item a este comercio';
$string['addtoinventory'] = 'Adicionar um item ao inventário.';
$string['addtrade'] = 'Adicionar um widget ao comercio';
$string['addtradeitem'] = 'Adicionar um item ao comercio';
$string['advancedreset'] = 'Restauração avançada';
$string['aftercreatinglocationhelp'] = 'Depois que você criar o item e a localização, você precisa adicionar um trecho de código ao seu curso para que o item seja exibido. Depois de customizar como o item vai ser exibido para seus estudantes, copie o trecho de código abaixo e cole-o em seu conteúdo, na descrição de uma atividade, por exemplo.';
$string['appearance'] = 'Aparência';
$string['backtostart'] = 'Voltar para a tela principal';
$string['buttontext'] = 'Texto do botão';
$string['completed'] = 'Completado';
$string['configdeleted'] = 'Configuração excluída';
$string['configupdated'] = 'Configuração atualizada';
$string['configurationtitle'] = 'Título do esconderijo';
$string['configureremoval'] = 'Configuração removida';
$string['copypaste'] = 'Copie e cole isto em um editor em diferentes atividades pelo seu curso.';
$string['copytoclipboard'] = 'Copiar para área de transferência';
$string['cost'] = 'Preço';
$string['createquizzes'] = 'Crie um desafio neste curso para configurar a remoção de um item do esconderijo aqui.';
$string['createtrade'] = 'Criar requisição de troca';
$string['decline'] = 'Declinar';
$string['delete'] = 'Excluir';
$string['deletedrop'] = 'Excluir {$a}';
$string['deleteitem'] = 'Excluir {$a}';
$string['deleteswap'] = 'Excluir troca';
$string['deleteuseritem'] = 'Excluir {$a} para este estudante';
$string['details'] = 'Detalhes';
$string['dropa'] = 'Localização "{$a}"';
$string['dropname'] = 'Localização';
$string['dropname_help'] = 'O nome da localização somente é útil para sua organização, ele não será exibido aos estudantes.';
$string['drops'] = 'Localizações';
$string['drops_help'] = '<p>Localizações são locais onde os seus itens estão no <em>mundo virtual</em>. Sem uma <em>localização</em> um item não pode ser pego por um estudante.</p>
<p>Localizações vem com algumas opções, incluindo o número de vezes que um único estudante pode pegá-los, e como eles reaparecerão depois se serem pegos.</p>
<p>Por exemplo, seus estudantes precisam de um <em>item chave</em> para acessar uma atividade, você provavelmente irá definir de forma que seus estudantes somente consigam pega-lo uma vez naquela localização.</p>
<p>Porém se eles precisam de <em>5 moedas</em> para acessar outra, você deveria definir para que a moeda reaparecesse diariamente para encorajar eles a visitarem o curso todo dia.</p>
<p>Note que itens não aparecem magicamente no seu curso, você deve adicionar um código especial a seu conteúdo para que o item seja exibido.</p>';
$string['dropslist'] = 'Lista de localizações';
$string['dropsnippet'] = 'Trecho de código para "{$a}"';
$string['dropsummary'] = 'Resumo das localizações';
$string['edit'] = 'Alterar';
$string['editdrop'] = 'Alterar localização "{$a}"';
$string['edititem'] = 'Alterar item "{$a}"';
$string['edittrade'] = 'Editar widget do comercio \'{$a}\'';
$string['edittradeitem'] = 'Editar item do comercio \'{$a}\'';
$string['eginthecastle'] = 'Por exemplo: no castelo';
$string['enabled'] = 'Habilitado';
$string['eventitemacquired'] = 'Um item foi adquirido.';
$string['eventswapaccepted'] = 'Uma troca de participante foi aceita.';
$string['eventswapcreated'] = 'Uma troca de participante foi criada.';
$string['filtershortcodesnotactive'] = 'O plugin de filtro Shortcodes está instalado, mas ainda não habilitado para este curso. Visite <a href="{$a->activeurl}" target="_blank">esta página</a> para ativá-lo neste curso.';
$string['filtershortcodesnotenabled'] = 'O plugin de filtro Shortcodes está instalado, mas ainda não está <a href="{$a->enableurl}" target="_blank">ativado</a>.';
$string['filtershortcodesnotinstalled'] = 'Recomendamos que você instale e ative o <a href="{$a->installurl}" target="_blank">plugin de filtro Shortcodes</a>. Isso torna mais fácil e confiável o uso dos snippets. Também permite as trocas.';
$string['filterstashdeprecated'] = 'Você está usando um plugin Stash filter mais antigo, que não é mais compatível. Recomendamos que você instale e ative o <a href="{$a->installurl}" target="_blank">Shortcodes filter</a>. Também permite as trocas.';
$string['filterstashnotactive'] = 'O plugin filtro foi instalado mas não foi ativado para este curso. Visite <a href="{$a->activeurl}" target="_blank">esta página</a> para habilita-lo neste curso.';
$string['filterstashnotenabled'] = 'O plugin filtro foi instalado mas não foi <a href="{$a->enableurl}" target="_blank">habilitado</a>.';
$string['filterstashnotinstalled'] = 'Nós recomendamos que você instale e habilite o <a href="{$a->installurl}" target="_blank">plugin Stash filter</a>. Ele torna mais fácil e confiável o uso dos trechos de código.';
$string['filterstashwrongversion'] = 'O plugin de filtro que você instalou é uma versão anterior e não funciona com as trocas. Visite <a href="{$a}" target="_blank">esta página</a> para obter a versão mais recente.';
$string['from'] = 'De';
$string['gain'] = 'Ganho';
$string['gainloss'] = 'Ganhar ou perder';
$string['gaintitle'] = 'Título do ganho';
$string['gaintitle_help'] = 'Título da coluna de itens que o participante irá adquirir nesta troca.';
$string['generalsettings'] = 'Configurações gerais';
$string['grouponly'] = 'Permitir apenas trocas entre estudantes em seus grupos.';
$string['image'] = 'Imagem';
$string['imageandbutton'] = 'Imagem e botão';
$string['item'] = 'Item';
$string['itemamountlimit'] = 'Limite de quantidade';
$string['itemamountlimit_help'] = 'Esta é a quantidade máxima de escassez deste item disponível para todos os estudantes do curso.';
$string['itemamountupdate'] = 'O número para este item foi atualizado';
$string['itemdeleted'] = 'O item foi excluído';
$string['itemdetail'] = 'Detalhes';
$string['itemdetail_help'] = 'Detalhes sobre o item.';
$string['itemimage'] = 'Imagem';
$string['itemimage_help'] = 'Esta imagem será utilizada para exibir o item. O tamanho recomendado é 100x100 pixels.';
$string['itemname'] = 'Nome do item';
$string['itemname_help'] = 'O nome do item, ele será exibido para os estudantes.';
$string['itemremoval'] = 'Exclusão do item';
$string['items'] = 'Itens';
$string['itemslist'] = 'Lista de itens';
$string['itemsremoved'] = 'Itens excluídos';
$string['leaderboard'] = 'Mostrar ranking de classificação.';
$string['leaderboard_groups'] = 'Mostrar apenas participantes dos meus grupos no ranking de classificação.';
$string['leaderboards'] = 'Rankings de classificação';
$string['locations'] = 'Localizações';
$string['loss'] = 'Perdas';
$string['losstitle'] = 'Título da perda';
$string['losstitle_help'] = 'Título da coluna de itens que o participante irá investir nesta troca.';
$string['maxnumber'] = 'Valor máximo coletável';
$string['maxpickup'] = 'Suprimentos';
$string['maxpickup_help'] = 'O número de vezes que um item pode ser pego por cada estudante nesta localização. Por exemplo, se você definir isto para \'1\', o item somente estará disponível uma vez por estudante. Se você definir \'5\', cada estudante pode adquirir o item 5 cinco vezes nesta localização. Um valor diferente de \'1\' é melhor usado em combinação com o \'Intervalo de coleta\'.';
$string['mostitems'] = 'A maior parte dos itens';
$string['mostsingularitem'] = 'A maior parte de um item específico singular';
$string['mostsingularitemname'] = 'A maior parte de \'{$a}\'';
$string['mostuniqueitems'] = 'Itens mais exclusivos';
$string['myitems'] = 'Meus itens';
$string['myrequests'] = 'Meus pedidos para outros participantes';
$string['navdrops'] = 'Localizações';
$string['navinventory'] = 'Itens escondidos';
$string['navitems'] = 'Itens';
$string['navleaderboadsettings'] = 'Configurações do ranking de classificação';
$string['navreport'] = 'Relatório';
$string['navtrade'] = 'Troca';
$string['new'] = 'Novo';
$string['next'] = 'Próximo';
$string['nofilterandnotiny'] = '📢 Você sabia que existe um novo plugin para o editor TinyMCE que facilita muito a criação de itens e trocas? Baixe e instale os <a href="https://moodle.org/plugins/filter_shortcodes">plugin Shortcodes filter</a> e o <a href="https://moodle.org/plugins/tiny_stash">plugin do editor TinyMCE tiny_stash</a> para melhorar consideravelmente sua experiência de criação de itens. Um vídeo de visualização está disponível através do link anterior.';
$string['noitems'] = 'Nenhum item selecionado';
$string['noitemstotrade'] = 'Você não tem item para trocar';
$string['nomorescarceitems'] = 'O número máximo deste item já foi alocado. Considere aumentar a quantidade de escassez deste item.';
$string['none'] = 'Nenhum';
$string['noquizzes'] = 'Você não tem desafios';
$string['nosingularitem'] = 'Por favor inclua pelo menos um item para usar esse quadro de ranking';
$string['notiny'] = '📢 Você sabia que existe um novo plugin para o editor TinyMCE que facilita muito a criação de itens e trocas? Baixe e instale o <a href="https://moodle.org/plugins/tiny_stash">plugin do editor TinyMCE tiny_stash</a> para melhorar consideravelmente a sua experiência de criação de itens. Um vídeo de visualização está disponível no link anterior.';
$string['notrecorded'] = 'Não registrado';
$string['number'] = 'Número';
$string['offerdetail'] = 'Você solicitou uma troca com este estudante pelos seguintes itens.';
$string['offereditems'] = 'Itens oferecidos';
$string['offers'] = 'Ofertas';
$string['offers:zero'] = 'Nenhuma oferta';
$string['offersdetail:zero'] = 'Vá ao centro de trocas para iniciar uma negociação ou espere que alguém lhe ofereça uma troca.';
$string['participantswithitem'] = 'Participantes com este item';
$string['pickupa'] = 'Pegar "{$a}"';
$string['pickupinterval'] = 'Intervalo de coleta';
$string['pickupinterval_help'] = 'Isto define o tempo necessário para que o item reapareça para estudantes que já pegaram este item. Por exemplo, se você criou um item \'biscoito\', você pode definir o intervalo de coleta para 24 horas para simular o tempo que leva para o padeiro assar outro. É importante notar que estudantes não são afetados pela coleta de outros estudantes. Esta configuração não tem efeito quando \'';
$string['pluginname'] = 'Esconderijo';
$string['previous'] = 'Prévio';
$string['privacy:metadata:pickup'] = 'Um registro dos itens coletados em um determinado local.';
$string['privacy:metadata:pickup:dropid'] = 'O ID do local.';
$string['privacy:metadata:pickup:lastpickup'] = 'O momento em que ocorreu a última coleta.';
$string['privacy:metadata:pickup:pickupcount'] = 'A quantidade coletada naquele local.';
$string['privacy:metadata:pickup:timecreated'] = 'A hora em que o registro foi criado.';
$string['privacy:metadata:pickup:timemodified'] = 'O momento em que o registro foi modificado pela última vez.';
$string['privacy:metadata:pickup:userid'] = 'O ID do participante que fez a retirada.';
$string['privacy:metadata:swap'] = 'Um registro de trocas entre participantes';
$string['privacy:metadata:swap:initiator'] = 'O participante que fez uma oferta de troca';
$string['privacy:metadata:swap:message'] = 'Uma mensagem relacionada à troca';
$string['privacy:metadata:swap:messageformat'] = 'Um formato em que a mensagem está';
$string['privacy:metadata:swap:receiver'] = 'O participante que está recebendo a oferta de troca';
$string['privacy:metadata:swap:stashid'] = 'A instância de esconderijo da qual esta troca faz parte';
$string['privacy:metadata:swap:status'] = 'O status da troca';
$string['privacy:metadata:swap:timecreated'] = 'O momento em que a oferta de troca foi feita';
$string['privacy:metadata:swap:timemodified'] = 'Qualquer momento que a oferta de troca for atualizada';
$string['privacy:metadata:useritem'] = 'Um registro dos itens pertencentes a um participante.';
$string['privacy:metadata:useritem:itemid'] = 'O ID do item.';
$string['privacy:metadata:useritem:quantity'] = 'A quantidade possuída.';
$string['privacy:metadata:useritem:timecreated'] = 'O momento em que o registro foi criado.';
$string['privacy:metadata:useritem:timemodified'] = 'O momento em que o registro foi modificado pela última vez.';
$string['privacy:metadata:useritem:userid'] = 'O ID do participante que possui o item.';
$string['quantity'] = 'Quantidade';
$string['quizitemsremoved'] = 'Os seguintes itens foram removidos:';
$string['quizname'] = 'Nome do desafio';
$string['quiznotenoughitems'] = 'Você não tem itens suficientes para responder este desafio. Você precisa dos seguintes itens:';
$string['quizremovalconfigured'] = 'Este desafio está <a href="{$a}">configurado</a> para remover itens do esconderijo.';
$string['reallydeletedrop'] = 'Você tem certeza de que quer deletar esta localização?';
$string['reallydeleteitem'] = 'Você tem certeza de que quer deletar este item?';
$string['reallyresetstashof'] = 'Você tem certeza de quer resetar completamente o esconderijo de {$a}?';
$string['received'] = 'Recebido';
$string['removalconfigurations'] = 'Configurações de remoção';
$string['removalexplanation'] = 'No momento, as remoções estão limitadas à tentativa da atividade de desafio. Os itens listados para remoção serão excluídos sempre que um estudante iniciar uma nova tentativa. O acesso será negado se o estudante não tiver itens listados em quantidade suficiente.';
$string['removals'] = 'Remoções';
$string['removeswapdetails'] = 'Deseja excluir os detalhes desta troca?';
$string['report'] = 'Relatório';
$string['reportadditional'] = 'Gerenciamento avançado de itens de participante';
$string['requestdetail'] = 'Este estudante solicitou a seguinte troca.';
$string['requesteditems'] = 'Itens solicitados';
$string['requestsent'] = 'A solicitação foi enviada.';
$string['requestsforme'] = 'Solicitações para mim';
$string['requestswap'] = 'Faça uma oferta';
$string['resetstashof'] = 'Resetar o esconderijo de {$a}';
$string['saveandnext'] = 'Salvar e próximo';
$string['savechanges'] = 'Salvar alterações';
$string['savequantity'] = 'Salve a quantidade do item {$a}';
$string['scarceitem'] = 'Item escasso';
$string['scarceitem_help'] = 'Apenas uma quantidade limitada deste item está disponível. Se você limitar este item a 5, existirão apenas cinco itens neste curso.';
$string['searchitems'] = 'Pesquisar itens';
$string['selectanitem'] = 'Selecione um item';
$string['selectauser'] = 'Selecione um participante';
$string['selectquiz'] = 'Desafio';
$string['selectquizcheck'] = 'Por favor selecione um desafio';
$string['sendtraderequest'] = 'Enviar solicitação de troca';
$string['sent'] = 'Enviado';
$string['settings'] = 'Configurações';
$string['settingupdated'] = 'Configuração atualizada';
$string['setup'] = 'Configurar';
$string['shortcode:stashdrop'] = 'Exibe um item para um participante retirar';
$string['shortcode:stashtrade'] = 'Exibe o painel de troca';
$string['snippet'] = 'Trecho de código';
$string['stash'] = 'Esconderijo';
$string['stash:acquireitems'] = 'Participante é capaz de adquirir itens';
$string['stash:addinstance'] = 'Adicionar o bloco a uma página';
$string['stash:view'] = 'Visualizar o esconderijo e seu conteúdo';
$string['stashdisabled'] = 'O esconderijo não está habilitado. O bloco foi adicionado ao curso?';
$string['swapnolongerpossible'] = 'Esta oferta não é mais possível, provavelmente porque você ou o participante não possuem mais esses itens.';
$string['text'] = 'Texto';
$string['thedrophasbeendeleted'] = 'A localização "{$a}" foi excluída';
$string['theiritems'] = 'Itens dos outros';
$string['theitemhasbeendeleted'] = 'O item "{$a}" foi excluído';
$string['thestashofhasbeenreset'] = 'O esconderijo de {$a} foi resetado';
$string['thetradehasbeendeleted'] = 'O painel de troca \'{$a}\' foi excluído';
$string['thetradeitemhasbeendeleted'] = 'O item de troca foi excluído';
$string['tidyswap'] = 'Remova todas as solicitações de troca que foram concluídas.';
$string['title'] = 'Título';
$string['to'] = 'para';
$string['trade'] = 'Troca';
$string['tradecenter'] = 'Centro de trocas';
$string['tradecenter:zero'] = 'Selecione um item ou participante acima';
$string['tradecenterdetail:zero'] = 'Encontrar um item lhe dará uma lista de participantes com esses itens para iniciar uma negociação de troca. Selecionar um participante mostrará uma lista de seus itens para negociar.';
$string['tradecreated'] = 'Negociação de troca criada \'{$a}\'';
$string['tradedetails'] = 'Detalhes da troca';
$string['tradeitem'] = 'Item de troca';
$string['tradeitems'] = 'Itens de troca';
$string['tradelist'] = 'Lista de painéis de troca';
$string['tradename'] = 'Nome da troca';
$string['tradename_help'] = 'O nome do painel de troca, que pode ser exibido aos estudantes.';
$string['tradesnotenabled'] = 'As trocas não estão habilitadas';
$string['tradestatusapproved'] = 'Troca aprovada';
$string['tradestatuscompleted'] = 'Troca completada';
$string['tradestatusdeclined'] = 'Troca declinada';
$string['tradestatusviewed'] = 'Troca visualizada';
$string['tradewidget'] = 'Criando uma troca.';
$string['tradewidget_help'] = '<p>Este painel de troca permite ganhar itens da coluna esquerda em troca de perder itens na coluna direita.</p><p>Clique no símbolo + na parte inferior da caixa para adicionar itens à coluna.</p><p>A quantidade de um item deve ser um número positivo.</p>';
$string['unlimited'] = 'Ilimitado';
$string['useritemswap'] = 'Permitir que os estudantes troquem itens entre si.';
$string['view'] = 'Visualizar';
$string['whataredrops'] = 'O que são localizações?';
$string['whatisadrophelp'] = 'Uma localização é um local onde você pretende exibir seu item.';
$string['whatisatradedrophelp'] = 'Um local é onde você pretende exibir seu painel de troca.';
$string['whatisthisthing'] = 'O que é isto? Estou certo que você pode achar um uso para ele!';
$string['whatsnext'] = 'Qual é o próximo?';
$string['whatsthis'] = 'O que é isto?';
$string['yourinventoryisempty'] = 'Seu inventário está vazio.';
