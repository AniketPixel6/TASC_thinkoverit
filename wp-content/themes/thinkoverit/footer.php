<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tasc
 */

?>

	<?php get_template_part('fields/footer-request-proposal-field'); ?>
	</section><!-- #content -->

	<footer class="tasc-footer">
		<div class="container clearfix">
			<div class="copyright footer-block">
				&copy; <?php _e("Copyright", 'tasc'); ?> <?php echo date('Y');?> <?php _e("TASC Outsourcing. All rights reserved.", 'tasc'); ?>
			</div>
			<ul class="footer-nav footer-block">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-5',
					) );
				?>
			</ul>
			<div class="follow-container footer-block">
				<div class="follow-wrap">
					<span class="follow-us"><?php _e("Follow us on", 'tasc'); ?> </span>
					<div class="footer-social-link">
						<a href="https://www.linkedin.com/company/tasc-outsourcing/" target="_blank" class="follow-link linkedin">LinkedIn</a>
						<a href="https://www.facebook.com/Tascoutsourcing/" target="_blank" class="follow-link facebook">Facebook</a>
						<a href="https://twitter.com/OutsourcingTasc" target="_blank" class="follow-link twitter">Twitter</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<!-- <div class="ticker">
		<marquee><?php// _e("If you’re a TASC Outsourcing employee looking to connect, call ECARE @ 800-32273 (Sun – Thu; 8 AM – 5 PM)", 'tasc'); ?> &nbsp; <?php// _e("In case of any emergency, call Samy +971 55 954 6296 / Mazin +971 55 744 5575", 'tasc'); ?></marquee>
	</div> -->
</div><!-- #page -->

<?php  //if(!get_field('disable_survey_popup')){ ?>
	<?php //if( !(isset($_SESSION['popupHide']) && $_SESSION['popupHide'])) { ?>
		<?php //session_destroy(); ?>
		<!-- <div class="popup-wrap survey-popup" data-postid="<?php //echo get_the_ID(); ?>">
			<div class="popup-lock">
				<a href="javascript:;" class="close-ico hide-popup">X</a>
				<div class="document-form-wrap">
					<h4>We want to know <span>what you think</span>.</h4>
					<h4 class="subtitle">Please take 2 minutes to complete our Employee Sentiment Index survey.</h4>
					<p>We are conducting a GCC wide survey to measure how committed the employees are to their jobs.</p>
					<p>As a participant, you stand a chance to win a half-day complimentary career development session, with a highly renowned industry trainer, at our headquarters in Dubai!</p>
					<p>You will also receive a complimentary copy of this report by January 2020.  </p>
					<div class=survey-btn>
						<a class="salary-survey" href="https://www.surveymonkey.com/r/9X65V89" target="_blank"><span>Take Survey</span></a>
					</div>

				</div>
			</div>
		</div> -->
	<?php //} ?>
<?php //}?>
<!-- <script>
	setTimeout(function(){
		jQuery('.popup-wrap').fadeIn();
	}, 2000);

	jQuery('.hide-popup, .survey-btn').click(function(){
		var data = { action: 'show_popup', popupHide: true};
        jQuery.post(my_ajax_object.ajax_url, data, function(response) {
            var result = jQuery.parseJSON(response);
        });
    	setTimeout(function(){
			jQuery('.popup-wrap').fadeOut();
		}, 1000);
    });
</script> -->


<script type="text/javascript">

	// hide overflow of body if popup is open on single page
	if(jQuery('.popup-wrap').is(':visible')){
		jQuery('body').addClass('fixed-body');
	}else{
		jQuery('body').removeClass('fixed-body');
	}

	// get value of cookie
	var post_arr = [];
	var cookie_val = "";
	var cookie_name = "attach_doc";

	var gat_cookie_val = "; " + document.cookie;
	var parts = gat_cookie_val.split("; " + cookie_name + "=");
	if (parts.length == 2){
		var cookie_ids = parts.pop().split(";").shift();
		if(cookie_ids.length){
			post_arr = cookie_ids.split(',')
		}
	}


	// disable lock icon on listing page if post id is in cookie
	jQuery('.lock-cart').each(function(){
		var currentPost = jQuery(this).attr('data-post');
		if(post_arr.indexOf(currentPost) != -1){
			jQuery(this).removeClass('lock-cart');
		}
	});

	// hide popup on single page if post id is in cookie
	jQuery('.popup-wrap').each(function(){
		var currentPost = jQuery(this).attr('data-postid');
		if(post_arr.indexOf(currentPost) != -1){
			jQuery(this).removeClass('locked');
			jQuery('body').removeClass('fixed-body');
		}
	});

	// hide popup when mail sent successfully

	document.addEventListener( 'wpcf7mailsent', function( event ) {

		console.log('wpcf7mailsent');
		var post_id = '<?php echo $post->ID ?>';
		jQuery('.success-data[data-post="'+post_id+'"]').removeClass('lock-cart');

		if(!post_arr.length){
			post_arr[0] = post_id;
		}else if(post_arr.indexOf(post_id) == -1){
			post_arr.push(post_id);
		}

		cookie_val = post_arr.join(',');
		document.cookie = cookie_name + '=' + cookie_val + '; max-age=43200; path=/;';

		setTimeout(function(){
			jQuery('.popup-wrap[data-postid="' + post_id + '"]').hide();
			jQuery('body').removeClass('fixed-body');
			jQuery('html, body').animate({ scrollTop: jQuery('#download-file-wrap').offset().top }, 'slow');

		}, 3000);

	}, false );
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb794c4967ae56c52186147/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php wp_footer(); ?>

</body>
</html>
