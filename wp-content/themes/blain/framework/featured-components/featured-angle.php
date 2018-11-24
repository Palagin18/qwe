<?php if(get_theme_mod('blain_featured_angle_enable')):?>
<div id="featured-angle">
    <div class="container">
    <?php if ( get_theme_mod('blain_featured_angle_enable',true) || is_front_page() ) : ?>
            <div class="popular-articles col-md-12">
                <?php if(get_theme_mod('blain_featured_angle_title')):?>
                    <div class="section-title title-font">
                        <span><?php echo esc_html(get_theme_mod('blain_featured_angle_title',__('Popular Articles','blain'))); ?></span>
                    </div>
                <?php endif;?>
                <div class="container">
                <div id="curve"></div>
                </div>
                <?php /* Start the Loop */ $count=0; ?>
                <?php
                $args = array( 'posts_per_page' => 3, 'cat' => get_theme_mod('blain_featured_point_cat') );
                
                $lastposts	=	new WP_Query( $args );
                
                if ($lastposts -> have_posts() ) : ?>

				<?php while ($lastposts -> have_posts() ) : $lastposts -> the_post() ; ?>
                <a href="<?php the_permalink()?>">
                <div class="col-md-4 col-sm-4 col-xs-12 imgcontainer">
                        <div class="popimage">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink()?>" title="<?php the_title() ?>"><?php the_post_thumbnail('blain-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
                            <?php else : ?>
                                <a href="<?php the_permalink()?>" title="<?php the_title() ?>"><img alt="<?php the_title() ?>" src="<?php echo esc_html(get_template_directory_uri()."/assets/images/placeholder2.jpg"); ?>"></a>
                            <?php endif; ?>
                        </div>
                        <div class="titledesc">
                            <?php $a= get_the_title();  $ttl_len = strlen($a); ?>
                            <?php if($ttl_len >=  35): ?>
                                <h3><a  title="<?php echo $a;?>"><?php echo substr($a,0,30).($a ? "..." : "" );?></a></h3>
                            <?php else: ?>
                            <h3><a href="<?php the_permalink()?>" title="<?php echo $a; ?>"><?php echo $a; ?></a></h3>
                            <?php endif; ?>
                            <a href="<?php the_permalink()?>">

                                <p class="description">
                                    <?php echo esc_html(substr(get_the_excerpt(),0,400).(get_the_excerpt() ? "..." : "" )); ?>
                                </p>
                            </a>

                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
                    
                <?php wp_reset_postdata(); ?>
                
                <?php endif; ?>
                <div class="featured-angle-after"></div>
            </div>

        <?php endif; ?>
</div>
</div>
<?php endif;?>