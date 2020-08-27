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
<html <?php language_attributes(); ?> dir="rtl">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="C4HJ3fm1O2A45te3Qqx4XEKeThhnA1QWta5Bxd-vl0o" />
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

	<header id="masthead" class="tasc-header">
		<div class="container clearfix">
			<div class="logo-wrapper"> 
				<a href="https://www.tascoutsourcing.com/">
					<noscript><img src="https://www.tascoutsourcing.com/wp-content/themes/thinkoverit/images/tasc-logo.png"></noscript>
						<img class="lazyload" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E' data-src="https://www.tascoutsourcing.com/wp-content/themes/thinkoverit/images/tasc-logo.png">
				</a>
			</div>

			<div class="navigation-wrapper">
				<ul class="nav-list">
					<div class="menu-enquiry-navigation-container">
						<ul id="enquiry-menu" class="menu">
							<li id="menu-item-6089" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6089">
								<a href="https://www.tascoutsourcing.com/our-services/">خدماتنا </a>
							</li>
							<li id="menu-item-2882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2882">
								<a href="https://www.tascoutsourcing.com/job-openings/#/jobs">الوظائف الشاغرة </a>
							</li>
							<li id="menu-item-592" class="active menu-item menu-item-type-post_type menu-item-object-page menu-item-592">
								<a href="https://www.tascoutsourcing.com/request-for-proposal/"> طلب عرض </a>
							</li>
							<li id="menu-item-743" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-743"><a href="tel:+97143588500">971 4 3588500 "رقم هاتف + </a>
							</li>
						</ul>
					</div>
				</ul> 
				<a href="https://www.tascoutsourcing.com/request-for-proposal/" class="request-link"></a> <a href="tel:+97143588500" class="call-link"></a> 
				<a href="javascript:;" class="menu-link"></a>
			</div>
		</div>
		<div class="menu-wrapper"> 
			<a href="javascript:;" class="close-menu">X</a>
			<div class="menu-content">
				<div class="left-block">
					<ul class="menu-list">
						<div class="menu-main-navigation-container">
							<ul id="primary-menu" class="menu">
								<li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-73">
									<a href="https://www.tascoutsourcing.com/">الصفحة الرئيسة </a>
								</li>
								<li id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76">
									<a href="https://www.tascoutsourcing.com/our-expertise/">الخبرة </a>
								</li>
								<li id="menu-item-306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306">
									<a href="https://www.tascoutsourcing.com/our-services/">الخدمات </a>
								</li>
								<li id="menu-item-1251" class="menu-item menu-item-type-post_type menu-item-object-expertise menu-item-1251">
									<a href="https://www.tascoutsourcing.com/expertise/roles/">الأدوار </a>
								</li>
								<li id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77">
									<a href="https://www.tascoutsourcing.com/geographies/">المناطق الجغرافية </a>
								</li>
								<li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="https://www.tascoutsourcing.com/contact-us/">بيانات الاتصال </a>
								</li>
								<li id="menu-item-10515" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10515">
									<a href="https://www.tascoutsourcing.com/blog/">المدونة </a>
								</li>
							</ul>
						</div>
					</ul>
					<ul class="menu-list mobile-menu-list">
						<div class="menu-enquiry-navigation-container">
							<ul id="enquiry-menu" class="menu">
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6089">
									<a href="https://www.tascoutsourcing.com/our-services/">خدماتنا </a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2882">
									<a href="https://www.tascoutsourcing.com/job-openings/#/jobs">الوظائف الشاغرة </a>
								</li>
								<li class="active menu-item menu-item-type-post_type menu-item-object-page menu-item-592">
									<a href="https://www.tascoutsourcing.com/request-for-proposal/"> طلب عرض   </a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-743">
									<a href="tel:+97143588500">971 4 3588500 "رقم هاتف + </a>
								</li>
							</ul>
						</div>
					</ul>
					<div class="nav-accordian">
						<div class="accordian-list">
							<h3>باحث عن وظيفة </h3>
							<ul class="sub-menu-list">
								<div class="menu-job_seeker-container">
									<ul id="job-seeker-menu" class="menu">
										<li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84">	<a href="https://www.tascoutsourcing.com/career-advice/">المشورة المهنية </a>
										</li>
										<li id="menu-item-1581" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1581">
											<a href="https://www.tascoutsourcing.com/job-openings/#/jobs">الوظائف الشاغرة </a>
										</li>
										<li id="menu-item-1778" class="menu-item menu-item-type-taxonomy menu-item-object-testimonial_categories menu-item-1778">
											<a href="https://www.tascoutsourcing.com/testimonials/category/candidates/">شهادات المرشح </a>
										</li>
										<li id="menu-item-1522" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1522">
											<a href="https://www.tascoutsourcing.com/register-cv/#/registercv">تسجيل السيرة الذاتية </a>
										</li>
									</ul>
								</div>
							</ul>
						</div>
						<div class="accordian-list">
							<h3>صاحب العمل </h3>
							<ul class="sub-menu-list">
								<div class="menu-employer-container">
									<ul id="employer-menu" class="menu">
										<li id="menu-item-1690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1690">
											<a href="https://www.tascoutsourcing.com/employers-guide/">الدليل الإرشادي لصاحب العمل </a>
										</li>
										<li id="menu-item-1418" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1418">
											<a href="https://www.tascoutsourcing.com/success-stories/">قصص النجاح </a>
										</li>
										<li id="menu-item-1779" class="menu-item menu-item-type-taxonomy menu-item-object-testimonial_categories menu-item-1779">
											<a href="https://www.tascoutsourcing.com/testimonials/category/employers/">شهادات صاحب العمل </a> </li>
										<li id="menu-item-1417" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1417">
											<a href="https://www.tascoutsourcing.com/request-for-proposal/"> طلب عرض   </a>
										</li>
									</ul>
								</div>
							</ul>
						</div>
						<div class="accordian-list">
							<h3>About </h3>
							<ul class="sub-menu-list">
								<div class="menu-about-tasc-container">
									<ul id="about-menu" class="menu">
										<li id="menu-item-1688" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1688">
											<a href="https://www.tascoutsourcing.com/about-us/">About Us</a>
										</li>
										<li id="menu-item-1738" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1738">
											<a href="https://www.tascoutsourcing.com/our-awards/">الجوائز </a>
										</li>
										<li id="menu-item-1739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1739">
											<a href="https://www.tascoutsourcing.com/our-csr-activities/">المسؤولية الاجتماعية للشركات </a>
										</li>
										<li id="menu-item-1669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1669">
											<a href="https://www.tascoutsourcing.com/pr/">النشرات الصحفية </a>
										</li>
										<li id="menu-item-1797" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1797">
											<a href="https://www.tascoutsourcing.com/our-news/">أخبارنا </a>
										</li>
										<li id="menu-item-2187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2187">
											<a href="https://www.tascoutsourcing.com/events/">الفعاليات </a>
										</li>
									</ul>
								</div>
							</ul>
						</div>
						<ul class="menu-list">
							<div class="menu-join-tasc-container">
								<ul id="join-menu" class="menu">
									<li id="menu-item-6789" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6789">
										<a href="https://www.tascoutsourcing.com/work-with-us/#/filteredjobs/2000006%20">انضم إلى تاسك </a> 
									</li>
								</ul>
							</div>
						</ul>
					</div>
				</div>
				<div class="follow-wrap"> تابعنا على لينكد إن فيسبوك  <a href="https://www.linkedin.com/company/tasc-outsourcing/" target="_blank" class="follow-link linkedin">لينكد إن </a> 
					<a href="https://www.facebook.com/Tascoutsourcing/" target="_blank" class="follow-link facebook">فيسبوك </a>
				</div>
			</div>
		</div>
	</header>


