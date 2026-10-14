<?php
/**
 * Theme Setup & Features Configuration
 *
 * Handles theme support, navigation menus, custom logo, and browser document titles.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function mat_i_theme_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'mat-i' ),
			'footer'  => esc_html__( 'Footer Menu', 'mat-i' ),
		)
	);

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

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'mat_i_theme_setup' );

/**
 * Filter document title parts and blog name to display "Mat-I NHS" in browser tab.
 */
function mat_i_custom_document_title_parts( $title_parts ) {
	if ( isset( $title_parts['title'] ) && ( 'Mat-I' === $title_parts['title'] || 'Mat-i' === $title_parts['title'] ) ) {
		$title_parts['title'] = 'Mat-I NHS';
	}
	if ( isset( $title_parts['site'] ) && ( 'Mat-I' === $title_parts['site'] || 'Mat-i' === $title_parts['site'] ) ) {
		$title_parts['site'] = 'Mat-I NHS';
	}
	if ( is_front_page() || is_home() ) {
		$title_parts['title'] = 'Mat-I NHS';
	}
	return $title_parts;
}
add_filter( 'document_title_parts', 'mat_i_custom_document_title_parts', 20 );

add_filter( 'option_blogname', function( $name ) {
	if ( 'Mat-I' === $name || 'Mat-i' === $name ) {
		return 'Mat-I NHS';
	}
	return $name;
} );

/**
 * Global fallback to force "MAT-I NHS" as title.
 */
function mat_i_set_all_tab_titles( $title ) {
	return 'MAT-I NHS';
}
add_filter( 'pre_get_document_title', 'mat_i_set_all_tab_titles', 999 );
add_filter( 'wp_title', 'mat_i_set_all_tab_titles', 999 );
