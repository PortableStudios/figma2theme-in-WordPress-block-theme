<?php
/**
 * Twenty Twenty-Three functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Three
 * @since Twenty Twenty-Three 1.0
 */

if ( ! function_exists( 'twentytwentythree_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Three 1.0
	 *
	 * @return void
	 */
	function twentytwentythree_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		add_editor_style( 'tokens.css' );
	}

endif;

add_action( 'after_setup_theme', 'twentytwentythree_support' );

if ( ! function_exists( 'twentytwentythree_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Three 1.0
	 *
	 * @return void
	 */
	function twentytwentythree_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentythree-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		wp_register_style(
			'twentytwentythree-tokens',
			get_template_directory_uri() . '/tokens.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheets.
		wp_enqueue_style( 'twentytwentythree-style' );
		wp_enqueue_style( 'twentytwentythree-tokens' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'twentytwentythree_styles' );