<?php
/**
    Template Name: Home Page
 */

//$sliders = get_field('hero_slider');

get_header(); 
mobile_global_vars();
if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) : the_post();

?>
<!-- Start  

<?php// $home_slider = get_field('home_slider') ?>
<div class="post-story-success banner-section home-slider-wrap" id="webinar_slider" >
	<?php// foreach($home_slider as $key => $home_slide ){?>
    <?php// if($home_slide['background_image'] && $home_slide['background_color']){?>
		<div class="home-banner-img" style="background: <?php// echo $home_slide['background_color']; ?> url('<?php// echo $home_slide['background_image']; ?>') no-repeat top center;">
	<?php //} elseif($home_slide['background_image']){?>
		<div class="home-banner-img" style="background: url('<?php// echo $home_slide['background_image']; ?>') no-repeat top center;">
        <?php// } elseif($home_slide['background_color']){?>
            <div class="home-banner-img" style="background-color: <?php// echo $home_slide['background_color']; ?>;">
        <?php// } else {?>
            <div class="home-banner-img">
        <?php// }?>
            <div class="container story-slideshow slide home-slider clearfix">
				<div class="slider-left">
					<div class="slider-content">
						<h4><?php// echo $home_slide['slider_title']; ?></h4>
						<div class="slider-text"><?php// echo $home_slide['slider_text']; ?></div>
					</div>
                    <?php// if($home_slide['link_url']){?>
                    <div class="link">
                         <a href="<?php //echo $home_slide['link_url']; ?>" class="btn lnk-btn" id="job_roles"><?php// if($home_slide['link_text']){echo $home_slide['link_text'];}else{
                             //echo "Visit Page";}?></a>
                    </div>
                     <?php// } ?>
                    
				</div>
				<div class="slider-right">
					<div class="slider-image" >
						<?php// if($home_slide['slider_image']) {?>
							<img src="<?php// echo $home_slide['slider_image'] ?>">								
						<?php// }?>
					</div>
				</div>
				
			</div>
		</div>
	<?php// } ?>
</div>

<style> 

}
.lnk-btn{
    border : 1px solid #fff;
    color: #fff;
}
.lnk-btn:hover{
    color: #0F90C0;
    background-color: #fff;
}
.slider-text p{
    font-size: 16px !important;
}
@media (max-width:768px) {
   
	.banner-section{
		height: 90vh;
	}
	.home-slider .slider-right, .home-slider .slider-left{
		float:none;
		margin: 0 auto;
	}
	.home-slider .slider-left h2, .home-slider .slider-left p {
		text-align: center;
	}
	.home-slider .slider-left h2{
	font: normal 25px/32px "TitilliumWeb Regular", arial;
    
	}
	.home-slider .slider-left p{
		font: normal 19px/30px "TitilliumWeb Regular", arial;		
	}
	.home-slider .slider-right .slider-image{
		margin: 0 auto;
	}
	
}
</style>

<script>
jQuery( document ).ready(function() {
jQuery('#webinar_slider').slick({
  dots: true,
  autoplay:true,
  arrows: true,
  autoplaySpeed:1500,
  slidesToShow:1,
  slidesToScroll:1
  });
});

</script>



 end  -->
