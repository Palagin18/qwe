<div id="hero" data-parallax="scroll" data-speed="0.15" data-image-src="<?php echo esc_html(get_header_image()) ?>">
	<div class="layer"></div>
	<div class="hero-content">
		<div class="container">
            <?php get_template_part('modules/navigation/primary-mobile','menu');?>
			<?php if (get_theme_mod('blain_heading')) : ?>
				<h3 class="hero-title title-font">
	                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	                    <?php echo get_bloginfo('name') ?>
	                </a>
	            </h3>
			<?php endif; ?>
				<p class="hero-desc">
					<?php echo get_bloginfo('description'); ?>
				</p>
        <?php if(is_home() && is_front_page()):?>
            <?php if (get_theme_mod('blain_btn')) : ?>
			<div class="hero-button-wrapper">
				<a class="hero-button hvr-icon-wobble-horizontal" href="<?php echo esc_url(get_theme_mod('blain_h_url')) ?>"><?php echo esc_html(get_theme_mod('blain_btn')) ?></a>
            </div>
			<?php endif; ?>
        <?php endif;?>
		</div>

            <span id="searchicon" class="fa fa-search"></span>

	</div>
</div>
<?php //endif; ?>

