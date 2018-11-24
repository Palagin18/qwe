<?php
function blain_customize_register_header( $wp_customize ) {
	//Settings for Header Image
	$wp_customize->add_panel('blain_header_panel', array(
		'priority' => 2,
		'title' => __('Header Settings','blain')
	));
	
	$wp_customize->get_section('header_image')->panel = 'blain_header_panel';
	$wp_customize->get_section('title_tagline')->panel = 'blain_header_panel';
	
	$wp_customize->add_setting( 'blain_himg_style' , array(
	    'default'     => 'cover',
	    'sanitize_callback' => 'blain_sanitize_himg_style'
	) );
	
	/* Sanitization Function */
	function blain_sanitize_himg_style( $input ) {
		if (in_array( $input, array('contain','cover') ) )
			return $input;
		else
			return 'blain';	
	}
	
	$wp_customize->add_control(
	'blain_himg_style', array(
		'label' => __('Header Image Arrangement','blain'),
		'section' => 'header_image',
		'settings' => 'blain_himg_style',
		'type' => 'select',
		'choices' => array(
				'contain' => __('Contain','blain'),
				'cover' => __('Cover Completely (Recommended)','blain'),
				)
	) );
	
	$wp_customize->add_setting( 'blain_himg_align' , array(
	    'default'     => 'center',
	    'sanitize_callback' => 'blain_sanitize_himg_align'
	) );
	
	/* Sanitization Function */
	function blain_sanitize_himg_align( $input ) {
		if (in_array( $input, array('center','left','right') ) )
			return $input;
		else
			return 'blain';	
	}
	
	$wp_customize->add_control(
	'blain_himg_align', array(
		'label' => __('Header Image Alignment','blain'),
		'section' => 'header_image',
		'settings' => 'blain_himg_align',
		'type' => 'select',
		'choices' => array(
				'center' => __('Center','blain'),
				'left' => __('Left','blain'),
				'right' => __('Right','blain'),
			)
	) );
	
	$wp_customize->add_setting( 'blain_himg_repeat' , array(
	    'default'     => true,
	    'sanitize_callback' => 'blain_sanitize_checkbox'
	) );
	
	$wp_customize->add_control(
	'blain_himg_repeat', array(
		'label' => __('Repeat Header Image','blain'),
		'section' => 'header_image',
		'settings' => 'blain_himg_repeat',
		'type' => 'checkbox',
	) );
	
	$wp_customize->add_setting( 'blain_btn' , array(
	    'sanitize_callback' => 'sanitize_text_field'
	) );
	
	$wp_customize->add_control(
	'blain_btn', array(
		'label' => __('Button','blain'),
		'section' => 'title_tagline',
		'settings' => 'blain_btn',
		'type' => 'text',
	) );
	
	$wp_customize->add_setting( 'blain_h_url' , array(
	    'sanitize_callback' => 'esc_url_raw'
	) );
	
	$wp_customize->add_control(
	'blain_h_url', array(
		'label' => __('Button URL','blain'),
		'section' => 'title_tagline',
		'settings' => 'blain_h_url',
		'type' => 'url',
	) );
}
add_action( 'customize_register', 'blain_customize_register_header' );