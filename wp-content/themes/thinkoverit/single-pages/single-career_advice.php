<div class="container">
	<div class="detail-wrap clearfix">
		<div class="detail-content">
			<h1 class="center-title"><?php echo get_the_title(); ?></h1>
			<div><?php the_content(); ?></div>
		</div>
		<?php $advice_tags = wp_get_post_terms(get_the_ID(),'career_advice_tags'); ?>
		<div class="read-download clearfix">
			<ul class="tag-list">
				<?php foreach($advice_tags as $key=>$advice_tag){ ?> 
					<li><?php echo $advice_tag->name; ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>	
</div>
<?php get_template_part('fields/download-file'); ?>
<?php get_template_part('fields/testimonial-slider'); ?>