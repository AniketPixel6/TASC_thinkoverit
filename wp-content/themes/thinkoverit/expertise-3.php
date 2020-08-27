<?php
/*
Template Name: Expertise Child2 Template 
Template Post Type: post, page, expertise 
*/
		
get_header(); ?>

<?php while ( have_posts() ) { the_post(); ?>
	<?php	
		global $post;
		$pageName = $post->post_type;
		if (locate_template( array( 'single-pages/single-3.php' ) ) != '') {
			// yep, load the page template
			get_template_part('single-pages/single', '3');
		} else {
			// nope, load the default
			get_template_part( 'template-parts/single', 'page' );
		}
	?>
<?php } ?>

<?php
get_footer();
