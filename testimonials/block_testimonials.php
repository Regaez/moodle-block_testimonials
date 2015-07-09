<?php
/**
 * Testimonials block
 *
 * @package    block_testimonials
 * @copyright  2015 Thomas Threadgold, LearningWorks Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_testimonials extends block_base {

    /**
     * Block initialization
     */
    public function init() {
        $this->title   = get_string('block_title', 'block_testimonials');
    }

    /**
     * Return contents of testimonials block
     *
     * @return stdClass contents of block
     */
    public function get_content() {
        global $PAGE;

        if($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '';
        $this->content->footer = '';

        // Get the renderer
        $renderer = $this->page->get_renderer('block_testimonials');

        // If block has been configured, then output the testimonials
        if (!empty($this->config) && is_object($this->config)) {
            $this->content->text = $renderer->output_testimonials($this->config, $this->context);        
        }

        $PAGE->requires->jquery();
        $PAGE->requires->js(new moodle_url('/blocks/testimonials/scripts.js'));

        return $this->content;
    }

    /**
     * Allow the block to have a configuration page
     *
     * @return boolean
     */
    public function has_config() {
        return true;
    }

    /**
     * Locations where block can be displayed
     *
     * @return array
     */
    public function applicable_formats() {
        return array('site-index' => true);
    }

    /**
     * Sets block header to be hidden or visible
     *
     * @return bool if true then header will be visible.
     */
    public function hide_header() {
        return false;
    }
}