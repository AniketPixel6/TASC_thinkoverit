<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

get_header(); 

$postType = get_field('archive_for');
?>
	<?php while ( have_posts() ) { the_post(); ?>
		<?php	
			global $post;
			$pageName = $post->post_name;
			if (locate_template( array( 'static-pages/content-' . $pageName . '.php' ) ) != '') {
				// yep, load the page template
				get_template_part('static-pages/content', $pageName);
			}elseif (locate_template( array( 'static-pages/content-' . $postType . '.php' ) ) != '') {
				// yep, load the page template
				get_template_part('static-pages/content', $postType);
			} else {
				// nope, load the default
				get_template_part( 'template-parts/content', 'page' );
			}
		?>
	<?php } ?>
<?php
get_footer();
