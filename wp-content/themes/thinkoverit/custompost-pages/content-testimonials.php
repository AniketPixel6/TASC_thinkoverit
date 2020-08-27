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
	$terms = get_terms( array('testimonial_categories') ); 
?>
<div class="testimonial-section">
	<div class="container clearfix">
		<h3 class="icon-before geographies-icon center-title"><?php echo get_the_title(); ?></h3>
		<div class="test-wrapper">
			<div class="container grid">
			<?php 
                $args = array( 'post_type' => 'testimonials', 'posts_per_page' => $posts_per_page, 'paged' => $paged, 'post_status' => 'publish' );
                $postType = $args['post_type'];
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) { $loop->the_post();
			?>
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
	</div>	
</div>
<?php custom_pagination($loop->max_num_pages, "", $paged); ?>
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

<?php get_template_part('fields/content-item-list'); ?>


