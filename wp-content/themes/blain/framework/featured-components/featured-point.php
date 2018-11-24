<?php if(get_theme_mod('blain_featured_point_enable')&& is_front_page()):?>
<div id="featured-point">
    <div class="container">
        <?php if ( get_theme_mod('blain_featured_point_enable')) : ?>
            <div class="popular-articles col-md-12">
                <?php if(get_theme_mod('blain_featured_point_title')):?>
                    <div class="section-title title-font">
                        <span><?php echo esc_html(get_theme_mod('blain_featured_point_title',__('Popular Articles','blain'))); ?></span>
                    </div>
                    <div id="curve"></div>
                <?php endif;?>

                <?php
                $args = array( 'posts_per_page' => 3, 'cat' => get_theme_mod('blain_featured_point_cat') );
                
                $lastposts	=	new WP_Query( $args );
                
                if ($lastposts -> have_posts() ) : ?>

				<?php while ($lastposts -> have_posts() ) : $lastposts -> the_post() ; ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 imgcontainer">
                        <div class="popimage">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('blain-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
                            <?php else : ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img alt="<?php the_title() ?>" src="<?php echo esc_html(get_template_directory_uri()."/assets/images/placeholder2.jpg"); ?>"></a>
                            <?php endif; ?>
                            <div class="titledesc">
                                <h2><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h2>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>

            </div>

        <?php endif; ?>
    </div><!--.container-->
</div>
<?php endif;?>