<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package 
 */
?>

	</div><!-- #content -->
    <div class="footer-before"></div>
	<?php get_sidebar('footer'); ?>
	<footer id="colophon" class="site-footer title-font" role="contentinfo">
		<div class="site-info container">
			<?php printf( esc_html__( 'Theme Designed by %1$s.', 'blain' ), '<a target = "blank" href="'.esc_url("http://inkhive.com/").'" rel="nofollow">InkHive</a>' ); ?>
			<span class="sep"></span>
			<?php echo ( esc_html(get_theme_mod('blain_footer_text'))) == 'blain'  ? ('&copy; '.date_i18n( esc_html_e( 'Y', 'blain' ) ).' '.get_bloginfo('name').esc_html_e('. All Rights Reserved. ','blain')) : esc_html(get_theme_mod('blain_footer_text')); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
