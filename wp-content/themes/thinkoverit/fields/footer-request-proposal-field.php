
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
		<div class="container retail-proposal">
			<h3><?php echo get_field('footer_request_text');?> <a href="<?php echo $requst_link; ?>"><?php echo get_field('footer_request_link_text');?></a></h3>
			<?php if(is_page('work-with-us')){ ?>
				<a href="mailTo:careers@tascoutsourcing.com" class="btn green-btn"><?php echo get_field('footer_request_button_text');?></a>
			<?php } else { ?>
			<a href="<?php echo $button_link;?>" class="btn green-btn"><?php echo get_field('footer_request_button_text');?></a>
			<?php } ?>
		</div>
	</div>
<?php } ?>
