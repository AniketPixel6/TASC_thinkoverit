<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>
<?php get_template_part('fields/career-advice'); ?>

<div class="recent-job-openings">
	<h4>Recent job openings</h4>
	<div class="job-opening-section">
		<div class="container">	
			<div class="job-opening-wrap clearfix">
			 	<main></main>	
			</div>
			<!-- <div class="all-jobs"><a href="<?php //echo get_permalink( get_page_by_path('job-openings')); ?>#/jobs" class="btn blue-btn">See all jobs</a></div> -->	
		</div>	
	</div>
</div>

<?php get_template_part('fields/survey-field'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>

<script>
	jQuery(document).ready(function(){
		console.log(location.hash);
		if(!location.hash){
			location.hash = "/jobs?getHired";
		}
	})
</script>