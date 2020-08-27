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

<div class="geographies-section">
    <div class="container"> 
        <div class="detail-wrap">
            <h3 class="icon-before geographies-icon center-title"><?php echo get_the_title(); ?></h3>
            
            <?php $thecontent = get_the_content(); 
                    if(!empty($thecontent)){ 
            ?>
                <div class="detail-content"><?php the_content(); ?></div>
            <?php } ?>
        </div>
        <ul class="expertise-lists geographies-map clearfix">
            <?php 
                $args = array('post_type' => 'geographies', 'posts_per_page' => $posts_per_page, 'post_status' => 'publish', 'paged' => $paged );
                $query = new WP_Query( $args );
                while ( $query->have_posts() ) { $query->the_post();
                    $image = get_the_post_thumbnail_url(get_the_ID(),'medium');
            ?> 
                <li class="geographies-country">
                    <a href="<?php echo get_permalink(); ?>">
                        <img src="<?php echo  $image; ?>" alt="UAE"/>
                        <span class="country-txt"><?php echo get_the_title(); ?></span>
                        <div class="country-info clearfix">
                            <!-- <div class="emp-count"><strong><?php //echo get_field('employee_total'); ?></strong></div>
                            <div class="time"><strong><?php //echo get_field('time_frame'); ?></strong></div> -->
                            <div class="emp-count"><strong><?php echo get_field('hover_text'); ?></strong></div>
                        </div>
                    </a>
                </li>
            <?php } wp_reset_postdata();?>
            
        </ul>
        <?php //custom_pagination($query->max_num_pages, "", $paged); ?>
    </div>
</div>

<?php get_template_part('fields/testimonial-slider'); ?>

        


