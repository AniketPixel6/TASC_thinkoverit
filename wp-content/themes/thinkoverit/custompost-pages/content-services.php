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
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $posts_per_page = 20;    
?>

<div class="services-section container">

    <div class="detail-wrap">
        <h3 class="icon-before geographies-icon center-title"><?php echo get_the_title(); ?></h3>
        
            <?php $thecontent = get_the_content(); 
                if(!empty($thecontent)){ 
            ?>
                <div class="detail-content"><?php the_content(); ?></div>
            <?php } ?>
    </div>

    <div class="service-wrapper">
        <div class="service-box">
            <ul class="expertise-lists clearfix services-list">
				<?php 
                $args = array('post_type' => 'services', 'posts_per_page' => $posts_per_page, 'post_status' => 'publish', 'post_parent' => 0, 'paged' => $paged );
                $loop = new WP_Query( $args );               
                while ( $loop->have_posts() ) : $loop->the_post();
                    $image = get_the_post_thumbnail_url(get_the_ID(),'medium');
            ?> 
                <li>
                    <a href="<?php echo get_permalink(); ?>">
                        <img src="<?php echo $image; ?>">
                        <div class="list-text"><?php echo get_the_title(); ?></div>
                        <a href="<?php echo get_permalink(); ?>" class="list-box">
                            <h4><?php echo get_the_title(); ?></h4>
                            <p><?php echo theme_the_excerpt( get_the_excerpt(), 50); ?></p>
                            <span class="btn list-box-btn lower-case">Read More</span>
                        </a>
                    </a>
                </li>
                <?php endwhile;  wp_reset_postdata(); ?>
            </ul>
        </div> 
         <?php //custom_pagination($query->max_num_pages, "", $paged); ?>
    </div>
</div>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>



