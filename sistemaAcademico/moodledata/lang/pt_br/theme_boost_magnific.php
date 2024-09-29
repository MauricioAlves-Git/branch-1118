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
 * Strings for component 'theme_boost_magnific', language 'pt_br', version '4.1'.
 *
 * @package     theme_boost_magnific
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acessar'] = 'Acessar Curso';
$string['background_color'] = 'Cor de fundo';
$string['background_color_desc'] = 'Cor de fundo do Topo e Rodapé!';
$string['background_color_random'] = 'Tema Randômico {$a}';
$string['choosereadme'] = 'O Boost Magnific é um tema cuidadosamente elaborado para adicionar cores vibrantes e uma atmosfera alegre ao Moodle.';
$string['contact_address'] = 'Endereço';
$string['contact_email'] = 'E-mail';
$string['contact_phone'] = 'Número de Telefone';
$string['content_pagefonts'] = 'Fontes Extras do Google';
$string['content_pagefonts_desc'] = 'Adicione aqui o link @import do Google para fontes extras.<br>Você pode colocar múltiplas importações.<br><a href="https://fonts.google.com/selection/embed" target="google">Código de Incorporação</a><br><img src="{$a}" style="max-width: 100%;width: 420px;">';
$string['content_type_default'] = 'Padrão do Moodle';
$string['content_type_empty'] = '(Nenhum conteúdo)';
$string['content_type_footer'] = 'Tipo de conteúdo para o rodapé';
$string['content_type_footer_desc'] = 'Selecione o tipo de conteúdo que deseja exibir no rodapé.';
$string['content_type_home'] = 'Tipo de conteúdo para a página inicial';
$string['content_type_home_desc'] = 'Selecione o tipo de conteúdo que deseja exibir na página inicial.';
$string['content_type_html'] = 'Página a ser criada com editor';
$string['continuar'] = 'Continuar estudando';
$string['countlesson'] = '{$a} lição';
$string['countlessons'] = '{$a} lições';
$string['customcss'] = 'CSS Customizados';
$string['customcss_desc'] = 'Quaisquer regras CSS que você adicionar a esta área de texto serão refletidas em todas as páginas, facilitando a personalização deste tema.';
$string['custommenuitems'] = 'Itens Personalizados do Menu Superior';
$string['custommenuitems_desc'] = 'Você pode criar um menu personalizado ao lado dos menus superiores. O menu raiz deve começar junto à borda e os submenus devem ser precedidos por um hífen (-). O número de hífens determina a profundidade do item. Assim, os itens com um único hífen aparecem em um submenu abaixo do item de nível superior anterior, e os itens com dois hífens aparecem em um submenu seguido do subitem.
O conteúdo de cada item do menu deve ser composto por até três elementos (<strong>label</strong> | <strong>url</strong> | <strong>tooltip</strong> | <strong>lang</strong>), cada um separado pelo caractere "|".
<ul>
<li><strong>label</strong>: Este é o texto que será exibido dentro do item de menu. Você deve especificar um rótulo para cada item do menu.</li>
<li><strong>url</strong>: Este é o URL para o qual o usuário será levado ao clicar no item de menu. Isso é opcional; se não fornecido, o item não será vinculado a nenhum lugar.<br>
Outros atributos, como "target", podem ser adicionados ao final do URL.</li>
<li><strong>tooltip</strong>: Se você fornecer um URL, também pode optar por fornecer uma dica de ferramenta para o link criado com o URL. Isso é opcional e, se não definido, o rótulo é usado como dica de ferramenta para o item de menu.</li>
<li><strong>lang</strong>: Você pode adicionar um código de idioma (ou uma lista de códigos separados por vírgula) como o quarto elemento da linha. A linha será exibida somente se o usuário tiver selecionado o idioma listado.</li>
</ul>
A seguir, um exemplo de como você criaria um menu personalizado:
<blockquote><pre>
Cursos
-Todos os cursos | /course/
-Meus cursos
--Curso de Exemplo
---Curso Exemplo 7 | /course/view.php?id=7
---Curso Exemplo 9 | /course/view.php?id=9
--Curso de Testes
---Curso Testes 2 | /course/view.php?id=2
---Curso Testes 5 | /course/view.php?id=5
Google
-Google em qualquer idioma | https://google.com/" target="_blank
-Google em Mexico | https://www.google.com.mx/" target="_blank|Label do Google|en
-Google em português | https://google.com.br/" target="_blank|Label do Google|pt,pt_br,pt_br_kids
Página de Suporte | https://suporte.com/" target="_blank
</pre></blockquote>
Para o Moodle com suporte a múltiplos idiomas, o valor do <strong>label</strong> deve ser montado no formato <strong>"langstringname,componentname"</strong>.
<blockquote><pre>
profile,moodle | /user/profile.php
messages,message | /message/index.php
</pre></blockquote>
<a href="https://docs.moodle.org/404/en/Advanced_theme_settings" target="_blank">Mais informações do menu</a>';
$string['editor_link_footer'] = 'Editar o bloco do rodapé para o idioma {$a}';
$string['editor_link_footer_all'] = 'Editar o bloco do rodapé para todos os idiomas';
$string['editor_link_home'] = 'Editar a página inicial para o idioma {$a}';
$string['editor_link_home_all'] = 'Editar a página inicial para todos os idiomas';
$string['favicon'] = 'Favicon';
$string['favicon_desc'] = 'O favicon é exibido ao lado do título da página na guia do navegador. Um favicon do Moodle é exibido se um favicon personalizado não for fornecido.';
$string['fontfamily'] = 'Fonte do site';
$string['fontfamily_desc'] = 'Escolha quanfonte você quer suar no seu Moodle';
$string['fontfamily_menus'] = 'Fontes do Menu';
$string['fontfamily_menus_desc'] = 'Escolha qual fonte deseja usar para os menus em seu site Moodle.';
$string['fontfamily_sitename'] = 'Fonte para o nome do site';
$string['fontfamily_sitename_desc'] = 'A fonte que será aplicada ao nome do site se um logotipo não for fornecido.';
$string['fontfamily_title'] = 'Fontes para Texto de Título';
$string['fontfamily_title_desc'] = 'Escolha qual fonte deseja usar para os títulos em seu site Moodle.';
$string['fontpreview'] = 'Prévia da Lista de Fontes';
$string['footer_contact_title'] = 'Título do Bloco de Contato';
$string['footer_contact_title_default'] = 'Entre em contato';
$string['footer_contact_title_desc'] = 'Coloque o título do Bloco que aparecerá no Rodapé com os dados de contato.';
$string['footer_description'] = 'Descrição';
$string['footer_description_desc'] = 'Descreva seu Moodle, o que você faz, e está informação será mostrada abaixo do logo no Rodapé do Moodle';
$string['footer_frontpage_blockcourses_instructor'] = 'Mostrar nome do Professor';
$string['footer_frontpage_blockcourses_instructor_desc'] = 'Se marcado, mostra os nomes dos professores na lista de cursos!';
$string['footer_frontpage_blockcourses_text'] = 'Texto curto explicando o bloco "{$a}"';
$string['footer_frontpage_blockcourses_text_desc'] = 'Adicone um texto falando dos "{$a}"!';
$string['footer_links_title'] = 'Título do Bloco dos Links';
$string['footer_links_title_default'] = 'Links importantes';
$string['footer_show_copywriter'] = 'Mostrar o Feito com ❤️';
$string['footer_show_copywriter_desc'] = 'Desmarque caso deseja ocultar o "Feito com ❤️"';
$string['footer_social_title'] = 'Título do Bloco das redes sociais Social';
$string['footer_social_title_default'] = 'Nos siga nas redes sociais';
$string['footer_social_title_desc'] = 'Coloque o título do Bloco que aparecerá no Rodapé com os dados de das suas redes sociais.';
$string['footerblink'] = 'Links do Bloco de Rodapé';
$string['footerblink_desc'] = 'Você pode configurar um Bloco de Rodapé Links aqui para serem mostrados por temas. <br>Cada linha consiste em algum texto de menu ou chave de idioma ou texto, um URL de link (opcional),separado por barras verticais.Por exemplo:<br><pre>Moodle Support|https://moodle.org/support</pre>';
$string['footerblock_contact'] = 'Bloco de contato';
$string['footerblock_copywriter'] = 'Feito com ❤️';
$string['footerblock_description'] = 'Bloco de descrição';
$string['footerblock_links'] = 'Bloco dos links';
$string['footerblock_social'] = 'Bloco do Social';
$string['free_name'] = 'Gratis';
$string['frontpage_about_description'] = 'Descreva o que vocês fazem';
$string['frontpage_about_description_desc'] = 'Descreva em no máximo 5 linhas qual a finalidade do seu Moodle';
$string['frontpage_about_enable'] = 'Habilitar bloco Sobre';
$string['frontpage_about_enable_desc'] = 'Se marcado, o Bloco sobre aparecerá abaixo do Banner!';
$string['frontpage_about_info'] = 'Caixa de dados {$a}';
$string['frontpage_about_logo'] = 'Logo diferente a ser mostrado aqui';
$string['frontpage_about_logo_desc'] = 'Se definido, será usado esta logo aqui, ao invés da logo do Topo.<br>
                                         Em branco usa a Logo do TOPO!';
