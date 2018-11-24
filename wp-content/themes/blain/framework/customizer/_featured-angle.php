<?php
function blain_customize_register_featured_angle( $wp_customize ) {
//FEATURED AREA 2
$wp_customize->add_section(
    'blain_featured_anglesection',
    array(
        'title'     => 'Featured Area 2',
        'priority'  => 20,
        'panel'     => 'blain_featured_area_panel'
    )
);

$wp_customize->add_setting(
    'blain_featured_angle_enable',
    array( 'sanitize_callback' => 'blain_sanitize_checkbox')
);

$wp_customize->add_control(
    'blain_featured_angle_enable', array(
        'settings' => 'blain_featured_angle_enable',
        'label'    => __( 'Enable Featured Area 2.', 'blain' ),
        'section'  => 'blain_featured_anglesection',
        'type'     => 'checkbox',

    )
);


$wp_customize->add_setting(
    'blain_featured_angle_title',
    array( 'sanitize_callback' => 'sanitize_text_field' )
);

$wp_customize->add_control(
    'blain_featured_angle_title', array(
        'settings' => 'blain_featured_angle_title',
        'label'    => __( 'Title For Featured Posts','blain' ),
        'section'  => 'blain_featured_anglesection',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'blain_featured_angle_cat',
    array( 'sanitize_callback' => 'blain_sanitize_category' )
);

$wp_customize->add_control(
    new Hanne_WP_Customize_Category_Control(
        $wp_customize,
        'blain_featured_angle_cat',
        array(
            'label'    => __('Category For Featured Posts','blain'),
            'settings' => 'blain_featured_angle_cat',
            'section'  => 'blain_featured_anglesection'
        )
    )
);

}
add_action( 'customize_register', 'blain_customize_register_featured_angle' );