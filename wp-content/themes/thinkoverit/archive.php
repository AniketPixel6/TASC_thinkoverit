<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
get_header(); 
$postType = get_post_type();
$taxonomies = get_object_taxonomies( $postType, 'objects' );

if ( $postType)
{
    $post_type_data = get_post_type_object( $postType );
    $post_type_slug = $post_type_data->rewrite['slug'];
}
if($post_type_slug == 'employer-guide'){ 
	$post_type_slug = 'employers-guide';
} 
?>
<div class="success-gallery-section">
	<div class="container clearfix">
		<div class="category-stories-wrapper clearfix">
			<div class="categories-section">
				
				<div class="category-list-wrap">
					<div class="category-job-icon icon-before">
						<form action="" method="GET">
							<input type="text" name="q" class="search-icon" placeholder="Search">
						</form>
					</div>	
					<?php foreach($taxonomies as $key=>$taxonomy){				
							if(stripos($taxonomy->label, "categor") === FALSE) continue;
							$terms = get_terms(array($key));
					?>
					<h4><?php echo $taxonomy->label; ?></h4>
						<ul class="category-list">
							<li class="cat-item"><a href="<?php echo home_url($post_type_slug); ?>"><?php _e("All", 'tasc'); ?></a></li>	
							<?php foreach($terms as $term){ ?> 
								<li class="cat-item"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
								<!-- <div class="box-thumbnail">
            						<img style="object-fit: cover;" alt="Generic placeholder thumbnail" src="<?php echo the_post_thumbnail_url(); ?>">
        						</div> -->
							<?php } ?>
						</ul>
					<?php } ?>
				</div>	
			</div>
			
			<div class="stories-section">
				<div class="clearfix">
					<?php  while ( have_posts() ) { the_post(); ?>
						<?php  
							if (locate_template( array( 'archive-pages/content-' . $postType . '.php' ) ) != '') {
								// yep, load the page template
								get_template_part('archive-pages/content', $postType);
							} else {
								// nope, load the default
								get_template_part( 'template-parts/content',  $postType );
							}

						 ?>
					<?php } ?>					
				</div>
			</div>
			<?php //custom_pagination($query->max_num_pages, "", $paged); ?>
		</div>	
	</div>
</div>
<?php
get_footer();
