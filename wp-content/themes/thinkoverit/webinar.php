<?php
/*
Template Name: Webinar
Template Post Type: post, page, services
*/
get_header(); ?>
<div class="diversity-image">
	<img class=" ls-is-cached lazyloaded webinar-banner" src="http://www.tascoutsourcing.com/wp-content/uploads/banner-for-landing-pg-1-1.png" alt="Diversity">
	<img class=" ls-is-cached lazyloaded webinar-mobile-banner" src="http://www.tascoutsourcing.com/wp-content/uploads/banner-for-mobile.png" alt="Diversity">

	<ul class="diversity-num clearfix">
		<li style="width:33.33%;">
			<strong>25</strong>
			<small>June 2020</small>
		</li>
		<li  style="width:33.33%;">
			<strong>14:30</strong>
			<small>GST</small>
		</li>
		<li  style="width:33.33%;">
			<strong>40</strong>
			<small>Minutes</small>
		</li>
	</ul>
</div>
<div class="services-section container">
    <div class="detail-wrap">
        <h3 class="icon-before geographies-icon center-title"><?php echo get_the_title(); ?></h3>
        <div class="detail-content" style="text-align: center;"><?php the_content(); ?></div>
    </div>
</div>
<div class="get-in-touch-section retail-get-in-touch">
	<div class="footer-rfp">
		<div class="container"  id="webinar_cf" style="background-color: #fff; padding: 50px;">
			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup" class="contact-form">
				<form action="https://tascoutsourcing.us18.list-manage.com/subscribe/post?u=8d518814cdec967f7c619f3b4&amp;id=b29a14a2c3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<h2>Webinar Registration</h2>
						<div class="mc-field-group field-wrap clearfix" style="margin: 0 0 30px 0;">
						<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Full Name">
						</div>
						<div class="mc-field-group field-wrap clearfix">
							<div class="col-2 mc-field-group">
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Business Email Address*">
							</div>
							<div class="col-2 mc-field-group">
							<input type="text" name="PHONE" class="required" value="" id="mce-PHONE" placeholder="Contact Number">
							</div>
						</div>
						<div class="mc-field-group field-wrap clearfix"> 
							<div class="col-2 mc-field-group">
							<input type="text" value="" name="MMERGE2" class="required" id="mce-MMERGE2" placeholder="Company Name*">
							</div>
							<div class="col-2 mc-field-group">
							<input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3" placeholder="Designation">
							</div>  
						</div>
						<div id="mce-responses" class="clearfix">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8d518814cdec967f7c619f3b4_b29a14a2c3" tabindex="-1" value=""></div>
						<div class="clearfix"><input type="submit" value="Register" name="subscribe" id="mc-embedded-subscribe" class="btn green-btn"></div>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='MMERGE2';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
		</div>
	</div>
</div>
<div class="container" id="webinar_scroll_sec">
	<div class="benefits-section-wrap" style="margin-top: 50px;">
		<div class="benefits-left"> 
		<img class=" ls-is-cached lazyloaded" src="http://www.tascoutsourcing.com/wp-content/uploads/agenda-pic1.jpg" data-src="https://www.tascoutsourcing.com/wp-content/uploads/IMG_1.jpg" alt="Image">
		</div>
		<div class="benefits-right">
			<h3 class="icon-before history-ico">On the agenda:</h3>
			<div class="mCustomScrollbar listing-scroll-wrapper _mCS_1" data-mcs-theme="dark">
				<div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
					<div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
						<p></p>
						<div class="bullet-list-wrap">
							<div class="bullet-list-item clearfix"> 
								<span class="sr-number">01</span>
								<div class="bullet-list-content">
									<p>Current recruitment trends</p>
								</div>
							</div>
							<div class="bullet-list-item clearfix">
								<span class="sr-number">02</span>
								<div class="bullet-list-content">
									<p>Agile recruitment in the age of flexible working</p>
								</div>
							</div>
							<div class="bullet-list-item clearfix">
								<span class="sr-number">03</span>
								<div class="bullet-list-content">
									<p>Recruitment efficiencies through automation</p>
								</div>
							</div>
							<div class="bullet-list-item clearfix">
								<span class="sr-number">04</span>
								<div class="bullet-list-content">
									<p>Upskilling for higher business impact</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if(!get_field('disable_post_success_story') ){ ?>
	<?php $success_stories = get_field('post_success_story_list'); ?>
    <div class="about-section story-section">
        <div class="container clearfix">
            <?php if(get_field('post_success_title')) { ?>
               <h3 class="center-title"><?php the_field('post_success_title'); ?></h3>
            <?php } ?>
            <div class="post-story-success" id="webinar_slider">
	            <?php foreach($success_stories as $key => $success_story ){?>
	            	<div class="story-slideshow slide">
			            <div class="about-right">
							<?php if($success_story['video_url']) {?>
								<a data-fancybox href="<?php echo $success_story['video_url']; ?>" class="story-popup">
									<video poster="<?php echo $success_story['video_image']; ?>">
										<source src="#" type="video/mp4">
									</video>
									<span class="video-icon"></span>
								</a>
			                <?php }else{?>
			                	<a href="javascript:void(0);">
				                    <video poster="<?php echo $success_story['video_image']; ?>">
				                        <source src="#" type="video/mp4">
				                    </video>
			                    </a>
			                <?php }?>
			            </div>
			            <div class="about-left">
			                <?php echo $success_story['description']; ?>
			            </div>
						<div class="author-info">						
							<div style="text-align:center;"><p><?php echo $success_story['title']; ?></p></div>					
						</div>
			        </div>					
		        <?php } ?>
						
		    </div>
        </div>
    </div>
<?php } ?>

