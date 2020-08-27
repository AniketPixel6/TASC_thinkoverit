<?php
/*
Template Name: videotemp
Template Post Type: post, page, services
*/
get_header(); 
$locked = get_field('report_locked', $post->ID);
	$report_file = get_field('report_file', $post->ID);
?>

<div class="services-section container">

    <div class="detail-wrap">
        <h3 class="icon-before geographies-icon center-title"><?php echo get_the_title(); ?></h3>
        <div class="detail-content" style="text-align: center;"><?php the_content(); ?></div>
    </div>
	<div>
		<h4><?php echo get_post_permalink(  $post->ID )?></h4>
		<h3>The Link of video has been sent to your email address. You can also watch it here!</h3>
				<video width="600" controls autoplay >
					<source src="<?php echo get_field('report_file', $post->ID); ?>" >
				</video>
				<div style="margin-top:20px;"><a download href="<?php echo get_field('report_file', $post->ID); ?>" class="btn green-btn brochure-btn">Download</a></div>
	</div>
</div>
<?php get_template_part('fields/download-file'); ?>
<?php get_footer();
