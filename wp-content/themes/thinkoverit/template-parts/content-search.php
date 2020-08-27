<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
$postType = get_post_type();
?>
<?php if($postType == 'faq'){ ?>
	<div class="container clearfix">
		<?php the_title(); ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
<?php } ?>
