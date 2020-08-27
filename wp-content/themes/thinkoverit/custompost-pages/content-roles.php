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
<div class="our-expertise-section">
	<div class="container clearfix">
		<div class="detail-wrap">
           <h3 class="icon-before expertise-icon"><?php echo get_the_title(); ?></h3>
            
             <?php $thecontent = get_the_content(); 
                if(!empty($thecontent)){ 
            ?>
                <div class="detail-content"><?php the_content(); ?></div>
            <?php } ?>
        </div>
		
	    <div class="tab-content">
			<div id="<?php echo $term->slug; ?>" class="tab">
				<ul class="expertise-lists">
					<?php 
	                	$args = array(  'post_type' => 'roles', 
										'posts_per_page' => $posts_per_page,
										'post_status' => 'publish',
										'paged' => $paged);
	                	$query = new WP_Query( $args );
						while ( $query->have_posts() ) {
							 $query->the_post();
		                     $image = get_the_post_thumbnail_url(get_the_ID(),'medium');

                	?>
							<li><a href="<?php echo get_permalink(); ?>"><img src="<?php echo  $image; ?>"><div class="list-text"><?php echo get_the_title($expertise_list); ?></div></a></li>
					<?php } wp_reset_postdata();?>
				</ul>
			</div>
			<?php //custom_pagination($query->max_num_pages, "", $paged); ?>
		</div>
	</div>
</div>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>


