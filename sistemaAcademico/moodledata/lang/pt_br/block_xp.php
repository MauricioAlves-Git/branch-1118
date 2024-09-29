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
 * Strings for component 'block_xp', language 'pt_br', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activityname'] = 'Nome da atividade';
$string['activityname_help'] = 'O texto que o nome da atividade deve conter ou ser igual. Não é sensível a maiúsculas.';
$string['activityoresourceis'] = 'A atividade ou recurso é {$a}';
$string['addacondition'] = 'Adicione uma condição';
$string['addarule'] = 'Adicione uma regra';
$string['addinstructions'] = 'Adicionar mais informações';
$string['additionalresources'] = 'Recursos adicionais';
$string['addlevel'] = 'Adicionar nível';
$string['addoninstallationerror'] = 'Foi encontrado um problema com o complemento (local_xp), que parece não estar instalado corretamente. O administrador deve finalizar a instalação.';
$string['addonnotactivated'] = 'O recurso complementar não está ativado.';
$string['addrulesformhelp'] = 'A última coluna define a quantidade de pontos de experiência ganhos quando um critério é satisfeito.';
$string['admindefaultrulesintro'] = 'As regras a seguir serão utilizadas como padrão para cursos onde o bloco for adicionado.';
$string['admindefaultsettingsintro'] = 'As configurações abaixo serão utilizadas como padrão quando o bloco for adicionado novamente a um curso.';
$string['admindefaultvisualsintro'] = 'As configurações seguintes serão utilizadas como padrão quando o bloco for adicionado novamente a um curso.';
$string['adminscanearnxp'] = 'Os administradores podem ganhar pontos';
$string['adminscanearnxp_desc'] = 'Por padrão, os administradores não estão incluídos no grupo de usuários que podem ganhar pontos. Isso ocorre porque os administradores sempre têm a permissão _block/xp:earnxp_, permitindo que eles continuem a coletar pontos em todos os lugares. Você pode usar esta configuração para permitir que os administradores também ganhem pontos.';
$string['anonymity'] = 'Anonimato';
$string['anonymity_help'] = 'Esta configuração controla se os participantes podem ver o nome e o avatar uns dos outros.';
$string['apply'] = 'Aplicar';
$string['awardaxpwhen'] = '<strong>{$a}</strong> pontos de experiência são ganhos quando:';
$string['badgeaward'] = 'Emblema para conceder';
$string['badgeawarddesc'] = 'Um emblema para conceder quando o usuário atinge o nível.';
$string['basepoints'] = 'Pontos base';
$string['basepointslineardesc'] = 'O incremento mínimo entre cada nível.';
$string['basepointsrelativedesc'] = 'O número de pontos para começar.';
$string['basexp'] = 'Algoritmo base';
$string['blockappearance'] = 'Aparência do bloco';
$string['blockappearancemovedtopluginsettings'] = 'As configurações de aparência do bloco foram movidas para a página de configurações do plugin.';
$string['cachedef_filters'] = 'Filtros de nível';
$string['cachedef_ruleevent_eventslist'] = 'Lista de alguns eventos';
$string['cannotbesetindefaults'] = 'Isso não pode ser definido nos valores padrão.';
$string['cannotearnpoints'] = 'Não pode ganhar pontos.';
$string['cannotshowblockconfig'] = 'Normalmente mostro as configurações de aparência aqui, mas não consegui encontrar seu bloco. Para alterar a aparência do bloco, volte [aqui]({$a}) (ou onde você adicionou o bloco), ative o modo de edição e clique na opção "Configurar" na lista suspensa do bloco. Se você não conseguir encontrar o bloco, adicione-o novamente ao seu curso.';
$string['cannotshowblockconfigsys'] = 'Normalmente, mostro as configurações de aparência aqui, mas não consegui encontrar seu bloco. Pode estar faltando na
 [página inicial]({$a->fp}) e no [painel]({$a->mysys}) de seus usuários, ou presente em ambos. Para editar as configurações aqui, verifique se elas aparecem apenas em uma delas.';
$string['changecourse'] = 'Alterar curso';
$string['changelevelformhelp'] = 'Se você alterar o número de níveis, os emblemas personalizados de níveis serão temporariamente desabilitados para prevenir níveis sem emblemas. Se você alterar o número de níveis vá para a página \'Visuais\' para re-habilitar os emblemas personalizados uma vez que tenha salvo esse formulário.';
$string['changetocourse'] = 'Mudar para o curso';
$string['cheatguard'] = 'Proteção contra fraude';
$string['chooseacondition'] = 'Escolher uma condição';
$string['clearfilter'] = 'Limpar filtro';
$string['clicktoselectcm'] = 'Clique para selecionar uma atividade ou recurso';
$string['cmselector'] = 'Seletor de módulo de curso';
$string['coefxp'] = 'Coeficiente do algoritmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Verificação de compatibilidade';
$string['completionrules'] = 'Regras de conclusão';
$string['completionrulesintro'] = 'Atribua pontos aos alunos à medida que eles concluem atividades, seções ou cursos.';
$string['completionruleslegacyusednotice'] = 'Você tem "Regras de evento" existentes usando condições de conclusão. Recomendamos fortemente removê-las em favor dos métodos abaixo, pois usar "Regras de evento" e "Regras de conclusão" pode duplicar os pontos atribuídos.';
$string['condition'] = 'Condição';
$string['configblockrankingsnapshot'] = 'Exibir amostra do ranking';
$string['configblockrankingsnapshot_help'] = 'A amostra do ranking exibe a classificação do usuário. Ele também tentará exibir as duas pessoas ao redor do usuário. Esse recurso requer que a tabela de classificação seja ativada e suas classificações sejam exibidas.';
$string['configdescription'] = 'Introdução';
$string['configdescription_help'] = 'Uma pequena mensagem de introdução exibida no bloco. Os estudantes podem descartar a mensagem e, nesse caso, eles não a verão novamente.';
$string['configheader'] = 'Configurações';
$string['configrecentactivity'] = 'Mostrar recompensas recentes';
$string['configrecentactivity_help'] = 'Quando ativado, o bloco exibirá uma pequena lista de eventos recentes que recompensaram o estudante com pontos.';
$string['configtitle'] = 'Título';
$string['configtitle_help'] = 'O título do bloco';
$string['congratulationsyouleveledup'] = 'Parabéns!';
$string['coolthanks'] = 'Muito bom, obrigado!';
$string['coursea'] = 'Curso "{$a}"';
$string['courselog'] = 'Log do curso';
$string['coursereport'] = 'Relatório do curso';
$string['courserules'] = 'Regras do curso';
$string['courseselectedcolon'] = 'Curso selecionado:';
$string['coursesettings'] = 'Configurações do curso';
$string['coursevisuals'] = 'Visuais do curso';
$string['currencysign'] = 'Símbolo de pontos';
$string['currencysign_help'] = 'Com essa configuração, você pode alterar o significado dos pontos. Será exibido ao lado da quantidade de pontos que cada usuário possui, substituindo a referência a _pontos de experiência_.

