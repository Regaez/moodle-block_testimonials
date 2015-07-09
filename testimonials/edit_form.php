<?php
/**
 * Form for editing testimonial instances.
 *
 * @copyright 2015 Thomas Threadgold, LearningWorks Ltd
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_testimonials_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        global $PAGE;

        // Fields for editing HTML block title and contents.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        // Configure the title of the block
        $mform->addElement(
            'text',
            'config_title',
            get_string(
                'configtitle',
                'block_testimonials'
            )
        );
        $mform->setType('config_title', PARAM_TEXT);

        // Add show image checkbox
        $mform->addElement(
            'advcheckbox',
            'config_show_image',
            get_string(
                'show_image',
                'block_testimonials'
            ),
            get_string(
                'show_image_label',
                'block_testimonials'
            )
        );
        $mform->setType('config_show_image', PARAM_INT);

        // Add show name checkbox
        $mform->addElement(
            'advcheckbox',
            'config_show_name',
            get_string(
                'show_name',
                'block_testimonials'
            ),
            get_string(
                'show_name_label',
                'block_testimonials'
            )
        );
        $mform->setType('config_show_name', PARAM_INT);


        // Add show position checkbox
        $mform->addElement(
            'advcheckbox',
            'config_show_position',
            get_string(
                'show_position',
                'block_testimonials'
            ),
            get_string(
                'show_position_label',
                'block_testimonials'
            )
        );
        $mform->setType('config_show_position', PARAM_INT);


        // Add show pagination checkbox
        $mform->addElement(
            'advcheckbox',
            'config_show_pagination',
            get_string(
                'show_pagination',
                'block_testimonials'
            ),
            get_string(
                'show_pagination_label',
                'block_testimonials'
            )
        );
        $mform->setType('config_show_pagination', PARAM_INT);

        // Add auto scroll checkbox
        $mform->addElement(
            'advcheckbox',
            'config_enable_rotation',
            get_string(
                'enable_rotation',
                'block_testimonials'
            ),
            get_string(
                'enable_rotation_label',
                'block_testimonials'
            )
        );
        $mform->setType('config_enable_rotation', PARAM_INT);


        // Add number of testimonials to display selection
        $mform->addElement(
            'select',
            'config_testimonials_shown',
            get_string(
                'testimonials_shown', 
                'block_testimonials'
            ),
            array(
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5
            )
        );
        $mform->setType('config_testimonials_shown', PARAM_INT);


        // 
        // TESTIMONIAL 1
        // 

        // Add testimonial header 1
        $mform->addElement(
            'header',
            'testimonial_header_1',
            get_string(
                'testimonial_header',
                'block_testimonials',
                array(
                    'id' => 1
                )
            )
        );

        // Add testimonial quote 1
        $mform->addElement(
            'textarea',
            'config_testimonial_quote_1',
            get_string(
                'testimonial_quote', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_quote_1', PARAM_TEXT);

        // Add testimonial name 1
        $mform->addElement(
            'text',
            'config_testimonial_name_1',
            get_string(
                'testimonial_name', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_name_1', PARAM_TEXT);

        // Add testimonial position 1
        $mform->addElement(
            'text',
            'config_testimonial_position_1',
            get_string(
                'testimonial_position', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_position_1', PARAM_TEXT);


        $mform->addElement(
            'filemanager',
            'config_testimonial_photo_1',
            get_string(
                'testimonial_photo',
                'block_testimonials'
            ),
            null,
            array(
                'subdirs' => 0,
                'maxfiles' => 1,
                'accepted_types' => 'image'
            )
        );


        // 
        // TESTIMONIAL 2
        // 

        // Add testimonial header 2
        $mform->addElement(
            'header',
            'testimonial_header_2',
            get_string(
                'testimonial_header',
                'block_testimonials',
                array(
                    'id' => 2
                )
            )
        );

        // Add testimonial quote 2
        $mform->addElement(
            'textarea',
            'config_testimonial_quote_2',
            get_string(
                'testimonial_quote', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_quote_2', PARAM_TEXT);

        // Add testimonial name 2
        $mform->addElement(
            'text',
            'config_testimonial_name_2',
            get_string(
                'testimonial_name', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_name_2', PARAM_TEXT);

        // Add testimonial position 2
        $mform->addElement(
            'text',
            'config_testimonial_position_2',
            get_string(
                'testimonial_position', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_position_2', PARAM_TEXT);


        $mform->addElement(
            'filemanager',
            'config_testimonial_photo_2',
            get_string(
                'testimonial_photo',
                'block_testimonials'
            ),
            null,
            array(
                'subdirs' => 0,
                'maxfiles' => 1,
                'accepted_types' => 'image'
            )
        );


        // 
        // TESTIMONIAL 3
        // 

        // Add testimonial header 3
        $mform->addElement(
            'header',
            'testimonial_header_3',
            get_string(
                'testimonial_header',
                'block_testimonials',
                array(
                    'id' => 3
                )
            )
        );

        // Add testimonial quote 3
        $mform->addElement(
            'textarea',
            'config_testimonial_quote_3',
            get_string(
                'testimonial_quote', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_quote_3', PARAM_TEXT);

        // Add testimonial name 3
        $mform->addElement(
            'text',
            'config_testimonial_name_3',
            get_string(
                'testimonial_name', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_name_3', PARAM_TEXT);

        // Add testimonial position 3
        $mform->addElement(
            'text',
            'config_testimonial_position_3',
            get_string(
                'testimonial_position', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_position_3', PARAM_TEXT);


        $mform->addElement(
            'filemanager',
            'config_testimonial_photo_3',
            get_string(
                'testimonial_photo',
                'block_testimonials'
            ),
            null,
            array(
                'subdirs' => 0,
                'maxfiles' => 1,
                'accepted_types' => 'image'
            )
        );

        // 
        // TESTIMONIAL 4
        // 

        // Add testimonial header 4
        $mform->addElement(
            'header',
            'testimonial_header_4',
            get_string(
                'testimonial_header',
                'block_testimonials',
                array(
                    'id' => 4
                )
            )
        );

        // Add testimonial quote 4
        $mform->addElement(
            'textarea',
            'config_testimonial_quote_4',
            get_string(
                'testimonial_quote', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_quote_4', PARAM_TEXT);

        // Add testimonial name 4
        $mform->addElement(
            'text',
            'config_testimonial_name_4',
            get_string(
                'testimonial_name', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_name_4', PARAM_TEXT);

        // Add testimonial position 4
        $mform->addElement(
            'text',
            'config_testimonial_position_4',
            get_string(
                'testimonial_position', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_position_4', PARAM_TEXT);


        $mform->addElement(
            'filemanager',
            'config_testimonial_photo_4',
            get_string(
                'testimonial_photo',
                'block_testimonials'
            ),
            null,
            array(
                'subdirs' => 0,
                'maxfiles' => 1,
                'accepted_types' => 'image'
            )
        );


        // 
        // TESTIMONIAL 5
        // 

        // Add testimonial header 5
        $mform->addElement(
            'header',
            'testimonial_header_5',
            get_string(
                'testimonial_header',
                'block_testimonials',
                array(
                    'id' => 5
                )
            )
        );

        // Add testimonial quote 5
        $mform->addElement(
            'textarea',
            'config_testimonial_quote_5',
            get_string(
                'testimonial_quote', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_quote_5', PARAM_TEXT);

        // Add testimonial name 5
        $mform->addElement(
            'text',
            'config_testimonial_name_5',
            get_string(
                'testimonial_name', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_name_5', PARAM_TEXT);

        // Add testimonial position 5
        $mform->addElement(
            'text',
            'config_testimonial_position_5',
            get_string(
                'testimonial_position', 
                'block_testimonials'
            )
        );
        $mform->setType('config_testimonial_position_5', PARAM_TEXT);


        $mform->addElement(
            'filemanager',
            'config_testimonial_photo_5',
            get_string(
                'testimonial_photo',
                'block_testimonials'
            ),
            null,
            array(
                'subdirs' => 0,
                'maxfiles' => 1,
                'accepted_types' => 'image'
            )
        );

        // INCLUDE JS TO SHOW/HIDE FORM ELEMENTS BASED ON SELECTIONS
        $PAGE->requires->jquery();
        $PAGE->requires->js(new moodle_url('/blocks/testimonials/edit_form.js'));
    }

    function set_data($defaults) {
        $draftPhotoId1 = file_get_submitted_draft_itemid('config_testimonial_photo_1');
        $draftPhotoId2 = file_get_submitted_draft_itemid('config_testimonial_photo_2');
        $draftPhotoId3 = file_get_submitted_draft_itemid('config_testimonial_photo_3');
        $draftPhotoId4 = file_get_submitted_draft_itemid('config_testimonial_photo_4');
        $draftPhotoId5 = file_get_submitted_draft_itemid('config_testimonial_photo_5');

        file_prepare_draft_area($draftPhotoId1, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_1, array('subdirs'=>true));
        file_prepare_draft_area($draftPhotoId2, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_2, array('subdirs'=>true));
        file_prepare_draft_area($draftPhotoId3, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_3, array('subdirs'=>true));
        file_prepare_draft_area($draftPhotoId4, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_4, array('subdirs'=>true));
        file_prepare_draft_area($draftPhotoId5, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_5, array('subdirs'=>true));

        parent::set_data($defaults);

        if ($data = parent::get_data()) {
            file_save_draft_area_files($data->config_testimonial_photo_1, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_1, array('subdirs' => true));
            file_save_draft_area_files($data->config_testimonial_photo_2, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_2, array('subdirs' => true));
            file_save_draft_area_files($data->config_testimonial_photo_3, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_3, array('subdirs' => true));
            file_save_draft_area_files($data->config_testimonial_photo_4, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_4, array('subdirs' => true));
            file_save_draft_area_files($data->config_testimonial_photo_5, $this->block->context->id, 'block_testimonials', 'photo', (int)$this->block->config->testimonial_photo_5, array('subdirs' => true));
        }
    }
}