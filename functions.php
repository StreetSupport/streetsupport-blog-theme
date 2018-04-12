<?php
/**
 * ssnblog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ssnblog
 */

if ( ! function_exists( 'ssnblog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ssnblog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ssnblog, use a find and replace
	 * to change 'ssnblog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ssnblog', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'ssnblog' ),
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
	add_theme_support( 'custom-background', apply_filters( 'ssnblog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_image_size ('front-page-news', 650, 250, true);
	add_image_size ('archive-listing', 1024, 640, true);

}
endif;
add_action( 'after_setup_theme', 'ssnblog_setup' );

add_action( 'send_headers', function() {
	if ( ! did_action('rest_api_init') && $_SERVER['REQUEST_METHOD'] == 'HEAD' ) {
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Expose-Headers: Link");
		header("Access-Control-Allow-Methods: HEAD");
	}
} );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ssnblog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ssnblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'ssnblog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ssnblog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ssnblog' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ssnblog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ssnblog_scripts() {
	wp_enqueue_style( 'ssnblog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ssnblog-navigation', get_template_directory_uri() . '/js/nav.js', array(), '20160614', true );
	wp_enqueue_script( 'ssnblog-accordion', get_template_directory_uri() . '/js/accordion.js', array(), '20160614', true );

// Hides the default primary menu when screen size is adjusted.
//	wp_enqueue_script( 'ssnblog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ssnblog_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function get_the_archive_categoryOrTagName() {

    if ( is_category() ) {
        echo single_cat_title( ' ', false );
    }

    elseif ( is_tag() ) {
        echo ucwords(single_tag_title( ' ', false ));
    }

    elseif ( is_author() ) {
        echo '<span class="vcard">' . get_the_author() . '</span>';
    }

    elseif ( is_archive() ) {
        echo single_month_title( ' ', false );
    }
}

add_action('get_the_archive_categoryOrTagName', 'ssnblog_setup');

add_filter( 'get_the_archive_title', function ($leaf) {

		$title = '<a href="https://streetsupport.net/">Home</a> &gt;&nbsp;';

		if ( strlen($leaf) > 0) {
			$title .= '<a href="' . get_site_url() . '">News</a> &gt;';
		} else {
			$title .= 'News';
		}

    if ( is_archive() ) {

				$title .= single_month_title( ' ', false );

    }

    if ( is_category() ) {

				$title .= single_cat_title( ' ', false );

    } elseif ( is_tag() ) {

        $title .= ucwords(single_tag_title( ' ', false ));

    } elseif ( is_author() ) {

        $title .= '<span class="vcard">' . get_the_author() . '</span>' ;

    }

    return $title;

});

add_action( 'init', 'create_locations_taxonomy', 0 );

// a Locations taxonomy for categorising posts by city showing in the WP-API
function create_locations_taxonomy() {


  $labels = array(
    'name' => _x( 'Locations', 'taxonomy general name' ),
    'singular_name' => _x( 'Location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'all_items' => __( 'All Locations' ),
    'parent_item' => __( 'Parent Location' ),
    'parent_item_colon' => __( 'Parent Location:' ),
    'edit_item' => __( 'Edit Location' ),
    'update_item' => __( 'Update Location' ),
    'add_new_item' => __( 'Add New Location' ),
    'new_item_name' => __( 'New Location Name' ),
    'menu_name' => __( 'Locations' ),
  );


  register_taxonomy('locations',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
		'show_in_rest'      => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  ));

}
