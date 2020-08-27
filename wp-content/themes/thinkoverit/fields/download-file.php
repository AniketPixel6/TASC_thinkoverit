<?php 
	$locked = get_field('report_locked', $post->ID);
	$report_file = get_field('report_file', $post->ID);
	if($locked or $report_file){
	?>
	
	<div class="download-file-wrap download-brochure-wrap" id="download-file-wrap">
		<div class="container">
			<?php $filetype =  wp_check_filetype( get_field('report_file', $post->ID) ,  $mimes); ?>
			
			<?php if (get_field('report_file', $post->ID)) : ?>
				<?php $ext = strtolower($filetype['ext']);
				$exts = array("mp4", "m4a", "m4v", "f4v", "f4a", "m4b", "m4r", "f4b", "mov", "3gp", "3gp2", "3g2", "3gpp", "3gpp2", "ogg", "wmv", "wma", "asf*", "webm", "flv", "AVI*","oga","ogv","ogx");
				 if (in_array($ext, $exts)) { ?>				 
					<h3>You can watch it here!</h3>
					<div class="video-container" style="max-width: 600px; min-height: 160px; margin: 20px auto;">
						<video width="100%" controls autoplay >
							<source src="<?php echo get_field('report_file', $post->ID); ?>" >
						</video>
					</div>
					<div class="container download-services-link" style="margin-top:20px;">						
						<a  href="https://www.tascoutsourcing.com/our-services/" class="btn green-btn brochure-btn" style="margin:10px;" >Our Services</a>						
						<a  href="https://www.tascoutsourcing.com/our-expertise/" class="btn green-btn brochure-btn" style="margin:10px;" >Our Expertise</a>						
					</div>
					<!-- <div style="margin-top:20px;"><a download href="<?php // echo get_field('report_file', $post->ID); ?>" class="btn green-btn brochure-btn">Download</a></div> -->
				<?php } else { ?>				 
				<h3>You can download it here!</h3>
					<a download href="<?php echo get_field('report_file', $post->ID); ?>" class="btn green-btn brochure-btn">Download</a>
				<?php }?>			
			<?php else :?>			
				<?php if (get_field('report_url', $post->ID)) { ?>
				<h3>You can watch it here!</h3>
					<div class="video-container" style="max-width: 600px; min-height: 160px; margin: 20px auto;">
						<?php echo get_field('report_url', $post->ID); ?>
					</div>
					<div class="container download-services-link" style="margin-top:20px;">						
						<a  href="https://www.tascoutsourcing.com/our-services/" class="btn green-btn brochure-btn" style="margin:10px;" >Our Services</a>
						<a  href="https://www.tascoutsourcing.com/our-expertise/" class="btn green-btn brochure-btn" style="margin:10px;" >Our Expertise</a>
					</div>
				<?php } endif; ?>	

		</div>	
	</div>

	<?php } ?>
