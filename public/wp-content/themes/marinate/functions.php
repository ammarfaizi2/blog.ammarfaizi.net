<?php
/**
 * marinate functions and definitions
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package marinate
 * @subpackage Functions
 * @author     MetricThemes <help@metricthemes.com>
 * @copyright  Copyright (c) 2017, MetricThemes
 * @link       http://metricthemes.com/theme/marinate
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! function_exists( 'marinate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function marinate_setup() {

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

	//Custom Image Sizes
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'marinate-featured', 700, 500, true );
	add_image_size( 'marinate-single', 1900, 500, true );	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'marinate' ),
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
	add_theme_support( 'custom-background', apply_filters( 'marinate_custom_background_args', array(
		'default-color' => 'ffffff',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 75,
		'width'       => 260,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),				
	) );
		
	$marinate_header_arg = array(
		'default-image'          => '',
		'width'                  => 1900,
		'height'                 => 500,
		'flex-height'            => true,
		'header-text'            => true,
		'default-text-color'     => '000000',		
		'flex-width'             => false,
		'wp-head-callback' 		 => 'marinate_header_title',				
	);
	add_theme_support( 'custom-header', $marinate_header_arg );

}
endif;
add_action( 'after_setup_theme', 'marinate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marinate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marinate_content_width', 640 );
}
add_action( 'after_setup_theme', 'marinate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marinate_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Off-Canvas Sidebar', 'marinate' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'marinate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'marinate' ),
		'id'            => 'sidebar-main',
		'description'   => esc_html__( 'Add widgets here.', 'marinate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 1', 'marinate' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'marinate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 2', 'marinate' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'marinate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Area 3', 'marinate' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'marinate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
}
add_action( 'widgets_init', 'marinate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function marinate_scripts() {

	$marinate_theme = wp_get_theme();
    $marinate_version = $marinate_theme['Version'];

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'pushy', get_template_directory_uri() . '/css/pushy.css' );			
	wp_enqueue_style( 'marinate-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), $marinate_version, true );
	wp_enqueue_script( 'jquery-pushy', get_template_directory_uri() . '/js/pushy.js', array('jquery'), $marinate_version, true );	
		
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marinate_scripts' );

//Admin css
function marinate_admin_scripts() {

	wp_enqueue_style( 'marinate-admin-style',get_template_directory_uri().'/css/admin.css', '1.0', 'screen' );        
}
add_action( 'customize_controls_enqueue_scripts', 'marinate_admin_scripts' );

/**
 * Register custom fonts.
 */
function marinate_fonts_url() {

	$fonts_url = '';
	
	/* Translators: If there are characters in your language that are not
	* supported by Muli, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$muli = _x( 'on', 'Muli: on or off', 'marinate' );
	 
	/* Translators: If there are characters in your language that are not
	* supported by Nunito Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$nunito = _x( 'on', 'Nunito Sans: on or off', 'marinate' );
	 
	if ( 'off' !== $muli || 'off' !== $nunito ) {
	$font_families = array();	
	 
	if ( 'off' !== $muli ) {
	$font_families[] = 'Muli:400,400i,700,700i';
	}
	 
	if ( 'off' !== $nunito ) {
	$font_families[] = 'Nunito:400,600,700';
	}
	 
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	 
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );
}

function marinate_scripts_styles() {
	wp_enqueue_style( 'marinate-fonts', marinate_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'marinate_scripts_styles' );

/**
 * Bootstrap Walker Class
 * @https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 */
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

/**
 * Move textarea of comment form to bottom
 */
function marinate_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'marinate_move_comment_field_to_bottom' );


/**
 * Excerpt Length Control
 */

function marinate_customexcerptlength( $length ) {

	if ( is_admin() ) {
		return $length;
	}
	else {
    	return 30;
	}
}

add_filter('excerpt_length', 'marinate_customexcerptlength');

add_filter('script_loader_tag', 'marinate_clean_script_tag');

function marinate_clean_script_tag($input) {
$input = str_replace("type='text/javascript' ", '', $input);
return str_replace("'", '"', $input);
}

/**
 * Extra Functions
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customier Options
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * About Theme Page
 */
require get_template_directory() . '/inc/admin/class-marinate-admin.php';