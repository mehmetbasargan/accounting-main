<?php

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('accounting_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function accounting_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Accounting, use a find and replace
		 * to change 'accounting' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('accounting', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');


		// Images Size
		add_image_size('widget_img', 80, 80, true);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'accounting'),
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
				'accounting_custom_background_args',
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
endif;
add_action('after_setup_theme', 'accounting_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function accounting_content_width()
{
	$GLOBALS['content_width'] = apply_filters('accounting_content_width', 640);
}
add_action('after_setup_theme', 'accounting_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function accounting_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'accounting'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'accounting'),
			'before_widget' => '<section id="%1$s" class="sidebar ftco-animate widget %2$s sidebar-box">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init', 'accounting_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function accounting_scripts()
{
	wp_enqueue_style('accounting-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('accounting-style', 'rtl', 'replace');
	wp_add_inline_style('accounting-style', accounting_custom_style());


	// Theme CSS
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION);
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION);
	wp_enqueue_style('owl.theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION);
	wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION);
	wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), _S_VERSION);
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);


	// Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap');

	// Theme JS
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('iconify', get_template_directory_uri() . '/assets/js/iconify.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('accounting-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'accounting_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Demo Import
 */
require get_template_directory() . '/inc/demo-import.php';

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
 * TGMPA.
 */
require get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';

/**
 * Kirki Theme Options.
 */
require get_template_directory() . '/inc/theme-options.php';


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Widgets.
 */
require get_template_directory() . '/inc/widgets/accounting-post-widget.php';


// Li Class
function add_specific_menu_location_atts($atts, $item, $args)
{
	if ($args->menu == 'menu-1') {
		$atts['class'] = 'nav-link';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);


// A Clas
function atg_menu_classes($classes, $item, $args)
{
	if ($args->menu == 'menu-1') {
		$classes[] = 'nav-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


// Excerpt
function length_excerpt($text)
{
	if (is_admin()) {
		return $text;
	}
	$text = get_the_content();
	$text = strip_shortcodes($text);

	$text = substr($text, 0, 80);

	$text .= '…';
	return $text;
}
add_filter('wp_trim_excerpt', 'length_excerpt', 10, 1);
