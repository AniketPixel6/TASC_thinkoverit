<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
$image = wp_get_attachment_url( get_post_thumbnail_id()); 
$url = $fancybox = $testimonialClass = '';
if(!empty(get_field('testimonial_video_url'))){ 
	$testimonialClass = 'video-test-data';
	$url = get_field('testimonial_video_url');
	$image = get_youtube_image($url);
	$fancybox = 'video';
 }else if(!empty($image)) {
	$testimonialClass = 'img-test-data';
	$url = wp_get_attachment_url( get_post_thumbnail_id()); 
	$fancybox = 'image';
 } else { 
	$testimonialClass = 'quoted-test';
	$fancybox = '';
	$url = 'javascript:;';
 } 

?>
<div class="test-data <?php echo $testimonialClass; ?>">
	<a <?php if($fancybox){ ?> data-fancybox="<?php echo $fancybox; ?>" <?php } ?> href="<?php echo $url; ?>" class="clearfix">
		<?php if(!empty($image)){?>
			<div class="test-data-img">
				<img src="<?php echo  $image; ?>" alt="Image" />
				<?php if(get_field('testimonial_video_url')){ ?>
					<span class="youtube-icon"></span>
				<?php } ?>
			</div>
		<?php } ?>
		<div class="test-data-txt">
			<?php if(get_field('testimonial_video_title')){ ?>
				<h5><?php echo get_field('testimonial_video_title'); ?></h5>
			<?php }else{?>
				<p><?php the_content();;?></p>
			<?php } ?>
			<span><?php echo get_the_title(); ?></span>
		</div>
	</a>	
</div>
					