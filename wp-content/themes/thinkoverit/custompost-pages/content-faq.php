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
        <div class="faq-wrapper">
			<ul class="faq-cat">
	            <?php foreach($categories as $key=>$category){ ?>
	              <li><a class="faq-buttons faq-items" data-id="<?php echo $category->slug; ?>" href="javascript:void(0);"><?php echo $category->name; ?></a></li>
	            <?php } ?>
	        </ul>
	    </div>
		<div class="spinner-wrapper">
			<div class="spinner"></div>
		</div>
		<div class="faq-list clearfix">
			
		</div>
	</div>
</div>

<?php
get_footer();
