<?php
/**
 * socialbrothers theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package socialbrothers
 */

if (!function_exists('socialbrothers_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function socialbrothers_setup() {
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');
	}
}

add_action('after_setup_theme', 'socialbrothers_setup');

// Enqueue scripts and styles.
function socialbrothers_scripts() {
	wp_enqueue_style('socialbrothers-style', get_stylesheet_uri());

	wp_enqueue_script('socialbrothers-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);
}

add_action('wp_enqueue_scripts', 'socialbrothers_scripts');
