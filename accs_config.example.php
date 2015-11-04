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
 * accs_config.example.php, configuration settings for ACCS plug-in
 *
 * EXAMPLE Auto-Create Course Shells configuration file for
 * such things as remote db connection info, etc.
 *
 * Before you can use ACCS, you must:
 * (1) Copy or rename this file accs_config.php
 * (2) Enter your MS SQL Server credentials
 * (3) Configure other options below, such as email destination and log location, as needed.
 *
 * 2011-02-10
 * @package      plug-in
 * @subpackage   RRU_ACCS
 * @copyright    2011 Andrew Zoltay, Royal Roads University
 * @license      http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

unset($ACCS_CFG);

// Agresso_RR connection info
$ACCS_CFG = new stdClass();
$ACCS_CFG->mssqlserver = '<server>:<port>';
$ACCS_CFG->mssqldb = '<database>';
$ACCS_CFG->mssqluser = '<user>';
$ACCS_CFG->mssqlpwd = '<password>';

// Miscellaneous ACCS configuration settings
$ACCS_CFG->emailto = 'administrator@your-school.edu';
$ACCS_CFG->defaultcatid = 5;
$ACCS_CFG->log = '/var/web/moodledata/logs/accs.log';
$ACCS_CFG->monthsahead = 9;         // The number of months into the future to look for new/updated courses
$ACCS_CFG->res_name = 'Development Notes';
$ACCS_CFG->res_intro = 'Development Notes Introduction';
$ACCS_CFG->default_courses = '3';   // List of Moodle course ids in which all students are to be enrolled
$ACCS_CFG->admin_user = 2;

?>
