<?php
/**
 * Testimonials block for Moodle
 *
 * @package   block_testimonials
 * @copyright 2015 Thomas Threadgold <tj.threadgold@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function block_testimonials_pluginfile($course, $birecord_or_cm, $context, $filearea, $args, $forcedownload, array $options=array()) {
    global $DB, $CFG;
	 
    if ($context->contextlevel != CONTEXT_BLOCK) {
        return false;
    }

    if ($filearea !== 'photo') {
        return false;
    }

    $itemid = array_shift($args);
    
    // Extract the filename / filepath from the $args array.
   $filename = array_pop($args); // The last item in the $args array.
   if (!$args) {
       $filepath = '/'; // $args is empty => the path is '/'
   } else {
       $filepath = '/'.implode('/', $args).'/'; // $args contains elements of the filepath
   }

   // Retrieve the file from the Files API.
   $fs = get_file_storage();
   $file = $fs->get_file($context->id, 'block_testimonials', $filearea, $itemid, $filepath, $filename);
   if (!$file) {
       return false; // The file does not exist.
   }

   send_stored_file($file, 86400, 0, $forcedownload, $options);
}