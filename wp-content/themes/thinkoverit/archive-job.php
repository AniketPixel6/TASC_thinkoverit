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

$cities = get_terms('job_location_city');
$employment_type = get_terms('employment_type');
$job_category = get_terms('job_category');


if ( $postType)
{
    $post_type_data = get_post_type_object( $postType );
    $post_type_slug = $post_type_data->rewrite['slug'];
}
if($post_type_slug == 'employer-guide'){ 
	$post_type_slug = 'employers-guide';
} 
?>
<!-- filter -->

<!-- end -->
<div class="success-gallery-section">
	<div class="container clearfix">
		<div class="category-stories-wrapper clearfix">
			<div class="jobs-section">
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
			<?php  custom_pagination(null, "", $paged); ?>
		</div>	
        <!--  <div id="loading-bar-container"></div>
        <div class="load-more-wrap">
            <button class="load-more-data btn blue-btn"  style="cursor: pointer;">
                Load More
            </button>
        </div> -->
	</div>
</div>
<?php
get_footer();
