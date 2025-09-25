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
 * Mobile support for mod_b3dummyview
 *
 * @package    mod_b3dummyview
 * @copyright  2025 Jesus Federico <jesus@123it.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$addons = [
    "mod_b3dummyview" => [
        "handlers" => [
            "b3dummyview" => [
                "delegate" => "CoreCourseModuleDelegate",
                "method" => "mobile_view_activity",
                "displaydata" => [
                    "title" => "pluginname",
                    "icon" => "$CFG->wwwroot/mod/b3dummyview/pix/icon.svg"
                ],
            ],
        ],
        "lang" => ["pluginname", "modulename"],
    ]
];
