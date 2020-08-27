<div class="container single-blog-wrap">
	<div class="detail-wrap clearfix">
		<div class="blog-top-wrapper">
			<?php $blog_categories = wp_get_post_terms(get_the_ID(),'blog_categories'); ?>
			<?php if($blog_categories){?>
				<div class="read-download clearfix">
					<ul class="single-blog-tags">
						<?php foreach($blog_categories as $key=>$blog_category){ ?> 
							<li><?php echo $blog_category->name; ?></li>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
			<div class="detail-content">
				<h1 class="center-title"><?php echo get_the_title(); ?></h1>
				<?php if(!get_field('blog_disable_author_details')){ ?>
					<div class="blog-author">
						<?php 
							$author_image = get_field('blog_author_profile_photo');
							if(!empty($author_image)){ 
								$image = $author_image;
							}else{
								$image = get_bloginfo('stylesheet_directory').'/images/success-stories1.png';
							}
						?>
							<span class="blog-author-img"><img src="<?php echo $image; ?>" alt="<?php echo get_field('blog_author_name'); ?>"/></span>
						<div class="author-info">
							<h5><?php echo get_field('blog_author_name'); ?></h5>
							<span><?php echo get_the_date('M j, Y'); ?></span>
						</div>
					</div>
				<?php } ?>
				<div><?php the_content(); ?></div>
			</div>
		</div>
		<?php $currentPage = get_permalink( $post->ID ); ?>
		<div class="subscribe-section">
			<ul class="share-social-icons">
			   	<li class="facebook">
			    	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $currentPage; ?>">Facebook</a>
			   	</li>
			    <li class="twitter">
			    	<a target="_blank" href="https://twitter.com/home?status=https%3A//<?php echo $currentPage; ?>">Twitter</a>
			   	</li>
			    <li class="email">
			    	<a target="_blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&su=Share+Post&body=%27<?php echo $currentPage; ?>/%27&tf=1">Email</a>
			    </li>
			    <li class="linkedin">
			    	<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $currentPage; ?>/&title=&summary=&source=">LinkedIn</a>
			    </li>
			</ul>
			<div class="blog-subscribe-cont clearfix">
				<h2>Subscribe to our blog</h2>
				<?php echo do_shortcode( '[contact-form-7 id="9985" class="subscribe-form" title="Blog Subscribe"]' ); ?>
			</div>
		</div>
	</div>	
</div>
<?php $recommended_blogs = get_field('recommended_blog_posts');?>

<div class="popular-blog-wrap">
	<div class="container post-list-wrap">
		<?php if($recommended_blogs){ ?>
			<?php if(!get_field('disable_recommended_blogs') ){ ?>
				<div class="featured-blog-list recommended_blogs">
					<h2 class="post-title"><?php _e("Recommended Articles", 'tasc'); ?></h2>
					<div class="featured-blocks clearfix">
						<?php foreach($recommended_blogs as $blog){ ?>
							<?php 
								if(has_post_thumbnail($blog->ID)) {
					                $image = get_the_post_thumbnail_url($blog->ID, 'medium');
					            }
							?>
							<div class="featured-blog-block">
								<a class="block-content" href="<?php echo get_permalink($blog->ID); ?>">
									<div class="block-image"><img src="<?php echo  $image; ?>" alt="<?php echo get_the_title($blog); ?>"/></div>
									<div class="block-data">
										<h5><?php echo get_the_title($blog); ?></h5>
										<span class="post-date"><?php echo get_the_date('j M Y',$blog->ID) ?></span>
									</div>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
		<!-- <div class="featured-blog-list popular-blogs">
			<?php 
					//$args = array('header' => 'Popular Blogs',
					//			 'header_start' => '<h2 class="post-title">',
					//			 'header_end' => '</h2>',
					//			 'limit' => 4,
					//			 'range' => 'last7days',
					//			 'post_type' => 'blog',
    				//			 'title_length' => 12,
					//			 'post_html' => '<li class="featured-blog-block"><a href="{url}" class="blo"> <div class="block-image">{thumb}</div> <div class="block-data"><h5>{text_title}</h5><span class="post-date">{date}</span></div></a></li>',
					//			 'thumbnail_width' => 362,
					//			 'thumbnail_height' => 242,
					//			 'stats_date' => 1,
					//			 'stats_date_format' => 'F j, Y'
					//	);
					//wpp_get_mostpopular( $args );
			?>
		</div> -->
	</div>
</div>
<?php get_template_part('fields/testimonial-slider'); ?>