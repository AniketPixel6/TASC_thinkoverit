<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
 $image = get_the_post_thumbnail_url(get_the_ID(),'medium');

?>
<div class="detail-content">
	<div class="container clearfix">
		<div class="detail-wrap">
			<h1 class="center-title"><?php echo get_the_title(); ?></h1>
			<div>
				<?php if ( is_single()){ ?>
					<?php the_content(); ?>
				<?php } else { ?>
					<?php get_the_excerpt(); ?></div>
				<?php } ?>
			</div>
		</div>
	</div>	
</div>

<?php get_template_part('fields/testimonial-slider'); ?>