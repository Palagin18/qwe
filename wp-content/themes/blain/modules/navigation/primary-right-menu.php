<nav id="site-right-navigation" class="main-navigation col title-font" role="navigation">
    <?php
    // Get the Appropriate Walker First.
    $walker = has_nav_menu('primary-right') ? new blain_Menu_With_Icon : '';
    //Display the Menu.
    wp_nav_menu( array( 'theme_location' => 'primary-right', 'walker' => $walker ) ); ?>
</nav><!-- #site-navigation -->
