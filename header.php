<?php
/**
 * The header for MAT-I National High School Theme
 *
 * @package Mat-I
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>">
	<!-- Structured Data (Schema.org) for Institutional SEO -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "HighSchool",
		"name": "MAT-I National High School",
		"alternateName": "MAT-I NHS",
		"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
		"logo": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>",
		"description": "MAT-I National High School provides quality, accessible, and relevant basic secondary education committed to academic competence and moral integrity in Claveria, Misamis Oriental.",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Mat-I",
			"addressLocality": "Claveria",
			"addressRegion": "Misamis Oriental",
			"postalCode": "9004",
			"addressCountry": "PH"
		},
		"department": {
			"@type": "GovernmentOrganization",
			"name": "Department of Education - Division of Misamis Oriental"
		}
	}
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$mat_i_global = get_option( 'mat_i_global_settings', array() );
$mat_i_phone  = ! empty( $mat_i_global['phone'] ) ? $mat_i_global['phone'] : '09606255099';
$mat_i_email  = ! empty( $mat_i_global['email'] ) ? $mat_i_global['email'] : 'mat-i.nhs@deped.gov.ph';
$mat_i_hours  = ! empty( $mat_i_global['office_hours'] ) ? $mat_i_global['office_hours'] : 'Mon–Fri: 8:00 AM – 5:00 PM';
$mat_i_fb     = ! empty( $mat_i_global['facebook_url'] ) ? $mat_i_global['facebook_url'] : '#';
$mat_i_tw     = ! empty( $mat_i_global['twitter_url'] ) ? $mat_i_global['twitter_url'] : '#';
$mat_i_ig     = ! empty( $mat_i_global['instagram_url'] ) ? $mat_i_global['instagram_url'] : '#';
$mat_i_yt     = ! empty( $mat_i_global['youtube_url'] ) ? $mat_i_global['youtube_url'] : '#';
?>

<!-- SECTION 1 — TOP INFO BAR (Hidden on mobile via CSS) -->
<div class="top-info-bar" id="topInfoBar">
	<div class="container top-info-container">
		<div class="top-info-left">
			<div class="top-info-item">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				<span id="topInfoPhone"><?php echo esc_html( $mat_i_phone ); ?></span>
			</div>
			<div class="top-info-item">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
				<span id="topInfoEmail"><?php echo esc_html( $mat_i_email ); ?></span>
			</div>

			<div class="top-info-item">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
				<span id="topInfoHours"><?php echo esc_html( $mat_i_hours ); ?></span>
			</div>
			<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
				<button type="button" class="btn-fast-edit-section" data-section="global" title="Edit Contact Information & Hours" style="background: #FF851A; border: none; color: #FFFFFF; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px; line-height: 1.4; box-shadow: 0 1px 4px rgba(0,0,0,0.25);">
					<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
					<span>Edit Info</span>
				</button>
			<?php endif; ?>
		</div>

		<div class="top-info-right">
			<div class="social-icons-row">
				<a href="<?php echo esc_url( $mat_i_fb ); ?>" class="social-icon-link" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
					<svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
				</a>
				<a href="<?php echo esc_url( $mat_i_tw ); ?>" class="social-icon-link" aria-label="Twitter" target="_blank" rel="noopener noreferrer">
					<svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
				</a>
				<a href="<?php echo esc_url( $mat_i_ig ); ?>" class="social-icon-link" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
					<svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
				</a>
				<a href="<?php echo esc_url( $mat_i_yt ); ?>" class="social-icon-link" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
					<svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#102A57"/></svg>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- SECTION 2 — STICKY NAVIGATION -->
<header id="masthead" class="sticky-nav">
	<div class="container nav-container">
		<!-- School Branding -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-branding">
			<div class="seal-svg-wrapper">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>" alt="Mat-I NHS Logo" class="nav-logo-img" style="width: 100%; height: 100%; object-fit: contain;">
			</div>
			<div class="brand-text-block">
				<span class="brand-title">Mat-I National High School</span>
				<span class="brand-subtitle">Department of Education · Region X — Misamis Oriental</span>
			</div>
		</a>

		<!-- Desktop Links -->
		<nav class="nav-menu-desktop" id="desktopNav">
			<div class="nav-link-item">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link-btn">Home</a>
			</div>
			
			<!-- About Us Dropdown Item -->
			<div class="nav-link-item">
				<button class="nav-link-btn" id="aboutDropdownBtn">
					<span>About Us</span>
					<svg id="aboutChevronIcon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="transition: transform 0.2s ease;"><polyline points="6 9 12 15 18 9"/></svg>
				</button>
				<!-- Dropdown Panel -->
				<div class="about-dropdown-panel" id="aboutDropdownPanel">
					<div class="dropdown-header-strip">
						<div class="dropdown-header-label">ABOUT US</div>
						<div class="dropdown-header-sub">MAT-I NHS Information</div>
					</div>
					<ul class="dropdown-items-list">
						<li>
							<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="dropdown-item-link">
								<div class="dropdown-item-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
								</div>
								<div class="dropdown-item-label">Vision, Mission & Values</div>
								<div class="dropdown-item-arrow">&rarr;</div>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/history/' ) ); ?>" class="dropdown-item-link">
								<div class="dropdown-item-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
								</div>
								<div class="dropdown-item-label">History & Heritage</div>
								<div class="dropdown-item-arrow">&rarr;</div>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/school-logo/' ) ); ?>" class="dropdown-item-link">
								<div class="dropdown-item-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
								</div>
								<div class="dropdown-item-label">School Logo & Seal</div>
								<div class="dropdown-item-arrow">&rarr;</div>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/organigram/' ) ); ?>" class="dropdown-item-link">
								<div class="dropdown-item-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
								</div>
								<div class="dropdown-item-label">Faculty & Organigram</div>
								<div class="dropdown-item-arrow">&rarr;</div>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>" class="dropdown-item-link">
								<div class="dropdown-item-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
								</div>
								<div class="dropdown-item-label">Campus Gallery</div>
								<div class="dropdown-item-arrow">&rarr;</div>
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="dropdown-item-link">
								<div class="dropdown-item-icon">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
								</div>
								<div class="dropdown-item-label">Contact Info</div>
								<div class="dropdown-item-arrow">&rarr;</div>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="nav-link-item">
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="nav-link-btn">Services</a>
			</div>
			<div class="nav-link-item">
				<a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>" class="nav-link-btn">Programs</a>
			</div>
			<div class="nav-link-item">
				<a href="<?php echo esc_url( home_url( '/#news' ) ); ?>" class="nav-link-btn">News</a>
			</div>
			<div class="nav-link-item">
				<a href="<?php echo esc_url( home_url( '/organigram/' ) ); ?>" class="nav-link-btn">Organigram</a>
			</div>

			<!-- Official Login / Portal Action -->
			<?php if ( is_user_logged_in() ) : 
				$header_user = wp_get_current_user();
				$is_admin = in_array( 'administrator', (array) $header_user->roles, true );
				$badge_txt = $is_admin ? 'Admin' : 'Official';
			?>
				<div class="nav-link-item nav-user-item">
					<div class="user-dropdown-wrapper">
						<button class="btn-portal-badge" id="userMenuBtn" type="button" aria-haspopup="true" aria-expanded="false" title="User account options">
							<span class="user-status-dot"></span>
							<span class="user-nav-name"><?php echo esc_html( $header_user->display_name ); ?></span>
							<span class="user-nav-role"><?php echo esc_html( $badge_txt ); ?></span>
							<svg id="userChevronIcon" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-left: 2px; transition: transform 0.2s ease;"><polyline points="6 9 12 15 18 9"/></svg>
						</button>
						<!-- User Dropdown Panel -->
						<div class="user-dropdown-panel" id="userDropdownPanel">
							<div class="user-dropdown-header">
								<div class="user-dropdown-name"><?php echo esc_html( $header_user->display_name ); ?></div>
								<div class="user-dropdown-sub"><?php echo esc_html( $header_user->user_email ); ?></div>
							</div>
							<ul class="user-dropdown-list">
								<?php if ( $is_admin ) : ?>
								<li>
									<button type="button" class="user-dropdown-link btn-fast-edit-section" data-section="global" style="width: 100%; border: none; background: transparent; cursor: pointer; font-family: inherit; text-align: left;">
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
										<span>Edit Contact & Info</span>
									</button>
								</li>
								<li>
									<a href="<?php echo esc_url( admin_url( 'admin.php?page=mat-i-theme-settings' ) ); ?>" class="user-dropdown-link">
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
										<span>Theme Settings</span>
									</a>
								</li>
								<li>
									<a href="<?php echo esc_url( admin_url() ); ?>" class="user-dropdown-link">
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
										<span>WP Dashboard</span>
									</a>
								</li>
								<?php endif; ?>
								<li>
									<a href="<?php echo esc_url( home_url( '/login/' ) ); ?>" class="user-dropdown-link">
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
										<span>Official Portal</span>
									</a>
								</li>
								<li class="user-dropdown-divider"></li>
								<li>
									<a href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>" class="user-dropdown-link user-dropdown-logout">
										<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
										<span>Log Out</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</nav>

		<!-- Mobile Hamburger Toggle -->
		<button class="mobile-menu-toggle" id="mobileMenuToggle" style="background: transparent; border: none; cursor: pointer; padding: 8px;" aria-label="Toggle navigation">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#102A57" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
		</button>
	</div>

	<!-- Mobile Menu Dropdown -->
	<div id="mobileNavMenu" class="hidden" style="background-color: #FFFFFF; border-top: 1px solid #E4E7EC; padding: 1rem;">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: block; padding: 10px; font-weight: 500; color: #102A57; text-decoration: none;">Home</a>
		
		<!-- Mobile About Us Accordion -->
		<div>
			<button id="mobileAboutBtn" style="width: 100%; display: flex; justify-content: space-between; align-items: center; padding: 10px; font-weight: 500; color: #102A57; background: transparent; border: none; text-align: left;">
				<span>About Us</span>
				<span>&#9662;</span>
			</button>
			<div id="mobileAboutSub" class="hidden" style="border-left: 3px solid #FF851A; margin-left: 10px; padding-left: 10px;">
				<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" style="display: flex; align-items: center; gap: 8px; padding: 8px; font-size: 13px; color: #1D2939; text-decoration: none;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
					<span>Vision & Mission</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/history/' ) ); ?>" style="display: flex; align-items: center; gap: 8px; padding: 8px; font-size: 13px; color: #1D2939; text-decoration: none;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
					<span>History & Heritage</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/school-logo/' ) ); ?>" style="display: flex; align-items: center; gap: 8px; padding: 8px; font-size: 13px; color: #1D2939; text-decoration: none;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					<span>School Logo & Seal</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/organigram/' ) ); ?>" style="display: flex; align-items: center; gap: 8px; padding: 8px; font-size: 13px; color: #1D2939; text-decoration: none;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					<span>Faculty & Organigram</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>" style="display: flex; align-items: center; gap: 8px; padding: 8px; font-size: 13px; color: #1D2939; text-decoration: none;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
					<span>Campus Gallery</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" style="display: flex; align-items: center; gap: 8px; padding: 8px; font-size: 13px; color: #1D2939; text-decoration: none;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
					<span>Contact Info</span>
				</a>
			</div>
		</div>

		<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="display: block; padding: 10px; font-weight: 500; color: #102A57; text-decoration: none;">School Services</a>
		<a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>" style="display: block; padding: 10px; font-weight: 500; color: #102A57; text-decoration: none;">Academic Programs</a>
		<a href="<?php echo esc_url( home_url( '/#news' ) ); ?>" style="display: block; padding: 10px; font-weight: 500; color: #102A57; text-decoration: none;">News & Updates</a>
		<a href="<?php echo esc_url( home_url( '/organigram/' ) ); ?>" style="display: block; padding: 10px; font-weight: 500; color: #102A57; text-decoration: none;">Organigram</a>

		<!-- Mobile Portal (Logged In Only) -->
		<?php if ( is_user_logged_in() ) : 
			$mob_user = wp_get_current_user();
			$mob_is_admin = in_array( 'administrator', (array) $mob_user->roles, true );
			$mob_badge = $mob_is_admin ? 'Admin' : 'Official';
		?>
		<div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #E4E7EC;">
			<div style="background-color: #EFF6FF; border: 1px solid #BFDBFE; border-radius: 8px; padding: 12px; margin-bottom: 8px;">
				<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px;">
					<span style="display: flex; align-items: center; gap: 8px; font-weight: 600; color: #102A57; font-size: 13.5px;">
						<span style="width: 8px; height: 8px; background: #10B981; border-radius: 50%; display: inline-block;"></span>
						<?php echo esc_html( $mob_user->display_name ); ?>
					</span>
					<span style="font-size: 10.5px; font-weight: 700; text-transform: uppercase; background: #2563EB; color: #fff; padding: 2px 8px; border-radius: 9999px;">
						<?php echo esc_html( $mob_badge ); ?>
					</span>
				</div>
				<div style="display: flex; gap: 8px; flex-wrap: wrap;">
					<?php if ( $mob_is_admin ) : ?>
					<button type="button" class="btn-fast-edit-section" data-section="global" style="flex: 1 1 100%; text-align: center; padding: 8px 12px; background: #FF851A; border: none; border-radius: 6px; font-size: 12.5px; font-weight: 700; color: #FFFFFF; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 6px;">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
						<span>Edit Top Bar & Contact Info</span>
					</button>
					<a href="<?php echo esc_url( admin_url() ); ?>" style="flex: 1; text-align: center; padding: 8px 12px; background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 6px; font-size: 12.5px; font-weight: 600; color: #102A57; text-decoration: none;">
						WP Admin
					</a>
					<?php endif; ?>
					<a href="<?php echo esc_url( home_url( '/login/' ) ); ?>" style="flex: 1; text-align: center; padding: 8px 12px; background: #FFFFFF; border: 1px solid #CBD5E1; border-radius: 6px; font-size: 12.5px; font-weight: 600; color: #102A57; text-decoration: none;">
						Portal
					</a>
					<a href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>" style="flex: 1; text-align: center; padding: 8px 12px; background: #FEE2E2; border: 1px solid #FCA5A5; border-radius: 6px; font-size: 12.5px; font-weight: 600; color: #DC2626; text-decoration: none;">
						Log Out
					</a>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</header>
