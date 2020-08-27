<div class="detail-wrap">
	<div class="itdigital-section">
		<h3 class="center-title icon-before geographies-icon"><?php echo the_title(); ?></h3>
		<div class="detail-content"><?php echo the_content();?></div>
	</div>
</div>

<?php get_template_part('fields/competancy-field'); ?>

<?php if(!get_field('disable_gallery') ){ ?>
<?php $galleryImages = get_field('gallery_content'); ?>
<?php if (is_array($galleryImages) && count($galleryImages)) { ?>
	<div class="retail-gallery-wrapper itdigital-gallery-wrapper">
		<div class="common-heading container">
			<?php if(get_field('gallery_title')) { ?>
	            <h4><?php echo get_field('gallery_title');?></h4>
	        <?php } ?>

	        <?php if(get_field('gallery_subtitle')) { ?>
	           <p><?php echo get_field('gallery_subtitle'); ?></p>
	        <?php } ?>
			
			<ul class="expertise-lists clearfix">
				<?php foreach($galleryImages as $images){?>
					<li><a href="<?php echo $images['image_page_link']; ?>"><img src="<?php echo $images['gallery_image']; ?>"><div class="list-text"><?php if(!isVideoLink($images['gallery_image_name'])){ echo $images['gallery_image_name']; } ?></div></a></li>
				<?php } ?>
			</ul>
		</div>	
	</div>
<?php } ?>
<?php } ?>


<?php get_template_part('fields/job-list-field'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>

<script type="text/javascript">
	jQuery(function($) {  
        $('.grid').masonry({
            itemSelector: '.test-data', 
            isAnimated: true
        });
    });
</script>

