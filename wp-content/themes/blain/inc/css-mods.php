<?php
/* 
**   Custom Modifcations in CSS depending on user settings.
*/

function blain_custom_css_mods() {

	$custom_css = "";
		
	if ( get_theme_mod('blain_title_font','Cinzel') ) :
		$custom_css .= ".title-font, h1, h2 { font-family: ".esc_html(get_theme_mod('blain_title_font','Cinzel'))."; }";
	endif;
	
	if ( get_theme_mod('blain_body_font','Playfair Display') ) :
		$custom_css .= "body { font-family: ".esc_html(get_theme_mod('blain_body_font','Playfair Display'))."; }";
	endif;
	
	if ( get_header_textcolor() ) :
		$custom_css .= "#masthead h1.site-title a { color: #".get_header_textcolor()."; }";
	endif;
	
	
	if ( get_theme_mod('blain_header_desccolor') ) :
		$custom_css .= "#hero p.hero-desc { color: ".esc_html(get_theme_mod('blain_header_desccolor','#ffffff'))."; }";
	endif;
	
	
	if ( !display_header_text() ) :
		$custom_css .= "#hero .hero-title, #hero .hero-desc { display: none; }";
	endif;

   // Showcase
   
   if (get_theme_mod('blain_fshowcase1_image') != '') :
   		$custom_css .= '.showcase-item1_img {
   							background-image: url("' . get_theme_mod('blain_fshowcase1_image') . '"); 
   						}';
   endif;
   
   if (get_theme_mod('blain_fshowcase2_image') != '') :
   		$custom_css .= '.showcase-item2_img {
   							background-image: url("' . get_theme_mod('blain_fshowcase2_image') . '"); 
   						}';
   endif;
   
   if (get_theme_mod('blain_fshowcase3_image') != '') :
   		$custom_css .= '.showcase-item3_img {
   							background-image: url("' . get_theme_mod('blain_fshowcase3_image') . '"); 
   						}';
   endif;
   
   if (get_theme_mod('blain_fshowcase4_image') != '') :
   		$custom_css .= '.showcase-item4_img {
   							background-image: url("' . get_theme_mod('blain_fshowcase4_image') . '"); 
   						}';
   endif;

    //footer background images
    if(get_theme_mod('blain_footer_bg_image')):
        $custom_css .= "#footer-sidebar {background: url(".get_theme_mod('blain_footer_bg_image')."); 
        background-size:cover;
        background-position: center;}";
    endif;
    
    if (get_theme_mod('blain_footer_bg_image')) :
    	$custom_css .= ".footer-inner:before{
								  width: 100%;
								  content: '';
								  position: absolute;
								  left: 0;
								  top: 0;
								  border-top: solid 50px #" . get_background_color() . ";
								  border-left: solid 50vw transparent;
								  border-right: solid 50vw transparent;
								  background: transparent;
								  z-index: 7;
							}
						}";
	endif;

    if(!get_theme_mod('blain_footer_bg_image')):
        $custom_css .= "#footer-sidebar {background: rgba(8, 8, 8, 0.8);}";
    endif;

    //social icons
    if(!get_theme_mod('blain_social_enable')):
        $custom_css .= " #showcase-z:before{
						  width: 100%;
						  content: '';
						  position: absolute;
						  left: 0;
						  bottom: 100%;
						  border-top: solid 50px transparent;
						  border-left: solid 50vw #479ea1;
						  border-right: solid 50vw #479ea1;
						  background: transparent;
						  z-index: 7;
					  }";
    endif;
    
    
//sidebar layout
    //disable on home
    if(is_home() && get_theme_mod('blain_disable_sidebar_home','false')):
        $custom_css .= ".home #secondary{ display:none}
                        .home #primary{ width:100%}";
        endif;

    //disable on front page
    if(is_front_page() && get_theme_mod('blain_disable_sidebar_front','false')):
        $custom_css .= "body #secondary{ display:none}
                        body #primary-mono{ width:100%}";
    endif;
    //disable anywhere
    if(get_theme_mod('blain_disable_sidebar','false')):
        $custom_css .= "#secondary{ display: none}
                        #primary{ width: 100%}
                        #primary-mono{ width: 100%}";

    endif;
    wp_add_inline_style( 'blain-main-theme-style', wp_strip_all_tags($custom_css) );
	
}

add_action('wp_enqueue_scripts', 'blain_custom_css_mods');