<?php if(!get_field('disable_career_advice') ){ ?>
<?php 
    $advices = get_field('career_advice');
    if(isset($advices) && $advices[0]){
        $adviceLeft = $advices[0];
?>
    <div class="success-section-wrap">
        <div class="success-section employee-landing clearfix">
            <div class="success-img-wrap">
                <?php
                    if(has_post_thumbnail($adviceLeft->ID)) {
                        $image = get_the_post_thumbnail_url($adviceLeft->ID, 'medium');
                    }else{
                        $image = get_bloginfo('stylesheet_directory').'/images/success-stories-img.png';
                    }
                ?> 
                    <img class="success-img" src="<?php echo $image; ?>" alt="success-stories">
            </div>
            <div class="success-content">
                <div class="success-right-inner">
                    <?php if(get_field('career_advice_title')) { ?>
                       <h3 class="icon-before success-icon"><?php the_field('career_advice_title'); ?></h3>
                    <?php } ?>
                    <h4><?php echo get_the_title($adviceLeft); ?></h4>
                    <p><?php echo theme_the_excerpt(get_the_excerpt($adviceLeft), 25); ?></p>
                    <div class="btn-wrap">
                        <a href="<?php echo get_permalink($adviceLeft); ?>" class="btn blue-btn lower-case"><?php _e("Read More", 'tasc'); ?></a>
                        <a href="<?php echo get_field('career_advice_link'); ?>" class="btn trnsprnt-btn-blue lower-case"><?php _e("See All", 'tasc'); ?>l</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php } ?>