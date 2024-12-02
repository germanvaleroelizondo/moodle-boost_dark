<?php
// This file is part of the Local Analytics plugin for Moodle
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
// You should have received a boost_dark of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Hooks
 *
 * @package   local_boost_dark
 * @copyright 2024 Eduardo Kraus {@link http://eduardokraus.com}
 * @license   http://www.gnu.org/boost_darkleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$callbacks = [
    [
        'hook' => \core\hook\output\before_standard_head_html_generation::class,
        'callback' => "\\local_boost_dark\\core_hook_output::before_standard_head_html_generation",
    ],
    [
        "hook" => \core\hook\output\before_html_attributes::class,
        "callback" => "\\local_boost_dark\\core_hook_output::before_html_attributes",
    ],
];