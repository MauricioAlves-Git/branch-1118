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
 * Strings for component 'local_course_template', language 'pt_br', version '4.1'.
 *
 * @package     local_course_template
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_backups'] = 'Backups de modelos de curso';
$string['cachedef_templates'] = 'IDs de curso de modelo de curso';
$string['cleanuptask'] = 'Limpar backups de modelos de curso';
$string['copydates'] = 'Copiar datas de início e término';
$string['copydates_desc'] = 'Se ativado, as datas de início e término do curso modelo serão copiadas para o novo curso.';
$string['defaulttemplate'] = 'Nome breve do modelo de curso padrão';
$string['defaulttemplate_desc'] = 'Nome breve do modelo de curso padrão. Os cursos que não correspondem a um modelo utilizarão este, se existir.';
$string['enablecaching'] = 'Habilitar cache';
$string['enablecaching_desc'] = 'Quando o cache está ativado, o plugin criará um backup do curso modelo e, em seguida, reutilizará o backup para novos cursos até que o cache seja limpo ou o backup seja excluído.';
$string['event:template_copied:description'] = 'O curso modelo com id {$a->templateid} foi copiado para o curso com id {$a->courseid}';
$string['event:template_copied:name'] = 'Modelo de curso copiado';
$string['extracttermcode'] = 'Código do termo';
$string['extracttermcode_desc'] = 'Usado para preencher [TERMCODE]. Derivado do número de identificação do curso.';
$string['pluginname'] = 'Use o modelo na criação do curso';
$string['privacy:metadata'] = 'O plugin Usar modelo na criação de curso não armazena nenhum dado pessoal.';
$string['templatenameformat'] = 'Formato de nome breve do modelo';
$string['templatenameformat_desc'] = 'Formato do nome breve esperado para cursos modelo';
