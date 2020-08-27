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
?>

<div class="csr-section">
	<div class="container clearfix">
		<h3 class="icon-before geographies-icon center-title"><?php echo get_the_title($post->ID); ?></h3>
		<div class="grid">
		<?php 
            $args = array( 'post_type' => 'events', 'posts_per_page' => $posts_per_page, 'post_status' => 'publish', 'paged' => $paged );
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) {
				$loop->the_post();
				$image = get_the_post_thumbnail_url(get_the_ID(),'medium');
				$full = get_the_post_thumbnail_url(get_the_ID(), 'full');
				$video = get_field('csr_video');
        ?>	
				<div class="success-data two-line-title-data test-data">
					<div class="clearfix">
						<div class="success-data-img">
							<?php $galleryImages = get_field('gallery_content'); ?>
							<?php if($galleryImages) $galleryImage = array_column($galleryImages, 'gallery_image');
							?>
							<a data-fancybox="category<?php echo get_the_ID(); ?>" href="<?php echo  $full; ?>">
								<img src="<?php echo $image; ?>">
								<?php if($galleryImage){ ?>
									<div class="file-img"></div>
								<?php } ?>
							</a>
							<?php if($galleryImage){ ?>
							<div style="display: none;">
								<?php foreach($galleryImage as $images){?>	
									<a href="<?php echo $images; ?>" data-fancybox="category<?php echo get_the_ID(); ?>"></a>
								<?php } ?>
							</div>
							<?php } ?>
							<?php if($video){ ?>
								<div style="display: none;">	
									<a  data-fancybox="category<?php echo get_the_ID(); ?>"  href="<?php echo $video; ?>"></a>
								</div>
							<?php } ?>
						</div>
						<div class="success-data-txt">
							<h4><?php echo theme_the_excerpt(get_the_title(), 12); ?></h4>
							<p class="csr-content"><?php echo theme_the_excerpt(get_the_content(),20);?></p>
						</div>
					</div>
				</div>	
		<?php } wp_reset_postdata();?>
	</div>
	</div>	
</div>
<!-- <script type="text/javascript">
	jQuery(window).load(function(){
		jQuery(function() {  
	        jQuery('.grid').masonry({
	            itemSelector: '.test-data', 
	            isAnimated: true
	        });
	    });
	});
</script> -->
<?php //custom_pagination($loop->max_num_pages, "", $paged); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>



