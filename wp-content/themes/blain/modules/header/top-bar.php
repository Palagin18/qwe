<div id="top-bar">
	<div class="container top-bar-inner">
        <div class="col-md-5 col-sm-5 col-xs-12 site-desc">
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-5 col-sm-5 col-xs-12 site-contact-info">
            <div id="contact-icons">
                <?php if (get_theme_mod('blain_mailid')) : ?>
                <div class="icon">
                    <span class="fa fa-envelope"></span>
                     <span class="value"><a href="mailto:<?php echo esc_html(get_theme_mod('blain_mailid')); ?>"> <?php echo esc_html(get_theme_mod('blain_mailid'));?></a></span>
                </div>
                <?php endif; ?>
                <?php if (get_theme_mod('blain_phone')) : ?>
                <div class="icon">
                    <span class="fa fa-phone"></span>
                    <span class="value"><a href="tel:<?php echo esc_html(get_theme_mod('blain_phone')); ?>">
                        <?php echo esc_html(get_theme_mod('blain_phone')); ?></a></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
	</div>
</div>