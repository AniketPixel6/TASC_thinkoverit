<?php if(!get_field('disable_history_list') ){ ?>
	<?php if (is_array(get_field('history_list'))){ ?>
		<div class="retail-staffing-wrapper common-heading">
			<div class="container">
				<?php if(get_field('history_title')) { ?>
		            <h4 class="icon-before history-ico"><?php echo get_field('history_title');?></h4>
		        <?php } ?>
				<div class="retail-staffing-section clearfix" id="retail-staffing">
				<?php 
					$historyLists = get_field('history_list');   
			        if(count($historyLists)){ 
						foreach($historyLists as $historyList){ ?>
							<div class="quick-facts">
								<div class="quick-facts-inner">
									<div class="green-txt quick-head"><?php echo $historyList['year']; ?></div>
									<span><?php echo $historyList['discription']; ?></span>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } ?>