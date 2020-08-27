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


<?php if(!get_field('disabled_role_field')){ ?>
    <div class="retail-gallery-wrapper expertise-child-3">
        <div class="retail-gallery common-heading container">
        	<?php if(get_field('role_title')) { ?>
        		<h4 class="icon-before expertise-icon"><?php echo get_field('role_title'); ?></h4>
        	<?php } ?>
        	<div><?php echo get_field('role_description'); ?></div>
        </div>
    </div>
<?php } ?>

<?php if(!get_field('service_disable') ){ ?>
    <?php  $services = get_field('services'); ?>
	<?php if (is_array($services) && count($services)) { ?>
    <div class="solution-section solution-section-wrap clearfix">
        <div class="container">
        	<?php if(get_field('service_title')) { ?>
        		<h3><?php the_field('service_title'); ?></h3>
        	<?php } ?>
            <div class="solution-inner-container clearfix">
                <div class="solution-block-wrap clearfix">
                    <?php  foreach($services as $service){ ?>
    				<div class="solution-block">
    					<div class="solution-inner-block">
    						<img src="<?php echo get_field('services_extra_icon', $service->ID); ?>" class="solution-logo">       
    						<h4 class="solution-title"><?php echo get_the_title($service); ?></h4>
    					</div>                      
    					<p><?php echo theme_the_excerpt( get_the_excerpt($service), 30); ?></p>
    					<a href="<?php echo get_permalink($service); ?>" class="btn blue-btn read-more"><?php _e("Read More", 'tasc'); ?></a>
    				</div> 
    				<?php } ?>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
<?php } ?>

<?php get_template_part('fields/services-field-grid'); ?>


<?php get_template_part('fields/competancy-field'); ?>


<?php get_template_part('fields/process-step-field'); ?>


<?php get_template_part('fields/detailed-text-field'); ?>


<?php get_template_part('fields/request-proposal-field'); ?>


<?php get_template_part('fields/download-field'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/job-list-field'); ?>

