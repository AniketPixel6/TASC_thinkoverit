<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
get_header(); 
$postType = get_post_type();
$categories = get_terms( array('blog_categories') );

?>
<div class="category-section">
	<div class="container clearfix">
		<div class="categories-section">
			<div class="category-list-wrap">
				<div class="blog-search clearfix">
					<div class="category-job-icon post-categories icon-before">
						<form action="" method="POST" class="search-blog">
							<input type="text" name="q" class="search-icon" placeholder="Search">
						</form>
					</div>
					<div class="link-cat"><a href="javascript:void(0);">Categories</a></div>
				</div>
				<div class="blog-select-wrap">
					<ul class="blog-category-list">
						<li>
							<input class="category-blog" type="checkbox" name="all" value="all" id="all">
							<label for="all">All</label>
						</li>
						<?php foreach($categories as $category){ ?> 
							<li>
								<input class="category-blog" type="checkbox" name="<?php echo $category->slug; ?>" value="<?php echo $category->term_id; ?>" id="<?php echo $category->slug; ?>"> 
								<label for="<?php echo $category->slug; ?>"><?php echo $category->name; ?></label>
							</li>
						<?php } ?>
					</ul>
					<div class="blog-cat-filter">
						<button type="button" class="btn blue-btn btn-cancel" id="uncheck_button">Cancel</button>
						<button type="button" class="btn blue-btn btn-accept" id="merge_button">Accept</button>
					</div>
				</div>

			</div>	
		</div>
		<div class="blog-list clearfix">
			
		</div>
	</div>
</div>

<?php
get_footer();
