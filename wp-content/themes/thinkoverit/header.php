<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tasc
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="C4HJ3fm1O2A45te3Qqx4XEKeThhnA1QWta5Bxd-vl0o" />
	<meta property="og:image" content="https://www.tascoutsourcing.com/wp-content/themes/thinkoverit/images/tasc-logo.png">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
	<?php wp_head(); ?>

    
    <!-- Google Tag Manager -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5CBKZ8T');
    </script>
    <!-- End Google Tag Manager -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46663211-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
     
      gtag('config', 'UA-46663211-1');
    </script> -->
    <!-- End Google Analytics -->
</head>
<script type="text/javascript">
    adroll_adv_id = "A37N22RD2FDC7J4FUJVIJ4";
    adroll_pix_id = "JJYJQUSKEVDMJPDRH63XDA";

    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>
<!-- Linkedin Script-->
<script type="text/javascript">
	_linkedin_partner_id = "276259";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=276259&fmt=gif" />
</noscript>

<body <?php body_class();?> id="<?php if(is_page('register-cv')){ echo "register-cv-page"; }?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CBKZ8T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <?php if(is_page("thank-you")){ ?>
    
        <!-- Google Code for ThankYou Conversion Page -->

        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 945493952;
        var google_conversion_label = "FwnjCMft6F0QwK_swgM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/945493952/?label=FwnjCMft6F0QwK_swgM&amp;guid=ON&amp;script=0"/>
            </div>
        </noscript>
    
    <?php } ?>

<div id="page" class="site">

	<?php if(is_front_page()){ ?>
		<header id="masthead" class="tasc-header transparent-header">
	<?php }else{ ?>
		<header id="masthead" class="tasc-header">
	<?php } ?>
		
		<div class="container clearfix">
			<div class="logo-wrapper">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/tasc-logo.png"></a>
			</div>
			<div class="navigation-wrapper">
				<ul class="nav-list">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu',
							'menu_id'        => 'enquiry-menu',
						) );
					?>
				</ul>
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                	<div class="lang-dropdown">
                		<a href="javascript:void(0);" class="lang-selection"><?php _e("LANGUAGE", 'tasc'); ?></a>
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                <?php endif; ?>
				<a href="<?php echo get_permalink( get_page_by_path('request-for-proposal')); ?>" class="request-link"></a>
				<a href="tel:+97143588500" class="call-link"></a>
				<a href="javascript:;" class="menu-link"></a>
			</div>
		</div>
		<div class="menu-wrapper">
			<a href="javascript:;" class="close-menu">X</a>
			<div class="menu-content">
				<div class="left-block">
					<ul class="menu-list">
					 	<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</ul>
					<ul class="menu-list mobile-menu-list">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu',
								'menu_id'        => 'enquiry-menu',
							) );
						?>
					</ul>
					<div class="nav-accordian">
						<div class="accordian-list">
							<h3><?php _e("Job seeker", 'tasc'); ?></h3>
							<ul class="sub-menu-list">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-4',
										'menu_id'        => 'job-seeker-menu',
									) );
								?>
							</ul>
						</div>
						<div class="accordian-list">
							<h3><?php _e("Employer", 'tasc'); ?></h3>
							<ul class="sub-menu-list">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-3',
										'menu_id'        => 'employer-menu',
									) );
								?>
							</ul>
						</div>
						<!-- <div class="accordian-list">
							<h3>Resources</h3>
							<ul class="sub-menu-list">
								<?php
									// wp_nav_menu( array(
									// 	'theme_location' => 'menu-2',
									// 	'menu_id'        => 'resources-menu',
									// ) );
								?>
							</ul>
						</div> -->
						<div class="accordian-list">
							<h3><?php _e("About", 'tasc'); ?></h3>
							<ul class="sub-menu-list">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-7',
										'menu_id'        => 'about-menu',
									) );
								?>
							</ul>
						</div>		
						<ul class="menu-list">
						 	<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-8',
									'menu_id'        => 'join-menu',
								) );
							?>
						</ul>				
					</div>
				</div>
				<div class="follow-wrap">
					<?php _e("Follow us on", 'tasc'); ?> 
					<a href="https://www.linkedin.com/company/tasc-outsourcing/" target="_blank" class="follow-link linkedin">LinkedIn</a>
					<a href="https://www.facebook.com/Tascoutsourcing/" target="_blank" class="follow-link facebook">Facebook</a>
				</div>
			</div>
		</div>


	</header><!-- #masthead -->

	<section id="content">
<?php 
if(!get_field('disabled_banner_image') && !is_front_page()){
	if(get_field('banner_image')){
		$banner = get_field('banner_image');
	}
	if(empty($banner)){
		if(is_tax('faq_categories')){
			$banner = get_bloginfo('stylesheet_directory').'/images/tax-banner.jpg';
		}else{
			$banner = get_bloginfo('stylesheet_directory').'/images/About-Us.jpg';
		}
	}
	if((is_archive('job') || is_singular('job')) && !is_tax('testimonial_categories') ){
		$tag='See our current job openings';
	}else{
		$tag = get_field('banner_tagline');	
	}
	
?>
<div class="top-banner">
	<!--<div class="banner-section" style="background:url(<?php // echo $banner; ?>) top left no-repeat;background-size: cover;"></div> -->
	
	<?php if(get_field('banner_background_image') || get_field('banner_title') || get_field('banner_background_color') ){?>
		<div class="banner-section home-slider-wrap page-banner-wrapper">	
			<?php if(get_field('banner_background_image') && get_field('banner_background_color')){?>
				<div class="home-banner-img" style="background: <?php echo get_field('banner_background_color'); ?> url('<?php echo get_field('banner_background_image'); ?>') no-repeat top center;">
			<?php } elseif(get_field('banner_background_image')){?>
				<div class="home-banner-img" style="background: url('<?php echo get_field('banner_background_image'); ?>') no-repeat top center;">
			<?php } elseif(get_field('banner_background_color')){?>
				<div class="home-banner-img" style="background-color: <?php echo get_field('banner_background_color'); ?>;">
			<?php } else {?>
				<div class="home-banner-img">
			<?php }?>
		
			<div class="container  home-slider clearfix">
				<div class="slider-left">
					<div class="slider-content">
						<?php if(get_field('banner_title')){?>
							<h4><?php echo get_field('banner_title') ?></h4>
						<?php }?>
						<?php if(get_field('banner_text')){?>
							<div class="slider-text"><?php echo get_field('banner_text'); ?></div>
						<?php }?>
					</div>
					<?php if(get_field('banner_button_link') && get_field('banner_button_label') ){?>
					<div class="link">
						 <a href="<?php echo get_field('banner_button_link'); ?>" class="btn blue-btn" ><?php echo get_field('banner_button_label'); ?></a>
					</div>
					<?php }?>
				</div>
				<div class="slider-right">
					<?php if(get_field('banner_text')){?>
					<div class="slider-image" >
						<img src="<?php echo get_field('banner_side_image'); ?>">
					</div>
					<?php }?>
				</div>
			</div>
				
			</div>
		</div>
	<?php }else{ ?>
		<div class="banner-section" style="background:url('http://tasc.thinkoverit.com/wp-content/uploads/2018/03/About-Us.jpg') top left no-repeat;background-size: cover;"></div>
	<?php }?>
	
	<?php if($tag){ ?>
		<div class="banner-label">
			<div class="container">
				<h1 class="banner-tagline"><?php echo $tag ? $tag : get_the_title(); ?></h1>
			</div>
		</div>
	<?php } ?>
</div>
<?php } ?>
