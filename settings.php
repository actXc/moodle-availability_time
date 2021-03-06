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
 * Availability days plugin settings.
 *
 * @package    availability_days
 * @copyright  2010 Valery Fremaux (http://www.mylearningfactory.com)
 * @author     Valery Fremaux - based on code by Petr Skoda and others
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $options = array(0 => get_string('coursestartdate', 'availability_time'),
                     1 => get_string('userenroldate', 'availability_time'));

    $key = 'availability_time/referencedate';
    $label = get_string('configreferencedate', 'availability_time');
    $desc = get_string('configreferencedate_desc', 'availability_time');
    $settings->add(new admin_setting_configselect($key, $label, $desc, 0, $options));
}

