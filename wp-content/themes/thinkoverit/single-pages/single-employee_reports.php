<div class="container">
	<div class="detail-wrap clearfix">
		<div class="detail-content">
			<h1 class="center-title"><?php echo get_the_title(); ?></h1>
			<div><?php the_content(); ?></div>
		</div>
		<?php $success_tags = wp_get_post_terms(get_the_ID(),'report_categories'); ?>
		<div class="read-download clearfix">
			<ul class="tag-list">
				<?php foreach($success_tags as $key=>$success_tag){ ?> 
					<li><?php echo $success_tag->name; ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>	
</div>

<?php get_template_part('fields/download-file'); ?>
<?php get_template_part('fields/testimonial-slider'); ?>
