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
 * @package   local_boost_dark
 * @copyright 2025 Eduardo Kraus {@link http://eduardokraus.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$colors = [
    "bs-write" => "#fff",
    "bs-gray-100" => "#f8f9fa",
    "bs-gray-200" => "#e9ecef",
    "bs-gray-300" => "#dee2e6",
    "bs-gray-400" => "#ced4da",
    "bs-gray-500" => "#adb5bd",
    "bs-gray-600" => "#6c757d",
    "bs-gray-700" => "#495057",
    "bs-gray-800" => "#393e4f",
    "bs-gray-900" => "#2e3134",
    "bs-gray-1000" => "#1e1e25",
    "bs-gray-1100" => "#0e0e11",
    "bs-black" => "#000",
    "bs-nav-drawer" => "#e8eaed",
    "bs-link-color" => "#98b6d9",
    "bs-link-hover-color" => "#aacbf2",
    "bs-link-focus-color" => "#b3c0e8",
    "bs-text-color" => "#cbd0d4",
];
foreach ($colors as $name => $default) {
    $name = str_replace("-", "_", $name);
    set_config($name, $default, "local_boost_dark");
}
