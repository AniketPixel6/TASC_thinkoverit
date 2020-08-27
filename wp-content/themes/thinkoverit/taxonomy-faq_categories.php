<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
get_header(); 
$categories = get_terms(array('faq_categories'));

?>
<div class="faq-section faq-section-new">
	<div class="container clearfix">
		<div class="detail-wrap">
            <h1 class="center-title">How can we help you?</h1>
        </div>	
        <!-- <div class="faq-wrapper">
			<ul class="faq-cat">
	            <?php //foreach($categories as $key=>$category){ ?>
	              <li><a class="faq-buttons" data-id="<?php //echo $category->slug; ?>" href="<?php //echo get_term_link($category); ?>"><?php //echo $category->name; ?></a></li>
	            <?php //} ?>
	        </ul>
	    </div> -->	
		<!-- <div class="faq-search">
			<form action="" method="GET" class="search-form clearfix">
				<input type="text" name="q" class="search-icon" placeholder="Type keyword to find answers">
			</form>
		</div> -->
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$posts_per_page = 50;
		$postType = get_post_type();
		$queried_object = get_queried_object();
		$args = array( 'post_type' => $postType, 'posts_per_page' => $posts_per_page,'order' => 'ASC','paged' => $paged, 'post_status' => 'publish', 'tax_query' => array(
				array(
					'taxonomy' => 'faq_categories',
					'field' => 'id',
					'terms' => get_queried_object()->term_id,
					'include_children' => false
				) )
			);
		// if(isset($_GET['q'])){
		// 				$args['s'] = $_GET['q'];
		// 			}
		$loop = new WP_Query( $args );
		?>
		<?php
			$home = 'FAQ Home';
			$start_delimiter = '&#8249;';
			$delimiter = '&#47;'; // delimiter between crumbs
			$homeLink = get_permalink( get_page_by_path( 'faq' ) );
			$term = get_queried_object();
			echo '<div class="faq-crumbs"><span class="faq-crumb-arrow"></span><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
			echo $term->name;
		?>
		<div class="faq-list-new">
			<?php if(!$loop->have_posts()){ ?>
				<h4>No data has been found. </h4>
			<?php } ?>
			<?php  while ( $loop->have_posts() ) { $loop->the_post(); ?>
				<!-- <a class="faq-block-link" href="<?php //echo get_permalink(); ?>">
					<h4 class="faq-title-new"></span><?php //echo get_the_title(); ?></h4>		
				</a> -->
				<div class="faq-block">
					<div class="faq-content">
						<h4 class="faq-title"><?php echo get_the_title() ?></h4>		
						<div class="faq-text clearfix"><?php echo get_the_content() ?></div>
					</div>
				</div>
			<?php } wp_reset_postdata(); ?>	
		</div>
	</div>
	<a href="javascript:void(0);" class="scroll-top" id="scroll-top">Scroll Top</a>
</div>
<?php
get_footer();
