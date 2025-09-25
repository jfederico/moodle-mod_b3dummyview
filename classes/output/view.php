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

/** Moodle core interfaces/classes. */

/**
 * Class view
 *
 * @package    mod_b3dummyview
 * @copyright  2025 Jesus Federico <jesus@123it.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class view implements \renderable, \templatable {

    /** @var stdClass The instance being rendered */
    protected $instance;

    /**
     * Constructor for the View Page.
     *
     * @param stdClass $instance
     */
    public function __construct($instance) {
        $this->instance = $instance;
    }

    /**
     * Export the content required to render the template.
     *
     * @param renderer_base $output
     * @return stdClass
     */
    public function export_for_template(\renderer_base $output): stdClass {
        return (object) [
            'message' => 'Hello from b3dummyview::renderer!',
        ];
    }
}