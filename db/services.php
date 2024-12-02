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
 * service file
 *
 * @package    local_boost_dark
 * @copyright  2024 Eduardo Kraus {@link http://eduardokraus.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$functions = [
    'local_boost_dark_userprerence_layout' => [
        'classname' => '\local_boost_dark\external\userprerence',
        'classpath' => 'local/boost_dark/classes/external/userprerence.php',
        'methodname' => 'layout',
        'description' => 'Save user preference Layout',
        'type' => 'write',
        'ajax' => true,
        'loginrequired' => false,
    ],
];