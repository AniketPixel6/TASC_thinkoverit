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
			<div class="contact-form-section">
				<h3>Business Enquiries</h3>
				<?php the_content(); ?>
			</div>
			<div class="location-container">
				<h3 class="icon-before expertise-icon">Our Office</h3>
				<div class="location-wrapper clearfix">
					<div class="left-block">
						<div class="location-accordian">
							<div class="accordion-list icon-before search-input">
								<input type="text" name="search" placeholder="Search by location">
							</div>

							<!-- <form action="" method="GET">
								<input type="text" name="q" class="search-icon" placeholder="Search Blog">
							</form>  -->
							<?php foreach($location_lists as $key=>$location_list){ ?>
								<div class="accordion-list <?php if ( $key == 0 ) echo 'active'; ?>">
									<a href="tab<?php echo $key;?>" class="accord-title">
										<!-- <span class="location-icon"><img src="<?php //echo $location_list['location_list_image'];?>" alt="Image" /></span> -->
										<span class="location-icon"><?php if(!empty($location_list['location_list_svg_image'])){ 
			                                echo $location_list['location_list_svg_image'];
			                            }elseif(!empty($location_list['location_list_image'])){ ?>
			                                <img src="<?php echo $location_list['location_list_image'];?>" alt="Image" />
			                            <?php }?></span>
										<span><?php echo $location_list['location_list_title'];?></span>
									</a>
									<div class="accord-panel">
										<div><?php echo $location_list['location_list_address'];?></div>

										<?php if($location_list['location_list_phone_no']) { ?>
											<span class="contact-phone">Phone: <a href="tel:<?php echo $location_list['location_list_phone_no'];?>"><?php echo $location_list['location_list_phone_no'];?></a> </span>
										<?php } ?>
										
										<?php if($location_list['location_list_fax_no']) { ?>
				                            <span>Fax: <?php echo $location_list['location_list_fax_no'];?></span>
				                        <?php } ?>
										
										<a href="<?php echo $location_list['location_list_share_link'];?>" target="_blank" class="share-link">Share Location</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="right-block">
							<!--<img src="<?php bloginfo('stylesheet_directory') ?>/images/img-map.jpg" alt="Map">-->
							<?php for ($key=0; $key < count($location_lists); $key++) {  ?>
							    <div class="location-map <?php if ( $key == 0 ) echo 'active'; ?>" id="tab<?php echo $key;?>">
							        <iframe src="<?php echo $location_lists[$key]['location_list_url'];?>" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							    </div>
							<?php } ?>

					</div>
				</div>
			</div>	
		</div>
	</div>

<?php } ?>
<?php } ?>

<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'http://www.tascoutsourcing.com/thankyou/';
    }, false );
</script>




