<?php

function accounting_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'accounting_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function accounting_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'accounting_pingback_header');

/* TGMPA İle Eklenti Önerisi */
function accounting_register_required_plugins()
{
	$plugins = array(

		// Kirki Customizer Framework
		array(
			'name'      => 'Kirki Customizer Framework',
			'slug'      => 'kirki',
			'required'  => false,
		),

		// Wp Post Views
		array(
			'name'      => 'WP-PostViews',
			'slug'      => 'wp-postviews',
			'required'  => false,
		),

		// Contact Form 7
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

		// WP Mail SMTP
		array(
			'name'      => 'WP Mail SMTP by WPForms',
			'slug'      => 'wp-mail-smtp',
			'required'  => false,
		),

		// Klasik düzenleyici
		array(
			'name'      => 'Klasik düzenleyici',
			'slug'      => 'classic-editor',
			'required'  => false,
		),

		// Klasik düzenleyici
		array(
			'name'      => 'Klasik düzenleyici',
			'slug'      => 'classic-editor',
			'required'  => false,
		),

		// One Click Demo Import
		array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => false,
		),

	);

	$config = array(
		'id'           => 'accounting',
		'default_path' => '',
		'menu'         => 'accounting-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'accounting_register_required_plugins');


/* Tema Renkleri */
function accounting_custom_style()
{
	$color_sheme = get_theme_mod('accounting_general_color', '#1ba12d');
	ob_start();
?>

	<style>
		.social-media p a:hover,
		.ftco-navbar-light .navbar-nav>.nav-item>.nav-link:before,
		.current_page_parent>a .testimony-wrap .icon,
		.testimony-section .owl-dots .owl-dot.active,
		.testimony-wrap .icon,
		.ftco-faqs button[aria-expanded="true"],
		.bg-primary,
		.btn.btn-primary {
			background: <?php echo sanitize_hex_color($color_sheme); ?> !important;

		}

		.btn.btn-primary {
			border: 1px solid <?php echo sanitize_hex_color($color_sheme); ?> !important;
			;
		}

		.ftco-navbar-light .navbar-nav>.nav-item>.nav-link:hover,
		.current_page_item>a,
		.current_page_parent>a,
		.owl-carousel.home-slider .slider-item .slider-text h2,
		.heading-section .subheading,
		.ftco-counter .text .number,
		.blog-entry .text .heading a:hover,
		.blog-entry .text .heading a:focus,
		.blog-entry .text .heading a:active,
		.blog-entry .text .meta-chat,
		.ftco-footer-social a,
		ul.list-unstyled li a:hover,
		.fn a,
		.reply a,
		.copyright a,
		.logged-in-as a,
		span.edit-link a:hover,
		.comment-metadata a:hover,
		.nav-links a,
		h3.heading a:hover,
		.cat-item a:hover,
		header.entry-header a {
			color: <?php echo sanitize_hex_color($color_sheme); ?> !important;
		}
	</style>

<?php
	return str_replace(array('<style>', '</style>'), array('', ''),  ob_get_clean());
}
