<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Settings page to be included as tab in ai_managers settings page
 *
 * @package    aitool_whisper_1
 * @copyright  ISB Bayern, 2024
 * @author     Dr. Peter Mayer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings = new admin_settingpage('tab_whisper_1', get_string('pluginname', 'aitool_whisper_1'));

$name = new lang_string('openaisettings', 'aitool_whisper_1');
$settings->add(new admin_setting_heading('openaisettings', $name, ''));

$settings->add(new admin_setting_configtext(
    'aitool_whisper_1/openaiapikey',
    get_string('openaiapikey', 'aitool_whisper_1'),
    get_string('openaiapikey_desc', 'aitool_whisper_1'),
    ''
));

$settings->add(new admin_setting_configtextarea(
    'aitool_whisper_1/source_of_truth',
    get_string('sourceoftruth', 'aitool_whisper_1'),
    get_string('sourceoftruth_desc', 'aitool_whisper_1'),
    ''
));

$settings->add(new admin_setting_configtext(
    'aitool_whisper_1/temperature',
    get_string('temperature', 'aitool_whisper_1'),
    get_string('temperature_desc', 'aitool_whisper_1'),
    '0.5',
    PARAM_FLOAT
));

$settings->add(new admin_setting_configtext(
    'aitool_whisper_1/top_p',
    get_string('top_p', 'aitool_whisper_1'),
    get_string('top_p_desc', 'aitool_whisper_1'),
    ''
));

$settings->add(new admin_setting_configtext(
    'aitool_whisper_1/frequency_penalty',
    get_string('frequency_penalty', 'aitool_whisper_1'),
    get_string('frequency_penalty_desc', 'aitool_whisper_1'),
    ''
));

$settings->add(new admin_setting_configtext(
    'aitool_whisper_1/presence_penalty',
    get_string('presence_penalty', 'aitool_whisper_1'),
    get_string('presence_penalty_desc', 'aitool_whisper_1'),
    ''
));

$tabs->add($settings);
