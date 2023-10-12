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
 * Theme `minimal` library.
 *
 * @package   theme_minimal
 * @copyright 2023 onwards Nicolas Martignoni
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Constants which are use throughout this theme.
define('THEME_MINIMAL_SETTING_BLABLA', 'blabla');

/**
 * Returns the main SCSS content.
 *
 * @return string
 */
function theme_minimal_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';
    $scss .= file_get_contents($CFG->dirroot . '/theme/minimal/scss/variables.scss');
    $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $scss .= file_get_contents($CFG->dirroot . '/theme/minimal/scss/default.scss');
    $scss .= file_get_contents($CFG->dirroot . '/theme/minimal/scss/post.scss');

    return $scss;
}

/**
 * Get compiled css.
 *
 * @return string compiled css
 */
function theme_minimal_get_precompiled_css() {
    global $CFG;
    return file_get_contents($CFG->dirroot . '/theme/boost/style/moodle.css');
}

