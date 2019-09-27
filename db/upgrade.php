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
 * Upgrade code for install
 *
 * @package   tool_untoken_oauth2
 * @copyright 201i9 Jonathan López <jonathan.lopez.garcia@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once('upgradelib.php');

defined('MOODLE_INTERNAL') || die();


/*
 * Upgrade the untoken oauth2 plugin.
 *
 * @param int $oldversion The old version of the user tours plugin
 * @return bool
 */

function xmldb_tool_untoken_oauth2_upgrade($oldversion) {
//upgrade function

    global $CFG, $DB;

    if ($oldversion < 2019091600) {
//        set_config('version', 2019091602, 'tool_untoken_oauth2');
        upgrade_plugin_savepoint(true, 2019091600, 'tool', 'untoken_oauth2');
    }


    // Automatically generated Moodle v3.3.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.4.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.5.0 release upgrade line.
    // Put any upgrade step following this.

    return true;
}
