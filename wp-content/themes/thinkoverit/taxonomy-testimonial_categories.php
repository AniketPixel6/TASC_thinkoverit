<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = 10;
$postType = get_post_type();
$queried_object = get_queried_object();
$args = array( 'post_type' => $postType, 'posts_per_page' => $posts_per_page, 'paged' => $paged, 'post_status' => 'publish', 'tax_query' => array(
	array(
		'taxonomy' => 'testimonial_categories',
		'field' => 'id',
		'terms' => get_queried_object()->term_id,
		'include_children' => false
	) )
);

$loop = new WP_Query( $args );

?>
<div class="testimonial-section">
	<div class="container clearfix">
		<h3 class="icon-before geographies-icon center-title"><?php echo $queried_object->name; ?></h3>
		<div class="test-wrapper">
			<div class="container grid">
				<?php  while ( $loop->have_posts() ) { $loop->the_post(); ?>
					<?php  
						if (locate_template( array( 'archive-pages/content-' . $postType . '.php' ) ) != '') {
							// yep, load the page template
							get_template_part('archive-pages/content', $postType);
						} else {
							// nope, load the default
							get_template_part( 'template-parts/content',  $postType );
						}
					 ?>
				<?php } wp_reset_postdata(); ?>	
			</div>
		</div>
		<?php custom_pagination($loop->max_num_pages, "", $paged); ?>
	</div>	
</div>
<script type="text/javascript">
	jQuery(window).load(function(){
		jQuery(function() {  
	        jQuery('.grid').masonry({
	            itemSelector: '.test-data', 
	            isAnimated: true
	        });
	    });
	});
</script>
<?php
get_footer();
