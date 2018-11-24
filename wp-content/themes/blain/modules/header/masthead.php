<header id="masthead" class="site-header" role="banner">
    <div class="container masthead-inner">
        <div class="col-md-12 col-sm-12 logo-wrapper">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4 cus-logo">
                <?php if ( has_custom_logo() ) : ?>
                    <div id="site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php endif; ?>
                <div class="col-md-4 col-sm-4"></div>
            </div>
            <div class="col-md-12 col-sm-12 menu-wrapper">
                <div class="col-md-6 col-sm-6 menu-left">
                    <?php get_template_part('modules/navigation/primary-left','menu'); ?>
                </div>
                <div class="col-md-6 col-sm-6 menu-right">
                    <?php get_template_part('modules/navigation/primary-right','menu'); ?>
                </div>
                <div class="col-md-12 col-sm-12 menu-center">
                    <div id="center-menu">
                        <?php get_template_part('modules/navigation/primary-left','menu'); ?>
                        <?php get_template_part('modules/navigation/primary-right','menu'); ?>
                    </div>
                </div>
            </div>
        </div>
</header><!-- #masthead -->