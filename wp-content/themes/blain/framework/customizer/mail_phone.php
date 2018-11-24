<?php
function blain_customize_register_header_mail( $wp_customize ) {
	
	$wp_customize->add_section('blain_mail', array(
		'title' => __('Email & Phone','blain'),
		'panel' => 'blain_header_panel'	
	));
	
	$wp_customize->add_setting( 'blain_mailid' , array(
	    'sanitize_callback' => 'sanitize_text_field'
	) );
	
	$wp_customize->add_control(
	'blain_mailid', array(
		'label' => __('Your Email','blain'),
		'section' => 'blain_mail',
		'settings' => 'blain_mailid',
		'type' => 'email',
	) );
	
	$wp_customize->add_setting( 'blain_phone' , array(
	    'sanitize_callback' => 'sanitize_text_field'
	) );
	
	$wp_customize->add_control(
	'blain_phone', array(
		'label' => __('Your Phone No.','blain'),
		'section' => 'blain_mail',
		'settings' => 'blain_phone',
		'type' => 'tel',
	) );
	
}
add_action( 'customize_register', 'blain_customize_register_header_mail' );