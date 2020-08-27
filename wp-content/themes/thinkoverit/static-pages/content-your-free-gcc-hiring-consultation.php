<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>
<div class="contact-section">
	<div class="container clearfix">
		<div class="contact-form-section">
			<h3>Avail your free GCC hiring consultation</h3>
			<?php the_content(); ?>
		</div>
		
	</div>
</div>
<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'https://www.tascoutsourcing.com/gcc-consultation-thank-you/';
    }, false );
</script>