Escolha um dos símbolos fornecidos ou faça o upload do seu próprio!';
$string['currencysignxp'] = 'XP (Pontos de Experiência)';
$string['customizelevels'] = 'Personalizar os níveis';
$string['dangerzone'] = 'Zona de perigo';
$string['defaultlevels'] = 'Níveis padrão';
$string['defaultrules'] = 'Regras padrão';
$string['defaultrulesformhelp'] = 'Essas são regras padrão fornecidas pelo plugin que atribuem pontos de experiência automaticamente e ignoram alguns eventos redundantes. Regras personalizadas têm precedência sobre elas.';
$string['defaultsettings'] = 'Configurações padrão';
$string['defaultvisuals'] = 'Aparência padrão';
$string['deletecondition'] = 'Condição de exclusão';
$string['deleterule'] = 'Regra de exclusão';
$string['description'] = 'Descrição';
$string['difference'] = 'Diferença';
$string['difficulty'] = 'Método de cálculo de pontos';
$string['difficultyflat'] = 'Igual';
$string['difficultyflatdesc'] = 'Todos os níveis exigem o mesmo número de pontos para serem alcançados.';
$string['difficultylinear'] = 'Crescente';
$string['difficultylineardesc'] = 'Os níveis demoram progressivamente mais para serem alcançados.';
$string['difficultylinearincrdesc'] = 'O número de pontos usado para a dificuldade progressiva.';
$string['difficultypointincrease'] = 'Aumento de pontos';
$string['difficultyrelative'] = 'Bola de neve';
$string['difficultyrelativedesc'] = 'Os níveis se tornam exponencialmente mais difíceis de alcançar.';
$string['difficultyrelativeincrdesc'] = 'A porcentagem de pontos a aumentar em relação ao nível anterior.';
$string['discoverlevelupplus'] = 'Descubra o Level Up XP+';
$string['dismissnotice'] = 'Ignorar aviso';
$string['displayeveryone'] = 'Exibir todos';
$string['displaynneighbours'] = 'Exibir {$a} vizinhos';
$string['displayoneneigbour'] = 'Exibir um vizinho';
$string['displayparticipantsidentity'] = 'Exibir a identidade dos participantes';
$string['displayrank'] = 'Mostrar classificação';
$string['displayrelativerank'] = 'Mostrar uma classificação relativa';
$string['documentation'] = 'Documentação';
$string['drops'] = 'Drops';
$string['drops_help'] = 'Em jogos de vídeo, alguns personagens podem _dropar_ itens ou pontos de experiência no chão para o jogador pegar. Esses itens e pontos são comumente chamados de drops.

No Level Up XP, drops são códigos curtos (por exemplo, `[xpdrop abcdef]`) que um instrutor pode colocar no conteúdo regular do Moodle. Quando encontrados por um usuário, esses drops serão _pegos_ e uma certa quantidade de pontos será concedida.

Atualmente, drops são invisíveis para o usuário e concedem pontos passivamente na primeira vez que são encontrados.

Drops podem ser usados para conceder pontos de forma inteligente quando certo tipo de conteúdo é consumido por um estudante. Aqui estão algumas ideias:

- Coloque um drop no feedback de uma prova visível apenas para notas perfeitas.
- Coloque um drop em conteúdo profundo para recompensar sua leitura.
- Coloque um drop em uma discussão interessante no fórum.
- Coloque um drop em uma página de uma lição difícil de ser alcançada.