<script>
jQuery( document ).ready(function() {
jQuery('#webinar_slider').slick({
  autoplay:true,
  autoplaySpeed:1500,
  slidesToShow:1,
  slidesToScroll:1
  });
});

</script>

<style >
.page-template-webinar h3{
	font: normal 35px/24px "TitilliumWeb SemiBold",arial;
}
.page-template-webinar h2{
	text-transform: uppercase;
	font-family: "RobotoSlab Regular";
}
.quoute-blog p{
background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAcCAYAAAAEN20fAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0M4QkJGRjIwQkQ3MTFFODlENUJFQUVCRjVENkVEMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0M4QkJGRjMwQkQ3MTFFODlENUJFQUVCRjVENkVEMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQzhCQkZGMDBCRDcxMUU4OUQ1QkVBRUJGNUQ2RUQzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQzhCQkZGMTBCRDcxMUU4OUQ1QkVBRUJGNUQ2RUQzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pr2sWHgAAAKtSURBVHjarJddiE1RFMfvOXPFA2JS4ytmDC9qpOSbZF6UxoNRouSBlGbwNMU0HmgyzQMx3nyEZspM5JG6Hrge5MpHQ95EhAgPKB8zU/it2qd22977nrOPVf/Wba3zX+d/1v68USGjbb+yYSquFTwd3Fp6UMhp1FuDW1nMQJiN6wIbwb48IqgV47aBTjAM9hdTkOSZg+AweAeaEfEih4jFuPNgiQihVq/EoyqkGbhr0jrwESyH+CqHiDbcKTAO9FCrK8kVPaSFuJtgVhIKFUGtSAk4oEIl1eGCVwjEBbg7YJoKXUDErRxz8rTMK/X7F9hLvT/6A7FFRK1SnIgYA0dyDEeHJkLsjK2zsaWFA6BBC1+G+CZQxFpcrxaSLpy0PWt2ZI9anroNBYqYiOsHNVr4Lh/12isEYh3uuJEfAaFzQ4az3ohddz0cG8RJRv4JXzAa0I1GbYXo9sgrBOIc3G5L/m1gNw6pvSJ1vaQj7Q7iSEA3ZLXtdKTHXLwIYo3auusseVnzZ8E9cINh+pZCiAxJnyNdAVdBmVqPzY6scIgQm6DGelDEqpdUs82enLzrhMwVapXBXF1Ic8quy3Lsg9zj6cZ43OqU9dbJcobTkAhZmnEadELe5Mgtcsw1l8k5NiTXAhEyL2BVHHPEGwNqLQMtsWd++KyJr5hviU8PXO6tccZWmsPwv6xJhHwNJE+2xL4H1poiQkKvfZ8ssZeBtT6LkHIg2XZuyMY3GlDrvgg5F0AusTN+MIPEfuAuBgjpjyG/Ny4v1ewn6PDkj0qrM9S7hIaHsUYeSEGSzu2A+Mz1gPqwFvAlRb3boO2fvxPsDbtw3WCmhSSHVDsvqqQ8hevVRWuL4zCVXHdy34ksBeQ0XiVrG9SqNlcgDAdeGeWj1gP5p/gbPJdbn3mS/xVgAJHJy/9jrtfUAAAAAElFTkSuQmCC) 10px 10px no-repeat;
    padding: 10px 0 10px 50px;
}
#webinar_scroll_sec .benefits-section-wrap .listing-scroll-wrapper{
height: 270px;
}
.webinar-mobile-banner {
		display: none;
	}
@media(max-width: 480px) {
	.webinar-mobile-banner {
		display: block;
	}
	.webinar-banner{
		display: none;
	}
}


</style>

<?php get_footer();
