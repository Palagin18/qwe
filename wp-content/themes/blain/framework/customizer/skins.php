<?php
function blain_customize_register_skins( $wp_customize ) {
    $wp_customize->get_section('colors')->title = __("Theme Skins and Colors",'blain');
	$wp_customize->get_section('colors')->panel = "blain_design_panel";
	$wp_customize->get_section('background_image')->panel = "blain_design_panel";
	$wp_customize->get_section('custom_css')->panel = "blain_design_panel";
	//Replace Header Text Color with, separate colors for Title and Description
	$wp_customize->get_control('header_textcolor')->label = __('Site Title Color','blain');
	$wp_customize->get_control('header_textcolor')->section = 'colors';
    $wp_customize->get_setting('header_textcolor')->default = "#ffffff";
	$wp_customize->add_setting('blain_header_desccolor', array(
	    'default'     => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control( 
		$wp_customize, 
		'blain_header_desccolor', array(
			'label' => __('Site Tagline Color','blain'),
			'section' => 'colors',
			'settings' => 'blain_header_desccolor',
			'type' => 'color'
		) ) 
	);

    $wp_customize->add_setting(
        'blain_skin',
        array(
            'default'=> 'default',
            'sanitize_callback' => 'blain_sanitize_skin'
        )
    );

    $skins = array( 'default' => __('Default (Medium Turquoise)','blain'),
        'brown' =>  __('Rosy Brown','blain'),
        'crimson' => __('Crimson','blain'),
        'aquamarine'   => __('Medium Aquamarine','blain'));


    $wp_customize->add_control(
        'blain_skin',array(
            'settings' => 'blain_skin',
            'section'  => 'colors',
            'type' => 'select',
            'choices' => $skins,
        )
    );

    function blain_sanitize_skin( $input ) {
        if ( in_array($input, array('default','crimson','brown','aquamarine') ) )
            return $input;
        else
            return '';
    }
}

add_action( 'customize_register', 'blain_customize_register_skins' );