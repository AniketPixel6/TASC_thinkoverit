
<?php if(!get_field( 'disabled_request_proposal' ) && get_field('request_text')){ ?>
	<div class="get-in-touch-section retail-get-in-touch">
		<div class="container retail-proposal">
			<h3><?php echo get_field('request_text');?> <a href="<?php echo get_field('request_link');?>"><?php echo get_field('request_link_text');?></a></h3>			
				<a href="<?php echo get_field('request_button_link');?>" class="btn green-btn"><?php echo get_field('request_button_text');?></a>
		</div>
	</div>
<?php } ?>
