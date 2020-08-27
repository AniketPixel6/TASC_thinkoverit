
<?php if(!get_field('disable_detailed_text') ){ 
	$lists = get_field('text_list');
	$nextSec = "benefits-right-wrap";

	if (is_array($lists) && count($lists)) { ?>
		<div class="container">
			<div class="benefits-section-wrap">
				<?php if(get_field('text_image')) { 
					$nextSec = "benefits-right";
					?>
					<div class="benefits-left">
						<img src="<?php echo get_field('text_image'); ?>" alt="Image" />
					</div>
				<?php } ?>
				<div class="<?php echo $nextSec; ?>">
					<?php if(get_field('text_heading')) { ?>
			           <h3 class="icon-before history-ico"><?php echo get_field('text_heading'); ?></h3>
			        <?php } ?>
			        <div class="mCustomScrollbar listing-scroll-wrapper" data-mcs-theme="dark">
						<p><?php echo get_field('text_sub_heading'); ?></p>
						<div class="bullet-list-wrap">
							<?php foreach($lists as $key=> $list) {?>
								<div class="bullet-list-item clearfix">
									<span class="sr-number"><?php if($key < 9) { echo '0'; } echo ($key + 1); ?></span>
									<div class="bullet-list-content">
										<?php if($list['item_heading']) { ?>
											<h5><?php echo $list['item_heading'];?></h5>
										<?php } ?>
										<p><?php echo $list['item_text'];?></p>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<?php } 
} ?>
