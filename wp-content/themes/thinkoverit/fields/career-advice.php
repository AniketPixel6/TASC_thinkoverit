<?php if(!get_field('disable_career_advice') ){ 

    $advices = get_field('career_advice');

    if(is_array($advices) && count($advices)){ ?>
    <div class="success-section-wrap">
        <?php foreach ($advices as $key => $advice) { ?>
            <div class="success-section employee-landing clearfix">
                <div class="success-img-wrap">
                <?php
                    if(has_post_thumbnail($advice->ID)) {
                        $image = get_the_post_thumbnail_url($advice->ID,'medium');
                     ?> 
                        <img src="<?php echo $image; ?>" alt="image">
                    <?php }else{ ?>
                        <img class="success-img" src="<?php bloginfo('stylesheet_directory') ?>/images/success-stories-img.png" alt="success-stories">
                    <?php } ?>
                </div>
                <div class="success-content">
                    <div class="success-right-inner">
                        <?php if(get_field('career_advice_title')) { ?>
                            <h3 class="icon-before success-icon"><?php the_field('career_advice_title'); ?></h3>
                        <?php } ?>
                        <h4><?php echo get_the_title($advice); ?></h4>
                        <p><?php echo theme_the_excerpt(get_the_excerpt($advice), 25); ?></p>
                        <div class="btn-wrap">
                            <a href="<?php echo get_permalink($advice); ?>" class="btn blue-btn lower-case">Read More</a> 
                            <a href="<?php echo get_field('career_advice_link'); ?>" class="btn trnsprnt-btn-blue lower-case">See All</a>
                        </div>  
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    
<?php } } ?>

