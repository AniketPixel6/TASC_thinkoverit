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
	$categories = get_terms( array('report_categories') );
	$posts_per_page = 20;
?>
<?php $count = count($categories); ?>
<div class="success-gallery-section">
	<div class="container clearfix">
		<div class="category-stories-wrapper clearfix">
			<div class="categories-section">
				<h4>Categories</h4>
				<div class="category-list-wrap">
					<div class="category-job-icon icon-before">
						<form action="" method="GET">
							<input type="text" name="q" class="search-icon" placeholder="Search">
						</form>
					</div>
					<div class="select-wrap">
						<ul class="category-list">
							<li data-id="all" class="cat-item"><a href="javascript:;">All</a></li>
							<?php foreach($categories as $category){ ?> 
								<li class="cat-item"><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>	
			</div>
			<div class="reports-section">
				<div class="clearfix">
					<?php

						$args = array(  'post_type' => 'employee_reports', 
										'posts_per_page' => $posts_per_page,
										'post_status' => 'publish',
										'paged' => $paged );
						
						if(isset($_GET['q'])) {
							$args['s'] = $_GET['q'];
						}
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) { $loop->the_post();
			                $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
			                $reports_tags = wp_get_post_terms(get_the_ID(), 'report_categories');
							$locked = get_field('report_locked');
						?>
							<a class="success-data two-line-title-data <?php if($locked) echo "lock-cart"; ?>" href="<?php echo get_permalink(); ?>" data-id="<?php echo $category->slug; ?>" data-post="<?php echo get_the_ID(); ?>">
								<div class="success-wrapper">
									<div class="success-data-img">
										<img src="<?php echo $image ?>">
									</div>
									<div class="success-data-txt">
										<h4><?php echo theme_the_excerpt(get_the_title(), 12)?></h4>
										<div class="lock-icon" ></div>
										<div class="success-data-content"><?php echo theme_the_excerpt(get_the_excerpt(), 20); ?></div>
										<ul class="tag-list">
											<?php foreach($reports_tags as $key=>$reports_tag){ if ($key == 2) break; ?> 
												<li><?php echo $reports_tag->name; ?></li>
											<?php } ?>
										</ul>
									</div>
								</div>	
							</a>
							
					<?php } ?>
						
					<?php wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>	

</div>
 
<?php get_template_part('fields/testimonial-slider'); ?>


