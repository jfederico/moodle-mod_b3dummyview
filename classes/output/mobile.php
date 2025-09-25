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

namespace mod_b3dummyview\output;

use stdClass;

/**
 * Mobile support for mod_b3dummyview
 *
 * @package    mod_b3dummyview
 * @copyright  2025 Jesus Federico <jesus@123it.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mobile {
    /**
     * Returns the data and template for the mobile app view.
     *
     * @param array $args
     * @return array
     */
    public static function mobile_view_activity($args) {
        global $OUTPUT;
        $data = [
            'message' => 'Hello Mobile from b3dummyview::renderer!'
        ];
        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('mod_b3dummyview/mobile_view', $data),
                ],
            ],
            'otherdata' => $data,
        ];
    }
}
