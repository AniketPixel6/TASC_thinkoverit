<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>

<div class="contact-section sales-enquiry-section">
	<div class="container clearfix">
		<h1><?php echo get_the_title(); ?></h1>
		<div class="contact-form-section request-form-section">
			<div class="contact-form job-apply-form clearfix">
				<div class="contact-info sales-enquiry-info clearfix">
					<?php the_content(); ?>
				</div>		
			</div>	
		</div>	
	</div>
</div>

<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'http://www.tascoutsourcing.com/thank-you/';
    }, false );
</script>

