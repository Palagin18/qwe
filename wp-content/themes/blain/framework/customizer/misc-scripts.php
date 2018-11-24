<?php
function blain_customize_register_misc( $wp_customize ) {
	$wp_customize->add_section(
	    'blain_sec_upgrade',
	    array(
	        'title'     => __('Blain - Help & Support','blain'),
	        'priority'  => 1,
	    )
	);
	
	$wp_customize->add_setting(
			'blain_upgrade',
			array( 'sanitize_callback' => 'esc_textarea' )
		);
			
	$wp_customize->add_control(
	    new Hanne_WP_Customize_Upgrade_Control(
	        $wp_customize,
	        'blain_upgrade',
	        array(
	            'label' => __('Free Email Support','blain'),
	            'description' => __('Currently We are Offering Free Email Support with our theme. If you have any queries or require help please <a href="https://inkhive.com/product/blain/">Read our FAQs</a> and if your problem is still not solved then contact us. <br><br>','blain'),
	            'section' => 'blain_sec_upgrade',
	            'settings' => 'blain_upgrade',			       
	        )
		)
	);
}
add_action( 'customize_register', 'blain_customize_register_misc' );