<?php 
	$locked = get_field('report_locked', $post->ID);
	$report_file = get_field('report_file', $post->ID);
	if($locked or $report_file){
	?>
	<div class="download-file-wrap download-brochure-wrap">
		<div class="container">
			<h3>The Link to the document has been sent to your email address. You can also download it here!</h3>
			<a download href="<?php echo get_field('report_file', $post->ID); ?>" class="btn green-btn brochure-btn">Download</a>
		</div>	
	</div>

<?php } ?>
