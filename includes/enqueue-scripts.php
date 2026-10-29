<?php
/**
 * Stylesheets and Scripts Enqueue Configuration
 *
 * Handles loading of Google Fonts, custom CSS files, and JavaScript assets.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and modular section styles.
 */
function mat_i_theme_scripts() {
	// Google Fonts: Poppins & Inter
	wp_enqueue_style(
		'mat-i-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap',
		array(),
		null
	);

	// Base stylesheet (style.css)
	wp_enqueue_style( 'mat-i-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Modular section stylesheets
	$css_uri = get_template_directory_uri() . '/assets/css/';
	wp_enqueue_style( 'mat-i-header-style', $css_uri . 'header-style.css', array( 'mat-i-style' ), '1.0.2' );
	wp_enqueue_style( 'mat-i-hero-style', $css_uri . 'hero-style.css', array( 'mat-i-header-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-features-style', $css_uri . 'features-style.css', array( 'mat-i-hero-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-news-style', $css_uri . 'news-style.css', array( 'mat-i-features-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-about-style', $css_uri . 'about-style.css', array( 'mat-i-news-style' ), '1.0.3' );
	wp_enqueue_style( 'mat-i-school-logo-style', $css_uri . 'school-logo-style.css', array( 'mat-i-about-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-mission-vision-style', $css_uri . 'mission-vision-style.css', array( 'mat-i-school-logo-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-history-style', $css_uri . 'history-style.css', array( 'mat-i-mission-vision-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-organigram-style', $css_uri . 'organigram-style.css', array( 'mat-i-history-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-services-style', $css_uri . 'services-style.css', array( 'mat-i-organigram-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-gallery-style', $css_uri . 'gallery-style.css', array( 'mat-i-services-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-video-style', $css_uri . 'video-style.css', array( 'mat-i-gallery-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-programs-style', $css_uri . 'programs-style.css', array( 'mat-i-video-style' ), '1.0.3' );
	wp_enqueue_style( 'mat-i-app-style', $css_uri . 'app-style.css', array( 'mat-i-programs-style' ), '1.0.0' );
	wp_enqueue_style( 'mat-i-footer-style', $css_uri . 'footer-style.css', array( 'mat-i-app-style' ), '1.0.0' );

	if ( is_page_template( 'page-login.php' ) || is_page( 'login' ) || is_page( 'portal' ) ) {
		wp_enqueue_style( 'mat-i-login-style', $css_uri . 'login-style.css', array( 'mat-i-app-style' ), '1.0.0' );
	}

	// Main bundled stylesheet
	wp_enqueue_style( 'mat-i-main-style', $css_uri . 'main.css', array( 'mat-i-footer-style' ), '1.0.0' );

	// Main JavaScript file
	wp_enqueue_script( 'mat-i-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.2', true );

	// Media Uploader & CMS modal capability for authorized administrators
	if ( current_user_can( 'edit_theme_options' ) || current_user_can( 'edit_posts' ) ) {
		wp_enqueue_media();
	}

	// Localize AJAX parameters for inline CMS and news management
	wp_localize_script( 'mat-i-main-script', 'matIAjax', array(
		'ajax_url'         => admin_url( 'admin-ajax.php' ),
		'nonce'            => wp_create_nonce( 'mat_i_news_nonce' ),
		'cms_nonce'        => wp_create_nonce( 'mat_i_cms_nonce' ),
		'can_edit'         => current_user_can( 'edit_posts' ),
		'can_manage_theme' => current_user_can( 'edit_theme_options' ),
	) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mat_i_theme_scripts' );