<?php if(!get_field('disable_banner_image') ){

    $banner_choice = get_field_object('banner_choice'); 
    $banner_value = $banner_choice['value'];

    if($banner_value == 'Video') {
        $banner_video = get_field('home_banner_video');
    }else {
        $banner_img = get_field('home_banner_image');
        $mob_banner_img = get_field('mob_home_banner_image');
    }

    if(empty($banner_img)){ 
        $banner_img = get_bloginfo('stylesheet_directory').'/images/home-banner.jpg';
    }

?>
	<div class="banner-section home-banner" >
        <?php if($banner_value == 'Video') { ?>
            <div class="fullscreen-bg">  
                <video class="fullscreen-bg-video" autoplay loop muted >
                    <source src="<?php echo $banner_video; ?>" type="video/mp4">         
                </video> 
                <div class="mobile-bg">  
                    <span class="video-icon banner-video-icon"></span>
                    <div class="video-overlay">
                        <div class="video-wrap">
                            <a class="close-menu" href="javascript:;">Close</a>
                            <video id="banner-video" src="<?php echo $banner_video; ?>" width = "100%" autoplay loop muted>
                            </video>
                        </div>
                    </div>
                </div>   
            </div>

        <?php }?>
        <?php if($banner_value == 'Image') { ?>
        <?php if($mob_banner_img){
                $mob_banner = $mob_banner_img;
            }else{
                $mob_banner = get_bloginfo('stylesheet_directory').'/images/home-banner.jpg';
            }
         ?>
         
            <div class="home-banner-img" style="background-image: url('<?php echo $banner_img; ?>')" ></div>
            <div class="home-banner-img mobile-bg" style="background-image: url('<?php echo $mob_banner; ?>')"></div>
        <?php } ?>
        <div class="banner-content">
            <div class="home-banner-content clearfix">
                <div class="left-block">
                    <h2><?php the_field('banner_left_content'); ?></h2>
                    <a href="<?php the_field('banner_left_button_link'); ?>" class="btn blue-btn"><?php the_field('banner_left_button_text'); ?></a>
                </div>
                <div class="right-block">
                    <h2><?php the_field('banner_right_content'); ?></h2>
                    <a href="<?php echo get_permalink( get_page_by_path('employees-page'))."#jobs?getHired"; ?>" class="btn green-btn"><?php the_field('banner_right_button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if(!get_field('service_disable') ){ ?>
    <?php  $services = get_field('services'); ?>
	<?php  if(is_array($services) && count($services)){ ?>
    <div class="solution-section solution-section-wrap clearfix">
        <div class="container">
            <h3><?php the_field('service_title'); ?></h3>
            <div class="solution-inner-container clearfix">
                <div class="solution-block-wrap clearfix">
                    <?php  foreach($services as $service){ ?>
    				<a href="<?php echo get_permalink($service); ?>" class="solution-block">
    					<div class="solution-inner-block clearfix">
    						<!-- <span class="solution-icon"><img src="<?php //echo get_field('services_extra_icon', $service->ID); ?>" class="solution-logo"></span> -->
                            <span class="solution-icon"><?php if(!empty(get_field('service_logo_svg_code', $service->ID))){ 
                                echo get_field('service_logo_svg_code', $service->ID);
                            }else{ ?>
                                <img src="<?php echo get_field('services_extra_icon', $service->ID); ?>" class="solution-logo">
                            <?php }?></span>

    						<h4 class="solution-title"><?php echo get_the_title($service); ?></h4>
    					</div>                      
    					<p><?php echo theme_the_excerpt( get_the_excerpt($service), 30); ?></p>
    					<span class="btn blue-btn read-more"> <?php _e("Read More", 'tasc'); ?></span>
    				</a> 
    				<?php } ?>
                </div>
                <div class="btn-wrap">
                    <a href="<?php echo get_permalink( get_page_by_path( 'our-services' ) ); ?>" class="btn blue-btn read-more"><?php _e("View All TASC Solutions", 'tasc'); ?></a>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
<?php } ?>

<?php if(!get_field('expertise_disable') ){
	$terms = get_terms( array('expertise_categories') ); 
?>
	<div class="expertise-section">
		<div class="expertise-banner" style="background: url('<?php echo get_field('expertise_banner'); ?>') 0 0 no-repeat;background-size: cover;"></div>
		<div class="expertise-wrap clearfix container">
			<div class="sec-bg"></div>
				<div class="left-exp">
					<h3><?php echo get_field('expertise_title'); ?></h3>
					<div class="mCustomScrollbar expertise-description"  data-mcs-theme="dark"><?php echo get_field('summary'); ?></div>
                    <div class="btn-wrapper">
                        <?php  foreach($terms as $key => $term){ ?>
                            <?php
                                if($key%2 == 0){
                                    $btnClass = 'trnsprnt-btn-blue';
                                     $jobClass = '';
                                }else{
                                    $btnClass = 'trnsprnt-btn-green';
                                    $jobClass = 'btn-job';
                                }
                            ?>
                            <div class="browse-<?php echo $term->slug; ?> <?php echo $jobClass; ?>">
        						<a data-target="<?php echo $term->slug; ?>" href="javascript:;" class="btn <?php echo $btnClass; ?> <?php echo $jobClass; ?> btn-lg tab-buttons" id="<?php echo $term->slug; ?>"><?php _e("Browse by", 'tasc'); ?> <?php echo $term->name; ?></a>
        					</div>
                        <?php } ?>
                    </div>
				</div>

				<div class="right-exp" id="right-exp">
					<?php 
                    foreach($terms as $term){
						$args = array(  'post_type' => 'expertise', 
										'posts_per_page' => 20,
                                        'post_status' => 'publish',
										'tax_query' => array(
														array(
															'taxonomy' => 'expertise_categories',
															'field' => 'term_id',
															'terms' => $term->term_id,
                                                            'name' => $term->term_name,
														)
													) );
						$industries = get_posts( $args );   
                    ?>
                        <div class = "<?php if($term->slug == 'industries') { echo 'ind_wrap'; } else {echo 'job_role_wrap';}?> clearfix">
                            <?php $flag = 1;?>
                            <?php foreach($industries as $key=>$industry){ ?>
                            <?php 
                                $catId = get_field('category_id', $industry->ID);
                                $perma = get_permalink(get_post($industry->ID));
                                if($catId) $perma = $perma . "#/filteredjobs/" .$catId;                            
                            ?>
                                <div class="exp-box tab-items <?php echo $term->slug; ?> <?php if($key%2) echo "gray-opaque"; else echo "opaque";?>"> 
                                    <div class="content-box">
                                        <a href="<?php echo $perma; ?>" class="content-box-wrap">
                                            <div class="exp-logo">
                                                <div class="exp-svg">
                                                    <?php if(!empty(get_field('expertise_svg_logo_code', $industry->ID))){ ?>
                                                            <?php echo get_field('expertise_svg_logo_code', $industry->ID); ?>
                                                    <?php }else{ ?>
                                                        <img src="<?php echo get_field('expertise_logo_image', $industry->ID); ?>">
                                                    <?php }?>
                                                </div>
                                                <h5><?php echo  get_the_title($industry); ?></h5>
                    						</div>
                                            <div class="content-txt">
                                                <p><?php echo theme_the_excerpt( get_the_excerpt($industry), 15); ?></p>
                                                <span class="exp-detail-link"><?php _e("Read More", 'tasc'); ?></span>
                                            </div>      
                                        </a>
                                    </div>
                                    <a href="<?php echo $perma; ?>" class="exp-logo">
                                        <div class="exp-svg">
                                            <?php if(!empty(get_field('expertise_svg_logo_code', $industry->ID))){ ?>
                                                    <?php echo get_field('expertise_svg_logo_code', $industry->ID); ?>
                                            <?php }else{ ?>
                                                <img src="<?php echo get_field('expertise_logo_image', $industry->ID); ?>">
                                            <?php }?>
                                        </div>
                                        <h5><?php echo  get_the_title($industry); ?></h5>
                                    </a>
            					</div> 
                            <?php } ?>
                        </div>
                    <?php } ?>
				</div>
			</div>	
		</div>
		<div class="outsourcing-section">
			<h4 class="outsourcing-block"><?php echo get_field('expertise_outsource_text'); ?></h4>
			<div class="outsourcing-block outsourcing-btn">
				<a href="<?php echo get_field('expertise_botton_link'); ?>" class="btn green-btn btn-lg"><?php echo get_field('expertise_botton_text'); ?></a>
			</div>
		</div>
	
<?php } ?>

<?php get_template_part('fields/success-field'); ?>

<?php if(!get_field('geographies_disable')){ ?>
<?php  $geographies = get_field('geographies'); ?>
    <div class="map-section">
        <div class="container">
            <h3 class="map-head"><?php the_field('geographies_title'); ?></h3>
            <div class="map-img-wrapper">
                <div id="worldmap" width="600" height="300"></div>
                 <?php foreach($geographies as $geography){ ?>
                    <div class="map-box box1" id="popup-<?php echo get_field('county_code', $geography->ID); ?>">
                        <h5><?php echo get_field('country_name',$geography->ID); ?></h5>
                        <strong><?php echo get_field('hover_text', $geography->ID); ?></strong>
                    </div> 
                <?php } ?> 
					<div class="map-box box1" id="popup-eg" style=" display: none;">
                        <h5>Egypt</h5>
                        <strong>50+ employee outsourced in Egypt</strong>
                    </div>
					<div class="map-box box1" id="popup-dz" style=" display: none;">
                        <h5>Algeria</h5>
                        <strong>50+ employee outsourced in Algeria</strong>
                    </div>
					<div class="map-box box1" id="popup-jo" style=" display: none;">
                        <h5>Jordan</h5>
                        <strong>50+ employee outsourced in Jordan</strong>
                    </div>
					
					<div class="map-box box1" id="popup-om" style=" display: none;">
                        <h5>Oman</h5>
                        <strong>50+ employee outsourced in Oman</strong>
                    </div>
					

					
            </div>
            <div class="list-wrap">
                <ul class="map-list clearfix">
                    <?php  foreach($geographies as $geography){ ?>
                    <li data-country="<?php echo get_field('county_code', $geography->ID); ?>" class="map-item" ><a href="<?php echo get_permalink($geography); ?>"><?php echo get_the_title($geography); ?></a></li>
                    <?php } ?> 
					<li data-country="eg" class="map-item" ><a href="#">Egypt</a></li>
					<li data-country="dz" class="map-item" ><a href="#">Algeria</a></li>
					<li data-country="jo" class="map-item" ><a href="#">Jordan</a></li>
					<li data-country="om" class="map-item" ><a href="#">Oman</a></li>
					
                </ul>
            </div>
            <div class="country-dot">
                <?php  foreach($geographies as $geography){ ?>
                    <span class="dotimage" id="dot-<?php echo get_field('county_code', $geography->ID); ?>" ><span class="inner-circle" data-id="<?php echo get_field('county_code', $geography->ID); ?>"></span></span>
                <?php } ?>
				<span class="dotimage" id="dot-eg"><span class="inner-circle" data-id="eg" ></span></span>
				<span class="dotimage" id="dot-dz"><span class="inner-circle" data-id="dz" ></span></span>
				<span class="dotimage" id="dot-jo"><span class="inner-circle" data-id="jo" ></span></span>
				<span class="dotimage" id="dot-om"><span class="inner-circle" data-id="om" ></span></span>
				

            </div>
            <div class="map-btn">
                <a href="<?php echo get_field('geographies_listing_link'); ?>" class="blue-btn btn lower-case"><?php _e("See All", 'tasc'); ?></a>
            </div>
        </div>  
    </div>
<?php } ?>

<div class="awards-section">
    <div class="container">
        <div>
            <span class="awards-logo"></span>
            <h3 class="icon-before award-icon"><?php _e("Awards", 'tasc'); ?></h3>
        </div>
        <div class="awards-wrap clearfix">
            <?php 
                $args = array( 'post_type' => 'awards', 'posts_per_page' => 3, 'post_status' => 'publish' );
				$awards = get_posts( $args );
				foreach($awards as $award){
                    $image = get_the_post_thumbnail_url($award->ID, 'medium');
            ?> 
                <div class="awards-block">
                    <div class="logo-wrap">
                        <span>
                            <img src="<?php echo  $image; ?>" class="etisalat-logo">
                        </span>
                    </div>
                     <div class="logo-block">
                        <p class="logo-txt"><?php echo get_the_title($award); ?></p>
                    </div>
                 </div>                
                <?php } ?>
			<div class="awards-btn"><a class="blue-btn btn lower-case" href="<?php echo site_url("our-awards"); ?>"><?php _e("See all awards", 'tasc'); ?></a></div>
        </div>  
    </div>
</div>

<div class="activities-section">
    <div class="container">
        <h3 class="icon-before csr-icon"><?php _e("CSR Activities", 'tasc'); ?></h3>
    </div>
    <div class="activity-inner-wrap">
        <ul class="activities-list clearfix">

            <?php 
                $args = array( 'post_type' => 'csr_activities', 'posts_per_page' => 6, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'ASC');
                $csr_activities = get_posts( $args );
                $key = 1;
                foreach ($csr_activities as $key => $csr_activity) { 
                    $image = get_the_post_thumbnail_url($csr_activity->ID, 'medium');
                    $mob_image = get_the_post_thumbnail_url($csr_activity->ID, 'thumbnail');
                    
					$vClass = '';
					if(!empty(get_field('csr_video', $csr_activity->ID) && (!empty($image)))){
						$vClass = 'video-icon';
						$url = get_field('csr_video', $csr_activity->ID);
						$fancybox = 'video';
					 }else if(!empty($image)) {
						$url = get_the_post_thumbnail_url($csr_activity->ID, 'medium');
						$fancybox = 'image';
					 } ?>
			
                
                <li  id="csr<?php echo $key; ?>">
                    <a data-fancybox="csr" href="<?php echo $url; ?>" class="<?php echo $vClass; ?>">
                          <?php if(!$GLOBALS['detect']->isMobile()){ ?>
                            <img src="<?php echo $image; ?>">
                        <?php }elseif($GLOBALS['detect']->isTablet()){?>
                            <img src="<?php echo $image; ?>">
                        <?php }elseif($GLOBALS['detect']->isMobile()){ ?>
                            <img src="<?php echo $mob_image; ?>">
                        <?php } ?>
                    </a>
                </li>
                
            <?php  } ?>
        </ul>
    </div>
</div>
<svg width="0" height="0">
    <pattern id="img1" patternUnits="userSpaceOnUse" width="10" height="10">
	   <image xlink:href="<?php bloginfo('stylesheet_directory') ?>/images/dot.png" x="0" y="0" width="15" height="15" />
    </pattern>
</svg>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            if(jQuery(window).innerWidth() >= 480) {
				
                function showMapBox(country){
                    setTimeout(function(){

                        if(jQuery("#popup-"+country).length){							
							console.log(jQuery("#in").offset());
							jQuery("#popup-"+country).css("left", jQuery("#"+country).offset().left+26);
							var sectionHeight = jQuery('.map-section').offset().top;
							var actualTop = jQuery("#"+country).offset().top - sectionHeight;
							jQuery("#popup-"+country).css("top", actualTop+26);
							jQuery("#popup-"+country).toggle();
						
                        }
                    }, 300);
                }
                
                function hideMapBox(country){
                    setTimeout(function(){
                        if(jQuery("#popup-"+country).length){
                            jQuery("#popup-"+country).toggle();
                        }
                    }, 300);
                }

                jQuery('.dotimage .inner-circle').mouseenter(function() {
					
                    var currentCountry = jQuery(this).attr('data-id');
					console.log(currentCountry);
                    jQuery('li.map-item[data-country="' + currentCountry + '"]').addClass('active-country');

                    showMapBox(currentCountry);

                }).mouseleave(function() {
                    var currentCountry = jQuery(this).attr('data-id');
                   jQuery('li.map-item').removeClass('active-country');
                   hideMapBox(currentCountry);
                });


                jQuery("li.map-item").on('mouseover', function(e) {
                    var country = jQuery(this).data('country');
                    showMapBox(country);
                });

                jQuery("li.map-item").on('mouseout', function(country){
                    var country = jQuery(this).data('country');
                    hideMapBox(country);
                });

                jQuery('#worldmap').twism("create", {
                    map: "custom",
                    border: "transparent",
                    labels: false,
                    backgroundColor: 'transparent',
                    width: 1000,
                    height: 450,
                    customMap: '<?php echo get_bloginfo('template_directory'); ?>/images/world-map.svg',
                    labelAttributes: { color:  'white', font:  'Helvetica', fontSize: '15'},
                    color: "url(#img1)",
                    hoverColor: "url(#img1)"
                }, function() {
                    jQuery('.map-list li').each(function () {
                        var country = jQuery(this).data('country');
                        var sectionHeight = jQuery('.map-section').offset().top;
                        var actualTop = jQuery("#"+country).offset().top - sectionHeight;
                        jQuery("#dot-"+country).css("left", jQuery("#"+country).offset().left+15);
                        jQuery("#dot-"+country).css("top", actualTop+15);
                   
                    });
                });
            }
            if(jQuery(window).innerWidth() >= 480){
            jQuery('.activities-list li:eq(2)').after('<li class="explore-link"><a href="<?php echo get_permalink( get_page_by_path( 'our-csr-activities' ) ); ?>"><span class="sprite-icon">Icon</span><h3>Explore TASC&#39;s CSR activities</h3></a></li>');
            }else{
                jQuery('.activities-list li:eq(3)').after('<li class="explore-link"><a href="<?php echo get_permalink( get_page_by_path( 'our-csr-activities' ) ); ?>"><span class="sprite-icon">Icon</span><h3>Explore TASC&#39;s CSR activities</h3></a></li>');
            }
        });

    </script>
<?php 

endwhile;
endif;

get_footer(); 

?>
