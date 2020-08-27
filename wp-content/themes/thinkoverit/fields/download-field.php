<?php if(!get_field('disabled_download') ){ ?>
	<?php if(get_field('download_title')) { ?>
		<div class="download-brochure-wrap">
			<div class="download-brochure container">
				<h3><?php echo get_field('download_title'); ?></h3>
				<a target="_blank" href="<?php echo get_field('download_link')['url']; ?>" class="btn green-btn brochure-btn">Download Brochure</a>
			</div>	
		</div>
	<?php } ?>
<?php } ?>