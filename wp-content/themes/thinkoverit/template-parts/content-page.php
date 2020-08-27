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
<div class="detail-content <?php if(is_page('thank-you') || is_page('thankyou') || is_page('application-confirmation')) echo 'thank-you-wrap'; ?>" >
	<div class="container clearfix">
		<div class="detail-wrap <?php if(is_page('application-confirmation')) echo "form-confirm"?>">
			<h1 class="center-title"><?php echo get_the_title(); ?></h1>
			<div><?php the_content(); ?></div>
		</div>
	</div>	
</div>

<?php get_template_part('fields/content-item-list'); ?>