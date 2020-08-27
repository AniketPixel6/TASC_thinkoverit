<?php if(!get_field('geographies_disable') ){ ?>
	<?php $geographies = get_field('geographies'); ?>
	<?php if(is_array($geographies)){?>
		<div class="retail-geographies-wrap">
			<div class="retail-geographies-section common-heading container">
				<?php if(get_field('geographies_title')) { ?>
                    <h4 class="icon-before geographies-icon"><?php the_field('geographies_title'); ?></h4>
                <?php } ?>
				<p><?php the_field('geographies_subheading'); ?></p>
				<div class="geographies-section">
					<ul class="expertise-lists geographies-map retail-geographies clearfix">
						<?php foreach ($geographies as $geography){ ?>
						<?php 
							if(has_post_thumbnail($geography->ID)) {
				                $image = get_the_post_thumbnail_url($geography->ID, 'medium');
				            }
				        ?>
							<li class="geographies-country">
								<a href="<?php echo get_permalink($geography->ID); ?>">
									<img src="<?php echo  $image; ?>" alt="<?php echo get_the_title($geography); ?>"/>
									<span class="country-txt"><?php echo get_the_title($geography); ?></span>
									<div class="country-info clearfix">
										<div class="emp-count"><strong><?php echo get_field('hover_text', $geography->ID); ?></strong></div>
									</div>
								</a>
							</li>
						<?php } ?>
					</ul>
					<?php if(get_field('geographies_listing_link')){ ?>
						<a href="<?php echo get_field('geographies_listing_link'); ?>" class="btn blue-btn lower-case retail-btn"><?php _e("Learn More", 'tasc'); ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } ?>