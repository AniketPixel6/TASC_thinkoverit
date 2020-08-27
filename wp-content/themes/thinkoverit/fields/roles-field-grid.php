<?php if(!get_field('roles_section_disable') ){ ?>
<?php
	$childs = get_field('roles_childs');
	if(is_array($childs) && count($childs)){
?>
	<div class="services-section container">
		<?php if(get_field('roles_section_title')) { ?>
            <h3 class="icon-before geographies-icon"><?php echo get_field('roles_section_title'); ?></h3>
        <?php } ?>
		<div class="service-wrapper">
			<div class="service-box">
				<ul class="expertise-lists clearfix services-list">
				<?php
					foreach($childs as $child){
						$image = get_the_post_thumbnail_url($child->ID, 'medium');
				?>
					<li>
						<a href="<?php echo get_permalink($child->ID); ?>">
							<img src="<?php echo $image; ?>">
							<div class="list-text"><?php echo get_the_title($child->ID); ?></div>
							<div class="list-box">
								<h4><?php echo get_the_title($child->ID); ?></h4>
								<p><?php echo theme_the_excerpt( get_the_excerpt($child->ID), 50); ?></p>
								<span class="btn list-box-btn lower-case">See All</span>
							</div>
						</a>
					</li>
				<?php } ?>
			
				</ul>
			</div> 
		</div>
	</div>
<?php } ?>
<?php } ?>