[Mais informações](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Drops são trechos de código colocados diretamente no conteúdo que concedem pontos quando encontrados por um usuário.';
$string['editcondition'] = 'Editar condição';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**Atenção!** Você não está modificando as configurações atualmente ativas; em vez disso, está editando os valores padrão. Como o Level Up XP é usado em todo o site, sua intenção provavelmente é alterar as configurações em todo o site. [Navegue aqui]({$a->url}) para alterar essas configurações ou siga o link "Configurações" no bloco XP em si.';
$string['editinstructions'] = 'Editar informação';
$string['enablecheatguard'] = 'Ativar proteção contra fraude';
$string['enablecheatguard_help'] = 'A proteção contra fraude oferece um mecanismo simples e barato para evitar que os estudantes abusem do sistema usando técnicas óbvias, como atualizar a mesma página indefinidamente ou repetir a mesma ação repetidas vezes.

[Mais informação] (https://docs.levelup.plus/xp/docs/getting-started/cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = 'Habilitar a página de informações';
$string['enableinfos_help'] = 'Quando setado para \'Não\', os estudantes não serão capazes de ver a página de informações.';
$string['enableladder'] = 'Habilitar ranking';
$string['enableladder_help'] = 'Quando definido como "Não", os estudantes não poderão visualizar o ranking.';
$string['enablelevelupnotif'] = 'Habilitar notificações de mudança de nível';
$string['enablelevelupnotif_help'] = 'Quando setado para \'Sim\', os estudantes verão um popup parabenizando-os pelo novo nível alcançado.';
$string['enablelogging'] = 'Habilitar registros de log';
$string['enablexpgain'] = 'Habilitar ganho de pontos XP';
$string['enablexpgain_help'] = 'Quando definido como "Não", ninguém ganhará pontos no curso. Isso é útil para congelar os pontos ganhos ou para habilitá-lo em determinado momento.

Observe que isso também pode ser controlado com mais granularidade usando a capacidade _block/xp:earnxp_.';
$string['entersearchterm'] = 'Digite um termo de pesquisa';
$string['errorcontextcoursemismatchforwholesite'] = 'A URL desta página para o <em>Level Up XP</em> não corresponde à configuração atual do módulo. A configuração atual do <em>Level Up XP</em> determina que ele pode ser usado \'Em todo o site\'; no entanto, esta página espera que ele seja usado \'Por disciplina\'. Por favor, <a href="{$a->nexturl}">clique aqui</a> para acessar a página correta. Procure a configuração de administrador \'block_xp_context\' se pretender alterar esta definição.';
$string['errorcontextcoursemismatchpercourse'] = 'A URL desta página para o <em>Level Up XP</em> não corresponde à configuração atual do módulo. A configuração atual do <em>Level Up XP</em> determina que ele pode ser usado \'Por disciplina\'; no entanto, esta página espera que seja usado \'Em todo o site\'. Provavelmente, foi originado de um <em>bloco</em> que foi adicionado ao painel ou à primeira página em uma configuração diferente. O bloco precisará ser removido das últimas páginas e usado apenas em disciplinas individuais.';
$string['errorformvalues'] = 'Existem alguns erros nos valores do formulário, por favor, resolva-os.';
$string['errorlevelsincorrect'] = 'O número mínimo de níveis é 2';
$string['errornotalllevelsbadgesprovided'] = 'Nem todos os emblemas de níveis foram informados. Faltando: {$a}';
$string['errorunknownevent'] = 'Erro: evento desconhecido';
$string['errorunknownmodule'] = 'Erro: módulo desconhecido';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Os pontos necessários são menores ou iguais ao nível anterior.';
$string['event_user_leveledup'] = 'Usuário subiu de nível';
$string['eventis'] = 'O evento é {$a}';
$string['eventname'] = 'Nome do evento';
$string['eventproperty'] = 'Propriedades do evento';
$string['eventsrules'] = 'Regras de eventos';
$string['eventsrules_help'] = 'Este plugin utiliza eventos para atribuir pontos a ações realizadas pelos estudantes.
Você pode usar o formulário abaixo para adicionar suas próprias regras e modificar as padrões.

É aconselhável verificar a página de _Log_ do plugin para identificar quais eventos são acionados à medida que os estudantes realizam ações no curso.

Recursos adicionais:

- [Como são calculados os pontos de experiência?](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Solução de problemas de regras](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Monitorar as ações e atribuir pontos aos estudantes à medida que eles as realizam.';
$string['eventtime'] = 'Data do evento';
$string['filterbyuser'] = 'Filtrar por usuário';
$string['filterellipsis'] = 'Filtrar...';
$string['filtermodules'] = 'Módulos de filtro';
$string['for1day'] = 'Por um dia';
$string['for1month'] = 'Por um mês';
$string['for1week'] = 'Por uma semana';
$string['for3days'] = 'Por 3 dias';
$string['forever'] = 'Para sempre';
$string['forthewholesite'] = 'Para todo o site';
$string['give'] = 'dar';
$string['gotofullladder'] = 'Ir para o ranking completo';
$string['graderules'] = 'Regras de notas';
$string['graderules_help'] = 'Os estudantes ganharão tantos pontos quanto suas notas.
Uma nota de 5/10 e uma nota de 5/100 concederão ao estudante 5 pontos cada. Quando a nota de um estudante mudar várias vezes, ele ganhará pontos equivalentes à nota máxima recebida.
Os pontos nunca são retirados dos estudantes, e as notas negativas são ignoradas.

Exemplo: Alice envia uma tarefa e recebe a nota 40/100. No _Level Up XP_, Alice recebe 40 pontos como nota.
Alice tenta novamente sua tarefa, mas desta vez sua nota é reduzida para 25/100. Os pontos de Alice no _Level Up XP_ não mudam.
Para sua última tentativa, Alice pontua 60/100, ela ganha 20 pontos adicionais no _Level Up XP_, totalizando 60 pontos.

[Mais no _Level Up XP_ documentation](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'As regras de notas permitem que os usuários recebam pontos equivalentes às notas que recebem.';
$string['grid'] = 'Grade';
$string['hasbadgeaward'] = 'Emblema para conceder definido';
$string['hasdescription'] = 'Descrição definida';
$string['hasname'] = 'Nome definido';
$string['hasnobadgeaward'] = 'Sem emblema para conceder';
$string['hasnodescription'] = 'Sem descrição';
$string['hasnoname'] = 'Sem nome';
$string['hasnopopupmessage'] = 'Sem mensagem de popup';
$string['haspopupmessage'] = 'Mensagem de popup definida';
$string['hideparticipantsidentity'] = 'Ocultar identidade dos participantes';
$string['hiderank'] = 'Ocultar classificação';
$string['importpoints'] = 'Importar pontos';
$string['importpoints_help'] = 'A importação pode ser usada para _aumentar_ os pontos dos estudantes ou para _substituí-los_ pelo valor fornecido.

Observe que a importação __não__ usa o mesmo formato do relatório exportado. O formato necessário é descrito na [documentação](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help), onde um [arquivo de exemplo](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) está disponível.';
$string['importpointsintro'] = 'Importar pontos de um arquivo CSV e, opcionalmente, enviar uma mensagem ao destinatário.';
$string['incourses'] = 'Em cursos';
$string['ineffective'] = 'Ineficaz';
$string['infos'] = 'Informação';
$string['installed'] = 'Instalado';
$string['instructions'] = 'Mais Informações';
$string['invalidxp'] = 'Valores inválidos';
$string['keeplogs'] = 'Manter logs';
$string['ladder'] = 'Ranking';
$string['ladderadditionalcols'] = 'Colunas adicionais';
$string['ladderadditionalcols_help'] = 'Essa configuração determina quais colunas adicionais são exibidas no ranking. Pressione a tecla CTRL ou CMD enquanto clica para selecionar mais de uma coluna ou para desmarcar uma coluna selecionada.';
$string['ladderempty'] = 'O ranking está vazio, volte mais tarde!';
$string['learnmore'] = 'Saiba mais';
$string['level'] = 'Nível';
$string['levelbadges'] = 'Emblemas de nível';
$string['levelbadges_help'] = 'Faça o upload de imagens para substituir a aparência de níveis individuais.

Os arquivos devem ser nomeados [nível].[extensão do arquivo], por exemplo, 1.png, 2.jpg, etc.

Recomendamos imagens com tamanho de 100x100 pixels, em qualquer um dos seguintes tipos: GIF, JPEG, PNG e SVG.';
$string['levelbadgesformhelp'] = 'Nome dos arquivos [nivel].[extensão do arquivo], por exemplo: 1.png, 2.jpg, etc... O tamanho recomendado da imagem é 100x100.';
$string['levelcount'] = 'Quantidade de níveis';
$string['leveldesc'] = 'Descrição do nível';
$string['leveldesc_help'] = 'Uma descrição breve do nível, isto é exibido na pagina de informações junto com o próprio nível. Você pode utilizar isto para descrever uma recompensa para os estudantes que alcançam o nível, para incluir instruções de como atingir este nível, ou para descrever o nível de maneira divertida (por exemplo, _Diz-se que somente as almas mais destemidas conseguem atingir este nível_), etc.';
$string['leveldescriptiondesc'] = 'Uma breve descrição do nível, exibida para os estudantes na página de informações.';
$string['levelname'] = 'Nome do nível';
$string['levelname_help'] = 'Um nome de nível curto para exibição ao invés do padrão _Nível #1_, _Nível #2_, etc. que algumas vezes é exibido. Se você dar nome a alguns níveis, nós recomendamos que você dê nome a todos!';
$string['levelpointslength'] = 'Comprimento';
$string['levelpointsstart'] = 'Início';
$string['levels'] = 'Níveis';
$string['levelsappearance'] = 'Aparência dos níveis';
$string['levelssaved'] = 'Os níveis foram salvos.';
$string['levelswillbereset'] = 'Atenção! Ao salvar este formulário os níveis de todos serão recalculados!';
$string['levelup'] = 'Passou de nível!';
$string['levelupoptionsunavailableforlevelone'] = 'Opções relacionadas à obtenção do nível não estão disponíveis para o primeiro nível.';
$string['levelupplus'] = 'Level Up XP+';
$string['levelx'] = 'Nível #{$a}';
$string['likenotice'] = '<strong>Você gosta do plugin?</strong> Por favor, aguarde um momento para <a href="{$a->moodleorg}" target="_blank">adicioná-lo aos seus favoritos</a> em Moodle.org e <a href="{$a->github}" target="_blank">marque-o com uma estrela no GitHub</a>.';
$string['limitparticipants'] = 'Limite de participantes';
$string['limitparticipants_help'] = 'Esta configuração controla quem é exibido no placar. Vizinhos são os participantes classificados acima e abaixo do usuário atual. Por exemplo, ao escolher \'Exibir 2 vizinhos\', somente os dois participantes classificados diretamente acima e abaixo do usuário atual serão exibidos.';
$string['list'] = 'Lista';
$string['logging'] = 'Logging';
$string['manually'] = 'Manualmente';
$string['maxactionspertime'] = 'Max. ações no intervalo de tempo';
$string['maxactionspertime_help'] = 'O número máximo de ações que contarão para ganho de pontos de experiência durante o intervalo de tempo fornecido. Qualquer ação subsequente será ignorada. Quando este valor está vazio ou é igual a zero, não é aplicado.';
$string['maxlevelexcl'] = 'nível máximo!';
$string['menu'] = 'Menu';
$string['missing'] = 'Ausente';
$string['movecondition'] = 'Condição de movimento';
$string['moverule'] = 'Regra de movimento';
$string['name'] = 'Nome';
$string['namecontains'] = 'Contém "{$a}"';
$string['nameequalsto'] = 'É igual a "{$a}"';
$string['navbardisplay'] = 'Mostrar na barra de navegação';
$string['navbardisplay_desc'] = 'Quando ativado, o nível do usuário será exibido na barra de navegação superior. Se o plugin for usado "Por cursos", ele só aparecerá nos cursos. Observe que essa funcionalidade depende muito do tema e pode não funcionar bem, ou não funcionar de todo, com temas de terceiros. [Saiba mais](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navcompletionrules'] = 'Conclusão';
$string['navdrops'] = 'Drops';
$string['naveventrules'] = 'Regras de eventos';
$string['navgraderules'] = 'Regras de notas';
$string['navimport'] = 'Importar';
$string['navinfos'] = 'Informações';
$string['navladder'] = 'Ranking';
$string['navlevels'] = 'Níveis';
$string['navlevelssetup'] = 'Configuração';
$string['navlog'] = 'Log';
$string['navpoints'] = 'Pontos';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Relatório';
$string['navrules'] = 'Regras';
$string['navsettings'] = 'Configurações';
$string['navvisuals'] = 'Aparência';
$string['nextlevelin'] = 'próximo nível em';
$string['noconditionsyet'] = 'Ainda não há condições!';
$string['noconditionsyetintro'] = 'Comece adicionando uma condição.';
$string['nodescription'] = 'Sem descrição';
$string['noissuesidentified'] = 'Nenhum problema identificado';
$string['nologsrecordedyet'] = 'Os logs ainda não foram registrados.';
$string['noname'] = 'Sem nome';
$string['noneareavailable'] = 'Nenhuma está disponível.';
$string['notecompatibilityissues'] = 'Observe os problemas de compatibilidade identificados abaixo:';
$string['notesomesettingslocked'] = 'Observe que algumas configurações podem não ser editáveis se forem bloqueadas por um administrador.';
$string['nothingmatchesfilter'] = 'Nada corresponde ao filtro.';
$string['numberoflevels'] = 'Número de níveis';
$string['occasionally'] = 'Ocasionalmente';
$string['outofsync'] = 'Fora de sincronia';
$string['outofsyncexcessive'] = 'Fora de sincronia excessiva';
$string['outofsyncexcessiveinfo'] = 'O XP+ é excessivamente mais antigo que o XP, o que pode levar a problemas inesperados. Para evitar mau funcionamento, o XP+ pode se desativar automaticamente no futuro.';
$string['outofsyncinfo'] = 'Os plugins XP não estão em conformidade entre si, o que pode causar problemas inesperados.';
$string['participant'] = 'Participante';
$string['participants'] = 'Participantes';
$string['participatetolevelup'] = 'Participe do curso para ganhar pontos de experiência e passar de nível!';
$string['perpagecolon'] = 'Por página:';
$string['pickaconditiontype'] = 'Escolha um tipo de condição';
$string['pluginavailabilityxpdesc'] = 'Este plugin permite que os professores restrinjam o acesso às atividades com base nos níveis dos alunos.';
$string['pluginenrolxpdesc'] = 'Este plugin permite a inscrição automática em cursos a partir do nível do aluno em outro curso.';
$string['pluginname'] = 'Level Up XP';
$string['pluginshortcodesdesc'] = 'Este plugin permite que os instrutores personalizem seu material incluindo elementos relacionados aos XP (pontos, nível, ranking…) no conteúdo, além de ocultar ou exibir itens com base no nível do aluno.';
$string['pluginsoutofsync'] = '__Os plugins não estão sincronizados!__

Isto significa que o _Level Up XP_ foi atualizado, mas o _Level Up XP+_ ainda não. Embora sejam feitas tentativas para evitar problemas, alguns recursos podem não funcionar corretamente, incluindo o próprio _Level Up XP_. Recomendamos que o _Level Up XP+_ seja atualizado para a última versão. [Leia mais]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Esta versão de {$a->name} ({$a->component}) pode ser incompatível com o Moodle {$a->version}.';
$string['pointsintimelinker'] = 'por';
$string['pointsperlevel'] = 'Pontos por nível';
$string['pointsrequired'] = 'Pontos requeridos';
$string['pointstoaward'] = 'Pontos a atribuir';
$string['pointstoaward_help'] = 'O número de pontos a ser atribuído quando a condição for atendida.';
$string['popupnotificationmessage'] = 'Mensagem de notificação de popup';
$string['popupnotificationmessagedesc'] = 'Mensagem opcional a ser exibida dentro da notificação de popup que parabeniza o usuário por atingir o nível.';
$string['potentialmoodleincompatibility'] = 'Possível incompatibilidade com o Moodle';
$string['previewpopupnotification'] = 'Visualizar notificação';
$string['privacy:metadata:log'] = 'Armazena um log de eventos';
$string['privacy:metadata:log:eventname'] = 'O nome do evento';
$string['privacy:metadata:log:time'] = 'A data em que aconteceu';
$string['privacy:metadata:log:userid'] = 'O usuário que ganhou os pontos';
$string['privacy:metadata:log:xp'] = 'Os pontos atribuídos para o evento';
$string['privacy:metadata:prefintro'] = 'Registra se o usuário descartou a introdução do bloco';
$string['privacy:metadata:prefladderpagesize'] = 'O tamanho de página preferido do usuário ao visualizar o ranking';
$string['privacy:metadata:preflevelup'] = 'Registra se o usuário deve ver a notificação de aumento de nível';
$string['privacy:metadata:prefnotices'] = 'Registra se o usuário fechou o aviso de suporte';
$string['privacy:metadata:prefseenpromo'] = 'Registra quando o usuário visualizou a página promocional';
$string['privacy:metadata:xp'] = 'Armazena os pontos e o nível dos usuários';
$string['privacy:metadata:xp:lvl'] = 'O nível do usuário';
$string['privacy:metadata:xp:userid'] = 'O usuário';
$string['privacy:metadata:xp:xp'] = 'Os pontos do usuário';
$string['privacy:path:addon'] = 'Add-on';
$string['privacy:path:level'] = 'Nível';
$string['privacy:path:logs'] = 'Logs';
$string['progress'] = 'Progresso';
$string['progressbar'] = 'Barra de progresso';
$string['promocheatguard'] = 'A proteção contra fraude não foi projetada para cobrir longos períodos de tempo . Por favor, considere atualizar para a versão <em>Level Up XP+</em>, a fim de desbloquear prazos maiores e outros recursos. <a href="{$a->url} ">Leia mais</a>.';
$string['promocontactintro'] = 'Contacte-nos para mais informações. Nós não mordemos e nós respondemos rapidamente!';
$string['promocontactus'] = 'Entrar em contato';
$string['promoemailusat'] = 'Nos envie um e-mail em _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = 'Ai! Não foi possível enviar a mensagem ... envie um e-mail diretamente para: {$a}. Obrigado!';
$string['promogetnow'] = 'Obtenha o XP+ agora!';
$string['promoifpreferemailusat'] = 'Psiu! Se preferir, envie-nos um e-mail diretamente para  _{$a}_.';
$string['promointro'] = 'Torne-se o mestre do jogo! Desbloqueie recursos adicionais e leve a gamificação a um novo nível com o Level Up XP+!';
$string['promointroinstalled'] = 'O plugin adicional _Level Up XP+_ está instalado no sistema e todos os recursos foram habilitados.';
$string['promorulesdidyouknow'] = 'Você sabia que com o <em>Level Up XP+</em> os estudantes podem receber pontos para <em>concluir os cursos</em> e <em>as atividades</em> ou, até mesmo, receber pontos de acordo com as suas <em>notas</em>? <a href="{$a->url}">Leia mais</a>.';
$string['promoyourmessagewassent'] = 'Obrigado, sua mensagem foi enviada. Nós entraremos em contato com você em breve';
$string['property:action'] = 'Ação do evento';
$string['property:component'] = 'Componente do evento';
$string['property:crud'] = 'CRUD do evento';
$string['property:eventname'] = 'Nome do evento';
$string['property:target'] = 'Alvo do evento';
$string['questreleasenotice'] = '🎉 Estamos animados em anunciar nosso **novo plugin de gamificação** chamado **Level Up Quest** 🥳. Transforme seus cursos em **aventuras emocionantes**, cheias de **estratégias de reengajamento** e **celebrações** 🤯! Confira [o site da Quest]({$a->questurl}) e nosso [post de lançamento aqui]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Edição rápida de pontos';
$string['rank'] = 'Classificação';
$string['ranking'] = 'Ranking';
$string['ranking_help'] = 'A classificação é a posição absoluta do usuário atual no ranking. A classificação relativa é a diferença dos pontos de experiência entre um usuário e seus vizinhos.';
$string['reallydeleteuserstate'] = 'Excluir um usuário é útil apenas para removê-lo do ranking. Para outras razões, nós recomendamos definir seus pontos para 0. Note que excluí-los não o impede de ganhar pontos no futuro.

Importante! Quando utilizar o _Level Up XP_ para todo o site, excluir usuários fará com que eles desapareçam do relatório e não será possível atribuir pontos a eles. Entretanto, se você estiver usando o _Level Up XP_ para cursos específicos, o estudante ainda pode aparecer no relatório se estiver inscrito no curso.

Você realmente deseja excluir os pontos deste usuário?';
$string['reallydeleteuserstateandlogs'] = 'A exclusão de um usuário o remove do ranking e exclui todos os logs associados.

A exclusão de logs pode permitir que um usuário ganhe novamente pontos por ações anteriores. Se sua intenção é apenas redefinir seus pontos, recomendamos definir seus pontos como 0. Observe que excluir um usuário não afeta sua capacidade de ganhar pontos no futuro.

É importante ressaltar que, ao usar _Level Up XP_ para todo o site, excluí-los os fará desaparecer do relatório, caso em que você não poderá reatribuir pontos a eles. No entanto, se você estiver usando _Level Up XP_ por curso, o estudante ainda poderá aparecer no relatório se estiver matriculado no curso.

Deseja mesmo deletar os pontos e logs deste usuário?';
$string['reallyresetallcourselevelstodefaults'] = 'Deseja realmente redefinir TODOS os níveis dos cursos para os níveis padrão? Esta ação não é reversível.';
$string['reallyresetallcoursestodefaults'] = 'Você deseja realmente redefinir todas as regras de cursos para as regras padrão? Esta ação não pode ser desfeita.';
$string['reallyresetallcoursevisualstodefaults'] = 'Deseja realmente redefinir TODA a aparência dos níveis dos cursos para a aparência padrão? Esta ação não é reversível.';
$string['reallyresetcourselevelstodefaults'] = 'Realmente redefinir os níveis do curso para os níveis padrão? Esta ação não pode ser desfeita.';
$string['reallyresetcourserulestodefaults'] = 'Você deseja realmente redefinir todas as regras de cursos para as regras padrão? Esta ação não pode ser desfeita.';
$string['reallyresetcoursevisualstodefaults'] = 'Realmente redefinir a aparência dos níveis do curso para a aparência padrão? Esta ação não pode ser desfeita.';
$string['reallyresetdata'] = 'Deseja realmente zerar os níveis e pontos de todos neste curso?';
$string['reallyresetgroupdata'] = 'Deseja realmente zerar os níveis e pontos  para todos neste grupo?';
$string['reallyreverttopluginsdefaults'] = 'Deseja realmente redefinir as regras padrão para os parâmetros sugeridos pelo plugin? Esta ação não pode ser desfeita.';
$string['recentrewards'] = 'Recompensas recentes';
$string['recommended'] = 'Recomendado';
$string['recommendedplugins'] = 'Plugins recomendados';
$string['releasenotes'] = 'Notas da versão';
$string['remaining'] = 'restante(s)';
$string['removefilter'] = 'Remover filtro';
$string['reportisempty'] = 'O relatório está vazio. Os esstudantes ainda irão ganhar pontos.';
$string['reportisemptyenrolstudents'] = 'O relatório está vazio. Há estudantes inscritos neste curso?';
$string['requires'] = 'Requer';
$string['resetallcoursestodefaults'] = 'Redefinir todos os cursos para o padrão';
$string['resetallcoursestodefaultsintro'] = 'Clique no botão abaixo para redefinir todos os cursos para o padrão acima';
$string['resetcoursedata'] = 'Resetar os dados do curso';
$string['resetcourserulestodefaults'] = 'Redefinir as regras do curso para o padrão';
$string['resetgroupdata'] = 'Redefinir as informações do grupo';
$string['resetlevelstodefaults'] = 'Redefinir níveis para padrões';
$string['resetvisualstodefaults'] = 'Redefinir aparência para padrões';
$string['resultsfilteredforn'] = 'Resultados filtrados por {$a}.';
$string['reverttopluginsdefaults'] = 'Redefinir para os padrões do plugin';
$string['reverttopluginsdefaultsintro'] = 'Use o botão abaixo se desejar reverter os parâmetros acima para os padrões do plugin. Isto não afeta as regras dos cursos existentes';
$string['reward'] = 'Recompensa';
$string['rule'] = 'Regra';
$string['rule:contains'] = 'contêm';
$string['rule:eq'] = 'é igual a';
$string['rule:eqs'] = 'é estritamente igual a';
$string['rule:gt'] = 'é maior que';
$string['rule:gte'] = 'é maior ou igual a';
$string['rule:lt'] = 'é menor que';
$string['rule:lte'] = 'é menor ou igual a';
$string['rule:regex'] = 'corresponde ao regex';
$string['ruleadded'] = 'A condição foi adicionada.';
$string['rulecm'] = 'Atividade ou recurso';
$string['rulecm_help'] = 'Essa condição é atendida quando o evento ocorre na atividade ou recurso especificado.';
$string['rulecmdesc'] = 'A atividade ou recurso é \'{$a->contextname}\'.';
$string['rulecmdescwithcourse'] = 'A atividade ou recurso é: \'{$a->contextname}\' em \'{$a->coursename}\'.';
$string['rulecminfo'] = 'Essa condição exige que a ação ocorra em uma atividade específica.';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'O evento é \'{$a->eventname}\'';
$string['ruleeventinfo'] = 'Escolha a ação que os usuários devem executar na lista de eventos selecionados.';
$string['rulefiltercm'] = 'Atividade específica';
$string['rulefiltercmname'] = 'Nome da atividade';
$string['rulefiltercmnamedesc'] = 'Condição baseada no nome da atividade.';
$string['rulefilternone'] = 'Nada';
$string['rulefiltersection'] = 'Seção específica';
$string['rulefilterthiscourse'] = 'Este curso';
$string['ruleproperty'] = 'Propriedades do evento';
$string['rulepropertydesc'] = 'A propriedade \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rulepropertyinfo'] = 'Esta condição é para usuários avançados, com conhecimento técnico sobre os eventos do Moodle e suas propriedades.';
$string['ruleset'] = 'Conjunto de condições';
$string['ruleset:all'] = 'TODAS as condições são verdadeiras';
$string['ruleset:any'] = 'Quaisquer das condições são verdadeiras';
$string['ruleset:none'] = 'Nenhuma das condições é verdadeira';
$string['rulesetinfo'] = 'Combinar várias condições em uma.';
$string['rulesformhelp'] = '<p>Este plugin é feito usando os eventos para atribuir pontos por ações executadas pelos estudantes. Você pode usar o formulário abaixo para adicionar suas próprias regras e visualizar as padrões.</p>
<p>É aconselhável verificar o <a href="{$a->log}">log</a> do plugin para identificar quais eventos são disparados conforme você executa ações no curso, e também ler mais sobre esses eventos: <a href="{$a->list}">lista de todos os eventos</a>, <a href="{$a->doc}">documentação para desenvolvedores</a>.</p>
<p>Finalmente, por favor, note que o plugin sempre ignora:
<ul>
    <li>Ações executadas por administradores, visitantes ou usuários não logados.</li>
    <li>Ações executadas por usuários que não tem a capacidade <em>block/xp:earnxp</em>.</li>
    <li>Ações repetidas em um curto espaço de tempo, para prevenir trapaças.</li>
    <li>E os eventos que o nível educacional não é igual a <em>Participar</em>.</li>
</ul>
</p>';
$string['rulesscope'] = 'Escopo';
$string['ruletypecmcompletion'] = 'Conclusão da atividade';
$string['ruletypecmcompletiondesc'] = 'Conceder pontos quando uma atividade for marcada como concluída.';
$string['ruletypecoursecompletion'] = 'Conclusão do curso';
$string['ruletypecoursecompletiondesc'] = 'Conceder pontos quando um curso for marcado como concluído.';
$string['ruletypesectioncompletion'] = 'Conclusão da seção';
$string['ruletypesectioncompletiondesc'] = 'Conceder pontos quando uma seção do curso for marcada como concluída.';
$string['searchandselectcourse'] = 'Pesquise e selecione um curso';
$string['searchandselectmodule'] = 'Pesquise e selecione uma atividade ou recurso';
$string['selectcourse'] = 'Selecionar curso';
$string['send'] = 'Enviar';
$string['setpoints'] = 'Definir pontos';
$string['shortcode:xpbadge'] = 'O emblema que corresponde ao nível do usuário atual';
$string['shortcode:xpiflevel'] = 'Exibe o conteúdo quando o nível atual do usuário corresponde.';
$string['shortcode:xpiflevel_help'] = 'Consulte os exemplos abaixo para formatar este shortcode. Quando um nível é estritamente especificado, o conteúdo será exibido independentemente das outras regras. As regras _maior que_ and _menor que_ devem corresponder ao conteúdo a ser exibido. Tenha cuidado pois isso pode, às vezes, resultar em conteúdo nunca exibido! Observe que os professores ou usuários com recursos de edição, sempre verão tudo.

```
[xpiflevel 1 3 5]
    Exibido se o nível do usuário for exatamente 1, 3 ou 5.
[/xpiflevel]

[xpiflevel >3]
    Exibido se o nível do usuário for maior que 3.
[/xpiflevel]

[xpiflevel >=3]
    Exibido se o nível do usuário for maior ou igual a 3.
[/xpiflevel]

[xpiflevel >=10 <20 30]
    Exibido se o nível do usuário for maior ou igual a 10 E é estritamente menor que 20  OU é exatamente igual a 30.
[/xpiflevel]

[xpiflevel <=10 >=20]
    Nunca exibido porque o nível do usuário nunca pode ser menor ou igual a 10 E mais ou igual a 20.
[/xpiflevel]
```

Note que estes códigos de acesso NÃO PODEM ser aninhados uns dentro dos outros.';
$string['shortcode:xpladder'] = 'Exibir uma parte da tabela de classificação.';
$string['shortcode:xpladder_help'] = 'Por padrão, uma parte do ranking próxima do usuário será exibida.

```
[xpladder]
```

Para exibir os 10 primeiros estudantes ao invés dos vizinhos do usuário, insira o parâmetro `top`. Você pode também setar o número de usuários que você gostaria de exibir, como `top=20`.

```
[xpladder top]
[xpladder top=15]
```

Um link para o ranking todo será automaticamente exibido abaixo da tabela. Se você não quiser que o link apareça, adicione o argumento `hidelink`.

```
[xpladder hidelink]
```

Por padrão, a tabela não inclui a coluna de progresso, que mostra a barra de progresso. Se essa coluna foi selecionada nas colunas adicionais dentro das configurações do ranking, você pode utilizar o argurmento `withprogress` para exibi-la.

```
[xpladder withprogress]
```

Note que quando um curso utiliza grupos, o ranking vai fazer o malhor chute de qual grupo exibir o ranking.';
$string['shortcode:xplevelname'] = 'Mostrar o nome do nível';
$string['shortcode:xplevelname_help'] = 'Por padrão, é exibido o nome do nível atual do usuário.
Outra opção é usar o argumento \'level\' para exibir o nome de um nível específico.

`` ``
[xplevelname]
[xplevelname level = 5]
`` ``

Se o argumento \'level\' for indicado e o nível não existir, nada será exibido.';
$string['shortcode:xppoints'] = 'Exibe um número de pontos formatados como pontos de experiência.';
$string['shortcode:xppoints_help'] = 'Por padrão, isso mostra o número de pontos do usuário atual. Alternativamente, você pode especificar um número para substituir esse valor.

A formatação dos pontos dependerá se um valor arbitrário é exibido ou os pontos do usuário atual. O argumento `plain` pode ser usado para remover qualquer formatação.

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = 'Barra de progresso do usuário atual para o próximo nível.';
$string['sitewide'] = 'Sitewide';
$string['somefeaturesrequireotherplugins'] = 'Alguns recursos requerem a instalação de plugins adicionais.';
$string['someoneelse'] = 'Outra pessoa';
$string['somethinghappened'] = 'Algo aconteceu';
$string['taskcollectionloggerpurge'] = 'Limpar registros de log';
$string['taskusagereport'] = 'Relatório de uso';
$string['thankyou'] = 'Obrigado!';
$string['timebetweensameactions'] = 'Tempo requerido entre ações idênticas';
$string['timebetweensameactions_help'] = 'O tempo mínimo necessário antes que uma ação que já ocorreu anteriormente seja aceita novamente. Uma ação é considerada idêntica se foi realizada no mesmo contexto e objeto; ler uma postagem no fórum será considerado idêntico se a mesma postagem for lida novamente. Quando esse valor está vazio ou igual a zero, ele não se aplica.';
$string['timeformaxactions'] = 'Intervalo de tempo para max. ações';
$string['timeformaxactions_help'] = 'O intervalo de tempo (em segundos) durante o qual o usuário não deve exceder um número máximo de ações.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'agora';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}semanas';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Total';
$string['tryme'] = 'Experimente';
$string['unavailable'] = 'Indisponível';
$string['unknownactivitya'] = 'Atividade desconhecida ({$a})';
$string['unknownbadgea'] = 'Distintivo desconhecido ({$a})';
$string['unknownconditiona'] = 'Condição desconhecida ({$a})';
$string['unknowneventa'] = 'Evento desconhecido ({$a})';
$string['unknownsectiona'] = 'Seção desconhecida ({$a})';
$string['unknowntypea'] = 'Tipo desconhecido ({$a})';
$string['unlockfeaturewithxpplus'] = 'Desbloqueie este recurso com XP+. <a href="{$a}">Saiba mais</a>';
$string['updateandpreview'] = 'Atualizar e visualizar';
$string['upgradingplugins'] = 'Atualizando os plugins';
$string['urlaccessdeprecated'] = 'O acesso através desta URL está obsoleto; por favor, atualize seus links.';
$string['usagereport'] = 'Compartilhar relatório de uso';
$string['usagereport_desc'] = 'Compartilhe periodicamente informações de uso anônimas com os desenvolvedores do plugin. Essas informações ajudarão a entender melhor como o plugin está sendo usado e influenciarão seu desenvolvimento. As informações compartilhadas contêm dados básicos sobre o site Moodle (URL, versão) e informações de uso sobre o plugin (número de usuários que ganham pontos, visão geral das configurações, regras usadas...).';
$string['usealgo'] = 'Usar o algoritmo';
$string['usecustomlevelbadges'] = 'Usar emblemas de níveis personalizados';
$string['usecustomlevelbadges_help'] = 'Quando setado para sim, você deve fornecer uma imagem para cada nível.';
$string['usingalgo'] = 'Usando algoritmo';
$string['value'] = 'Valor';
$string['valuessaved'] = 'Os valores foram salvos com sucesso.';
$string['viewas'] = 'Visualizar como';
$string['viewlogs'] = 'Ver logs';
$string['viewtheladder'] = 'Visualizar o ranking';
$string['visualsintro'] = 'Personalize a aparência dos níveis e o significado dos pontos.';
$string['wewillreplyat'] = 'Vamos responder em: _ {$a} _.';
$string['when'] = 'Quando';
$string['wherearexpused'] = 'Onde os pontos são usados?';
$string['wherearexpused_desc'] = 'Quando escolher \'Em cursos\', os pontos de experiência ganhos apenas serão computados no curso no qual o bloco foi adicionado. Quando escolher \'Para todo o site\', um usuário irá "subir de nível" em todo o site, ao invés de apenas por curso. Todas as experiências obtidas ao longo do site serão usadas.';
$string['whoops'] = 'Ooops!';
$string['xp'] = 'Pontos de experiência';
$string['xp:addinstance'] = 'Adicionar um novo bloco';
$string['xp:earnxp'] = 'Ganhando pontos';
$string['xp:manage'] = 'Gerenciar todos os aspectos dos pontos de experiência';
$string['xp:myaddinstance'] = 'Adicionar o bloco ao meu painel';
$string['xp:view'] = 'Visualizar o bloco e páginas relacionadas';
$string['xp:viewlogs'] = 'Acessar os logs';
$string['xp:viewreport'] = 'Ver o relatório';
$string['xpgaindisabled'] = 'Ganho de pontos desabilitado';
$string['xpplusrequired'] = 'XP+ necessário';
$string['xprequired'] = 'Pontos necessários';
$string['xptogo'] = '[[{$a}]] para ir';
$string['youleveledupexcl'] = 'Você subiu de nível!';
$string['youreachedlevel'] = 'Você alcançou o nível:';
$string['youreachedlevela'] = 'Você alcançou o nível {$a}!';
$string['yourmessage'] = 'Sua mensagem';
$string['yourownrules'] = 'Suas prórpias regras';
