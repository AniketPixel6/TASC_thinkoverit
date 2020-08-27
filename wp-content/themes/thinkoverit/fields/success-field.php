<?php if(!get_field('success_disable') ){ ?>
    <?php 
        $stories = get_field('success_story');
        $image = get_field('success_image');
        $summary = get_field('success_summary');
        if(isset($stories[0])){
            $story = $stories[0];
    ?>
    <div class="success-section-wrap" >
        <div class="success-section clearfix">
            <div class="success-img-wrap">
    			<?php
    				if(!$image && has_post_thumbnail($story->ID)) $image = get_the_post_thumbnail_url($story->ID, 'large');
    				if(empty($image)) $image = get_bloginfo('stylesheet_directory').'/images/success-stories-img.png';
    			?> 
                <img class="success-img" src="<?php echo $image; ?>" alt="success-stories">
            </div>
            <div class="success-content">
                <div class="success-right-inner">
                    <?php if(get_field('success_title')) { ?>
                        <h3 class="icon-before success-icon"><?php the_field('success_title'); ?></h3>
                    <?php } ?>
                    <h4><?php echo get_the_title($story); ?></h4>
                    <p><?php echo theme_the_excerpt(get_the_excerpt($story->ID), 25); ?></p>
                    <div class="btn-wrap">
                        <a href="<?php echo get_permalink($story); ?>" class="btn blue-btn lower-case">Read More</a> 
                        <a href="<?php echo get_field('succces_listing_link'); ?>" class="btn trnsprnt-btn-blue lower-case">See All</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } ?>

