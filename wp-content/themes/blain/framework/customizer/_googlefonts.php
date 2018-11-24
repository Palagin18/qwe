<?php
function blain_customize_register_fonts( $wp_customize ) {
		$wp_customize->add_section(
	    'blain_typo_options',
	    array(
	        'title'     => __('Google Web Fonts','blain'),
	        'panel' => 'blain_design_panel',
	        'priority'  => 41,
	    )
	);
	
	$font_array = array('Cinzel','Playfair Display','HIND','Khula','Open Sans','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','Arimo','Bitter','Noto Sans');
	$fonts = array_combine($font_array, $font_array);
	
	$wp_customize->add_setting(
		'blain_title_font',
		array(
			'default'=> 'Cinzel',
			'sanitize_callback' => 'blain_sanitize_gfont' 
			)
	);
	
	function blain_sanitize_gfont( $input ) {
		if ( in_array($input, array('Cinzel','Playfair Display','HIND','Khula','Open Sans','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','Arimo','Bitter','Noto Sans') ) )
			return $input;
		else
			return 'blain';	
	}
	
	$wp_customize->add_control(
		'blain_title_font',array(
				'label' => __('Title','blain'),
				'settings' => 'blain_title_font',
				'section'  => 'blain_typo_options',
				'type' => 'select',
				'choices' => $fonts,
			)
	);
	
	$wp_customize->add_setting(
		'blain_body_font',
			array(	'default'=> 'Playfair Display',
					'sanitize_callback' => 'blain_sanitize_gfont' )
	);
	
	$wp_customize->add_control(
		'blain_body_font',array(
				'label' => __('Body','blain'),
				'settings' => 'blain_body_font',
				'section'  => 'blain_typo_options',
				'type' => 'select',
				'choices' => $fonts
			)
	);

}
add_action( 'customize_register', 'blain_customize_register_fonts' );