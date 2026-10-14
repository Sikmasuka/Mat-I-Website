<?php
/**
 * Authentication & Login Handling
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Process custom login form submissions.
 *
 * @return array Array containing error message, if any.
 */
function mat_i_process_login() {
	$result = array(
		'error' => '',
	);

	if ( 'POST' !== $_SERVER['REQUEST_METHOD'] || ! isset( $_POST['mat_i_login_submit'] ) ) {
		return $result;
	}

	if ( ! isset( $_POST['mat_i_login_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['mat_i_login_nonce'] ), 'mat_i_login_action' ) ) {
		$result['error'] = 'Security session timed out. Please refresh the page and try again.';
		return $result;
	}

	$creds = array(
		'user_login'    => sanitize_text_field( wp_unslash( $_POST['log'] ?? '' ) ),
		'user_password' => $_POST['pwd'] ?? '',
		'remember'      => isset( $_POST['rememberme'] ),
	);

	if ( empty( $creds['user_login'] ) || empty( $creds['user_password'] ) ) {
		$result['error'] = 'Please enter both your Username / Email and Password.';
		return $result;
	}

	$user = wp_signon( $creds, is_ssl() );

	if ( is_wp_error( $user ) ) {
		$raw_msg = $user->get_error_message();
		$result['error'] = wp_strip_all_tags( $raw_msg );
		return $result;
	}

	$redirect_to = ! empty( $_POST['redirect_to'] ) ? esc_url_raw( wp_unslash( $_POST['redirect_to'] ) ) : home_url( '/' );
	wp_safe_redirect( $redirect_to );
	exit;
}

/**
 * Redirect default wp-login.php requests to custom /login/ page safely.
 */
function mat_i_custom_login_redirect() {
	if ( ! isset( $_REQUEST['action'] ) && ! isset( $_POST['wp-submit'] ) && 'POST' !== $_SERVER['REQUEST_METHOD'] ) {
		$req = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';
		if ( false !== strpos( $req, 'wp-login.php' ) && false === strpos( $req, '/login' ) && false === strpos( $req, '/portal' ) ) {
			$login_page = home_url( '/login/' );
			if ( ! empty( $_GET['redirect_to'] ) ) {
				$login_page = add_query_arg( 'redirect_to', urlencode( $_GET['redirect_to'] ), $login_page );
			}
			wp_safe_redirect( $login_page );
			exit;
		}
	}
}
add_action( 'login_init', 'mat_i_custom_login_redirect' );
