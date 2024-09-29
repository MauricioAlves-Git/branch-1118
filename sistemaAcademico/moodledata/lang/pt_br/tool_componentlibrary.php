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
 * Strings for component 'tool_componentlibrary', language 'pt_br', version '4.1'.
 *
 * @package     tool_componentlibrary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['copied'] = 'Copiado!';
$string['copy'] = 'Copiar';
$string['copytoclipboard'] = 'Copiar para área de transferência';
$string['installer'] = '<h3>Configuração da biblioteca de componentes</h3>
    <p>Antes de poder ver o conteúdo da biblioteca de componentes, você precisará ter acesso ao shell à sua instalação do Moodle e ser capaz de gravar na pasta /admin/tool/componentlibrary e ter o npm instalado no seu servidor Moodle.</p>
    <p>Se você atender a esses requisitos, pode navegar até a pasta raiz do seu Moodle e executar:</p>
    <pre>$ npm install</pre>
    <pre>$ npm install grunt</pre>
    <p>Isso buscará todos os pacotes necessários para construir a documentação da biblioteca de componentes.</p>
    <p>Depois de instalados, você pode executar:</p>
    <pre>$ grunt componentlibrary</pre>
    <p>Para mais informações, consulte o arquivo README.md neste plugin.</p>';
$string['pluginname'] = 'Biblioteca de componentes de UI';
$string['privacy:metadata'] = 'O plugin da biblioteca de componentes não armazena nenhum dado pessoal.';
$string['runjsdoc'] = 'A documentação JavaScript é gerada separadamente da biblioteca de componentes. Para gerá-la, execute `grunt jsdoc`';
$string['showboth'] = 'Mostrar ambos';
$string['showdefault'] = 'Mostrar padrão';
$string['showhelp'] = 'Mostrar com ajuda';
$string['showmixed'] = 'Mostrar misturado';
$string['showrequired'] = 'Mostrar como obrigatório';
$string['toggleviewinfo'] = 'Alternar a visualização desta instância de formulário';
