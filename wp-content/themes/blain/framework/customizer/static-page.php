<?php
//static_page 1 section start
//static_page 1
function blain_customize_register_static_page( $wp_customize ) {
$wp_customize->add_section('blain_static_page_section',
    array(
        'title' => __('Static Page', 'blain'),
        'priority' => 40,
    )
);

$wp_customize->add_setting('blain_static_page_enable',
    array(
        'sanitize_callback' => 'blain_sanitize_checkbox'
    ));
$wp_customize->add_control('blain_static_page_enable',
    array(
        'setting' => 'blain_static_page_enable',
        'section' => 'blain_static_page_section',
        'label' => __('Enable Static Page', 'blain'),
        'type' => 'checkbox',
        'default' => false,
    )
);

$wp_customize->add_setting('blain_static_page_selectpage',
    array(
        'sanitize_callback' => 'absint'
    )
);

$wp_customize->add_control('blain_static_page_selectpage',
    array(
        'setting' => 'blain_static_page_selectpage',
        'section' => 'blain_static_page_section',
        'label' => __('Title', 'blain'),
        'description' => __('Select a Page to display Title. Make sure page should contain feature image.', 'blain'),
        'type' => 'dropdown-pages',
        'active_callback' => 'blain_static_page_active_callback'
    )
);


$wp_customize->add_setting('blain_static_page_full_content',
    array(
        'sanitize_callback' => 'blain_sanitize_checkbox'
    )
);

$wp_customize->add_control('blain_static_page_full_content',
    array(
        'setting' => 'blain_static_page_full_content',
        'section' => 'blain_static_page_section',
        'label' => __('Show Full Content insted of excerpt', 'blain'),
        'type' => 'checkbox',
        'default' => false,
        'active_callback' => 'blain_static_page_active_callback'
    )
);

$wp_customize->add_setting('blain_static_page_button',
    array(
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control('blain_static_page_button',
    array(
        'setting' => 'blain_static_page_button',
        'section' => 'blain_static_page_section',
        'label' => __('Button Name', 'blain'),
        'description' => __('Leave blank to disable Button.', 'blain'),
        'type' => 'text',
        'active_callback' => 'blain_static_page_active_callback'
    )
);

function blain_static_page_active_callback( $control ) {
    $option = $control->manager->get_setting('blain_static_page_enable');
    return $option->value() == true;
}

//static_page 1 section end
}
add_action( 'customize_register', 'blain_customize_register_static_page' );