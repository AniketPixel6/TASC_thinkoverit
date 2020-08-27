<div class="retail-section-wrapper">
	<div class="retail-section container">
		<div class="detail-wrap">
			<?php $logo_image = get_field('single_logo_image'); ?>
			<h3 class="center-title geographies-icon"><?php if(!empty($logo_image)){ ?><span class="logo-wrap"><img src="<?php echo get_field('single_logo_image'); ?>"></span>
			<?php }?><span><?php echo the_title(); ?></span></h3>
			<div class="detail-content"><?php the_content();?></div>
		</div>
	</div>	
</div>

<?php get_template_part('fields/staffing-field'); ?>


<?php if(!get_field('disabled_role_field')){ ?>
<div class="retail-gallery-wrapper">
	<div class="container">
		<div class="retail-gallery common-heading">
			<?php if(!empty(get_field('role_title'))){ ?>
				<h4 class="icon-before expertise-icon"><?php echo get_field('role_title'); ?></h4>
				<p><?php echo get_field('role_description'); ?></p>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>

<?php if(!get_field('expertise_child_disable') && get_field('expertise_child_select') ){ ?>

<div class="retail-gallery-wrapper">
	<div class="container">
			<?php $childs = get_field('expertise_child_select'); ?>
			<?php if (is_array($childs) && count($childs)) { ?>
				<ul class="expertise-lists clearfix">
				<?php foreach($childs as $child){
						$image = get_the_post_thumbnail_url($child->ID, 'medium');
						$catId = get_field('category_id');
						$perma = get_permalink(get_post($child->ID));
						if($catId) $perma = $perma . "#/filteredjobs/" .$catId;
				?>
					<li><a href="<?php echo $perma; ?>"><img src="<?php echo $image; ?>"><div class="list-text"><?php echo get_the_title($child->ID); ?></div></a></li>
					<?php } ?>
				</ul>
			<?php } ?>
		</div>
	</div>
<?php } ?>

<?php get_template_part('fields/services-field-grid'); ?>


<?php get_template_part('fields/competancy-field'); ?>


<?php if(!get_field('disabled_staff') && get_field('staff_title')){ ?>
	<div class="retail-roles-wrapper">
		<div class="retail-staffing-roles common-heading container">
			<h4><?php echo get_field('staff_title')?></h4>
			<p><?php echo get_field('staff_description')?></p>
		</div>	
	</div>
<?php } ?>	


<?php get_template_part('fields/detailed-text-field'); ?>

<?php get_template_part('fields/download-field'); ?>

<?php get_template_part('fields/career-advice'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/request-proposal-field'); ?>


<?php get_template_part('fields/roles-field-grid'); ?>


<?php get_template_part('fields/geographies-field'); ?>


<?php get_template_part('fields/job-list-field'); ?>	


<?php get_template_part('fields/content-item-list'); ?>


<?php get_template_part('fields/require-block-field'); ?>


<script type="text/javascript">
	jQuery(function($) {  
        $('.grid').masonry({
            itemSelector: '.test-data', 
            isAnimated: true
        });
    });
</script>

