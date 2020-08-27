<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>
<?php $args = array('post_type' => 'services', 'posts_per_page' => 20, 'post_status' => 'publish', 'post_parent' => 0, 'paged' => $paged ); ?>
<div class="services-section container">
    <h3 class="icon-before geographies-icon"><?php echo $args['post_type']; ?></h3>
    <div class="service-wrapper">
        <div class="service-box">
            <ul class="expertise-lists clearfix services-list">
                <?php 
                $loop = new WP_Query( $args );               
                while ( $loop->have_posts() ) : $loop->the_post();
                    $image = get_the_post_thumbnail_url(get_the_ID(),'medium');
            ?> 
                <li>
                    <a href="<?php echo get_permalink(); ?>">
                        <img src="<?php echo $image; ?>">
                        <div class="list-text"><?php echo get_the_title(); ?></div>
                        <div class="list-box">
                            <h4><?php echo get_the_title(); ?></h4>
                            <div><?php echo theme_the_excerpt( get_the_excerpt(), 50); ?></div>
                            <a href="<?php echo get_permalink(); ?>" class="btn list-box-btn lower-case">Read More</a>
                        </div>
                    </a>
                </li>
                <?php endwhile;  wp_reset_postdata(); ?>
            </ul>
        </div> 
         <?php //custom_pagination($query->max_num_pages, "", $paged); ?>
    </div>
</div>

<?php if(!get_field('expertise_disable') ){
    $terms = get_terms( array('expertise_categories') ); 
?>
    <div class="expertise-section">
        <div class="expertise-banner" style="background: url('<?php echo get_field('expertise_banner'); ?>') 0 0 no-repeat;background-size: cover;"></div>
        <div class="expertise-wrap employee-wrap clearfix container">
            <div class="sec-bg"></div>
                <div class="left-exp">
                    <h3><?php echo get_field('expertise_title'); ?></h3>
                    <div class="mCustomScrollbar expertise-description" data-mcs-theme="dark"><?php echo get_field('summary'); ?></div>
                    <div class="btn-wrapper">
                        <?php  foreach($terms as $key => $term){ ?>
                            <?php
                                if($key%2 == 0){
                                    $btnClass = 'trnsprnt-btn-blue';
                                }else{
                                    $btnClass = 'trnsprnt-btn-green';
                                    $jobClass = 'btn-job';
                                }
                            ?>
                            <div class="browse-<?php echo $term->slug; ?> <?php echo $jobClass; ?>">
                                <a data-target="<?php echo $term->slug; ?>" href="#right-exp" class="btn <?php echo $btnClass; ?> <?php echo $jobClass; ?> btn-lg tab-buttons" id="<?php echo $term->slug; ?>">Browse by <?php echo $term->name; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="right-exp" id="right-exp">
                    <?php 
                    foreach($terms as $term){
                        $args = array(  'post_type' => 'expertise', 
                                        'posts_per_page' => 20,
                                        'post_status' => 'publish',
                                        'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'expertise_categories',
                                                            'field' => 'term_id',
                                                            'terms' => $term->term_id,
                                                            'name' => $term->term_name,
                                                        )
                                                    ) );
                        $industries = get_posts( $args );   
                    ?>
                        <div class = "<?php if($term->slug == 'industries') { echo 'ind_wrap'; } else {echo 'job_role_wrap';}?> clearfix">
                            <?php foreach($industries as $key=>$industry){ ?>
                                <div class="exp-box tab-items <?php echo $term->slug; ?> <?php if($key%2) echo "gray-opaque"; else echo "opaque";?>"> 
                                    <div class="content-box">
                                        <a href="<?php echo get_permalink($industry->ID); ?>" class="content-box-wrap">
                                            <div class="exp-logo">
                                                <img src="<?php echo get_field('expertise_logo_image', $industry->ID); ?>"><h5><?php echo  get_the_title($industry); ?></h5>
                                            </div>
                                            <div class="content-txt">
                                                <p><?php echo theme_the_excerpt( get_the_excerpt($industry), 30); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="<?php echo get_permalink($industry->ID); ?>" class="exp-logo">
                                        <img src="<?php echo get_field('expertise_logo_image', $industry->ID); ?>"><h5><?php echo  get_the_title($industry); ?></h5>
                                    </a>
                                </div> 
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>  
        </div>
    </div>
<?php } ?>


<?php get_template_part('fields/success-field'); ?>

<?php get_template_part('fields/career-advice-single'); ?>

<?php get_template_part('fields/survey-field'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>



