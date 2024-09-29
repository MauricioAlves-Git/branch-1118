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
 * Strings for component 'tiny_multilang2', language 'pt_br', version '4.1'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlanguage'] = 'Adicionar idioma manualmente';
$string['addlanguage_desc'] = 'Se você escolher esta opção, pode adicionar idiomas manualmente inserindo o código iso do idioma na caixa de texto abaixo. Caso contrário, você deve instalar pelo menos 2 idiomas no Pacote de Idiomas.';
$string['helplinktext'] = 'Conteúdo Multilíngue (v2)';
$string['highlight'] = 'Destacar delimitadores';
$string['highlight_desc'] = 'Destacar visualmente os delimitadores de conteúdo multilíngue (ou seja, {mlang XX} e {mlang}) no editor WYSIWYG';
$string['highlightcss'] = 'CSS para tag de idioma';
$string['highlightcss_desc'] = 'CSS usado para destacar os delimitadores de conteúdo multilíngue.

Se você quiser exibir o idioma para os blocos multilíngues, pode usar algo como o seguinte (este exemplo é para a língua basca, as cores provavelmente não são as melhores):

<pre>
.multilang-begin:lang(eu):before {
    content: "eu";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['language_options_desc'] = 'Selecione opções para o menu suspenso do botão de idioma.
                             <br>A lista completa está disponível em <small><a href="https://www.w3schools.com/tags/ref_language_codes.asp">
                             <u>https://www.w3schools.com/tags/ref_language_codes.asp</u></a></small>';
$string['language_setting'] = 'Configurações do botão de idioma';
$string['languageoptions'] = 'Idioma';
$string['multilang2:desc'] = 'Adicionar tags multilíngues para conteúdo.';
$string['multilang2:langTagsInSelection'] = 'O texto selecionado contém tags de idioma. Por favor, clique em uma tag para selecioná-la.';
$string['multilang2:language'] = 'Idioma';
$string['multilang2:multiBlockElements'] = 'O texto selecionado tem vários parágrafos/elementos de bloco. Por favor, selecione apenas um.';
$string['multilang2:other'] = 'Alternativa';
$string['multilang2:removetag'] = 'Remover tag de idioma';
$string['multilang2:viewlanguagemenu'] = 'Ver menu suspenso de idiomas no editor TinyMCE';
$string['pluginname'] = 'Conteúdo Multilíngue (v2)';
$string['privacy:metadata'] = 'O plugin Tiny Multi-Language Content (v2) não armazena nenhum dado pessoal.';
$string['removealltags'] = 'Remover todas as tags de idioma';
$string['requiremultilang2'] = 'Requer filtro de Conteúdo Multilíngue (v2)';
$string['requiremultilang2_desc'] = 'Se habilitado, o menu suspenso de idiomas será visível apenas quando o filtro de Conteúdo Multilíngue (v2) estiver habilitado.';
$string['showalllangs'] = 'Mostrar todos os idiomas';
$string['showalllangs_desc'] = 'Se habilitado, o menu suspenso de idiomas conterá todos os idiomas suportados pelo Moodle. Caso contrário, apenas os idiomas instalados e habilitados serão exibidos.';
