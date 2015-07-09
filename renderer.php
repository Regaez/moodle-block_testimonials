<?php
/**
 * testimonials block renderer
 *
 * @package    block_testimonials
 * @copyright  2015 Thomas Threadgold <tj.threadgold@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

class block_testimonials_renderer extends plugin_renderer_base {

    /**
     * Construct contents of testimonials block
     *
     * @param   array   $products    The list of products to be output
     * @return  string              html to be displayed in testimonials block
     */
    public function output_testimonials($config, $context) {
        $html = '';

        $html = sprintf(
            '<ul class="testimonial__list %s">',
            (int) $config->enable_rotation === 1 ? 'autoplay' : ''
        );

        for($i = 1; $i <= (int)$config->testimonials_shown; $i++) {

            $quote      = 'testimonial_quote_'.$i;
            $image      = 'testimonial_photo_'.$i;
            $name       = 'testimonial_name_'.$i;
            $position   = 'testimonial_position_'.$i;

            $html .= sprintf(
                '<li class="testimonial__item %s" data-id="%d">',
                $i === 1 ? 'active' : '',
                $i
            );

                // Output quote
                if(0 < strlen($config->$quote)) {
                    $html .= sprintf(
                        '<div class="testimonial__quote">%s</div>',
                        $config->$quote
                    );
                }

                $html .= '<div class="testimonial__person">';

                    // Output image
                    if((bool)$config->show_image) {

                        $fs = get_file_storage();
                        $files = $fs->get_area_files($context->id, 'block_testimonials', 'photo', $config->$image);

                        foreach ($files as $file) {
                            $filename = $file->get_filename();
                            if($filename !== '.') {
                                $url = moodle_url::make_pluginfile_url($file->get_contextid(), $file->get_component(), $file->get_filearea(), $file->get_itemid(), $file->get_filepath(), $filename);

                                if(!!$url) {
                                    $html .= sprintf(
                                        '<img class="testimonial__photo" src="%s" alt="%s">',
                                        $url,
                                        $config->$name
                                    );
                                }
                            }
                        }
                    }

                    $html .= '<div class="testimonial__info">';

                        // Output title
                        if((bool)$config->show_name) {
                            $html .= sprintf(
                                '<h3 class="testimonial__name">%s</h3>',
                                $config->$name
                            );
                        }

                        // Output description
                        if((bool)$config->show_position) {
                            $html .= sprintf(
                                '<h4 class="testimonial__position">%s</h4>',
                                $config->$position
                            );
                        }

                    $html .= '</div>';

                $html .= '</div>';
            
            $html .= '</li>';
        }

        $html .= '</ul>';


        // output pagination
        if((bool)$config->show_pagination) {

            $html .= '<ul class="pagination">';

            for($i = 1; $i <= (int)$config->testimonials_shown; $i++) {
                $html .= sprintf(
                    '<li class="pagination__item %1$s"><a class="pagination__link" data-id="%2$d">%2$d</a></li>',
                    $i === 1 ? 'active' : '',
                    $i
                );
            }

            $html .= '</ul>';
        }

        return $html;
    }
}

?>