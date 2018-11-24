<?php
function blain_customize_register_layouts( $wp_customize ) {
	// Layout and Design
	$wp_customize->add_panel( 'blain_design_panel', array(
	    'priority'       => 3,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Design & Layout','blain'),
	) );
	
	$wp_customize->add_section(
	    'blain_design_options',
	    array(
	        'title'     => __('Blog Layout','blain'),
	        'priority'  => 0,
	        'panel'     => 'blain_design_panel'
	    )
	);
	
	
	$wp_customize->add_setting(
		'blain_blog_layout',
		array( 'sanitize_callback' => 'blain_sanitize_blog_layout', 'default' => 'blain' )
	);
	
	function blain_sanitize_blog_layout( $input ) {
		if ( in_array($input, array('grid','grid_2_column','grid_3_column','blain') ) )
			return $input;
		else 
			return 'blain';	
	}
	
	$wp_customize->add_control(
		'blain_blog_layout',array(
				'label' => __('Select Layout','blain'),
				'description' => __('This is the Layout for your Recent Posts Page, Categories & Archives Pages. The Front Page of your site would use a Separate Layout.','blain'),
				'settings' => 'blain_blog_layout',
				'section'  => 'blain_design_options',
				'type' => 'select',
				'choices' => array(
						'blain' => __('Default Theme Layout','blain'),
						'grid' => __('Basic Blog Layout','blain'),
						'grid_2_column' => __('Grid - 2 Column','blain'),
						'grid_3_column' => __('Grid - 3 Column','blain'),
						
					)
			)
	);
	
	$wp_customize->add_section(
	    'blain_sidebar_options',
	    array(
	        'title'     => __('Sidebar Layout','blain'),
	        'priority'  => 0,
	        'panel'     => 'blain_design_panel'
	    )
	);
	
	$wp_customize->add_setting(
		'blain_disable_sidebar',
		array( 'sanitize_callback' => 'blain_sanitize_checkbox' )
	);
	
	$wp_customize->add_control(
			'blain_disable_sidebar', array(
		    'settings' => 'blain_disable_sidebar',
		    'label'    => __( 'Disable Sidebar Everywhere.','blain' ),
		    'section'  => 'blain_sidebar_options',
		    'type'     => 'checkbox',
		    'default'  => true
		)
	);
	
	$wp_customize->add_setting(
		'blain_disable_sidebar_home',
		array( 'sanitize_callback' => 'blain_sanitize_checkbox' )
	);
	
	$wp_customize->add_control(
			'blain_disable_sidebar_home', array(
		    'settings' => 'blain_disable_sidebar_home',
		    'label'    => __( 'Disable Sidebar on Home/Blog.','blain' ),
		    'section'  => 'blain_sidebar_options',
		    'type'     => 'checkbox',
		    'active_callback' => 'blain_show_sidebar_options',
		    'default'  => true
		)
	);
	
	$wp_customize->add_setting(
		'blain_disable_sidebar_front',
		array( 'sanitize_callback' => 'blain_sanitize_checkbox' )
	);
	
	$wp_customize->add_control(
			'blain_disable_sidebar_front', array(
		    'settings' => 'blain_disable_sidebar_front',
		    'label'    => __( 'Disable Sidebar on Front Page.','blain' ),
		    'section'  => 'blain_sidebar_options',
		    'type'     => 'checkbox',
		    'active_callback' => 'blain_show_sidebar_options',
		    'default'  => true
		)
	);
	
	
	$wp_customize->add_setting(
		'blain_sidebar_width',
		array(
			'default' => 4,
		    'sanitize_callback' => 'blain_sanitize_positive_number' )
	);
	
	$wp_customize->add_control(
			'blain_sidebar_width', array(
		    'settings' => 'blain_sidebar_width',
		    'label'    => __( 'Sidebar Width','blain' ),
		    'description' => __('Min: 25%, Default: 33%, Max: 40%','blain'),
		    'section'  => 'blain_sidebar_options',
		    'type'     => 'range',
		    'active_callback' => 'blain_show_sidebar_options',
		    'input_attrs' => array(
		        'min'   => 3,
		        'max'   => 5,
		        'step'  => 1,
		        'class' => 'sidebar-width-range',
		        'style' => 'color: #0a0',
		    ),
		)
	);
	
	/* Active Callback Function */
	function blain_show_sidebar_options($control) {
	   
	    $option = $control->manager->get_setting('blain_disable_sidebar');
	    return $option->value() == false ;
	    
	}
	
	function blain_sanitize_text( $input ) {
	    return wp_kses_post( force_balance_tags( $input ) );
	}
	
	$wp_customize-> add_section(
    'blain_custom_footer',
    array(
    	'title'			=> __('Custom Footer Text','blain'),
    	'description'	=> __('Enter your Own Copyright Text.','blain'),
    	'priority'		=> 11,
    	'panel'			=> 'blain_design_panel'
    	)
    );
    
	$wp_customize->add_setting(
	'blain_footer_text',
	array(
		'default'		=> 'blain',
		'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	
	$wp_customize->add_control(	 
	       'blain_footer_text',
	        array(
	            'section' => 'blain_custom_footer',
	            'settings' => 'blain_footer_text',
	            'type' => 'text'
	        )
	);
//footer bg images
    $wp_customize->add_section(
        'blain_footer_bg_sec',
        array(
            'title'     => __('Footer Background Image','blain'),
            'priority'  => 50,
            'panel'     => 'blain_design_panel'
        )
    );
	$wp_customize->add_setting('blain_footer_bg_image',
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'blain_footer_bg_image',
            array (
                'setting' => 'blain_footer_bg_image',
                'section' => 'blain_footer_bg_sec',
                'label' => __('Footer Background Images', 'blain'),
                'description' => __('Upload an image to display for Footer background', 'blain'),
            )
        )
    );


}
add_action( 'customize_register', 'blain_customize_register_layouts' );