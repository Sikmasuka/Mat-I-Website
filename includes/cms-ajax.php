<?php
/**
 * CMS On-Page Fast-Edit AJAX Endpoints
 *
 * Handles live, on-page updates for theme sections:
 * Hero, Core Values, Principal, Admissions, and Global Contact Info.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Handle AJAX request to save section settings.
 */
function mat_i_ajax_save_section() {
	check_ajax_referer( 'mat_i_cms_nonce', 'nonce' );

	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_send_json_error( array( 'message' => 'Unauthorized. Administrator access required.' ), 403 );
	}

	$section = isset( $_POST['section'] ) ? sanitize_key( $_POST['section'] ) : '';
	$data    = isset( $_POST['data'] ) && is_array( $_POST['data'] ) ? wp_unslash( $_POST['data'] ) : array();

	if ( empty( $section ) ) {
		wp_send_json_error( array( 'message' => 'Invalid section identifier.' ), 400 );
	}

	require_once get_template_directory() . '/includes/admin-settings.php';

	switch ( $section ) {
		case 'hero':
			$clean = mat_i_sanitize_hero_settings( $data );
			update_option( 'mat_i_hero_settings', $clean, 'no' );
			wp_send_json_success( array(
				'message' => 'Hero Banner updated successfully!',
				'section' => 'hero',
				'data'    => $clean,
			) );
			break;

		case 'core_values':
			$clean = mat_i_sanitize_core_values_settings( $data );
			update_option( 'mat_i_core_values', $clean, 'no' );
			wp_send_json_success( array(
				'message' => 'DepEd Core Values updated successfully!',
				'section' => 'core_values',
				'data'    => $clean,
			) );
			break;

		case 'principal':
			$clean = mat_i_sanitize_principal_settings( $data );
			update_option( 'mat_i_principal_settings', $clean, 'no' );
			wp_send_json_success( array(
				'message' => "Principal's Spotlight updated successfully!",
				'section' => 'principal',
				'data'    => $clean,
			) );
			break;

		case 'admissions':
			$clean = mat_i_sanitize_admissions_settings( $data );
			update_option( 'mat_i_admissions_settings', $clean, 'no' );
			wp_send_json_success( array(
				'message' => 'Admissions & Pathway updated successfully!',
				'section' => 'admissions',
				'data'    => $clean,
			) );
			break;

		case 'global':
			$clean = mat_i_sanitize_global_settings( $data );
			update_option( 'mat_i_global_settings', $clean, 'no' );
			wp_send_json_success( array(
				'message' => 'Contact & Global settings updated successfully!',
				'section' => 'global',
				'data'    => $clean,
			) );
			break;

		default:
			wp_send_json_error( array( 'message' => 'Unknown section: ' . esc_html( $section ) ), 400 );
	}
}
add_action( 'wp_ajax_mat_i_save_section', 'mat_i_ajax_save_section' );
