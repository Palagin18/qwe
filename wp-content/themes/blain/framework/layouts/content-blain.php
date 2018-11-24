<?php
/**
 * @package Hanne
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('grid blain grid_3_column col-md-4 col-sm-4 col-xs-12'); ?>>
<div class="featured-thumb col-md-12 col-sm-12">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('blain-pop-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
    <?php else: ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img alt="<?php the_title() ?>" src="<?php echo esc_html(get_template_directory_uri()."/assets/images/placeholder1.jpg"); ?>"></a>
    <?php endif; ?>
    <div class="postedon"><?php blain_posted_on_date(); ?></div>
</div><!--.featured-thumb-->

<div class="out-thumb col-md-12 col-sm-12">
    <a class="cat-link" href="<?php echo $category_link ?>"><?php echo $category_name ?></a>
    <header class="entry-header">
        <h3 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
    </header><!-- .entry-header -->
</div>
</article><!-- #post-## -->