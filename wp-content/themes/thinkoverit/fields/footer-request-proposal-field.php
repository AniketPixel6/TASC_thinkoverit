
<?php if(!get_field( 'footer_disabled_request_for_proposal' ) && get_field('footer_request_text')){

	$custom_requst_link = get_field('footer_custom_request_link');
	$select_requst_link = get_field('footer_request_link');
	$custom_button_link = get_field('footer_custom_button_link');
	$select_button_link = get_field('footer_request_button_link');

	if($custom_requst_link){
		$requst_link = $custom_requst_link;
	}else{
		$requst_link = $select_requst_link;
	}

	if($custom_button_link){
		$button_link = $custom_button_link;
	}else{
		$button_link = $select_button_link;
	}


?>
      <div class="get-in-touch-section retail-get-in-touch">
		<div class="footer-rfp">
			<div class="container">
				<div class="contact-form-section contact-form">
					<?php echo do_shortcode('[contact-form-7 id="3703" title="Footer RFP"]'); ?>
				</div>
			</div>
		</div>
       </div>

	<script>
		document.addEventListener( 'wpcf7mailsent', function( event ) {
		   location = 'http://tasc.thinkoverit.com//thank-you/';
		}, false );
	</script>

<?php } ?>