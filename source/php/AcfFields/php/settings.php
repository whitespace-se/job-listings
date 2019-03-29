<?php 



    'key' => 'group_5c9de924499d4',
    'title' => __('Import settings', 'job-listings'),
    'fields' => array(
        0 => array(
            'key' => 'field_5c9deb7c5c643',
            'label' => __('XML Api URL', 'job-listings'),
            'name' => 'job_listing_xml_api_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
        ),
        1 => array(
            'key' => 'field_5c9deba65c644',
            'label' => __('Guid group', 'job-listings'),
            'name' => 'job_listing_xml_api_url_id',
            'type' => 'text',
            'instructions' => __('Import identifier (called guidGroup) in visma.', 'job-listings'),
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-import-settings',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));
