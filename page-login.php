<?php
/**
 * Template Name: Standalone Login Page
 *
 * @package Mat-I
 */

$login_error = '';

// Optional message if already logged in	
$is_logged_in_already = is_user_logged_in();

// Process login form submission
if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['mat_i_login_submit'] ) ) {
	if ( isset( $_POST['mat_i_login_nonce'] ) && wp_verify_nonce( sanitize_key( $_POST['mat_i_login_nonce'] ), 'mat_i_login_action' ) ) {
		$creds = array(
			'user_login'    => sanitize_text_field( wp_unslash( $_POST['log'] ?? '' ) ),
			'user_password' => $_POST['pwd'] ?? '',
			'remember'      => isset( $_POST['rememberme'] ),
		);

		if ( empty( $creds['user_login'] ) || empty( $creds['user_password'] ) ) {
			$login_error = 'Please enter both your Username / Email and Password.';
		} else {
			$user = wp_signon( $creds, is_ssl() );

			if ( is_wp_error( $user ) ) {
				$raw_msg = $user->get_error_message();
				$login_error = wp_strip_all_tags( $raw_msg );
			} else {
				$redirect_to = ! empty( $_POST['redirect_to'] ) ? esc_url_raw( wp_unslash( $_POST['redirect_to'] ) ) : home_url( '/' );
				wp_safe_redirect( $redirect_to );
				exit;
			}
		}
	} else {
		$login_error = 'Security session timed out. Please refresh the page and try again.';
	}
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Official Portal Login | Mat-I National High School</title>
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/login-style.css' ); ?>?ver=1.0.4">
</head>
<body class="mat-i-login-body">

<div class="bg-pattern"></div>

<!-- Top Left Navigation Button -->
<div class="login-top-bar">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-to-home-top">
		<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
			<line x1="19" y1="12" x2="5" y2="12"></line>
			<polyline points="12 19 5 12 12 5"></polyline>
		</svg>
		<span>Back to Mat-I NHS Website</span>
	</a>
</div>

<div class="standalone-login-card">
	<!-- 1. School Logo -->
	<div class="login-logo-wrap">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Mat-I NHS Homepage">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>" alt="Mat-I NHS Logo" class="login-logo">
		</a>
	</div>

	<!-- 2. School Title -->
	<h1 class="login-school-title">Mat-I National High School</h1>
	<p class="login-school-sub">Official Portal & CMS Login</p>

	<?php if ( ! empty( $login_error ) ) : ?>
		<div class="login-alert" role="alert">
			<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
			<span><?php echo esc_html( $login_error ); ?></span>
		</div>
	<?php endif; ?>

	<!-- 3. Form -->
	<form method="post" action="<?php echo esc_url( home_url( '/login/' ) ); ?>" class="login-form">
		<?php wp_nonce_field( 'mat_i_login_action', 'mat_i_login_nonce' ); ?>
		<input type="hidden" name="redirect_to" value="<?php echo esc_attr( isset( $_GET['redirect_to'] ) ? esc_url( $_GET['redirect_to'] ) : home_url( '/' ) ); ?>">

		<!-- Username / Email -->
		<div class="form-group">
			<label for="user_login" class="form-label">Username or DepEd Email</label>
			<div class="input-container">
				<span class="input-icon">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
				</span>
				<input type="text" name="log" id="user_login" class="form-input" placeholder="Enter your username" required autocomplete="username" value="<?php echo esc_attr( $_POST['log'] ?? '' ); ?>">
			</div>
		</div>

		<!-- Password -->
		<div class="form-group">
			<label for="user_pass" class="form-label">Password</label>
			<div class="input-container">
				<span class="input-icon">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
				</span>
				<input type="password" name="pwd" id="user_pass" class="form-input" placeholder="••••••••••••" required autocomplete="current-password">
				<button type="button" class="password-toggle-btn" id="togglePasswordBtn" aria-label="Toggle password visibility">
					<svg id="eyeIcon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
				</button>
			</div>
		</div>

		<!-- Meta row -->
		<div class="form-meta-row">
			<label class="remember-checkbox">
				<input type="checkbox" name="rememberme" value="forever" id="rememberme">
				<span>Remember me</span>
			</label>
			<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="forgot-link">Forgot password?</a>
		</div>

		<!-- Submit -->
		<button type="submit" name="mat_i_login_submit" class="btn-submit-login">
			<span>Log In to Portal</span>
			<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
		</button>
	</form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	var toggleBtn = document.getElementById('togglePasswordBtn');
	var passInput = document.getElementById('user_pass');
	var eyeIcon = document.getElementById('eyeIcon');

	if (toggleBtn && passInput) {
		toggleBtn.addEventListener('click', function() {
			var isPassword = passInput.type === 'password';
			passInput.type = isPassword ? 'text' : 'password';
			
			if (isPassword) {
				eyeIcon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>';
			} else {
				eyeIcon.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>';
			}
		});
	}
});
</script>

</body>
</html>
