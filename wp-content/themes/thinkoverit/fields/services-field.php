<?php if(!get_field('services_section_disable') ){ ?>

	<div class="advantages-section">
		<div class="container">
			<?php if(get_field('services_section_title')) { ?>
				<h3 class="icon-before geographies-icon advantages-heading"><?php echo get_field('services_section_title'); ?></h3>
			<?php } ?>
		</div>

		<div class="success-section-wrap">
			<?php
				$childs = get_field('services_childs');

				if(is_array($childs)){
					foreach($childs as $child){
						$image = get_the_post_thumbnail_url($child->ID, 'large');
				?>
					<div class="success-section employee-landing clearfix">
						<div class="success-img-wrap">
							<img class="success-img" src="<?php echo $image; ?>" alt="success-stories">
						</div>
						<div class="success-content">
							<div class="success-right-inner">
								<h3 class="icon-before success-icon"><?php echo get_the_title($child->ID); ?></h3>
								<p><?php echo theme_the_excerpt( get_the_excerpt($child->ID)); ?></p>
								<div class="btn-wrap staffing-btn">
									<a href="<?php echo get_permalink($child->ID); ?>" class="btn blue-btn lower-case">Learn more</a>
								</div>  
							</div>
						</div>
					</div>
				
				<?php } } ?>
		</div>

	</div>
<?php } ?>