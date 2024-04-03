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
 * Theme `minimal`.
 *
 * @package   theme_minimal
 * @copyright 2023 onwards Nicolas Martignoni
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2024040300;
$plugin->requires  = 2024040200; // Moodle version requirement.
$plugin->component = 'theme_minimal';
$plugin->dependencies = [
    'theme_boost' => 2023100900 // Boost theme version requirement.
];
$plugin->release   = 'v0.0.2'; // Human-readable version name.
$plugin->maturity  = MATURITY_BETA; // How stable the plugin is.
