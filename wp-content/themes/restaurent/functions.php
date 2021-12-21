<?php

// Defines
define( 'SITE_VERSION', wp_get_theme()->Version );

/**
 * Function check and start session.
 */
function restaurent_start_session() {
	if ( ! session_id() ) {
		session_start();
	}
}
add_action( 'init', 'restaurent_start_session', 1 );

if ( ! is_admin() ) {
	// [Actions/Filters] below this line.

	add_action( 'wp_enqueue_scripts', 'set_theme_style' );
	/**
	 * Queue theme styles in <head> tag.
	 *
	 * @return void
	 */
	function set_theme_style() {
		wp_enqueue_style( 'style', get_stylesheet_uri(), array(), SITE_VERSION );
		wp_enqueue_style( 'sub-style', get_template_directory_uri() . '/assets/css/style.css', array(), SITE_VERSION );
		wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), SITE_VERSION );
		wp_enqueue_style( 'superslides', get_template_directory_uri() . '/assets/css/superslides.css', array(), SITE_VERSION );
		wp_enqueue_style( 'font', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), SITE_VERSION );
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), SITE_VERSION );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), SITE_VERSION );
		wp_enqueue_style( 'baguetteBox.min', get_template_directory_uri() . '/assets/css/baguetteBox.min.css', array(), SITE_VERSION );
		wp_enqueue_style( 'classic', get_template_directory_uri() . '/assets/css/classic.css', array(), SITE_VERSION );
		wp_enqueue_style( 'classic.date', get_template_directory_uri() . '/assets/css/classic.date.css', array(), SITE_VERSION );
		wp_enqueue_style( 'classic.time', get_template_directory_uri() . '/assets/css/classic.time.css', array(), SITE_VERSION );
		wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css', array(), SITE_VERSION );

		// Register files js.
		wp_register_script( 'mapify', get_template_directory_uri() . '/assets/js/jquery.mapify.js' );
		wp_register_script( 'jquery.superslides', get_template_directory_uri() . '/assets/js/jquery.superslides.min.js' );
		wp_register_script( 'images-loded', get_template_directory_uri() . '/assets/js/images-loded.min.js' );
		wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
		wp_register_script( 'legacy', get_template_directory_uri() . '/assets/js/legacy.js' );
		wp_register_script( 'baguetteBox', get_template_directory_uri() . '/assets/js/baguetteBox.min.js' );
		wp_register_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js' );
		wp_register_script( 'picker', get_template_directory_uri() . '/assets/js/picker.js' );
		wp_register_script( 'picker.date', get_template_directory_uri() . '/assets/js/picker.date.js' );
		wp_register_script( 'picker.time', get_template_directory_uri() . '/assets/js/picker.time.js' );
		wp_register_script( 'isotope.min', get_template_directory_uri() . '/assets/js/isotope.min.js' );
		wp_register_script( 'form-validator.min', get_template_directory_uri() . '/assets/js/form-validator.min.js' );
		wp_register_script( 'contact-form-script.js', get_template_directory_uri() . '/assets/js/contact-form-script.js' );
		wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js' );

		// Call files js for themes.
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper' );
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'jquery.superslides' );
		wp_enqueue_script( 'images-loded' );
		wp_enqueue_script( 'isotope.min' );
		wp_enqueue_script( 'baguetteBox' );
		wp_enqueue_script( 'mapify' );
		wp_enqueue_script( 'legacy' );
		wp_enqueue_script( 'picker' );
		wp_enqueue_script( 'picker.date' );
		wp_enqueue_script( 'picker.time' );
		wp_enqueue_script( 'form-validator.min' );
		wp_enqueue_script( 'contact-form-script.js' );
		wp_enqueue_script( 'custom' );
	}
	// For FE only.
}
// From this line downward for both BE and FE.

add_action( 'after_setup_theme', 'setup_theme_defaults' );
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @return void
 */
function setup_theme_defaults() {
	load_theme_textdomain( 'restaurent' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'editor-style.css' );
	register_nav_menus(
		array(
			'primary_menu' => __( 'Primary Menu', 'restaurent' ),
			'footer_menu'  => __( 'Footer Menu', 'restaurent' ),
		)
	);
	$logo_width  = 200;
	$logo_height = 47;
	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);
}

/**
 * Before sending any header, stop at 404 page.
 */
function exit_at_404_page() {
	global $wp_query;
	$wp_query->set_404();
	status_header( 404 );
	get_template_part( 404 );
	exit;
}

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function restaurent_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'restaurent_the_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Get menu.
 *
 * @param string $current_menu The name menu.
 */
function get_menus( $current_menu ) {
	$array_menu = wp_get_nav_menu_items( 'main-menu' );
	return $array_menu;
}
