<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>

<?php if(!get_field('disable_location_lists') ){ ?>
<?php $location_lists = get_field('location_lists');?>
<?php if (is_array($location_lists) && count($location_lists)) { ?>
	<div class="contact-section">
		<div class="container clearfix">
			<h3 class="icon-before expertise-icon"><?php _e("Our Office", 'tasc'); ?></h3>
			<div class="location-wrapper clearfix">
				<div class="left-block">
					<div class="location-accordian">
						<div class="accordion-list icon-before search-input">
							<input type="text" name="search" placeholder="<?php _e("Search by location", 'tasc'); ?>">
						</div>
						<?php foreach($location_lists as $key=>$location_list){ ?>
							<div class="accordion-list <?php if ( $key == 0 ) echo 'active'; ?>">
								<a href="tab<?php echo $key;?>" class="accord-title"><?php echo $location_list['location_list_title'];?></a>
								<div class="accord-panel">
									<p><?php echo $location_list['location_list_address'];?></p>
									<span><?php _e("Phone", 'tasc'); ?>: <?php echo $location_list['location_list_phone_no'];?>, </span>
									<span><?php _e("Fax", 'tasc'); ?>: <?php echo $location_list['location_list_fax_no'];?></span>
									<a href="#" class="share-link"><?php _e("Share Location", 'tasc'); ?></a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="right-block">
					<?php for ($key=0; $key < count($location_lists); $key++) {  ?>
						<div class="location-map <?php if ( $key == 0 ) echo 'active'; ?>" id="tab<?php echo $key;?>">
							<iframe src="<?php echo $location_list['location_list_url'];?>" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					<?php } ?>	
				</div>
			</div>
			<div class="contact-form-section">
				<h3><?php _e("Contact Form", 'tasc'); ?></h3>
				<?php the_content(); ?>
			</div>		
		</div>
	</div>
<?php } ?>
<?php } ?>




