<?php

/**
 * xemer_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xemer_theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function xemer_theme_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on xemer_theme, use a find and replace
	 * to change 'xemer_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('xemer_theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'xemer_theme'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'xemer_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'xemer_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xemer_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('xemer_theme_content_width', 640);
}
add_action('after_setup_theme', 'xemer_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xemer_theme_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'xemer_theme'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'xemer_theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'xemer_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function xemer_theme_scripts()
{
	wp_enqueue_style('xemer_theme-style', get_stylesheet_uri(), array(), _S_VERSION);

	// css
	wp_enqueue_style('xemer_theme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('xemer_theme-default', get_template_directory_uri() . '/assets/css/default.css', array(), _S_VERSION);
	wp_enqueue_style('xemer_theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	wp_enqueue_style('xemer_theme-color-default', get_template_directory_uri() . '/assets/css/color/color-default.css', array(), _S_VERSION);
	wp_enqueue_style('xemer_theme-plugin', get_template_directory_uri() . '/assets/css/plugin.css', array(), _S_VERSION);
	wp_enqueue_style('xemer_theme-flaticon', get_template_directory_uri() . '/assets/fonts/flaticon.css', array(), _S_VERSION);

	// js
	wp_enqueue_script('xemer_theme-jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-color-switcher', get_template_directory_uri() . '/assets/js/color-switcher.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-plugin', get_template_directory_uri() . '/assets/js/plugin.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-menu', get_template_directory_uri() . '/assets/js/menu.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-custom-swiper2', get_template_directory_uri() . '/assets/js/custom-swiper2.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-custom-nav', get_template_directory_uri() . '/assets/js/custom-nav.js', array(), _S_VERSION, true);
	wp_enqueue_script('xemer_theme-custom-date', get_template_directory_uri() . '/assets/js/custom-date.js', array(), _S_VERSION, true);

	// Font Awesome
	wp_enqueue_style('xemer_theme-style-Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('xemer_theme-style-Font_Awesome_2', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', array(), _S_VERSION);

	//add custom main css/js
	$main_css_file_path = get_template_directory() . '/assets/css/main.css';
	$main_js_file_path = get_template_directory() . '/assets/js/main_dev.js';
	$ver_main_css = file_exists($main_css_file_path) ? filemtime($main_css_file_path) : _S_VERSION;
	$ver_main_js = file_exists($main_js_file_path) ? filemtime($main_js_file_path) : _S_VERSION;
	wp_enqueue_style('xemer_theme-style-main', get_template_directory_uri() . '/assets/css/main.css', array(), $ver_main_css);
	wp_enqueue_script('xemer_theme-script-main_dev', get_template_directory_uri() . '/assets/js/main_dev.js', array(), $ver_main_js, true);
}
add_action('wp_enqueue_scripts', 'xemer_theme_scripts');

// Setup theme setting page
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(
		array(
			'page_title' => 'Theme Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-settings',
			'capability' => 'edit_posts',
			'redirect' => false,
			'position' => 80
		)
	);
}

// function
require get_template_directory() . '/inc/auto_active_plugin.php';
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/cpt_custom.php';
require get_template_directory() . '/inc/write_log.php';
require get_template_directory() . '/inc/longpv.php';
require get_template_directory() . '/inc/vucoder.php';
