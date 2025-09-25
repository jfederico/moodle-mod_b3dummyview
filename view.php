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
 * View b3dummyview instance
 *
 * @package    mod_b3dummyview
 * @copyright  2025 Jesus Federico <jesus@123it.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_b3dummyview\output\view;

require(__DIR__.'/../../config.php');
require_once(__DIR__.'/lib.php');

// Course module id.
$id = optional_param('id', 0, PARAM_INT);

// Activity instance id.
$b = optional_param('b', 0, PARAM_INT);

if ($id) {
    $cm = get_coursemodule_from_id('b3dummyview', $id, 0, false, MUST_EXIST);
    $course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
    $moduleinstance = $DB->get_record('b3dummyview', ['id' => $cm->instance], '*', MUST_EXIST);
} else {
    $moduleinstance = $DB->get_record('b3dummyview', ['id' => $b], '*', MUST_EXIST);
    $course = $DB->get_record('course', ['id' => $moduleinstance->course], '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('b3dummyview', $moduleinstance->id, $course->id, false, MUST_EXIST);
}

require_login($course, true, $cm);

\mod_b3dummyview\event\course_module_viewed::create_from_record($moduleinstance, $cm, $course)->trigger();

$PAGE->set_url('/mod/b3dummyview/view.php', ['id' => $cm->id]);
$PAGE->set_title(format_string($moduleinstance->name));
$PAGE->set_cacheable(false);
$PAGE->set_heading(format_string($course->fullname));

// Output starts.
$renderer = $PAGE->get_renderer('mod_b3dummyview');
$renderedinfo = $renderer->render(new view($moduleinstance));

echo $OUTPUT->header();

echo $renderedinfo;

echo $OUTPUT->footer();
