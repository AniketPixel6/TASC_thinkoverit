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
			<h5 class="post-sub-title"><?php echo get_field('sub_title'); ?></h5>
			<div class="detail-content"><?php the_content();?></div>
		</div>
	</div>	
</div>

<?php get_template_part('fields/testimonial-slider'); ?>

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
		<div class="diversity-image" <?php if($banner_img) { ?> style="background-image: url('<?php echo $banner_img; ?>')" <?php } ?>>
			<ul class="diversity-num">
				<li><strong>22</strong> <small>Nationalities</small></li>
				<li><strong>03</strong> <small>Locations</small></li>
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
<div class="activities-section">
    <div class="container">
        <h3 class="icon-before csr-icon">CSR Activities</h3>
    </div>
    <div class="activity-inner-wrap">
        <ul class="activities-list clearfix">

            <?php 
                $args = array( 'post_type' => 'csr_activities', 'posts_per_page' => 6, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'ASC');
                $csr_activities = get_posts( $args );
                $key = 1;
                foreach ($csr_activities as $key => $csr_activity) { 
                    $image = get_the_post_thumbnail_url($csr_activity->ID, 'full');
					$vClass = '';
					if(!empty(get_field('csr_video', $csr_activity->ID) && (!empty($image)))){
						$vClass = 'video-icon';
						$url = get_field('csr_video', $csr_activity->ID);
						$fancybox = 'video';
					 }else if(!empty($image)) {
						$url = get_the_post_thumbnail_url($csr_activity->ID, 'full');
						$fancybox = 'image';
					 }
			?>
				<li id="csr<?php echo $key; ?>"><a  data-fancybox="csr" href="<?php echo $url; ?>" class="<?php echo $vClass; ?>"><img src="<?php echo  $image; ?>"></a></li>
            <?php } ?>
        </ul>
    </div>
</div>

<?php if(!get_field('disable_post_success_story') ){ ?>
	<?php $success_stories = get_field('post_success_story_list'); ?>
    <div class="about-section story-section">
        <div class="container clearfix">
            <?php if(get_field('post_success_title')) { ?>
               <h3 class="story-main-title"><?php the_field('post_success_title'); ?></h3>
            <?php } ?>
            <div class="post-success">
	            <?php foreach($success_stories as $key => $success_story ){?>
	            	<div class="story-slideshow">
			            <div class="about-right">
			                <a data-fancybox href="<?php echo $success_story['video_url']; ?>">
			                    <video poster="<?php echo $success_story['video_image']; ?>">
			                        <source src="#" type="video/mp4">
			                    </video>
			                    <span class="video-icon"></span>
			                </a>    
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
		<h4><?php echo get_field('post_job_title'); ?></h4>
		<div class="detail-content"><?php echo get_field('post_sale_description');?></div>
		<div class="job-opening-section">
			<div class="job-opening-wrap clearfix">
			 	<main></main>	
			</div>
			<!-- <div class="all-jobs"><a href="<?php //echo get_permalink( get_page_by_path('job-openings')); ?>#/jobs" class="btn blue-btn">See all jobs</a></div> -->	
		</div>	
	</div>
</div>

<?php get_template_part('fields/content-item-list'); ?>

<?php get_template_part('fields/request-proposal-field'); ?>


