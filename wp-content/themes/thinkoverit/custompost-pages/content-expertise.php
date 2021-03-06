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
	$terms = get_terms( array('expertise_categories') ); 

?>
<div class="our-expertise-section">
	<div class="container clearfix">
		<div class="detail-wrap">
			<h3 class="icon-before expertise-icon center-title">Our <?php echo get_the_title(); ?></h3>
            <?php $thecontent = get_the_content(); 
                if(!empty($thecontent)){ 
            ?>
                <div class="detail-content"><?php the_content(); ?></div>
            <?php } ?>
		</div>
		<div class="tabs">
			<div class="tab-nav">
				<ul class="tab-links clearfix">
					 <?php  foreach($terms as $term){ ?>
						<li><a href="<?php echo $term->slug; ?>">Browse by <?php echo $term->name; ?></a></li>
					<?php } ?>
				</ul>
			</div>
            <div class="tab-content">
            	<?php foreach($terms as $term){ ?>
					<div id="<?php echo $term->slug; ?>" class="tab">
						<ul class="expertise-lists">
							<?php 
			                	$args = array(  'post_type' => 'expertise', 
												'posts_per_page' => $posts_per_page,
												'paged' => $paged, 
												'post_status' => 'publish',
												'tax_query' => array(
																array(
																	'taxonomy' => 'expertise_categories',
																	'field' => 'term_id',
																	'terms' => $term->term_id,
																)
															) );
			                	$query = new WP_Query( $args );
			                	while ( $query->have_posts() ) {  $query->the_post();
									$image = get_the_post_thumbnail_url(get_the_ID(),'medium');
									$catId = get_field('category_id');
									$perma = get_permalink(get_post($post->ID));
									if($catId) $perma = $perma . "#/filteredjobs/" .$catId;
		                	?>
								<li><a href="<?php echo $perma; ?>"><img src="<?php echo  $image; ?>"><div class="list-text"><?php echo get_the_title(); ?></div></a></li>
							<?php } ?>
						</ul>
					</div>
					<?php //custom_pagination($query->max_num_pages, "", $paged); ?>
				<?php } wp_reset_postdata();?>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>


