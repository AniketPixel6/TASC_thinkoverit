<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>
<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $posts_per_page = 20;
	$args = array( 'post_type' => 'awards', 'posts_per_page' => $posts_per_page, 'post_status' => 'publish', 'paged' => $paged);
	$awards = get_posts( $args );	
?>
<div class="awards-page-section">
	<div class="container">
		<h3 class="icon-before award-icon center-title"><?php echo get_the_title(); ?></h3>
		<ul class="awards-wrap clearfix">
			<?php 
                foreach($awards as $award){
                    $image = get_the_post_thumbnail_url($award->ID, 'medium');
            ?> 	
				<li class="etisalat awards-block">
					<div class="logo-wrap">
						<span>
							<img src="<?php echo  $image; ?>" class="etisalat-logo">
						</span>
					</div>
					<div class="logo-block">
						<p class="logo-txt"><?php echo get_the_title($award); ?></p>
					</div>	
				</li>
			<?php } ?>
		</ul>	
	</div>	
</div>

<div class="csr-section awards-gallery-section">
	<div class="container clearfix">
		<h3 class="icon-before geographies-icon center-title">Awards Gallery</h3>
		<div class="grid">
		<?php 
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) {

				$loop->the_post();
				$full = get_the_post_thumbnail_url(get_the_ID(), 'full');
				$galleryImages = get_field('gallery_content');
				if($galleryImages) {
					$galleryImage = array_column($galleryImages, 'gallery_image');
	        	?>	

					<div class="success-data test-data">
						<div class="clearfix">
							<div class="success-data-img">
								<a data-fancybox="category<?php echo get_the_ID(); ?>" href="<?php echo $galleryImage[0]; ?>">
									<img src="<?php echo $galleryImage[0]; ?>">
									<?php if($galleryImage){ ?>
										<div class="file-img"></div>
									<?php } ?>
								</a>
								<?php if($galleryImages){ ?>
									<div style="display: none;">
										<?php foreach($galleryImages as $key=>$image){
											if($key == 0)
											continue;
										?>	
											<?php if(isVideoLink($image['gallery_image_name'])){ ?>
											<a data-fancybox="category<?php echo get_the_ID(); ?>" data-video="1" href="<?php echo $image['gallery_image_name']; ?>"></a>
											<?php }else{ ?>
											<a data-fancybox="category<?php echo get_the_ID(); ?>" href="<?php echo $image['gallery_image']; ?>" ></a>
											<?php } ?>	
										<?php } ?>
									</div>
								<?php } ?>
							</div>
							<div class="success-data-txt">
								<p><?php echo get_field('gallery_title'); ?></p>
							</div>
						</div>
					</div>	
		<?php } } wp_reset_postdata();?>
	</div>
	</div>	
</div>

<?php //custom_pagination($my_query->max_num_pages, "", $paged); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>




