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
$categories = get_terms(array('faq_categories'));

?>
<div class="faq-section">
	<div class="container clearfix">
		<div class="detail-wrap">
            <h1 class="center-title"><?php echo get_the_title(); ?></h1>
        </div>
        <div class="faq-search">
			<form action="" method="GET" class="search-form clearfix">
				<input type="text" name="q" class="search-icon" placeholder="Type keyword to find answers">
			</form>
			<h5 class="faq-subtitle">You can also browse the topics below to find out what you are looking for.</h5>
		</div>

        <div class="faq-wrapper clearfix">
        	<h3>How can we help you?</h3>
			<div class="faq-cat-wrapper clearfix">
	            <?php foreach($categories as $key=>$category){ ?>
	            	<div class="faq-box ">
						<h4><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a></h4> 
						<?php 
			              	$args = array(
						    'post_type' => 'faq',
						    'posts_per_page' => 3,
						    'tax_query' => array(
						        array(
						            'taxonomy' => 'faq_categories',
						            'field' => 'slug',
									'terms' => $category->slug,
						        )
						    )
						);
				            if(isset($_GET['q'])){
								$args['s'] = $_GET['q'];
							}
			              	$faq = new WP_Query( $args );?>
			              	<ul class="faq-block-list">
			            <?php while ( $faq->have_posts() ) { $faq->the_post();
						?>
					  			<li><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title($faq->ID); ?></a></li>	
					  	<?php } ?>
					  		</ul>
						<a class="faq-view-all" href="<?php echo get_term_link($category); ?>">View all questions</a>
					</div>
	            <?php } ?>
	        </div>
	    </div>
	</div>
</div>

<?php
get_footer();
