<?php

/**
 * i3d functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package i3d
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
function i3d_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on i3d, use a find and replace
		* to change 'i3d' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('i3d', get_template_directory() . '/languages');

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
	set_post_thumbnail_size(264, 264);

	// add_image_size('i3d_thumb', 128, 128, true);
	// add_image_size('i3d_medium', 264, 264, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'i3d'),
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
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'i3d_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'i3d_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function i3d_content_width()
{
	$GLOBALS['content_width'] = apply_filters('i3d_content_width', 640);
}
add_action('after_setup_theme', 'i3d_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function i3d_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'i3d'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'i3d'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'i3d_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function i3d_scripts()
{
	wp_enqueue_style('i3d-style', get_stylesheet_directory_uri() . "/app/css/app.css", array(), _S_VERSION);

	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/app/js/jquery-3.3.1.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('i3d-scripts', get_stylesheet_directory_uri() . '/app/js/app.js', array(), _S_VERSION, true);
	wp_enqueue_script('i3d-contact', get_stylesheet_directory_uri() . '/app/js/contact.js', array(), _S_VERSION, true);

	wp_enqueue_script('i3d-payhip', '//payhip.com/payhip.js', array(), _S_VERSION, false);
}
add_action('wp_enqueue_scripts', 'i3d_scripts');

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
 * Shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Custom posts types
 */
require get_template_directory() . '/inc/custom-posts.php';

/**
 * Carbon Fields
 */
add_action('carbon_fields_register_fields', 'ast_register_custom_fields');
function ast_register_custom_fields()
{
	require get_template_directory() . '/inc/custom-fields-options/metabox.php';
	require get_template_directory() . '/inc/custom-fields-options/theme-options.php';
}

/**
 * Helpers
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Mailer
 */
require get_template_directory() . '/inc/mailer.php';

add_action('admin_menu', 'remove_admin_menus');
function remove_admin_menus()
{
	global $menu;

	$unset_titles = [
		__('Posts'),
		__('Comments'),
	];

	end($menu);
	while (prev($menu)) {

		$value = explode(' ', $menu[key($menu)][0]);
		$title = $value[0] ?: '';

		if (in_array($title, $unset_titles, true)) {
			unset($menu[key($menu)]);
		}
	}
}

/**
 * Watermark
 */
require_once get_template_directory() . '/inc/watermark.php';
