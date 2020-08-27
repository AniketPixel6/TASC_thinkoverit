<div class="container">
	<div class="detail-wrap clearfix">
		<div class="detail-content">
			<h1 class="center-title"><?php echo get_the_title(); ?></h1>
			<div><?php the_content(); ?></div>
		</div>
		<?php $pr_tags = wp_get_post_terms(get_the_ID(),'pr_tags'); ?>
		<div class="read-download clearfix">
			<ul class="tag-list">
				<?php foreach($pr_tags as $key=>$pr_tag){ ?> 
					<li><?php echo $pr_tag->name; ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>	
</div>

<?php get_template_part('fields/request-proposal-field'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>