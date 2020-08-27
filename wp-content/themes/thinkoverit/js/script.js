jQuery(document).ready(function(){
	console.log("test expiry header");
	jQuery('.menu-link').click(function(){
		if(jQuery('.menu-wrapper').hasClass('show-menu-wrap')){
			jQuery('.menu-wrapper').removeClass('show-menu-wrap');
			jQuery('.navigation-overlay').fadeOut();
			jQuery('body').css('overflow-y','auto');
		}else{
			jQuery('.menu-wrapper').addClass('show-menu-wrap');
			jQuery('.navigation-overlay').fadeIn();
			jQuery('body').css('overflow-y','hidden');
		}
	});

	var headerHeight = jQuery('.tasc-header').outerHeight();
	jQuery(window).scroll(function() {   
		var scroll = jQuery(window).scrollTop();    
		if (scroll >= headerHeight) {
			jQuery(".tasc-header").addClass("fixedHeader");
		}else{
			jQuery(".tasc-header").removeClass("fixedHeader");
		}
	});
	jQuery(window).scroll(function() {
		scrollTopLink();
	});
	jQuery('#scroll-top').click(function(){
		jQuery("html, body").animate({ scrollTop: 0 }, 300);
	});

	function scrollTopLink(){
		if(jQuery(window).scrollTop() >= 100){
			console.log('scroll');
			jQuery('.scroll-top').addClass('show-scroll');
		}else{
			jQuery('.scroll-top').removeClass('show-scroll');
		}
	}
	
	jQuery('.close-menu').click(function(){
		jQuery('.menu-wrapper').removeClass('show-menu-wrap');
		jQuery('.navigation-overlay').fadeOut();
		jQuery('body').css('overflow-y','auto');
	});
	
	jQuery('body').click(function(e) {
		if (!(jQuery(e.target).closest('.menu-wrapper').length || jQuery(e.target).closest('.tasc-header').length)){
			jQuery('.menu-wrapper').removeClass('show-menu-wrap');
			jQuery('.navigation-overlay').fadeOut();
			jQuery('body').css('overflow-y','auto');
		}
	});

	jQuery('.map-item').hover(function(){
		var data = jQuery(this).data("id");
	  	jQuery('#'+data).toggle();
  	});
  	
  	jQuery('.accordian-list').click(function() {
		if(jQuery(this).hasClass('up-arrow')){
			jQuery(this).removeClass('up-arrow');
			jQuery(this).find("ul.sub-menu-list").slideUp();
		}else{
			jQuery(this).addClass('up-arrow');
			jQuery(this).find("ul.sub-menu-list").slideDown();
		}
  	});

  	jQuery('.browse-industries .tab-buttons').addClass('active');
	jQuery(".tab-items.job_roles").hide();

	
  	jQuery('.tab-buttons').click(function() {
  		var target = jQuery(this).data('target');
  		var topPos = jQuery('#right-exp').offset().top - 90;
  		jQuery(window).scrollTop(topPos);
		jQuery('.tab-buttons').removeClass('active');
		jQuery(this).addClass('active');
  		if(jQuery('.'+target).length){
	  		jQuery(".tab-items ").hide();
	  		jQuery('.'+target).show();
  		}
  	});
	

  	jQuery('.btn-wrapper a').click(function(){
		var hash = jQuery(this).attr('href');
		var headerHeight = jQuery('.menu-content').height();
		if(hash.startsWith('#')){
			var bodytop = jQuery(hash).offset().top;
			jQuery('body , html').animate({scrollTop: bodytop - headerHeight},700);
		}
	});
  	
  	jQuery(".tab-links li:first-child , .tab-content .tab:first-child").addClass("active");
	jQuery('.tabs .tab-links a').on('click', function(e)  {
		e.preventDefault();
        var currentAttrValue = jQuery(this).attr('href');
        // Show/Hide Tabs
        jQuery('.tabs ' +currentAttrValue).show().siblings().hide();
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
		jQuery('.tab-content .tab').removeClass('active');
		jQuery('#'+currentAttrValue).addClass('active');
    });

    jQuery(document).on('click', '.faq-block .faq-title', function(){
    	jQuery(this).next().slideToggle("slow");
	  	jQuery(".faq-text").not(jQuery(this).next()).slideUp("slow").removeClass("faq-background");
	  	if(!jQuery(this).hasClass("faq-background") || !jQuery(this).parents(".faq-block").hasClass("faq-active")){
	  		jQuery('.faq-block .faq-title').removeClass("faq-background");
	  		jQuery(".faq-block").removeClass("faq-active")
	  		jQuery(this).addClass("faq-background");
	  		jQuery(this).parents(".faq-block").addClass("faq-active")
	  	}else{
	  		jQuery(this).removeClass("faq-background");
	  		jQuery(this).parents(".faq-block").removeClass("faq-active")
	  	}
    });


    jQuery(".btn-wrapper a").click(function(){
		var linkId = jQuery(this).attr('id');
		jQuery(".btn-wrapper a").removeClass('active');
		jQuery(this).addClass('active');
		jQuery('.exp-box').hide();
		jQuery('.'+linkId).show();
		
    });

	jQuery(".accordion-list").on("click", ".accord-title", function(e) {
		e.preventDefault();
		var thisID = jQuery(this).attr('href');
		jQuery(".accordion-list .accord-title").parents(".accordion-list").removeClass("active");
		jQuery(".accordion-list .accord-title").next().slideUp();
		if(jQuery(this).parents(".accordion-list").hasClass("active")){
			jQuery(this).parents(".accordion-list").removeClass("active");
			jQuery(this).next().slideUp();
			jQuery('.location-map').hide();
		}else{
			jQuery(this).parents(".accordion-list").addClass("active");
			jQuery(this).next().slideDown();
			jQuery('.location-map').hide();
			jQuery('#'+thisID).show();
		}
		
	});

	// popup form js
	jQuery('.cat-item').click(function(e) {
		//e.preventDefault();
		var catId = jQuery(this).attr('data-id');
		jQuery('.cat-item').removeClass('active');
		jQuery(this).addClass('active');
		var data = { action: 'get_filter_posts', data: catId };
		jQuery.post(my_ajax_object.ajax_url, data, function(response) {
			if(response) {
				var posts = jQuery.parseJSON(response);
				jQuery('.success-data').html(posts);
			} else {
				alert('mail failed');
			}
		});
	});
		
	var accordionHeight = jQuery('.location-accordian').height();
	jQuery('.location-map iframe').css('height', accordionHeight);
	
	if(jQuery('.history-list').length){
	 	jQuery('.history-list').slick({
			infinite: true,
			centerMode: true,
  			centerPadding: '60px',
			slidesToShow: 5,
			slidesToScroll: 1,
			dots: false,
			focusOnSelect: true,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 5000,
			variableWidth: true,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						//variableWidth: true,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						//variableWidth: true,
					}
				}
			]
		});
 	}

	if(jQuery(window).innerWidth() <=768) {
		jQuery('.awards-wrap-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			centerMode: false,
			focusOnSelect: true,
			arrows: false,
			infinite: true,
		});	
	}
 	jQuery('.card-slider-wrapper').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
	});
	if(jQuery('.culture-list').length){
	 	jQuery('.culture-list').slick({
			infinite: true,
			centerMode: true,
  			centerPadding: '60px',
			slidesToShow: 5,
			slidesToScroll: 1,
			dots: false,
			focusOnSelect: true,
			arrows: true,
			//autoplay: true,
			//autoplaySpeed: 3000,
			//variableWidth: true,
			responsive: [
				{
					breakpoint: 980,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						//variableWidth: true,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						variableWidth: true,
					}
				}
			]
		});
 	}
	jQuery('#retail-staffing').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		centerPadding: '40px',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
				}
			}
		]
	});
	jQuery('.retail-slide-section-wrap').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
	});
	jQuery('.post-story-success').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		//autoplay: true,
		adaptiveHeight: true,
	});
	jQuery('.post-success .about-right a, .story-section .about-right .story-popup').fancybox({
	  backFocus : false,
	  animationEffect : "fade"
	});
	jQuery('.retail-geographies').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
				}
			}
		]
	});
 	jQuery('#telecom-staffing').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		centerPadding: '40px',
	});
	jQuery('.process-step-wrap').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		responsive: [
			{
				breakpoint: 980,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
			}

		]
	});
	jQuery('.success-facts-slider').slick({
	  infinite: false,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  arrows: true,
	  responsive: [
	  		{
				breakpoint: 980,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
			}

		]
	});
	jQuery('.slick-slider').on('click', '.slick-slide', function (e) {
		e.preventDefault();
		var index = jQuery(this).data("slick-index");
		if (jQuery('.slick-slider').slick('slickCurrentSlide') !== index) {
			jQuery('.slick-slider').slick('slickGoTo', index);
		}
	});

	jQuery('.card-slider-wrapper, .retail-geographies').on('click', 'a', function(e) {
	  	 this.delegateEvents();
	});
	

	if(jQuery('.select-field select').length){
		jQuery('.select-field select').niceSelect();
	}


	// contact form 7 checking unchecking checkbox on click of label
	jQuery('.wpcf7-list-item-label').on('click', function() {
	  var corrChkbx = jQuery(this).prev('input[type="checkbox"]'),
	    checkedVal = corrChkbx.prop('checked');

	  corrChkbx.prop('checked', !checkedVal);
	});


	// play home page banner video on click of video icon for mobile devices
	jQuery('.banner-video-icon').click(function(){
		jQuery('.video-overlay').fadeIn(200);
		jQuery('#banner-video')[0].play();
	});

	// play home page banner video on click of close button for mobile devices
	jQuery('.video-overlay .close-menu').click(function(){
		jQuery('.video-overlay').fadeOut(200);
		jQuery('#banner-video')[0].pause();
	});


	// hide lock popup on click of overlay
	jQuery(document).click(function(e){
        e.stopPropagation();
		
        if(jQuery('.video-overlay').is(':visible') && !jQuery(e.target).hasClass('video-wrap') && !jQuery(e.target).parents('.video-wrap').length && !jQuery(e.target).hasClass('banner-video-icon') && !jQuery(e.target).parents('.banner-video-icon').length){
			jQuery('.video-overlay .close-menu').click();
        }

    });
	
	// add class to embedded video wrapper
	jQuery('.detail-content iframe').each(function(){
		jQuery(this).parent().addClass('embedded-video-wrap');
	});
	
	
	// fixed social share icons on scroll
	jQuery(window).scroll(function(){
		if(jQuery('.single-page-content').length && !jQuery('body').hasClass('single-blog')){
			var singleContentPos = jQuery('.single-page-content').offset().top;
			var icons = jQuery('.share-social-icons');
			var rightPos = jQuery(document).width() - (icons.offset().left + icons.width());
			var fixedVal = '150px';

			if (jQuery(window).width() < 1200) {
				fixedVal = '10px';
			}else{
				fixedVal = '150px';
			}

			if(jQuery(window).scrollTop() > singleContentPos){
				icons.css('right', rightPos);
				icons.addClass('fixed-icons');
			}else{
				icons.css('right', fixedVal);
				icons.removeClass('fixed-icons');
			}
		}
	});

	function checkForChanges()
		{
			setTimeout(function(){
				var successMsgTitle = jQuery(".success-msg-title").length;
			    console.log(successMsgTitle);
			    if(successMsgTitle){
			    	console.log("in out");
			    	jQuery(".banner-label").hide();
			    }
			},500);
		}

	function get_ajax_blog(page){

		var searchIDs = jQuery("input:checkbox:checked").map(function(){
	      return jQuery(this).val();
	    }).get();

	    if((jQuery.inArray( "all", searchIDs) !== -1)){
	    	searchIDs = 'all';
	    }  
	    var searchVal = jQuery("input[name='q']").val();
        var data = {action: 'get_ajax_blog', 
        			catId: searchIDs, 
        			searchVal: searchVal, 
        			page: page };

        jQuery.post(my_ajax_object.ajax_url, data, function(response) {
            var result = jQuery.parseJSON(response);
            if(result.length){
                var posts = jQuery.parseJSON(response);
            }else{
                var posts = "<div>No posts for selected filter</div>";
            }
            jQuery('.blog-list').html(posts);
        });
    }

    get_ajax_blog(1);

    // Blog category show hide
    jQuery('.link-cat a').click(function(){
    	jQuery(this).parents('.category-list-wrap').find('.blog-select-wrap').slideToggle();
    });   

    jQuery("#merge_button").click(function(event){
	    event.preventDefault();
	    var searchIDs = jQuery("input:checkbox:checked").map(function(){
	      return jQuery(this).val();
	    }).get();
	    if((jQuery.inArray( "all", searchIDs) !== -1)){
	    	get_ajax_blog(1);
	    }else{
	    	get_ajax_blog(1);
	    }   
	    jQuery(this).parents('.category-list-wrap').find('.blog-select-wrap').slideToggle(); 
	});

	jQuery("#uncheck_button").click(function(event){
		jQuery('.blog-category-list input:checkbox').attr('checked',false);
		get_ajax_blog(1);
		jQuery(this).parents('.category-list-wrap').find('.blog-select-wrap').slideToggle();
	});
	
	jQuery("html body").on("click", ".blog-pagination a.page-numbers", function(event){
		var page = jQuery(this).data('page');
		get_ajax_blog(page);
	});

	jQuery(".search-blog").keypress(function(event){
		if(event.which == 13) {
			get_ajax_blog(1);
			event.stopPropagation();
			event.preventDefault();
		}
	});
	function ajax_call_for_faq(catId){
        var data = {action: 'get_filter_faq', catId: catId};
        jQuery('.faq-list').empty();
       	showPreloader();
        jQuery.post(my_ajax_object.ajax_url, data, function(response) {
            var result = jQuery.parseJSON(response);
            if(result.length){

                var posts = jQuery.parseJSON(response);
                 hidePreloader();
            }else{
                var posts = "<div>No posts for selected filter</div>";
            }
            jQuery('.faq-list').html(posts);
        });
    }
    ajax_call_for_faq('during-employment');

    jQuery(".faq-cat li:first-child a").addClass("active");
    jQuery('.faq-items').click(function(){
        var catId = jQuery(this).attr('data-id');
        jQuery('.faq-items.active').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.faq-list').empty();
        ajax_call_for_faq(catId);
    });
	function showPreloader(){
		jQuery(".spinner-wrapper").show();
	}
	function hidePreloader() {
		jQuery(".spinner-wrapper").hide();
		// preloaderFadeOutTime = 500;
		// var preloader = jQuery('.spinner-wrapper');
		// preloader.fadeOut(preloaderFadeOutTime);
	}

	// console.log("height is"+jQuery( ".single-job-details" ).height());

	// jQuery(".apply-btn").click(function(){
	//     console.log("helloooo");
	//   });
	 console.log( jQuery("body").find(".list-view").length);
	

 });	
// jQuery(document).ready(function(){
// 	jQuery(".apply-btn").click(function(){
// 	    jQuery(".single-ind-wrapper").toggle();
// 	  });
// });
