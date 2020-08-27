<div class="faq-section faq-single-section">
	<div class="container">
		<div class="detail-wrap clearfix">
			<div class="faq-list-new clearfix">
				<h1 class="center-title"><?php _e("How can we help you?", 'tasc'); ?></h1>
				<div class="faq-search">
					<?php get_search_form(); ?>
				</div>
				<?php
					$home = 'FAQ Home';
					$delimiter = '&#47;'; // delimiter between crumbs
					$homeLink = get_permalink( get_page_by_path( 'faq' ) );
					$terms = get_the_terms( $post->ID, 'faq_categories' );
					if ( !empty( $terms ) ){
					    $term = array_shift( $terms );
					    echo '<div class="faq-crumbs"><span class="faq-crumb-arrow"></span><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
						echo '<a href="' .get_term_link($term). '">'. $term->name . '</a> ' . $delimiter . ' ';
						echo get_the_title();
						echo '</div>';
					}
					
				?>
				<div class="faq-block-link">
					<div class="faq-content-new">
						<h4 class="faq-content-title"><?php echo get_the_title(); ?></h4>
						<div class="faq-text-new clearfix"><?php the_content(); ?></div>
					</div>
				</div>
				<div class="faq-pagination clearfix">
					<div class="post-link">
			            <span class="prev-link"><?php previous_post_link('%link', '<span class="link-arrow"></span>Previous', $in_same_term = true, $excluded_terms = '', $taxonomy = 'faq_categories'); ?></span>
			            <span class="next-link"><?php next_post_link('%link', 'Next<span class="link-arrow"></span>', $in_same_term = true, $excluded_terms = '', $taxonomy = 'faq_categories'); ?></span>
			        </div>
		    	</div>
			</div>
		</div>
	</div>	
</div>