$string['frontpage_about_number'] = 'Quantidade de dados';
$string['frontpage_about_number_desc'] = 'Coloque aqui a quantidade de informação acima citado';
$string['frontpage_about_text'] = 'Nome do dado';
$string['frontpage_about_text_1_defalt'] = 'Cursos';
$string['frontpage_about_text_2_defalt'] = 'Professores';
$string['frontpage_about_text_3_defalt'] = 'Estudantes';
$string['frontpage_about_text_4_defalt'] = 'Lições';
$string['frontpage_about_text_desc'] = 'Coloque aqui o nome do dado que será mostrado na home';
$string['frontpage_about_title'] = 'Título do bloco Sobre';
$string['frontpage_about_title_default'] = 'Nossa Comunidade Global';
$string['heart'] = 'Se está gostando desse tema, não esqueça de clicar em ❤️ na página dos themas <a href="{$a}" target="_blank">clicando aqui</a>';
$string['instructor'] = 'Professor';
$string['login_backgroundcolor'] = 'Cor de fundo';
$string['login_backgroundcolor_desc'] = 'Selecione a cor de fundo da página de recuperar senha';
$string['login_backgroundfoto'] = 'Imagem de fundo';
$string['login_backgroundfoto_desc'] = 'Selecione a imagem de fundo do Login/Recuperar Senha/Criar Conta. Imagem padrão é: {$a}';
$string['login_forgot_description'] = 'Texto na lateral da Tela de Recuperar Senha';
$string['login_forgot_description_desc'] = 'Texto que aparecerá apenas na tela de Recuperar Senha';
$string['login_login_description'] = 'Texto na lateral da Tela de Login';
$string['login_login_description_desc'] = 'Texto que aparecerá apenas na tela de Login';
$string['login_signup_description'] = 'Texto na lateral da Tela de Criar uma conta';
$string['login_signup_description_desc'] = 'Texto que aparecerá apenas na tela de Criar uma conta';
$string['login_theme'] = 'Tema do login';
$string['login_theme_block'] = 'Bloco branco central com background opcional';
$string['login_theme_desc'] = 'Escolha qual tema quer na área de Login';
$string['login_theme_image_login'] = 'Imagem de background e login do lado';
$string['login_theme_imagetext_login'] = 'Imagem de background, texto sobre a imagem e login do lado';
$string['login_theme_login'] = 'Apenas tela de login, sem imagem lateral';
$string['logo_color'] = 'Logo colorida';
$string['logo_color_desc'] = 'Por favor, faça o upload da sua LOGO colorida caso queira incluí-la no topo. Esta logo será exibida conforme a página é rolada, e o menu será exibido em fundo branco.';
$string['logo_write'] = 'Logo Branca';
$string['logo_write_desc'] = 'Por favor, faça o upload da sua LOGO branca caso queira incluí-la no topo. Esta logo será exibida quando a rolagem permanecer no topo, e o menu será exibido em fundo colorido.';
$string['matricular'] = 'Matricule-se';
$string['mycourses_color'] = 'Cor de Fundo do Bloco';
$string['mycourses_color_desc'] = 'A cor de fundo para o bloco.';
$string['mycourses_icon'] = 'Ícone';
$string['mycourses_icon_desc'] = 'Um ícone representativo para o bloco. O tamanho do ícone deve ser 48x48 pixels.';
$string['mycourses_info'] = 'Bloco {$a}';
$string['mycourses_numblocos'] = 'Sem blocos';
$string['mycourses_numblocos_desc'] = 'Quantas imagens você quer no SlideShow?';
$string['mycourses_numblocos_nenhum'] = 'Sem slides na página inicial';
$string['mycourses_title'] = 'Título Curto do Bloco';
$string['mycourses_title_desc'] = 'Um título curto e descritivo para o bloco.';
$string['mycourses_url'] = 'Link do Bloco';
$string['mycourses_url_desc'] = 'A URL para navegar ao clicar no bloco. Pode ser um link externo ou um link interno dentro da plataforma.';
$string['pluginname'] = 'Boost Magnific';
$string['privacy:metadata'] = 'O tema Boost Magnific não armazena nenhum dado pessoal sobre nenhum usuário.';
$string['settings_about_heading'] = 'Sobre seu Moodle';
$string['settings_css_heading'] = 'Fontes e CSS';
$string['settings_footer_heading'] = 'Bloco do Rodapé';
$string['settings_icons_block'] = 'Ícone {$a}';
$string['settings_icons_change_icons'] = 'Mudar o ícone padrão na lista de cursos';
$string['settings_icons_default_audio_file'] = 'Áudio';
$string['settings_icons_default_book'] = 'Livro';
$string['settings_icons_default_download'] = 'Download';
$string['settings_icons_default_game'] = 'Jogo';
$string['settings_icons_default_money'] = 'Financeiro';
$string['settings_icons_default_slide'] = 'Slides';
$string['settings_icons_default_support'] = 'Suporte';
$string['settings_icons_default_video_file'] = 'Vídeo';
$string['settings_icons_heading'] = 'Ícones';
$string['settings_icons_image'] = 'Imagem do ícone';
$string['settings_icons_image_desc'] = 'Carregue a imagem SVG ou PNG do ícone desejado para substituir no curso.<br>Tamanho recomendado: 24px. Se for PNG, lembre-se da transparência.';
$string['settings_icons_module_disable'] = 'A seleção de ícone personalizado está desativada. Ative em {$a}';
$string['settings_icons_name'] = 'Nome do ícone';
$string['settings_icons_name_desc'] = 'Adicione o nome do ícone para facilitar a seleção no módulo';
$string['settings_icons_none'] = 'Nenhum ícone personalizado';
$string['settings_icons_num'] = 'Número de ícones';
$string['settings_icons_num_desc'] = 'Quantidade de ícones personalizados que deseja adicionar';
$string['settings_icons_select_icon'] = 'Selecione o ícone personalizado. Edite em {$a}';
$string['settings_login_heading'] = 'Tela de Login';
$string['settings_mycourses_heading'] = 'Blocos dos Meus Cursos';
$string['settings_slideshow_heading'] = 'SlideShow';
$string['settings_theme_heading'] = 'Tema e CSS';
$string['settings_top_heading'] = 'Topo';
$string['sitefonts'] = 'Fontes Adicionais do Google';
$string['sitefonts_desc'] = 'Insira o código @import do Google Fonts conforme indicado na imagem abaixo. Após salvar, o campo "Fonte do Site" será atualizado, exibindo essas fontes. Você pode adicionar vários @import conforme necessário.';
$string['slidecaption_desc'] = 'Digite o texto da legenda a ser usado no slide';
$string['slideshow_image'] = 'Imagem do Slide';
$string['slideshow_image_desc'] = 'A imagem deve ter 1250px X 400px.';
$string['slideshow_info'] = 'Slide {$a}';
$string['slideshow_numslides'] = 'Quantos imagens no SlideShow';
$string['slideshow_numslides_desc'] = 'Quantas imagens queres no SlideShow?';
$string['slideshow_numslides_nenhum'] = 'Sem slide na Home';
$string['slideshow_text'] = 'Texto curto descritivo do Slide';
$string['slideshow_text_desc'] = 'Insira um pequenos textos sobre o slide.';
$string['slideshow_url'] = 'Link do botão dos slides';
$string['slideshow_url_desc'] = 'Insira o destino de destino do link do botão de imagem do slide';
$string['social_facebook'] = 'Seu Facebook';
$string['social_facebook_desc'] = 'A URL do Facebook da sua organização.';
$string['social_instagram'] = 'Seu Instagram';
$string['social_instagram_desc'] = 'A URL do Instagram da sua organização.';
$string['social_linkedin'] = 'Seu Linkedin';
$string['social_linkedin_desc'] = 'A URL do Linkedin da sua organização.';
$string['social_twitter'] = 'Seu Twitter';
$string['social_twitter_desc'] = 'A URL do Twitter da sua organização.';
$string['social_youtube'] = 'Seu Youtube';
$string['social_youtube_desc'] = 'A URL do Youtube da sua organização.';
$string['theme_boost_magnific_about_editbooton'] = 'Editar bloco Sobre';
$string['theme_boost_magnific_frontpage_bloco'] = 'Bloco "{$a}"';
$string['theme_boost_magnific_frontpage_home'] = 'Blocos da Home';
$string['theme_boost_magnific_mycourses_editbooton'] = 'Editar Blocos';
$string['theme_boost_magnific_slideshow_editbooton'] = 'Editar SlideShow';
$string['theme_color'] = 'Seleção de cores';
$string['theme_color-color_buttons'] = 'Cor dos Botões';
$string['theme_color-color_buttons_desc'] = 'A cor usada para os botões, adicionando coesão visual e enfatizando ações interativas.';
$string['theme_color-color_names'] = 'Cor dos Nomes';
$string['theme_color-color_names_desc'] = 'Cor usada para destacar nomes ou identificadores, fornecendo clareza e ênfase em informações de texto específicas.';
$string['theme_color-color_primary'] = 'Cor Primária';
$string['theme_color-color_primary_desc'] = 'A cor primária principal do tema, geralmente usada para elementos de destaque e ênfase.';
$string['theme_color-color_secondary'] = 'Cor Secundária';
$string['theme_color-color_secondary_desc'] = 'Uma cor secundária que complementa a cor primária, usada para realçar elementos secundários ou para contrastar com a cor primária.';
$string['theme_color-color_titles'] = 'Cor dos Títulos';
$string['theme_color-color_titles_desc'] = 'A cor utilizada para os títulos, fornecendo destaque e estrutura visual ao conteúdo da página.';
$string['theme_color_blue'] = 'Azul';
$string['theme_color_desc'] = 'Selecione as cores dos textos e botões do Moodle ou clique na linha abaixo:';
$string['theme_color_green'] = 'Verde';
$string['theme_color_green_d'] = 'Verde escuro';
$string['theme_color_heading'] = 'Seleção de cores do ambiente';
$string['theme_color_red_d'] = 'Vermelho';
$string['theme_color_sugestion'] = 'Sugestão de cor';
$string['theme_color_sugestion_text'] = 'Clique na linha para aplicar a cor nos campos abaixo:';
$string['theme_color_violet'] = 'Roxo';
$string['theme_login_branco'] = 'Apenas tela de login, sem imagem lateral, com o form em fundo branco';
$string['top_color_heading'] = 'Cor do topo ao rolar';
$string['top_scroll'] = 'Fixar o menu ao rolar a página';
$string['top_scroll_background_color'] = 'Cor de fundo do menu do topo ao rolar';
$string['top_scroll_background_color_desc'] = 'Defina a cor de fundo ao rolar a página.';
$string['top_scroll_desc'] = 'Quando ativado, o menu ficará fixo no topo da tela enquanto você rola a página, garantindo fácil acesso às opções do menu.';
$string['top_scroll_text_color'] = 'Cor do texto do menu ao rolar';
$string['top_scroll_text_color_desc'] = 'Defina a cor do texto do menu ao rolar a página.';
$string['vvveb_home_access'] = 'Acessar curso';
$string['vvveb_home_automatically_my_course'] = 'Não edite. Este bloco será substituído automaticamente pelos cursos em que o aluno está matriculado.';
$string['vvveb_home_mycourses_heading'] = 'Meus Cursos';
$string['vvveb_home_popular_course'] = 'Cursos Populares';
$string['vvveb_home_team_subtitle'] = 'Somos um grupo de profissionais dedicados ao seu trabalho';
$string['vvveb_home_team_title'] = 'Conheça Nossa Equipe';
