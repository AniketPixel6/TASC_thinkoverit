<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
?>
<div>
	<?php 
	if(isset($_GET['q'])){
						$args['s'] = $_GET['q'];
					}
	?>
	<div class="test-data-txt">
		<span><?php echo get_the_title(); ?></span>
	</div>
</div>