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
	$posts_per_page = 10;
    $categories = get_terms( array('news_categories') );
?>
<div class="success-gallery-section">
	<div class="container clearfix">
		<div class="category-stories-wrapper clearfix">
			<div class="categories-section">
				<h4><?php _e("Categories", 'tasc'); ?></h4>
				<div class="category-list-wrap">
					<div class="category-job-icon icon-before">
						<form action="" method="GET">
							<input type="text" name="q" class="search-icon" placeholder="<?php _e("Search", 'tasc'); ?>Search">
						</form>
					</div>
					<div class="select-wrap">
						<ul class="category-list">
							<li data-id="all" class="cat-item"><a href="javascript:;"><?php _e("All", 'tasc'); ?></a></li>
							<?php foreach($categories as $category){ ?> 
								<li data-id="<?php echo $category->id; ?>" class="cat-item"><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>	
			</div>
			<div class="stories-section">
				<div class="clearfix">
					<?php
						$args = array( 'post_type' => 'news', 'posts_per_page' => $posts_per_page, 'paged' => $paged, 'post_status' => 'publish' );
						if(isset($_GET['q'])){
							$args['s'] = $_GET['q'];
						}
						$loop = new WP_Query( $args );
                        
						while ( $loop->have_posts() ) { $loop->the_post();
			                $image = get_the_post_thumbnail_url(get_the_ID(),'medium');
			                $reports_tags = wp_get_post_terms();
						?>
							<a class="success-data two-line-title-data" href="<?php echo get_permalink(); ?>">
								<div class="success-wrapper">
									<div class="success-data-img">
										<img src="<?php echo $image ?>">
									</div>
									<div class="success-data-txt">
										<h4><?php echo theme_the_excerpt(get_the_title(), 12)?></h4>
										
										<div class="success-data-content">
											<?php echo theme_the_excerpt(get_the_excerpt(), 20); ?>
										</div>
										<?php $success_tags = wp_get_post_terms(get_the_ID(),'news_tags'); ?>
										<div class="read-download clearfix">
											<ul class="tag-list">
												<?php foreach($success_tags as $key=>$success_tag){ if ($key == 2) break; ?> 
													<li><?php echo $success_tag->name; ?></li>
												<?php } ?>
											</ul>
											<span class="read-more"><u><?php _e("Read More", 'tasc'); ?></u></span>
										</div>
									</div>
								</div>	
							</a>
                        <?php } ?>
				</div>
			</div>
			<?php custom_pagination($loop->max_num_pages, "", $paged); ?>
		</div>
	</div>	
</div>

<?php get_template_part('fields/testimonial-slider'); ?>
