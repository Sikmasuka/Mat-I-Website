<?php
/**
 * URL Routing & Rewrite Rules Configuration
 *
 * Maps custom URL endpoints (/login, /services, /history, etc.)
 * directly to their respective template files.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Route custom URL requests to virtual query parameters.
 */
function mat_i_custom_rewrite_rules() {
	add_rewrite_rule( '^mission-vision/?$', 'index.php?mat_i_page=mission-vision', 'top' );
	add_rewrite_rule( '^school-logo/?$', 'index.php?mat_i_page=school-logo', 'top' );
	add_rewrite_rule( '^history/?$', 'index.php?mat_i_page=history', 'top' );
	add_rewrite_rule( '^organigram/?$', 'index.php?mat_i_page=organigram', 'top' );
	add_rewrite_rule( '^services/?$', 'index.php?mat_i_page=services', 'top' );
	add_rewrite_rule( '^login/?$', 'index.php?mat_i_page=login', 'top' );
	add_rewrite_rule( '^portal/?$', 'index.php?mat_i_page=login', 'top' );
}
add_action( 'init', 'mat_i_custom_rewrite_rules' );

/**
 * Register custom query variable for routing.
 */
function mat_i_custom_query_vars( $vars ) {
	$vars[] = 'mat_i_page';
	return $vars;
}
add_filter( 'query_vars', 'mat_i_custom_query_vars' );

/**
 * Locate and load the proper page template based on current route.
 */
function mat_i_custom_template_include( $template ) {
	$mat_i_page = get_query_var( 'mat_i_page' );
	$req_uri    = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';

	if ( 'mission-vision' === $mat_i_page || is_page( 'mission-vision' ) || is_page( 'vision-mission' ) || false !== strpos( $req_uri, '/mission-vision' ) ) {
		$custom = locate_template( array( 'page-mission-vision.php' ) );
		if ( $custom ) {
			return $custom;
		}
	}

	if ( 'school-logo' === $mat_i_page || is_page( 'school-logo' ) || is_page( 'logo' ) || false !== strpos( $req_uri, '/school-logo' ) || false !== strpos( $req_uri, 'school=logo' ) ) {
		$custom = locate_template( array( 'school-logo.php', 'page-school-logo.php' ) );
		if ( $custom ) {
			return $custom;
		}
	}

	if ( 'history' === $mat_i_page || is_page( 'history' ) || false !== strpos( $req_uri, '/history' ) ) {
		$custom = locate_template( array( 'page-history.php' ) );
		if ( $custom ) {
			return $custom;
		}
	}

	if ( 'organigram' === $mat_i_page || is_page( 'organigram' ) || is_page( 'faculty' ) || false !== strpos( $req_uri, '/organigram' ) ) {
		$custom = locate_template( array( 'page-organigram.php' ) );
		if ( $custom ) {
			return $custom;
		}
	}

	if ( 'services' === $mat_i_page || is_page( 'services' ) || false !== strpos( $req_uri, '/services' ) ) {
		$custom = locate_template( array( 'page-services.php' ) );
		if ( $custom ) {
			return $custom;
		}
	}

	if ( 'login' === $mat_i_page || is_page( 'login' ) || is_page( 'portal' ) || false !== strpos( $req_uri, '/login' ) || false !== strpos( $req_uri, '/portal' ) ) {
		$custom = locate_template( array( 'page-login.php' ) );
		if ( $custom ) {
			return $custom;
		}
	}

	return $template;
}
add_filter( 'template_include', 'mat_i_custom_template_include', 99 );

/**
 * Flush rewrite rules automatically when theme is switched or activated.
 */
function mat_i_rewrite_flush() {
	mat_i_custom_rewrite_rules();
	flush_rewrite_rules( false );
}
add_action( 'after_switch_theme', 'mat_i_rewrite_flush' );
