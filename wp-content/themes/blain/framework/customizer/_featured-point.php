<?php
// CREATE THE featured_point PANEL
function blain_customize_register_featured_point( $wp_customize ) {
    $wp_customize->add_panel( 'blain_featured_area_panel', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Featured Content Areas',
        'description'    => '',
    ) );


    //FEATURED AREA 1
    $wp_customize->add_section(
        'blain_featured_pointsection',
        array(
            'title'     => 'Featured Area 1',
            'priority'  => 10,
            'panel'     => 'blain_featured_area_panel'
        )
    );

    $wp_customize->add_setting(
        'blain_featured_point_enable',
        array( 'sanitize_callback' => 'blain_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'blain_featured_point_enable', array(
            'settings' => 'blain_featured_point_enable',
            'label'    => __( 'Enable Featured Area 1.', 'blain' ),
            'section'  => 'blain_featured_pointsection',
            'type'     => 'checkbox',
        )
    );


    $wp_customize->add_setting(
        'blain_featured_point_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'blain_featured_point_title', array(
            'settings' => 'blain_featured_point_title',
            'label'    => __( 'Title For Featured Posts','blain' ),
            'section'  => 'blain_featured_pointsection',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting(
        'blain_featured_point_cat',
        array( 'sanitize_callback' => 'blain_sanitize_category' )
    );

    $wp_customize->add_control(
        new Hanne_WP_Customize_Category_Control(
            $wp_customize,
            'blain_featured_point_cat',
            array(
                'label'    => __('Category For Featured Posts','blain'),
                'settings' => 'blain_featured_point_cat',
                'section'  => 'blain_featured_pointsection'
            )
        )
    );
}
add_action( 'customize_register', 'blain_customize_register_featured_point' );