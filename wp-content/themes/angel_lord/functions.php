<?php

/**
 * Angel Lord functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Angel_Lord
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
function angel_lord_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Angel Lord, use a find and replace
		* to change 'angel_lord' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('angel_lord', get_template_directory() . '/languages');

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

	add_image_size('home-banner', 1920, 800, true);
	add_image_size('home-about', 702, 447, true);
	add_image_size('team', 225, 250, true);
	add_image_size('home-event', 555, 275, true);
	add_image_size('archive-event', 360, 250, true);
	add_image_size('event-single', 750, 400, true);
	add_image_size('notice', 640, 384, true);
	add_image_size('gallery', 480, 420, true);
	add_image_size('ecacca', 360, 250, true);
	add_image_size('club', 360, 255, true);
	add_image_size('club-single', 458, 270, true);
	add_image_size('page-banner', 1920, 466, true);
	add_image_size('admission-proc', 458, 540, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main_menu' => esc_html__('Primary', 'angel_lord'),
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
			'angel_lord_custom_background_args',
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'angel_lord_setup');


/* Image Custom Sizes for posts */
// function na_add_image_sizes()
// {
// 	add_image_size('home-banner', 1920, 800, true);
// 	add_image_size('home-about', 702, 447, true);
// 	add_image_size('team', 225, 250, true);
// }
// add_action('init', 'na_add_image_sizes');

// function na_show_image_sizes($sizes)
// {
// 	$sizes['home-banner'] = __('Home Banner', 'angel_lord');
// 	$sizes['home-about'] = __('Home About', 'angel_lord');
// 	$sizes['team'] = __('Team Image', 'angel_lord');

// 	return $sizes;
// }
// add_filter('image_size_names_choose', 'na_show_image_sizes');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function angel_lord_content_width()
{
	$GLOBALS['content_width'] = apply_filters('angel_lord_content_width', 640);
}
add_action('after_setup_theme', 'angel_lord_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function angel_lord_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'angel_lord'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'angel_lord'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'angel_lord_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function angel_lord_scripts()
{
	wp_enqueue_style('angel_lord-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('angel_lord-style', 'rtl', 'replace');

	wp_enqueue_script('angel_lord-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'angel_lord_scripts');

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

//Home Banner
require get_template_directory() . '/inc/home-banner.php';

//Teams 
require get_template_directory() . '/inc/team.php';

// Notices
require get_template_directory() . '/inc/notice.php';
//Gallery
require get_template_directory() . '/inc/gallery.php';
//Club
require get_template_directory() . '/inc/club.php';
//Testimonial
require get_template_directory() . '/inc/testimonial.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}