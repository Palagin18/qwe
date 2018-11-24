<?php
function blain_customize_register_social( $wp_customize ) {
		// Social Icons
	$wp_customize->add_section('blain_social_section', array(
			'title' => __('Social Icons','blain'),
			'priority' => 44 ,
			'panel' => 'blain_header_panel'
	));
	//enable/disable
    $wp_customize->add_setting(
        'blain_social_enable',
        array( 'sanitize_callback' => 'blain_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'blain_social_enable', array(
            'settings' => 'blain_social_enable',
            'label'    => __( 'Enable Social Icons.', 'blain' ),
            'section'  => 'blain_social_section',
            'type'     => 'checkbox',
        )
    );
	$social_networks = array( //Redefinied in Sanitization Function.
					'none' => __('-','blain'),
					'facebook' => __('Facebook','blain'),
					'twitter' => __('Twitter','blain'),
					'google-plus' => __('Google Plus','blain'),
					'instagram' => __('Instagram','blain'),
					'rss' => __('RSS Feeds','blain'),
					'vine' => __('Vine','blain'),
					'vimeo-square' => __('Vimeo','blain'),
					'youtube' => __('Youtube','blain'),
					'flickr' => __('Flickr','blain'),
				);
				
	$social_count = count($social_networks);
				
	for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :
			
		$wp_customize->add_setting(
			'blain_social_'.$x, array(
				'sanitize_callback' => 'blain_sanitize_social',
				'default' => 'none'
			));

		$wp_customize->add_control( 'blain_social_'.$x, array(
					'settings' => 'blain_social_'.$x,
					'label' => __('Icon ','blain').$x,
					'section' => 'blain_social_section',
					'type' => 'select',
					'choices' => $social_networks,			
		));
		
		$wp_customize->add_setting(
			'blain_social_url'.$x, array(
				'sanitize_callback' => 'esc_url_raw'
			));

		$wp_customize->add_control( 'blain_social_url'.$x, array(
					'settings' => 'blain_social_url'.$x,
					'description' => __('Icon ','blain').$x.__(' Url','blain'),
					'section' => 'blain_social_section',
					'type' => 'url',
					'choices' => $social_networks,			
		));
		
	endfor;
	
	function blain_sanitize_social( $input ) {
		$social_networks = array(
					'none' ,
					'facebook',
					'twitter',
					'google-plus',
					'instagram',
					'rss',
					'vine',
					'vimeo-square',
					'youtube',
					'flickr'
				);
		if ( in_array($input, $social_networks) )
			return $input;
		else
			return 'blain';	
	}
}
add_action( 'customize_register', 'blain_customize_register_social' );