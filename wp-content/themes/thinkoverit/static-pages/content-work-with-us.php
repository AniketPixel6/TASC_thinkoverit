<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>

<?php $span_titles = get_field('span_title'); ?>
<div class="retail-section-wrapper">
	<div class="retail-section container">
		<div class="detail-wrap">
			<h3 class="center-title geographies-icon"><span><?php echo get_field('common_title'); ?></span> 
				<div class="title-collection">
					<?php foreach ($span_titles as $key=>$span_title) { ?> 
						<span class="changing-title-<?php echo $key; ?> changing-title"> <?php echo $span_title['word']; ?></span>
					<?php }?>
				</div>
			</h3>
		</div>
	</div>	
</div>

<div class="culture-section">
	<div class="culture-inner container">
		<div class="culture-data">
			<h3 class="culture-title"><?php echo get_field('culture_title'); ?></h3>
			<div class="culture-paragraph">
				<p><?php echo get_field('culture_description'); ?></p>
			</div>
		</div>
		<div class="tasc-way-section">
			<h3 class="title-blue"><?php echo get_field('tasc_way_title'); ?></h3>
			<p><?php echo get_field('tasc_way_subtitle'); ?></p>
		    <div class="history-section culture-history">
		        <div class="container">
		            <ul class="culture-list clearfix">
		                <?php $tascSliders = get_field('tasc_way_slider'); ?>
	                    <?php foreach($tascSliders as $tascSlider){ ?>
	                        <li>
                                <a href="#" class="history-inner">
                                    <div class="tasc-way-img"><img src="<?php echo $tascSlider['image']; ?>" class="before-hover" alt="image" /></div>
                                    <span class="address"><?php echo $tascSlider['description']; ?></span>
                                </a>
	                        </li>
	                	<?php } ?>
		            </ul>
		        </div>
		    </div>
		</div>
	</div>
	<div class="diversity-section">
		<div class="diversity-content container">
			<h3 class="title-blue"><?php echo get_field('diversity_title'); ?></h3>
			<p><?php echo get_field('diversity_description'); ?></p>
		</div>
		<?php $banner_img = get_field('diversity_background_image'); ?>
		<div class="diversity-image">
			<?php if($banner_img) { ?>
				<img src="<?php echo $banner_img; ?>" alt="Diversity"/>
			<?php }?>
			<ul class="diversity-num clearfix">
				<li><strong>22</strong> <small><?php _e("Nationalities", 'tasc'); ?></small></li>
				<li><strong>160+</strong> <small><?php _e("Employees", 'tasc'); ?></small></li>
			</ul>
		</div>
	</div>
	<div class="rewards-section">
		<div class="container">
			<h3 class="title-blue"><?php echo get_field('rewards_title'); ?></h3>
			<p><?php echo get_field('rewards_description'); ?></p>
			<?php $rewardLists = get_field('rewards_list'); ?>
			<ul class="reward-list clearfix">
				<?php foreach ($rewardLists as $key => $rewardList) { ?>
					<li>
						<div class="reward-img"><img src="<?php echo $rewardList['image']; ?>" class="before-hover" alt="image" /></div>
		                <span><?php echo $rewardList['image_heading']; ?></span>
					</li>
				<?php } ?>
			</ul>
		</div>	
	</div>
</div>

<div class="retail-section-wrapper">
	<div class="retail-section container">
		<div class="detail-wrap">
			<h3 class="center-title"><?php echo get_field('sub_title'); ?></h3>
			<div class="detail-content"><?php the_content();?></div>
		</div>
	</div>	
</div>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php if(!get_field('disable_post_success_story') ){ ?>
	<?php $success_stories = get_field('post_success_story_list'); ?>
    <div class="about-section story-section">
        <div class="container clearfix">
            <?php if(get_field('post_success_title')) { ?>
               <h3 class="center-title"><?php the_field('post_success_title'); ?></h3>
            <?php } ?>
            <div class="post-story-success">
	            <?php foreach($success_stories as $key => $success_story ){?>
	            	<div class="story-slideshow">
			            <div class="about-right">
			                
			                    <?php if($success_story['video_url']) {?>
			                    	<a data-fancybox href="<?php echo $success_story['video_url']; ?>" class="story-popup">
					                    <video poster="<?php echo $success_story['video_image']; ?>">
					                        <source src="#" type="video/mp4">
					                    </video>
					                    <span class="video-icon"></span>
				                    </a>
			                <?php }else{?>
			                	<a href="javascript:void(0);">
				                    <video poster="<?php echo $success_story['video_image']; ?>">
				                        <source src="#" type="video/mp4">
				                    </video>
			                    </a>
			                <?php }?>

			                    
			            </div>
			            <div class="about-left">
			                <?php echo $success_story['description']; ?>
			            </div>
			        </div>
		        <?php } ?>
		    </div>
        </div>
    </div>
<?php } ?>


<div class="recent-job-openings">
	<div class="container">	
		<h3 class="center-title"><?php echo get_field('post_job_title'); ?></h3>
		<div class="detail-content"><?php echo get_field('post_sale_description');?></div>
		<div class="job-opening-section">
			<div class="job-opening-wrap clearfix">
			 	<main></main>	
			</div>
			<!-- <div class="all-jobs"><a href="<?php //echo get_permalink( get_page_by_path('job-openings')); ?>#/jobs" class="btn blue-btn"><?php _e("See all jobs", 'tasc'); ?></a></div> -->	
		</div>	
	</div>
</div>

<?php if(!get_field('disable_gallery_field') ){ ?>
<div class="activities-section">
    <div class="container">
        <h3 class="icon-before csr-icon center-title"><?php echo get_field('gallery_title'); ?></h3>
    </div>
    <div class="activity-inner-wrap">
        <ul class="activities-list clearfix">
			<?php $galleryLists = get_field('gallery_images');?>
            <?php 
				foreach($galleryLists as $key => $galleryList){  
					$galleryImage = $galleryList['image'];
			?>
				<li id="csr<?php echo $key; ?>"><img src="<?php echo  $galleryImage; ?>"></li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>


<?php get_template_part('fields/content-item-list'); ?>

<?php get_template_part('fields/request-proposal-field'); ?>

<script type="text/javascript">
	
	 jQuery('.activities-list li:eq(2)').after('<li class="explore-link"><div class="explore-gallery"><span class="sprite-icon">Icon</span><h3>TASC Family</h3></div></li>');
</script>