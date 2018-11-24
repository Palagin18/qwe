<?php
/* The Template to Render the showcase
*
*
*/
?>
<?php if(get_theme_mod('blain_showcase_enable_set')):?>
<div id="showcase-z" class="featured-section-area">
    <div class="container">
        <?php if(get_theme_mod('blain_showcase_title')):?>
            <div class="section-title title-font">
                <span><?php echo esc_html(get_theme_mod('blain_showcase_title',__('Popular Articles','blain'))); ?></span>
            </div>
        <?php endif;?>
        <div id="curve"></div>
        <div class="showcase-wrapper">
            <div class="col-md-8 sec-left">
                <div class="showcase-item-wrapper-h">
	                <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url1')); ?>" title="<?php echo esc_html(get_theme_mod('blain_showcase_title1')." - ".get_theme_mod('blain_showcase_desc1')) ?>">
                    <div class="showcase-item1_img col-md-6 col-sm-6 col-xs-12"></div>
                </a>
                <div class="showcase-item1 hvr-rectangle-out col-md-6 col-sm-6 col-xs-12">
                    <div class="showcase-caption">
                        <?php if (get_theme_mod('blain_showcase_title1')) : ?>
                            <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url1')); ?>">
                                <div class="showcase-title"><?php echo esc_html(get_theme_mod('blain_showcase_title1')) ?></div>
                                <div class="showcase-desc"><span><?php echo esc_html(get_theme_mod('blain_showcase_desc1')) ?></span></div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
                
                <!---->
                <div class="showcase-item-wrapper-h">
                 <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url2')); ?>" title="<?php echo esc_html(get_theme_mod('blain_showcase_title2')." - ".get_theme_mod('blain_showcase_desc2')) ?>">
                   <div class="showcase-item2_img col-md-6 col-sm-6 col-xs-12"></div>
                </a>

                <div class="showcase-item2 hvr-rectangle-out col-md-6 col-sm-6 col-xs-12">
                    <div class="showcase-caption">
                        <?php if (get_theme_mod('blain_showcase_title2')) : ?>
                            <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url2')); ?>">
                                <div class="showcase-title"><?php echo esc_html(get_theme_mod('blain_showcase_title2')) ?></div>
                                <div class="showcase-desc"><span><?php echo esc_html(get_theme_mod('blain_showcase_desc2')) ?></span></div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                </div>

                <!---->
                <div class="showcase-item-wrapper-h">
                <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url3')); ?>" title="<?php echo esc_html(get_theme_mod('blain_showcase_title3')." - ".get_theme_mod('blain_showcase_desc3')) ?>">
                    <div class="showcase-item3_img col-md-6 col-sm-6 col-xs-12"></div>
                </a>
                <div class="showcase-item3 hvr-rectangle-out col-md-6 col-sm-6 col-xs-12">
                    <div class="showcase-caption">
                        <?php if (get_theme_mod('blain_showcase_title3')) : ?>
                            <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url3')); ?>">
                                <div class="showcase-title"><?php echo esc_html(get_theme_mod('blain_showcase_title3')) ?></div>
                                <div class="showcase-desc"><span><?php echo esc_html(get_theme_mod('blain_showcase_desc3')) ?></span></div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            </div>

            <!---->
            <div class="showcase-item-wrapper-l col-md-4 sec-right">
	            <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url4')); ?>" title="<?php echo esc_html(get_theme_mod('blain_showcase_title4')." - ".get_theme_mod('blain_showcase_desc4')) ?>">
                    <div class="showcase-item4_img col-md-12 col-sm-6 col-xs-12"></div>
                </a>
                <div class="showcase-item4 hvr-rectangle-out col-md-12 col-sm-6 col-xs-12">
                    <div class="showcase-caption">
                        <?php if (get_theme_mod('blain_showcase_title4')) : ?>
                            <a href="<?php echo esc_html(get_theme_mod('blain_showcase_url4')); ?>">
                                <div class="showcase-title"><?php echo esc_html(get_theme_mod('blain_showcase_title4')) ?></div>
                                <div class="showcase-desc"><span><?php echo esc_html(get_theme_mod('blain_showcase_desc4')) ?></span></div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>