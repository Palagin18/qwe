<?php
function blain_customize_register_fshowcase( $wp_customize ) {
    $wp_customize->add_panel('blain_fshowcase',
        array(
            'title' => __('Featured Showcase', 'blain'),
            'priority' => 50,
        )
    );
    $wp_customize->add_section('blain_showcase_enable_section',
        array(
            'title' => __('Enable/Disable', 'blain'),
            'priority' => 10,
            'panel' => 'blain_fshowcase',
        )
    );

    $wp_customize->add_setting('blain_showcase_enable_set',
        array(
            'sanitize_callback' => 'blain_sanitize_checkbox'
        ));

    $wp_customize->add_control('blain_showcase_enable_set',
        array(
            'setting' => 'blain_showcase_enable_set',
            'section' => 'blain_showcase_enable_section',
            'label' => __('Enable Featured Showcase', 'blain'),
            'type' => 'checkbox',
            'default' => false,
        )
    );
    //Showcase title
    $wp_customize->add_setting('blain_showcase_title',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_title',
        array(
            'setting' => 'blain_showcase_title',
            'section' => 'blain_showcase_enable_section',
            'label' => __(' Showcase Title', 'blain'),
            'type' => 'text',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //Showcase 1
    $wp_customize->add_section('blain_featured_showcase1_section',
        array(
            'title' => __('Showcase Item 1', 'blain'),
            'priority' => 10,
            'panel' => 'blain_fshowcase',
        )
    );
    $wp_customize->add_setting('blain_fshowcase1_image',
        array(
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'blain_fshowcase1_image',
            array (
                'setting' => 'blain_fshowcase1_image',
                'section' => 'blain_featured_showcase1_section',
                'label' => __('Image 1', 'blain'),
                'description' => __('Upload an image to display for showcase item 1', 'blain'),
                'active_callback' => 'blain_fshowcase_active_callback'
            )
        )
    );
    //title 1
    $wp_customize->add_setting('blain_showcase_title1',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_title1',
        array(
            'setting' => 'blain_showcase_title1',
            'section' => 'blain_featured_showcase1_section',
            'label' => __(' Showcase Title 1', 'blain'),
            'type' => 'text',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //desc 1
    $wp_customize->add_setting('blain_showcase_desc1',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_desc1',
        array(
            'setting' => 'blain_showcase_desc1',
            'section' => 'blain_featured_showcase1_section',
            'label' => __(' Showcase Description 1', 'blain'),
            'type' => 'textarea',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //url1
    $wp_customize->add_setting(
        'blain_showcase_url1',
        array( 'sanitize_callback' => 'esc_url_raw' )
    );

    $wp_customize->add_control(
        'blain_showcase_url1', array(
            'settings' => 'blain_showcase_url1',
            'label'    => __( 'Custom URL','blain' ),
            'description'    => __( 'Enter URL to link the Learn More button to some other page. Leave Blank to link to the page selected above or any external url. ','blain' ),
            'section'  => 'blain_featured_showcase1_section',
            'type'     => 'url',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );

    //Showcase 2
    $wp_customize->add_section('blain_featured_showcase2_section',
        array(
            'title' => __('Showcase Item 2', 'blain'),
            'priority' => 10,
            'panel' => 'blain_fshowcase',
        )
    );
    $wp_customize->add_setting('blain_fshowcase2_image',
        array(
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'blain_fshowcase2_image',
            array (
                'setting' => 'blain_fshowcase2_image',
                'section' => 'blain_featured_showcase2_section',
                'label' => __('Image 2', 'blain'),
                'description' => __('Upload an image to display for showcase item 2', 'blain'),
                'active_callback' => 'blain_fshowcase_active_callback'
            )
        )
    );
    //title 2
    $wp_customize->add_setting('blain_showcase_title2',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_title2',
        array(
            'setting' => 'blain_showcase_title2',
            'section' => 'blain_featured_showcase2_section',
            'label' => __(' Showcase Title 2', 'blain'),
            'type' => 'text',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //desc 2
    $wp_customize->add_setting('blain_showcase_desc2',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_desc2',
        array(
            'setting' => 'blain_showcase_desc2',
            'section' => 'blain_featured_showcase2_section',
            'label' => __(' Showcase Description 2', 'blain'),
            'type' => 'textarea',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //url2
    $wp_customize->add_setting(
        'blain_showcase_url2',
        array( 'sanitize_callback' => 'esc_url_raw' )
    );

    $wp_customize->add_control(
        'blain_showcase_url2', array(
            'settings' => 'blain_showcase_url2',
            'label'    => __( 'Custom URL','blain' ),
            'description'    => __( 'Enter URL to link the Learn More button to some other page. Leave Blank to link to the page selected above or any external url. ','blain' ),
            'section'  => 'blain_featured_showcase2_section',
            'type'     => 'url',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //Showcase 3
    $wp_customize->add_section('blain_featured_showcase3_section',
        array(
            'title' => __('Showcase Item 3', 'blain'),
            'priority' => 10,
            'panel' => 'blain_fshowcase',
        )
    );
    $wp_customize->add_setting('blain_fshowcase3_image',
        array(
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'blain_fshowcase3_image',
            array (
                'setting' => 'blain_fshowcase3_image',
                'section' => 'blain_featured_showcase3_section',
                'label' => __('Image 3', 'blain'),
                'description' => __('Upload an image to display for showcase item 3', 'blain'),
                'active_callback' => 'blain_fshowcase_active_callback'
            )
        )
    );
    //title 3
    $wp_customize->add_setting('blain_showcase_title3',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_title3',
        array(
            'setting' => 'blain_showcase_title3',
            'section' => 'blain_featured_showcase3_section',
            'label' => __(' Showcase Title 3', 'blain'),
            'type' => 'text',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //desc 3
    $wp_customize->add_setting('blain_showcase_desc3',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_desc3',
        array(
            'setting' => 'blain_showcase_desc3',
            'section' => 'blain_featured_showcase3_section',
            'label' => __(' Showcase Description 3', 'blain'),
            'type' => 'textarea',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //url3
    $wp_customize->add_setting(
        'blain_showcase_url3',
        array( 'sanitize_callback' => 'esc_url_raw' )
    );

    $wp_customize->add_control(
        'blain_showcase_url3', array(
            'settings' => 'blain_showcase_url3',
            'label'    => __( 'Custom URL','blain' ),
            'description'    => __( 'Enter URL to link the Learn More button to some other page. Leave Blank to link to the page selected above or any external url. ','blain' ),
            'section'  => 'blain_featured_showcase3_section',
            'type'     => 'url',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //showcase 4
    $wp_customize->add_section('blain_featured_showcase4_section',
        array(
            'title' => __('Showcase Item 4', 'blain'),
            'priority' => 10,
            'panel' => 'blain_fshowcase',
        )
    );
    $wp_customize->add_setting('blain_fshowcase4_image',
        array(
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'blain_fshowcase4_image',
            array (
                'setting' => 'blain_fshowcase4_image',
                'section' => 'blain_featured_showcase4_section',
                'label' => __('Image 4', 'blain'),
                'description' => __('Upload an image to display for showcase item 4', 'blain'),
                'active_callback' => 'blain_fshowcase_active_callback'
            )
        )
    );
    //title 4
    $wp_customize->add_setting('blain_showcase_title4',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_title4',
        array(
            'setting' => 'blain_showcase_title4',
            'section' => 'blain_featured_showcase4_section',
            'label' => __(' Showcase Title 4', 'blain'),
            'type' => 'text',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //desc 4
    $wp_customize->add_setting('blain_showcase_desc4',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        ));

    $wp_customize->add_control('blain_showcase_desc4',
        array(
            'setting' => 'blain_showcase_desc4',
            'section' => 'blain_featured_showcase4_section',
            'label' => __(' Showcase Description 4', 'blain'),
            'type' => 'textarea',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );
    //url1
    $wp_customize->add_setting(
        'blain_showcase_url4',
        array( 'sanitize_callback' => 'esc_url_raw' )
    );

    $wp_customize->add_control(
        'blain_showcase_url4', array(
            'settings' => 'blain_showcase_url4',
            'label'    => __( 'Custom URL','blain' ),
            'description'    => __( 'Enter URL to link the Learn More button to some other page. Leave Blank to link to the page selected above or any external url. ','blain' ),
            'section'  => 'blain_featured_showcase4_section',
            'type'     => 'url',
            'active_callback' => 'blain_fshowcase_active_callback'
        )
    );


    function blain_fshowcase_active_callback( $control ) {
        $option = $control->manager->get_setting('blain_showcase_enable_set');
        return $option->value() == true;
    }


}
add_action( 'customize_register', 'blain_customize_register_fshowcase' );

