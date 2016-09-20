<?php
/**
 * Sacre Davey Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sacre Davey Theme
 */

if ( ! function_exists( 'sacre_davey_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sacre_davey_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'about-us' => esc_html( 'About Us' ),
		'primary-mobile-menu' => esc_html('Mobile Menu'),
		'sector-posts' => esc_html( 'Sector Posts' ),
		'sector-mobile' => esc_html( 'Sector Mobile Menu'),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // sacre_davey_setup
add_action( 'after_setup_theme', 'sacre_davey_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sacre_davey_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sacre_davey_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function sacre_davey_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'sacre_davey_minified_css', 10, 2 );


/**
* Customize TinyMCE to client's need
*/
function sacre_davey_mce( $init ) {
	$init['theme_advanced_text_colors'] = '272D66,279AB6';
	return $init;
}

add_filter('tiny_mce_before_init', 'sacre_davey_mce');


/**
 * Enqueue scripts and styles.
 */
function sacre_davey_scripts() {
	wp_enqueue_style( 'sacre-davey-style', get_stylesheet_uri() );

	wp_enqueue_style('flickity-css', 'https://unpkg.com/flickity@2.0/dist/flickity.css');

	wp_enqueue_script( 'sacre-davey-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'flickity', 'https://npmcdn.com/flickity@2/dist/flickity.pkgd.js', array('jquery'), '2.0.0', true);

	wp_enqueue_script( 'sacre-davey-sectors', get_template_directory_uri() . '/build/js/sector.min.js', array('jquery'), '20160906', true );

	wp_enqueue_script( 'sacre-davey-about-page', get_template_directory_uri().'/build/js/about-page.min.js', array('jquery'), '20160913', true );

	wp_enqueue_script( 'sacre-davey-menu-click', get_template_directory_uri().'/build/js/menu-click-functions.min.js', array('jquery'), '20160920', true );

	wp_enqueue_script( 'sacre-davey-font-awesome', 'https://use.fontawesome.com/2c227b0ccc.js', array(), '4.6.3', false);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sacre_davey_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

