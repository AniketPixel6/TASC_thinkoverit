<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
    $image = get_the_post_thumbnail_url(get_the_ID(),'medium');
    $locked = get_field('report_locked', get_the_ID());
    $post_type = get_post_type( get_the_ID() );
    
    if($post_type == 'tasc_news'){
        $tags = wp_get_post_terms(get_the_ID(),'news_tags');
    }else{
        $tags = wp_get_post_terms(get_the_ID(),'success_stories_tags');
    }
	$states = get_the_terms( get_the_ID(), 'job_location_state');
	$cities = get_the_terms( get_the_ID(), 'job_location_city');
	$employment_type = get_the_terms( get_the_ID(), 'employment_type');
	$job_category = get_the_terms( get_the_ID(), 'job_category');
?>




<div class="job-details-wrapper" >
  	<a class="job-details-link" href="<?php echo get_permalink(); ?>">
      	<div class="job-name openings">
			<h5><?php echo get_the_title()?></h5>
			<?php if($cities){
				foreach($cities as $key=>$city) {?>
				<span> <?php  echo $city->name; ?></span>
			<?php }} ?>
		</div>
		<div class="industry-details-wrapper openings clearfix">
			<?php if($job_category ){?>
  				<div class="industry-details">
      				<span><?php _e("Industry", 'tasc'); ?></span>
      				<?php foreach($job_category as $key=>$category) {?>
					<span><?php  echo $category->name;?></span>			
				</div>
			<?php }} ?>
			<?php if($employment_type) { ?>
				<div class="industry-details">
					<span><?php _e("Type", 'tasc'); ?></span>
					<?php  foreach($employment_type as $key=>$type){  ?>
						<span><?php echo $type->name; ?></span>
				</div>
			<?php }} ?>
		</div> 
		<div class="blog-post-date openings clearfix">
			<p><?php _e("Added", 'tasc'); ?>- <span> <?php echo get_the_date(); ?></span></p>
			<span class="bhi-arrow-right"><u><?php _e("Read More", 'tasc'); ?></u></span>
		</div>
	</a>
</div>	

