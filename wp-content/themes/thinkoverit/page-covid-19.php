<?php
/**
    Template Name: covid-19 Page
 */



get_header();
$categories = get_terms(array('faq_categories'));
?>
<section class="covid-detail-wrap">
	<div class="detail-wrap container">
		<div class="itdigital-section">
			<h3 class="center-title icon-before geographies-icon"><?php echo the_title(); ?></h3>
			<div class="detail-content"><?php echo the_content();?></div>
		</div>
	</div>
</section>
<section class="covid-competancy-field">
	<div class="container clearfix competancy-container">
		<?php get_template_part('fields/competancy-field'); ?>
	</div>
</section>
<section class="covid-detail-wrap">
	<div class="container">
		<div class="itdigital-section covid-19-container">
			<?php  echo get_field('covid-19_section');?>
		</div>
	</div>
</section>
<section class="covid-faq-section">
	<div class="faq-section faq-section-new">
		<div class="container clearfix">
			<div class="detail-wrap">
				<h4 class="center-title" style="font-weight: normal;">In this time of worry, we’ve tried to answer some FAQs below:</h4>
			</div>

			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$posts_per_page = 50;
			$postType = 'faq';
			$queried_object = get_queried_object();
			$args = array( 'post_type' => $postType, 'posts_per_page' => $posts_per_page,'order' => 'ASC','paged' => $paged, 'post_status' => 'publish', 'tax_query' => array(
					array(
						'taxonomy' => 'faq_categories',
						'field' => 'id',
						'terms' => 264,
						'include_children' => false
					) )
				);

			$loop = new WP_Query( $args );
			?>
			<?php
				$home = 'FAQ Home';
				$start_delimiter = '&#8249;';
				$delimiter = '&#47;'; // delimiter between crumbs
				$homeLink = get_permalink( get_page_by_path( 'faq' ) );
				$term = 'covid-19';
				
			?>
			<div class="faq-crumbs">
				<div class="faq-list-new">
					<?php if(!$loop->have_posts()){ ?>
						<h4>No data has been found. </h4>
					<?php } ?>
					<?php  while ( $loop->have_posts() ) { $loop->the_post(); ?>

						<div class="faq-block">
							<div class="faq-content">
								<h4 class="faq-title"><?php echo get_the_title() ?></h4>
								<div class="faq-text clearfix"><?php echo get_the_content() ?></div>
							</div>
						</div>
					<?php } wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="covid-faq-section">
	<div class="detail-wrap container">
		<div class="itdigital-section covid-19-container">
			<?php  echo get_field('share_section');?>
		</div>
	</div>
</section>
<?php
get_footer();
