<?php
/**
 * tasc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tasc
 */
include('library/includes.php');
include('mobile-detect.php');	

add_action('init', 'start_session', 1);

function start_session(){
    session_start();
}

if ( ! function_exists( 'tasc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tasc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tasc, use a find and replace
		 * to change 'tasc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tasc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu' => esc_html__( 'Enquiry', 'tasc' ),
			'menu-1' => esc_html__( 'Primary', 'tasc' ),
			'menu-2' => esc_html__( 'Resources', 'tasc' ),
			'menu-3' => esc_html__( 'Employer', 'tasc' ),
			'menu-4' => esc_html__( 'Job_Seeker', 'tasc' ),
			'menu-5' => esc_html__( 'FooterNav', 'tasc' ),
			'menu-6' => esc_html__( 'Sitemap', 'tasc' ),
			'menu-7' => esc_html__( 'About', 'tasc' ),
			'menu-8' => esc_html__( 'Join TASC', 'tasc' ),
			'menu-9' => esc_html__( 'Multiple Menu', 'tasc' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tasc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		
	}
endif;
add_action( 'after_setup_theme', 'tasc_setup' );
		

		if(!get_option("medium_crop"))
			add_option("medium_crop", "1");
		else
			update_option("medium_crop", "1");
			
			
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tasc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tasc_content_width', 640 );
}
add_action( 'after_setup_theme', 'tasc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tasc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tasc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tasc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Get In Touch', 'tasc' ),
		'id'            => 'get-in-touch',
		'description'   => esc_html__( 'Add widgets here.', 'tasc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tasc_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function tasc_scripts() {
	wp_enqueue_style( 'tasc-style', get_stylesheet_uri() );

	wp_enqueue_style('tasc_style_scrollbar', get_bloginfo('stylesheet_directory'). '/css/jquery.mCustomScrollbar.min.css');
	wp_enqueue_style('tasc_style_slick', get_bloginfo('stylesheet_directory'). '/css/slick.min.css');
	wp_enqueue_style('tasc_style', get_bloginfo('stylesheet_directory'). '/css/style.css');
	wp_enqueue_style('tasc_style_media', get_bloginfo('stylesheet_directory'). '/css/media.css');
	


	wp_enqueue_style('tasc_style_datepicker', get_bloginfo('stylesheet_directory'). '/css/jquery-ui.min.css');
	wp_enqueue_style('tasc_style_selectize', get_bloginfo('stylesheet_directory'). '/css/selectize.default.css');
	wp_enqueue_style('tasc_style_niceselect', get_bloginfo('stylesheet_directory'). '/css/nice-select.css');
	wp_enqueue_style('tasc_style_fancybox', get_bloginfo('stylesheet_directory'). '/css/jquery.fancybox.min.css');

	// wp_enqueue_script('tasc_script_jqeury', get_bloginfo('stylesheet_directory'). '/js/jquery-1.11.1.min.js');
	wp_enqueue_script('tasc_html5', get_bloginfo('stylesheet_directory'). '/js/html5shiv.js', '', '', true);
	wp_enqueue_script('tasc_script_scrollbar', get_bloginfo('stylesheet_directory'). '/js/jquery.mCustomScrollbar.js', '', '', true);
	wp_enqueue_script('tasc_script_slick', get_bloginfo('stylesheet_directory'). '/js/slick.min.js', '', '', true);
	wp_enqueue_script('tasc_script_masonry', get_bloginfo('stylesheet_directory'). '/js/masonry.min.js', '', '', true);
	wp_enqueue_script('tasc_script_twism', get_bloginfo('stylesheet_directory'). '/js/jquery.twism.js', '', '', true);
	wp_enqueue_script('tasc_datepicker', get_bloginfo('stylesheet_directory'). '/js/jquery-ui.min.js', '', '', true);
	wp_enqueue_script('tasc_niceselect', get_bloginfo('stylesheet_directory'). '/js/jquery.nice-select.min.js', '', '', true);
	wp_enqueue_script('tasc_fancybox', get_bloginfo('stylesheet_directory'). '/js/jquery.fancybox.min.js', '', '', true);
	
	

	if(is_archive('job') || is_singular('job') || is_page('work-with-us') || is_page('employees-page') || is_page('register-cv') || is_page_template('expertise-2.php') || is_page_template('expertise-3.php') || basename(get_page_template()) == 'expertise-1.php'){
		wp_enqueue_style('tasc_job_style', network_site_url(). '/career-portal/dist/styles/vendor.css');
		wp_enqueue_script('tasc_job_script', network_site_url(). '/career-portal/dist/scripts/vendor.js', '', '', true);
		wp_enqueue_script('tasc_job_app_script', network_site_url(). '/career-portal/dist/scripts/app.js', '', '', true);
	
	}
	wp_enqueue_script('tasc_script', get_bloginfo('stylesheet_directory'). '/js/script.js?v1.1', '', '', true);

	//wp_localize_script( 'tasc_script', 'my_ajax_object', array( 'ajax_url' => admin_url('admin-ajax.php')));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tasc_scripts' );

function defer_parsing_of_js($url)
{
  if (is_admin()) return $url; //don't break WP Admin
  if (false === strpos($url, '.js')) return $url;
  if (strpos($url, 'jquery.js')) return $url;
 
  return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);

function ajax_enqueue() {
    wp_localize_script( 'tasc_script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
}
add_action( 'wp_enqueue_scripts', 'ajax_enqueue' );

add_image_size( 'blog-thumbnail size', 362, 242 );
add_image_size( 'blog-author size', 40, 40 );

add_action('wp_ajax_nopriv_show_popup', 'subscribe_wp_ajax_show_popup' );
add_action('wp_ajax_show_popup', 'subscribe_wp_ajax_show_popup');

function subscribe_wp_ajax_show_popup() {

    if($_POST['popupHide']){
        $_SESSION['popupHide'] = true;
        echo json_encode("success"); 
    }
    exit;
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function isVideoLink($url){

	$parts = explode("/", $url);
	if(count($parts) > 2){
		if($parts[2] == 'youtube.com' || $parts[2] == 'www.youtube.com')
			return true;
	}
	return false;
}

function theme_the_excerpt( $content, $length=120)
{
	if ( $content instanceof WP_Post ) {
		$content = $content->post_content;
	}
	
	$text = strip_shortcodes( $content );
	$text = apply_filters( 'the_content', $text );
	$text = str_replace(']]>', ']]&gt;', $text);
	$excerpt_length = apply_filters( 'excerpt_length', $length );
	$excerpt_more = "...";
	$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	return $text;
}

function custom_pagination($numpages = '', $pagerange = '', $paged ='')
{
    global $paged;

    if (empty($pagerange)){
        $pagerange = 2;
    }
    if (empty($paged)) {
        $paged = 1;
    } 
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'prev_next'       => True,
        'prev_text'       => __('PREV'),
        'next_text'       => __('NEXT'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );
    $paginate_links = paginate_links($pagination_args);
    if ($paginate_links) {
        echo "<div class='job-pagination clearfix'>";
        echo "<div class='pagination clearfix'>". $paginate_links ."</div>";
        echo "</div>";
    }
}

global $wp_rewrite;

// do not use on live/production servers
/*add_action( 'init','maybe_rewrite_rules' );
function maybe_rewrite_rules() {

	$ver = filemtime( __FILE__ ); // Get the file time for this file as the version number
	$defaults = array( 'version' => 0, 'time' => time() );
	$r = wp_parse_args( get_option( __CLASS__ . '_flush', array() ), $defaults );

	if ($r['version'] != $ver || $r['time'] + 172800 < time() ) { // Flush if ver changes or if 48hrs has passed.
		flush_rewrite_rules(1);

		$args = array( 'version' => $ver, 'time' => time() );
		if ( ! update_option( __CLASS__ . '_flush', $args ) )
			add_option( __CLASS__ . '_flush', $args );
	}

}
*/
 function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($_GET['q'] && $_GET['type']) {
     	$query->set('post_type', array($_GET['type']));
     	$query->set('pagename', '');
    }
  }
}

function get_youtube_image($url) { 

	if ( $url && filter_var($url, FILTER_VALIDATE_URL) ) {
		// getting thumb url from video url
		parse_str( parse_url( $url, PHP_URL_QUERY ), $youtube_vars );
		$youtube_id = $youtube_vars['v'];
		return 'http://img.youtube.com/vi/' . $youtube_id . '/0.jpg';
	}
	return get_bloginfo('stylesheet_directory').'/images/placeholder.jpg';
}


// get attached file from post id
function cf7_add_attached_file() {
	global $post;
	$attache_file = get_field('report_file', $post->ID);
  $filetype =  wp_check_filetype( $attache_file ,  $mimes);
  

  if ($filetype['ext'] == 'm4v') :
	//return get_template_directory_uri() . '/videotemp.php';
     return get_post_permalink(  $post->ID );
  else :
    return $attache_file;
  endif;

	// return $attache_file;
}
add_shortcode( 'cf7_add_attached_file', 'cf7_add_attached_file' );


function get_ajax_pagination_html($blog, $current_page ){

	$response_html = "";
	if($blog->max_num_pages > 1){
  		$response_html .= "<div class='blog-pagination job-pagination clearfix'><div class='pagination clearfix'>";

  		if($current_page > 1){
	  		$response_html 	.= 	'<a class="page-numbers" data-page="'.($current_page-1).'" href="javascript:;">Prev</a>';
	  	}

  		for($i = $current_page; $i<= ($current_page+2) && $i <= $blog->max_num_pages; $i++){
  			if($i == $current_page){
  				$response_html 	.= 	'<span aria-current="page" class="page-numbers current">'.$i.'</span>';
  			}else{
  				$response_html 	.= 	'<a class="page-numbers" data-page="'.$i.'" href="javascript:;">'.$i.'</a>';
  			}
  		}
  		if($current_page < $blog->max_num_pages){
	  		$response_html 	.= 	'<a class="page-numbers" data-page="'.($current_page+1).'" href="javascript:;">Next</a>';
	  	}
  		$response_html .= "</div></div>";
  	}
  	return $response_html;
}

add_action('wp_ajax_get_ajax_blog', 'get_ajax_blog');
add_action('wp_ajax_nopriv_get_ajax_blog', 'get_ajax_blog');


function get_ajax_blog(){

	$catId = $_POST['catId'];
	$paged = $_POST['page'];

	$args = [
		'post_type' => 'blog',
		'posts_per_page' => 6,
		'paged' => $paged
	];

	if($_POST['searchVal']){
		$args['s'] = $_POST['searchVal'];
	}

	if($_POST['catId']){
		$args['tax_query'] = [
			[
				'taxonomy' => 'blog_categories',
				'field' => 'term_id',
				'terms' => $catId,
				'include_children' => false
			],
		];
	}

	$blog = new WP_Query( $args );
	$response_html = "";

  	while ( $blog->have_posts() ) { 
  		$blog->the_post();
  		$blog_categories = wp_get_post_terms(get_the_ID(),'blog_categories');
        $blog_tag_list = wp_get_post_terms(get_the_ID(),'blog_tags'); 

		$src = wp_get_attachment_image_src( get_post_thumbnail_id($blog->ID), 'medium');
		if($src){
			$url = $src[0];
		}else{
			$url = get_bloginfo('stylesheet_directory').'/images/success-stories4.png';
		}          

	    $response_html 	.= 		'<a href="'.get_permalink($blog->ID).'" class="blog-block">';
	    $response_html 	.= 			'<div class="blog-list-img"><img src="'.$url.'" alt="'.mb_strimwidth(get_the_title($blog->ID), 0, 40, '...').'"/></div>';
	    $response_html 	.= 			'<div class="blog-list-cont">';
	    $response_html .=				'<ul class="blog-tags">';
										foreach($blog_categories as $key=>$blog_cat){
		//$response_html 	.=					'<li><a href="'.get_term_link($blog_cat).'">'.$blog_cat->name.'</a></li>';
		$response_html 	.=					'<li>'.$blog_cat->name.'</li>';
										}
		$response_html 	.=				'</ul>';
	   	$response_html 	.= 				'<h3 class="blog-title">'.mb_strimwidth(get_the_title($blog->ID), 0, 50, '...').'</h3>';
	    $response_html 	.= 				'<div class="blog-text clearfix">';
	    $response_html 	.= 					'<p>'.strip_tags(mb_strimwidth(get_the_excerpt(), 0, 80, '...')).'</p>';
	    $response_html 	.= 				'</div>';
	    $response_html 	.= 			'</div>';
	    $response_html 	.= 		'</a>';
  	}
  	
  	$response_html .= get_ajax_pagination_html($blog, $paged);

    echo json_encode($response_html);
    
    exit;

}

add_action('wp_ajax_nopriv_get_filter_faq', 'get_filter_faq' );
add_action('wp_ajax_get_filter_faq', 'get_filter_faq');

function get_filter_faq(){
	$catId = $_POST['catId'];
	$response_html = "";
	$count = 0;

	$args = [
		'post_type' => 'faq',
		'posts_per_page' => 999,
		'tax_query' => [
			[
				'taxonomy' => 'faq_categories',
				'field' => 'slug',
				'terms' => $catId,
				'orderby' => 'date',
				'order' => 'ASC',
				'include_children' => false
			],
		],
	];
	
	$faq = new WP_Query( $args );
	
  	while ( $faq->have_posts() ) { $faq->the_post();
  		$faq_categories = wp_get_post_terms(get_the_ID(),'faq_categories');
                
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($faq->ID), 'large');
		$url = $src[0];
		if(!empty(get_the_content($faq->ID))){
			$response_html 	.= '<div class="faq-block">';
		    $response_html 	.= 		'<div class="faq-content">';
		   	$response_html 	.= 			'<h4 class="faq-title">'.get_the_title($faq->ID).'</h4>';			
		    $response_html 	.= 			'<div class="faq-text clearfix">';
		    $response_html 	.= 				get_the_content($faq->ID);
		    $response_html 	.= 			'</div>';
		    $response_html 	.= 		'</div>';
		    $response_html 	.= '</div>';
	    }
	    $count++;

  	}

    echo json_encode($response_html);
    exit;

}

function html5_search_form( $form ) { 
     $form = '<form role="search" method="get" class="search-form clearfix" id="search-form" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
     <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Type keyword to find answers" />
     <input type="submit" id="searchsubmit" value="'. esc_attr__('Go', 'domain') .'" />
     </form>';
     return $form;
}
 
 add_filter( 'get_search_form', 'html5_search_form' );

add_filter( 'semrush_seo_writing_assistant_post_types', function( $post_types ) {
	return array_merge( $post_types, array( 'expertise','awards','success_stories','services','geographies','roles','csr_activities','testimonials','leadership','employee_reports','career_advice','blog','news','employers_guide','faq','pr','events','gallery' ) );
} );

function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function mobile_global_vars() {
	global $detect;
	$detect = new Mobile_Detect;
}


add_action( 'bullhorn_cron_jobs_fetch', 'bullhorn_cron_jobs_fetch_function' );

function removeAllOrphanJobs(){

	$orpahIds = get_posts( array(
		'post_type'  => 'job',
		'meta_query' => array(
			array(
				'key' => '_bullhorn_job_id',
				'compare' => 'NOT EXISTS'
			),
		),
		'fields'     => 'ids',
	));
	$oldJobs=get_posts( array(
		'post_type'  => 'job',
		'date_query'    => array(
			'column'  => 'post_date',
			'before'   => '-60 days'
		),
		'fields'     => 'ids',
	));

	foreach($orpahIds as $id){
		wp_delete_post($id);
	}
	foreach($oldJobs as $id){
		wp_delete_post($id);
	}
}
function bullhorn_cron_jobs_fetch_function(){
	$count = 20;
	$startIndex = 0;

	removeAllOrphanJobs();

	do{
		$url="https://public-rest22.bullhornstaffing.com/rest-services/1K4U2S/search/JobOrder?query=(isOpen:1)&fields=id,title,dateLastPublished,publicDescription,publishedCategory(id,name),address(city,state,zip,address1),yearsRequired,salary,salaryUnit,dateEnd,employmentType,dateLastPublished,isOpen,isPublic,isDeleted&count=$count&sort=-dateLastPublished&start=".$startIndex;
		$timeout = 5;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		$data = curl_exec($ch);
		if($data){
			$input = json_decode($data, true);
			$totalJobs = $input['total'];
			handleJobs($input, $input['start']);
		}else{
			//echo curl_error($ch);
		}
		curl_close($ch);
		$startIndex += 20;

		//echo $totalJobs ." / ". ($startIndex)."<br/>";

	}while($totalJobs+$count >= ($startIndex));
}

function handleJobs($input, $start){
	$jobs = $input['data'];
	$todaysDate = strtotime("today");
	$expiryDate = strtotime("-60 days",$todaysDate);

	foreach ($jobs as $key=>$job){ 
	
		$dateLastPublished = $job['dateLastPublished'] ? floor( $job['dateLastPublished'] / 1000) : $todaysDate;
	
		if($dateLastPublished > $expiryDate){
			$meta_key = '_bullhorn_job_id';
			$salary= 'salary';
			$salary_unit= 'salary_unit';
			$date_end= 'date_end';
			$experience= 'experience';
			$zip='zip';
			$street='streetAddress';
	
			$existingIds = get_posts( [
				'post_type'  => 'job',
				'meta_key'   => $meta_key,
				'meta_value' => $job['id'],
				'fields'     => 'ids',
			] );

			if(!$existingIds){
				$postId = wp_insert_post(array (
					'post_type' => 'job',
					'post_title' => $job['title'],
					'post_content' => $job['publicDescription'],
					'post_status' => 'publish',
					'comment_status' => 'closed',   // if you prefer
					'ping_status' => 'closed',      // if you prefer
					'post_date'     =>  date("Y-m-d H:i:s", $dateLastPublished),
				));
				add_post_meta( $postId, $meta_key, $job['id'] );
				add_post_meta( $postId, $salary, $job['salary'] );
				add_post_meta( $postId, $salary_unit, $job['salaryUnit'] );
				add_post_meta( $postId, $date_end, floor($job['dateEnd']/1000) );
				add_post_meta( $postId, $experience, $job['yearsRequired'] );
				add_post_meta( $postId, $zip,$job['address']['zip']);
				add_post_meta( $postId, $street,$job['address']['address1']);
			}else{
				$postId = $existingIds[0]; 

				$postId = wp_update_post(array (
					'ID' => $postId,
					'post_type' => 'job',
					'post_title' => $job['title'],
					'post_content' => $job['publicDescription'],
					'post_status' => 'publish',
					'comment_status' => 'closed',   // if you prefer
					'ping_status' => 'closed',      // if you prefer
					'post_date'     =>  date("Y-m-d H:i:s", $dateLastPublished),
				));
				update_post_meta( $postId, $salary, $job['salary'] );
				update_post_meta( $postId, $salary_unit, $job['salaryUnit'] );
				update_post_meta( $postId, $date_end, floor($job['dateEnd']/1000) );
				update_post_meta( $postId, $experience, $job['yearsRequired'] );
				update_post_meta( $postId, $zip,$job['address']['zip']);
				update_post_meta( $postId, $street,$job['address']['address1']);

			}

			wp_set_post_terms( $postId, array($job['employmentType']), 'employment_type' );
			wp_set_post_terms( $postId, array($job['address']['state']), 'job_location_state' );
			wp_set_post_terms( $postId, array($job['address']['city']), 'job_location_city' );
			wp_set_post_terms( $postId, array($job['publishedCategory']['name']), 'job_category' );
		}
	} 
}

