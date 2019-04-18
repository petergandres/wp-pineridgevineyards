<?php
/**
 * blank_template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blank_template
 */

if ( ! function_exists( 'blank_template_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blank_template_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on blank_template, use a find and replace
	 * to change 'blank_template' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'blank_template', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'blank_template' ),
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
	add_theme_support( 'custom-background', apply_filters( 'blank_template_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'blank_template_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blank_template_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blank_template_content_width', 640 );
}
add_action( 'after_setup_theme', 'blank_template_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blank_template_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blank_template' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blank_template' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Vin65 Sidebar',
		'id'   => 'vin-sidebar',
		'description' => 'These widgets will appear in the sidebar.',
		'before_widget' => '<article class="widget">',
		'after_widget' => '</article>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	}

}
add_action( 'widgets_init', 'blank_template_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blank_template_scripts() {
	$blogPath = get_bloginfo('stylesheet_directory');

	 wp_register_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', 'screen');
	 wp_register_style('bootstrap', "$blogPath/css/bootstrap.css", false, '3.3.7', 'screen');
     wp_register_style('optinmonster', "$blogPath/css/optin-monster.css", false, '1.0', 'screen');

	 wp_enqueue_style('font-awesome');
	 wp_enqueue_style('bootstrap');
     wp_enqueue_style('optinmonster');


	 //--Scripts

	 wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', null, '3.1.1', false);

	 wp_register_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, '3.3.7', false);
	 wp_register_script('main_js', "$blogPath/js/main.js", array('jquery'), '1.3.1', false, false);
	 wp_register_script('caslon', "https://use.typekit.net/syb6wkw.js", array('jquery'), null, false, false);
	 wp_register_script('typekit', "$blogPath/js/typekit.js", array('jquery'), null, false, false);

	 wp_enqueue_script('jquery');
	 wp_enqueue_script('bootstrap_js');
	 wp_enqueue_script('main_js');
	 wp_enqueue_script('caslon');
	 wp_enqueue_script('typekit');

	wp_enqueue_style( 'blank_template-style', get_stylesheet_uri() );

	wp_enqueue_script( 'blank_template-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'blank_template-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blank_template_scripts' );

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

/**
 * Allow CORS
 * (See https://wordpress.stackexchange.com/questions/198943/is-there-a-way-to-enable-cross-origin-resource-sharing-for-wordpress-ajaxurl)
 */
add_filter( 'allowed_http_origins', 'as_add_allowed_origins' );
function as_add_allowed_origins( $origins ) {
    $origins[] = 'https://shop.pineridgevineyards.com/';
    $origins[] = 'https://shop.pineridgevineyards.com/';
    $origins[] = 'http://www.test-cors.org/';
    return $origins;
}
add_filter( 'wp_headers', array( 'eg_send_cors_headers' ), 11, 1 );
function eg_send_cors_headers( $headers ) {

        $headers['Access-Control-Allow-Origin']      = get_http_origin(); // Can't use wildcard origin for credentials requests, instead set it to the requesting origin
        $headers['Access-Control-Allow-Credentials'] = 'true';

        // Access-Control headers are received during OPTIONS requests
        if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {

            if ( isset( $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'] ) ) {
                $headers['Access-Control-Allow-Methods'] = 'GET, POST, OPTIONS';
            }

            if ( isset( $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'] ) ) {
                $headers['Access-Control-Allow-Headers'] = $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'];
            }

        }

    return $headers;
}
