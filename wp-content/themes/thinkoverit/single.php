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
$postType = get_post_type();
$currentPage = get_permalink( $post->ID );
?>
 
<div class="single-page-content">
	<?php if($postType != 'faq'){ ?>
			<div class="container">
				<ul class="share-social-icons">
				   	<li class="facebook">
				    	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $currentPage; ?>">Facebook</a>
				   	</li>
				    <li class="twitter">
				    	<a target="_blank" href="https://twitter.com/home?status=https%3A//<?php echo $currentPage; ?>">Twitter</a>
				   	</li>
				    <li class="email">
				    	<a target="_blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&su=Share+Post&body=%27<?php echo $currentPage; ?>/%27&tf=1">email</a>
				    </li>
				    <li class="linkedin">
				    	<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $currentPage; ?>/&title=&summary=&source=">LinkedIn</a>
				    </li>
				</ul>
			</div>
	<?php } ?>
	<?php  while ( have_posts() ) { the_post(); ?>
		<?php
			global $post;
			if (locate_template( array( 'single-pages/single-' . $postType . '.php' ) ) != '') {
				// yep, load the page template
				get_template_part('single-pages/single', $postType);
			} else {
				// nope, load the default
				get_template_part( 'template-parts/single', 'page' );
			}
		?>
	<?php } ?>
</div>


<?php

	$locked = get_field('report_locked', $post->ID);
?>

<!-- 
<div class="popup-wrap <?php // if($locked) echo "locked"; ?>" data-postid="<?php //echo get_the_ID(); ?>">
	<div class="popup-lock">
		<div class="document-form-wrap">
			<h4>Download Report</h4>
			<?php //echo do_shortcode( '[contact-form-7 id="1441" title="Popup form" html_class="Gated Assets"]' ); ?>
		</div>	
	</div>
</div>
 -->

<?php get_footer();
