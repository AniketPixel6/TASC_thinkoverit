<?php if(!get_field('disable_gallery') ){ ?>
	<?php if (is_array(get_field('gallery_content'))) { ?>
		<div class="retail-gallery-wrapper">
			<div class="retail-gallery common-heading container">
				<?php if(get_field('gallery_title')) { ?>
                    <h4 class="icon-before expertise-icon"><?php echo get_field('gallery_title'); ?></h4>
                <?php } ?>
				<p><?php echo get_field('gallery_subtitle'); ?></p>
				<?php $galleryImages = get_field('gallery_content'); ?>
				<ul class="expertise-lists clearfix">
					<?php foreach($galleryImages as $images){?>
						<li><a href="<?php echo $images['gallery_image_link'];?>"><img src="<?php echo $images['gallery_image']; ?>"><div class="list-text"><?php echo $images['gallery_image_name']; ?></div></a></li>
					<?php } ?>
				</ul>
			</div>	
		</div>
	<?php } ?>
<?php } ?>