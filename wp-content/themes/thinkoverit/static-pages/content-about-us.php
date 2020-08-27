<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>

<?php
    $vision_lists = get_field('about_vision_listing');
    $ceo_infos = get_field('about_ceo_info');
    $members = get_field('about_members_info');
?>

<?php if(!get_field('disable_detailed_text') ){ ?>
    <div class="about-section">
        <div class="container clearfix">
            <?php if(get_field('text_heading')) { ?>
               <h3 class="icon-before geographies-icon"><?php the_field('text_heading'); ?></h3>
            <?php } ?>
            
            <!-- <div class="about-right">
                <div class="about-video"><img src="<?php //the_field('text_image'); ?>" alt=""></div>
            </div> -->
            <div class="about-right">
                <a data-fancybox="video" href="<?php the_field('text_video'); ?>">
                    <video poster="<?php the_field('text_image'); ?>">
                        <source src="#" type="video/mp4">
                    </video>
                    <span class="video-icon"></span>
                </a>    
            </div>
            <div class="about-left">
                <?php the_field('text_para'); ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if(!get_field('disable_history_list') ){ ?>
    <div class="history-section">
        <div class="container">
            <?php if(get_field('history_title')) { ?>
               <h3 class="icon-before history-ico"><?php echo get_field('history_title');?></h3>
            <?php } ?>
            <ul class="history-list clearfix">
                <?php $historyLists = get_field('history_list');   
                if(is_array($historyLists) && count($historyLists)){ ?>
                    <?php  foreach($historyLists as $historyList){ ?>
                        <li>
                            <?php if($historyList['year']) { ?>
                                <a href="#" class="history-inner">
                                    <strong><?php echo $historyList['year']; ?></strong>
                                    <img src="<?php echo $historyList['blue_logo']; ?>" class="before-hover" alt="image">
                                    <img src="<?php echo $historyList['hover_logo']; ?>" class="on-hover-img" alt="image">
                                    <span class="address"><?php echo $historyList['discription']; ?></span>
                                </a>
                            <?php } ?>
                        </li>
                <?php } } ?>
            </ul>
        </div>
    </div>
<?php } ?>

<?php if(!get_field('disable_about_tabbing') ){ ?>
    <div class="vision-section">
        <div class="container">
            <div class="tabs">
                <div class="tab-nav">
                    <ul class="tab-links clearfix">
                        <li class="active"><a href="#tab1"><?php the_field('about_vision_label'); ?></a></li>
                        <li><a href="#tab2"><?php the_field('about_ceo_label'); ?></a></li>
                        <?php if($members) { ?> <li><a href="#tab3"><?php the_field('about_member_label'); ?></a></li><?php } ?>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tab1" class="tab active solution-section-wrap">
                        <div class="tab-content-txt"><?php the_field('about_vision_description'); ?></div>
                        
                        <?php if(is_array($vision_lists) && count($vision_lists)){ ?>
                        <div class="solution-block-wrap clearfix">
                            <?php foreach($vision_lists as $vision_list){ ?>
                                <div class="solution-block staff-block">
                                    <div class="solution-inner-block">
                                        <img src="<?php echo $vision_list['image']; ?>" class="solution-logo">        
                                        <h4 class="solution-title"><?php echo $vision_list['title']; ?></h4>
                                    </div>      
                                    <div><?php echo $vision_list['description']; ?></div>
                                </div>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div id="tab2" class="tab solution-section-wrap">
                        <div class="founder-wrapper clearfix">
                            <?php 
                                if(isset($ceo_infos[0])){
                                $ceo_info = $ceo_infos[0];
                                $content_post = get_post($ceo_info->ID);
                            ?>
                            <div class="left-block">
                                <?php if(has_post_thumbnail($ceo_info->ID)) {
					                $image = get_the_post_thumbnail_url($ceo_info->ID, 'medium');
                                ?>
                                    <img src="<?php echo $image; ?>" alt="<?php echo get_the_title($ceo_info); ?>">
                                <?php }else{ ?>
                                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/mahesh-bg.png" alt="success-stories">
                                <?php } ?>
                                <div class="founder-info">
                                    <h3><?php echo get_the_title($ceo_info); ?></h3>
                                    <span><?php echo get_field('designation', $ceo_info->ID) ?></span>
                                </div>
                            </div>
                            <div class="right-block detail-content"><?php echo apply_filters('the_content', $content_post->post_content); ?></div>
                            <?php } ?>
                        </div>
                    </div>

                    <div id="tab3" class="tab">
                        <div class="team-box-wrapper clearfix">
                            
                            <?php if($members) { foreach($members as $member){ ?>
                                <div class="team-box">
                                    <?php if(has_post_thumbnail($member->ID)) { 
											$image = get_the_post_thumbnail_url($member->ID, 'medium');
                                    ?>
                                        <img src="<?php echo $image; ?>" alt="<?php echo get_the_title($ceo_info); ?>" >
                                    <?php } else{ ?>
                                        <img src="<?php bloginfo('stylesheet_directory') ?>/images/img-founder.jpg" alt="success-stories">
                                    <?php } ?>
                                    <div class="box-txt">
                                        <h4><?php echo get_the_title($member); ?></h4>
                                        <span><?php echo get_field('designation', $member->ID); ?></span>
                                        <p><?php echo theme_the_excerpt($member, 30); ?></p>
                                    </div>
                                    <div class="team-label">
                                        <h4><?php echo get_the_title($member); ?></h4>
                                        <span><?php echo get_field('designation', $member->ID); ?></span>
                                    </div>
                                </div>
                            <?php } } ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php get_template_part('fields/success-field'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>


<script>
    jQuery(document).ready(function() {
        jQuery('.tabs .tab-links a').on('click', function(e)  {
            var currentAttrValue = jQuery(this).attr('href');
            // Show/Hide Tabs
            jQuery('.tabs ' +currentAttrValue).show().siblings().hide();
            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
            e.preventDefault();
        });

        
    });
</script>

