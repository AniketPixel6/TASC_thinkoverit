<?php if(!get_field('disabled_compentency_list') ){ ?>
<?php $compentencyLists = get_field('compentency_list'); ?>
<?php if (is_array($compentencyLists) && count($compentencyLists)) { ?>
	<div class="competancy-section container">
		<?php if(get_field('compentency_title')) { ?>
            <h4><?php echo get_field('compentency_title');?></h4>
        <?php } ?>
		<div class="solution-section-wrap">
			<div class="solution-block-wrap grid clearfix">
        	<?php foreach($compentencyLists as $compentencyList){ ?>
				<div class="solution-block staff-block test-data">
					<div class="solution-inner-block">
						<h5 class="solution-title solution-wrap-title icon-before geographies-icon"><?php echo $compentencyList['compentency_list_title']?></h5>
						<div class="solution-list clearfix">
							<?php $listItems = $compentencyList['compentency_list_items'];?>
							<?php if (is_array($listItems) && count($listItems)) { ?>
								<ul>
									<?php foreach($listItems as $list){?>
										<li><?php echo $list['list_items']?></li>
									<?php } ?>
								</ul>
							<?php } ?>
						</div>	
					</div>						
				</div>
			<?php } ?>
			</div>
		</div>	
	</div>
	<!--<script type="text/javascript">
	jQuery(window).load(function(){
		jQuery(function() {  
	        jQuery('.grid').masonry({
	            itemSelector: '.test-data', 
	            isAnimated: true
	        });
	    });
	});
</script> -->
<?php }?>
<?php } ?>