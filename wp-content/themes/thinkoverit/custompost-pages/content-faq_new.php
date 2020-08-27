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
$array = [];
?>
<div class="faq-section">
	<div class="container clearfix">
		<div class="detail-wrap">
            <h1 class="center-title"><?php echo get_the_title(); ?></h1>
        </div>
       <!--  <div class="faq-search">
			<form action="" method="GET" class="search-form clearfix">
				<input type="text" name="q" class="search-icon" placeholder="Type keyword to find answers">
			</form>
		</div> -->

        <div class="faq-wrapper clearfix">
			<div class="faq-cat-wrapper clearfix">
	            <?php foreach($categories as $key=>$category){ ?>
	            	<div class="faq-box">
						<?php 
			              	$args = array(
						    'post_type' => 'faq',
						    'posts_per_page' => 3,
						    'order' => 'ASC',
						    'tax_query' => array(
						        array(
						            'taxonomy' => 'faq_categories',
						            'field' => 'slug',
									'terms' => $category->slug,
						        )
						    )
						);
				   //          if(isset($_GET['q'])){
							// 	$args['s'] = $_GET['q'];
							// }
			              	$faq = new WP_Query( $args );
		              	?>
		              	<?php if($faq->have_posts()){ ?>
		              		<?php $array[$key] = 1; ?>
							<div class="faq-box-wrap">
				     			<h4><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a></h4> 
				              	<ul class="faq-block-list">
					            	<?php while ( $faq->have_posts() ) { $faq->the_post();?>
							  			<li><a href="<?php echo get_term_link($category); ?>"><?php echo get_the_title($faq->ID); ?></a></li>
							  		<?php } ?>
						  		</ul>
								<a class="faq-view-all" href="<?php echo get_term_link($category); ?>">View all questions</a>
							</div>
						<?php } ?>
					</div>
	            <?php } ?>
	           <?php if(count($array)<1){ ?>
	           		<h3 class="not-found">No data has been found.</h3>
	           <?php } ?>
	        </div>
	    </div>
	</div>
</div>
<?php //if( !(isset($_SESSION['popupHide']) && $_SESSION['popupHide'])) { ?>
	<?php //session_destroy(); ?>
	<!-- <div class="popup-wrap survey-popup" data-postid="<?php //echo get_the_ID(); ?>">
		<div class="popup-lock">
			<a href="javascript:;" class="close-ico hide-popup">X</a>
			<div class="document-form-wrap">
				<h4>We want to know <span>what you think</span>.</h4>
				<h4 class="subtitle">Please take 5 minutes to complete our survey.</h4>
				<p>We are conducting this survey for a GCC wide salary and employment report. This report will offer a detailed look at salary and hiring trends from 2019 along with employee and employer expectations for 2020. You will receive a copy of the 2019 Salary & Employment Report on the first release.</p>
				<div class=survey-btn>
					<a class="salary-survey" href="https://www.surveymonkey.com/r/6PRCH2Q" target="_blank"><span>Employee Survey</span></a>
					<a class="employment-survey" href="https://www.surveymonkey.com/r/66737TM" target="_blank"><span>Employer Survey</span></a>
				</div>
				 
			</div>	
		</div>
	</div> -->
<?php //} ?>
<!-- <script>
	setTimeout(function(){ 
		jQuery('.popup-wrap').fadeIn();
	}, 20000);

	jQuery('.hide-popup').click(function(){
		var data = { action: 'show_popup', popupHide: true};
        jQuery.post(my_ajax_object.ajax_url, data, function(response) {
            var result = jQuery.parseJSON(response);
        });
    	jQuery('.popup-wrap').fadeOut();
    });
</script> -->
<?php
get_footer();
