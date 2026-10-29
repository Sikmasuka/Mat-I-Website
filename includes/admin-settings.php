<?php
/**
 * CMS Admin Settings Pages & Settings API Registration
 *
 * Provides a dedicated WordPress Admin dashboard page under "MAT-I Theme Settings"
 * with tabs for Global/Contact, Hero Banner, Core Values, Principal, and Admissions.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register top-level admin menu page.
 */
function mat_i_register_admin_menu() {
	add_menu_page(
		__( 'MAT-I Theme Settings', 'mat-i' ),
		__( 'Theme Settings', 'mat-i' ),
		'manage_options',
		'mat-i-theme-settings',
		'mat_i_render_theme_settings_page',
		'dashicons-admin-generic',
		59
	);
}
add_action( 'admin_menu', 'mat_i_register_admin_menu' );

/**
 * Register settings and sanitize callbacks using WordPress Settings API.
 */
function mat_i_register_settings() {
	register_setting( 'mat_i_global_group', 'mat_i_global_settings', array(
		'type'              => 'array',
		'sanitize_callback' => 'mat_i_sanitize_global_settings',
		'default'           => array(),
	) );

	register_setting( 'mat_i_hero_group', 'mat_i_hero_settings', array(
		'type'              => 'array',
		'sanitize_callback' => 'mat_i_sanitize_hero_settings',
		'default'           => array(),
	) );

	register_setting( 'mat_i_core_values_group', 'mat_i_core_values', array(
		'type'              => 'array',
		'sanitize_callback' => 'mat_i_sanitize_core_values_settings',
		'default'           => array(),
	) );

	register_setting( 'mat_i_principal_group', 'mat_i_principal_settings', array(
		'type'              => 'array',
		'sanitize_callback' => 'mat_i_sanitize_principal_settings',
		'default'           => array(),
	) );

	register_setting( 'mat_i_admissions_group', 'mat_i_admissions_settings', array(
		'type'              => 'array',
		'sanitize_callback' => 'mat_i_sanitize_admissions_settings',
		'default'           => array(),
	) );
}
add_action( 'admin_init', 'mat_i_register_settings' );

/**
 * Enqueue WP Media Uploader and admin styling on Theme Settings page.
 */
function mat_i_admin_enqueue_assets( $hook ) {
	if ( 'toplevel_page_mat-i-theme-settings' !== $hook ) {
		return;
	}
	wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'mat_i_admin_enqueue_assets' );

/**
 * Sanitize Global Settings.
 */
function mat_i_sanitize_global_settings( $input ) {
	$clean = array();
	$clean['school_name']     = sanitize_text_field( $input['school_name'] ?? '' );
	$clean['deped_subtitle']  = sanitize_text_field( $input['deped_subtitle'] ?? '' );
	$clean['division_region'] = sanitize_text_field( $input['division_region'] ?? '' );
	$clean['phone']           = sanitize_text_field( $input['phone'] ?? '' );
	$clean['email']           = sanitize_email( $input['email'] ?? '' );
	$clean['office_hours']    = sanitize_text_field( $input['office_hours'] ?? '' );
	$clean['campus_address']  = sanitize_text_field( $input['campus_address'] ?? '' );
	$clean['map_embed_url']   = esc_url_raw( $input['map_embed_url'] ?? '' );
	$clean['facebook_url']    = esc_url_raw( $input['facebook_url'] ?? '' );
	$clean['twitter_url']     = esc_url_raw( $input['twitter_url'] ?? '' );
	$clean['instagram_url']   = esc_url_raw( $input['instagram_url'] ?? '' );
	$clean['youtube_url']     = esc_url_raw( $input['youtube_url'] ?? '' );
	$clean['footer_about']    = sanitize_textarea_field( $input['footer_about'] ?? '' );
	$clean['copyright_text']  = sanitize_text_field( $input['copyright_text'] ?? '' );
	return $clean;
}

/**
 * Sanitize Hero Settings.
 */
function mat_i_sanitize_hero_settings( $input ) {
	$clean = array();
	$clean['badge']        = sanitize_text_field( $input['badge'] ?? '' );
	$clean['headline']     = sanitize_textarea_field( $input['headline'] ?? '' );
	$clean['paragraph']    = sanitize_textarea_field( $input['paragraph'] ?? '' );
	$clean['banner_image'] = esc_url_raw( $input['banner_image'] ?? '' );
	$clean['seal_badge']   = sanitize_text_field( $input['seal_badge'] ?? '' );
	$clean['cta1_text']    = sanitize_text_field( $input['cta1_text'] ?? '' );
	$clean['cta1_link']    = esc_url_raw( $input['cta1_link'] ?? '' );
	$clean['cta2_text']    = sanitize_text_field( $input['cta2_text'] ?? '' );
	$clean['cta2_link']    = esc_url_raw( $input['cta2_link'] ?? '' );
	$clean['cta3_text']    = sanitize_text_field( $input['cta3_text'] ?? '' );
	$clean['cta3_link']    = esc_url_raw( $input['cta3_link'] ?? '' );
	$clean['stat1_number'] = sanitize_text_field( $input['stat1_number'] ?? '' );
	$clean['stat1_label']  = sanitize_text_field( $input['stat1_label'] ?? '' );
	$clean['stat2_number'] = sanitize_text_field( $input['stat2_number'] ?? '' );
	$clean['stat2_label']  = sanitize_text_field( $input['stat2_label'] ?? '' );
	$clean['stat3_number'] = sanitize_text_field( $input['stat3_number'] ?? '' );
	$clean['stat3_label']  = sanitize_text_field( $input['stat3_label'] ?? '' );
	return $clean;
}

/**
 * Sanitize Core Values Settings.
 */
function mat_i_sanitize_core_values_settings( $input ) {
	$clean = array();
	$clean['badge']       = sanitize_text_field( $input['badge'] ?? '' );
	$clean['heading']     = sanitize_text_field( $input['heading'] ?? '' );
	$clean['description'] = sanitize_textarea_field( $input['description'] ?? '' );
	$clean['links_label'] = sanitize_text_field( $input['links_label'] ?? '' );

	$clean['values'] = array();
	if ( ! empty( $input['values'] ) && is_array( $input['values'] ) ) {
		foreach ( $input['values'] as $v ) {
			$clean['values'][] = array(
				'key'   => sanitize_key( $v['key'] ?? '' ),
				'title' => sanitize_text_field( $v['title'] ?? '' ),
				'desc'  => sanitize_textarea_field( $v['desc'] ?? '' ),
			);
		}
	}

	$clean['links'] = array();
	if ( ! empty( $input['links'] ) && is_array( $input['links'] ) ) {
		foreach ( $input['links'] as $l ) {
			$clean['links'][] = array(
				'label' => sanitize_text_field( $l['label'] ?? '' ),
				'url'   => esc_url_raw( $l['url'] ?? '' ),
			);
		}
	}
	return $clean;
}

/**
 * Sanitize Principal Settings.
 */
function mat_i_sanitize_principal_settings( $input ) {
	$clean = array();
	$clean['badge']     = sanitize_text_field( $input['badge'] ?? '' );
	$clean['name']      = sanitize_text_field( $input['name'] ?? '' );
	$clean['title']     = sanitize_text_field( $input['title'] ?? '' );
	$clean['division']  = sanitize_text_field( $input['division'] ?? '' );
	$clean['heading']   = sanitize_text_field( $input['heading'] ?? '' );
	$clean['quote']     = sanitize_textarea_field( $input['quote'] ?? '' );
	$clean['image']     = esc_url_raw( $input['image'] ?? '' );
	$clean['btn1_text'] = sanitize_text_field( $input['btn1_text'] ?? '' );
	$clean['btn1_link'] = esc_url_raw( $input['btn1_link'] ?? '' );
	$clean['btn2_text'] = sanitize_text_field( $input['btn2_text'] ?? '' );
	$clean['btn2_link'] = esc_url_raw( $input['btn2_link'] ?? '' );
	return $clean;
}

/**
 * Sanitize Admissions Settings.
 */
function mat_i_sanitize_admissions_settings( $input ) {
	$clean = array();
	$clean['badge']         = sanitize_text_field( $input['badge'] ?? '' );
	$clean['title']         = sanitize_text_field( $input['title'] ?? '' );
	$clean['description']   = sanitize_textarea_field( $input['description'] ?? '' );
	$clean['image_url']     = esc_url_raw( $input['image_url'] ?? '' );
	$clean['beef_form_url'] = esc_url_raw( $input['beef_form_url'] ?? '' );

	$clean['steps'] = array();
	if ( ! empty( $input['steps'] ) && is_array( $input['steps'] ) ) {
		foreach ( $input['steps'] as $idx => $s ) {
			$clean['steps'][] = array(
				'num'   => sanitize_text_field( $s['num'] ?? ( $idx + 1 ) ),
				'title' => sanitize_text_field( $s['title'] ?? '' ),
				'desc'  => sanitize_textarea_field( $s['desc'] ?? '' ),
			);
		}
	}
	return $clean;
}

/**
 * Render Theme Settings Dashboard Page.
 */
function mat_i_render_theme_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$active_tab = isset( $_GET['tab'] ) ? sanitize_key( $_GET['tab'] ) : 'global';
	?>
	<div class="wrap" style="max-width: 1080px; margin-top: 1.5rem;">
		<h1 style="display: flex; align-items: center; gap: 10px; font-weight: 700;">
			<span><?php esc_html_e( 'MAT-I National High School — Theme Settings', 'mat-i' ); ?></span>
		</h1>
		<p style="color: #64748B; font-size: 14px; margin-bottom: 1.5rem;">
			<?php esc_html_e( 'Manage site-wide content, contact details, hero banner, core values, leadership quote, and admissions.', 'mat-i' ); ?>
		</p>

		<!-- Tabs -->
		<nav class="nav-tab-wrapper wp-clearfix">
			<a href="?page=mat-i-theme-settings&tab=global" class="nav-tab <?php echo 'global' === $active_tab ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Global & Contact', 'mat-i' ); ?>
			</a>
			<a href="?page=mat-i-theme-settings&tab=hero" class="nav-tab <?php echo 'hero' === $active_tab ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Hero Banner', 'mat-i' ); ?>
			</a>
			<a href="?page=mat-i-theme-settings&tab=core_values" class="nav-tab <?php echo 'core_values' === $active_tab ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'DepEd Core Values', 'mat-i' ); ?>
			</a>
			<a href="?page=mat-i-theme-settings&tab=principal" class="nav-tab <?php echo 'principal' === $active_tab ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Principal & Leadership', 'mat-i' ); ?>
			</a>
			<a href="?page=mat-i-theme-settings&tab=admissions" class="nav-tab <?php echo 'admissions' === $active_tab ? 'nav-tab-active' : ''; ?>">
				<?php esc_html_e( 'Admissions & Pathway', 'mat-i' ); ?>
			</a>
		</nav>

		<div style="background: #FFFFFF; padding: 2rem; border: 1px solid #CCD0D4; border-top: none; box-shadow: 0 1px 1px rgba(0,0,0,.04);">
			<?php if ( 'global' === $active_tab ) : ?>
				<?php
				$global = get_option( 'mat_i_global_settings', array() );
				?>
				<form method="post" action="options.php">
					<?php settings_fields( 'mat_i_global_group' ); ?>
					<h2><?php esc_html_e( 'Global Information & Contact Bar', 'mat-i' ); ?></h2>
					<table class="form-table" role="presentation">
						<tr>
							<th scope="row"><label for="school_name"><?php esc_html_e( 'School Name', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[school_name]" type="text" id="school_name" value="<?php echo esc_attr( $global['school_name'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="deped_subtitle"><?php esc_html_e( 'DepEd Subtitle', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[deped_subtitle]" type="text" id="deped_subtitle" value="<?php echo esc_attr( $global['deped_subtitle'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="division_region"><?php esc_html_e( 'Division & Region', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[division_region]" type="text" id="division_region" value="<?php echo esc_attr( $global['division_region'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="phone"><?php esc_html_e( 'Telephone / Mobile', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[phone]" type="text" id="phone" value="<?php echo esc_attr( $global['phone'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="email"><?php esc_html_e( 'DepEd Email', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[email]" type="email" id="email" value="<?php echo esc_attr( $global['email'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="office_hours"><?php esc_html_e( 'Office Hours', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[office_hours]" type="text" id="office_hours" value="<?php echo esc_attr( $global['office_hours'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="campus_address"><?php esc_html_e( 'Campus Address', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[campus_address]" type="text" id="campus_address" value="<?php echo esc_attr( $global['campus_address'] ?? '' ); ?>" class="large-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="map_embed_url"><?php esc_html_e( 'Google Maps Embed URL', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[map_embed_url]" type="url" id="map_embed_url" value="<?php echo esc_attr( $global['map_embed_url'] ?? '' ); ?>" class="large-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="facebook_url"><?php esc_html_e( 'Facebook URL', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[facebook_url]" type="url" id="facebook_url" value="<?php echo esc_attr( $global['facebook_url'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="twitter_url"><?php esc_html_e( 'Twitter / X URL', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[twitter_url]" type="url" id="twitter_url" value="<?php echo esc_attr( $global['twitter_url'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="instagram_url"><?php esc_html_e( 'Instagram URL', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[instagram_url]" type="url" id="instagram_url" value="<?php echo esc_attr( $global['instagram_url'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="youtube_url"><?php esc_html_e( 'YouTube URL', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[youtube_url]" type="url" id="youtube_url" value="<?php echo esc_attr( $global['youtube_url'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="footer_about"><?php esc_html_e( 'Footer Bio / About', 'mat-i' ); ?></label></th>
							<td><textarea name="mat_i_global_settings[footer_about]" id="footer_about" rows="3" class="large-text"><?php echo esc_textarea( $global['footer_about'] ?? '' ); ?></textarea></td>
						</tr>
						<tr>
							<th scope="row"><label for="copyright_text"><?php esc_html_e( 'Copyright Line', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_global_settings[copyright_text]" type="text" id="copyright_text" value="<?php echo esc_attr( $global['copyright_text'] ?? '' ); ?>" class="large-text"></td>
						</tr>
					</table>
					<?php submit_button( __( 'Save Global Settings', 'mat-i' ) ); ?>
				</form>

			<?php elseif ( 'hero' === $active_tab ) : ?>
				<?php
				$hero = get_option( 'mat_i_hero_settings', array() );
				?>
				<form method="post" action="options.php">
					<?php settings_fields( 'mat_i_hero_group' ); ?>
					<h2><?php esc_html_e( 'Section 1 — Hero Banner Settings', 'mat-i' ); ?></h2>
					<table class="form-table" role="presentation">
						<tr>
							<th scope="row"><label for="hero_badge"><?php esc_html_e( 'Top Badge Pill', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_hero_settings[badge]" type="text" id="hero_badge" value="<?php echo esc_attr( $hero['badge'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="hero_headline"><?php esc_html_e( 'Headline', 'mat-i' ); ?></label></th>
							<td>
								<textarea name="mat_i_hero_settings[headline]" id="hero_headline" rows="2" class="large-text"><?php echo esc_textarea( $hero['headline'] ?? '' ); ?></textarea>
								<p class="description"><?php esc_html_e( 'Enter multi-line text if needed.', 'mat-i' ); ?></p>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="hero_paragraph"><?php esc_html_e( 'Lead Paragraph', 'mat-i' ); ?></label></th>
							<td><textarea name="mat_i_hero_settings[paragraph]" id="hero_paragraph" rows="4" class="large-text"><?php echo esc_textarea( $hero['paragraph'] ?? '' ); ?></textarea></td>
						</tr>
						<tr>
							<th scope="row"><label for="hero_banner_image"><?php esc_html_e( 'Banner Image URL', 'mat-i' ); ?></label></th>
							<td>
								<input name="mat_i_hero_settings[banner_image]" type="text" id="hero_banner_image" value="<?php echo esc_attr( $hero['banner_image'] ?? '' ); ?>" class="large-text">
								<button type="button" class="button mat-i-media-upload-btn" data-target="#hero_banner_image"><?php esc_html_e( 'Select / Upload Image', 'mat-i' ); ?></button>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="hero_seal_badge"><?php esc_html_e( 'Seal Pill Badge', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_hero_settings[seal_badge]" type="text" id="hero_seal_badge" value="<?php echo esc_attr( $hero['seal_badge'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Primary Button (CTA 1)', 'mat-i' ); ?></th>
							<td>
								<input name="mat_i_hero_settings[cta1_text]" type="text" placeholder="Button Label" value="<?php echo esc_attr( $hero['cta1_text'] ?? '' ); ?>" class="regular-text">
								<input name="mat_i_hero_settings[cta1_link]" type="text" placeholder="#enroll or URL" value="<?php echo esc_attr( $hero['cta1_link'] ?? '' ); ?>" class="regular-text">
							</td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Secondary Button (CTA 2)', 'mat-i' ); ?></th>
							<td>
								<input name="mat_i_hero_settings[cta2_text]" type="text" placeholder="Button Label" value="<?php echo esc_attr( $hero['cta2_text'] ?? '' ); ?>" class="regular-text">
								<input name="mat_i_hero_settings[cta2_link]" type="text" placeholder="#programs or URL" value="<?php echo esc_attr( $hero['cta2_link'] ?? '' ); ?>" class="regular-text">
							</td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Tertiary Button (CTA 3)', 'mat-i' ); ?></th>
							<td>
								<input name="mat_i_hero_settings[cta3_text]" type="text" placeholder="Button Label" value="<?php echo esc_attr( $hero['cta3_text'] ?? '' ); ?>" class="regular-text">
								<input name="mat_i_hero_settings[cta3_link]" type="text" placeholder="URL" value="<?php echo esc_attr( $hero['cta3_link'] ?? '' ); ?>" class="regular-text">
							</td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Statistics Strip', 'mat-i' ); ?></th>
							<td>
								<div style="display: flex; gap: 10px; margin-bottom: 8px;">
									<input name="mat_i_hero_settings[stat1_number]" type="text" placeholder="1980" value="<?php echo esc_attr( $hero['stat1_number'] ?? '' ); ?>" style="width: 120px;">
									<input name="mat_i_hero_settings[stat1_label]" type="text" placeholder="Year Established" value="<?php echo esc_attr( $hero['stat1_label'] ?? '' ); ?>" class="regular-text">
								</div>
								<div style="display: flex; gap: 10px; margin-bottom: 8px;">
									<input name="mat_i_hero_settings[stat2_number]" type="text" placeholder="Grades 7–12" value="<?php echo esc_attr( $hero['stat2_number'] ?? '' ); ?>" style="width: 120px;">
									<input name="mat_i_hero_settings[stat2_label]" type="text" placeholder="Junior & Senior High" value="<?php echo esc_attr( $hero['stat2_label'] ?? '' ); ?>" class="regular-text">
								</div>
								<div style="display: flex; gap: 10px;">
									<input name="mat_i_hero_settings[stat3_number]" type="text" placeholder="2 Tracks" value="<?php echo esc_attr( $hero['stat3_number'] ?? '' ); ?>" style="width: 120px;">
									<input name="mat_i_hero_settings[stat3_label]" type="text" placeholder="Academic · Tech-Pro" value="<?php echo esc_attr( $hero['stat3_label'] ?? '' ); ?>" class="regular-text">
								</div>
							</td>
						</tr>
					</table>
					<?php submit_button( __( 'Save Hero Settings', 'mat-i' ) ); ?>
				</form>

			<?php elseif ( 'core_values' === $active_tab ) : ?>
				<?php
				$cv = get_option( 'mat_i_core_values', array() );
				?>
				<form method="post" action="options.php">
					<?php settings_fields( 'mat_i_core_values_group' ); ?>
					<h2><?php esc_html_e( 'Section 2 — DepEd Core Values', 'mat-i' ); ?></h2>
					<table class="form-table" role="presentation">
						<tr>
							<th scope="row"><label for="cv_badge"><?php esc_html_e( 'Header Sub-Badge', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_core_values[badge]" type="text" id="cv_badge" value="<?php echo esc_attr( $cv['badge'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="cv_heading"><?php esc_html_e( 'Section Title', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_core_values[heading]" type="text" id="cv_heading" value="<?php echo esc_attr( $cv['heading'] ?? '' ); ?>" class="large-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="cv_desc"><?php esc_html_e( 'Description', 'mat-i' ); ?></label></th>
							<td><textarea name="mat_i_core_values[description]" id="cv_desc" rows="3" class="large-text"><?php echo esc_textarea( $cv['description'] ?? '' ); ?></textarea></td>
						</tr>
					</table>

					<h3><?php esc_html_e( 'The 4 DepEd Core Values', 'mat-i' ); ?></h3>
					<?php
					$values = $cv['values'] ?? array();
					for ( $i = 0; $i < 4; $i++ ) :
						$val = $values[ $i ] ?? array();
					?>
						<div style="background: #F8FAFC; border: 1px solid #E2E8F0; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
							<div style="font-weight: 700; margin-bottom: 0.5rem; color: #102A57;">
								<?php echo esc_html( sprintf( __( 'Pillar %d', 'mat-i' ), $i + 1 ) ); ?>
							</div>
							<div style="display: grid; grid-template-columns: 200px 1fr; gap: 10px;">
								<input name="mat_i_core_values[values][<?php echo $i; ?>][title]" type="text" placeholder="Title" value="<?php echo esc_attr( $val['title'] ?? '' ); ?>">
								<input name="mat_i_core_values[values][<?php echo $i; ?>][desc]" type="text" placeholder="Description" value="<?php echo esc_attr( $val['desc'] ?? '' ); ?>" class="large-text">
								<input type="hidden" name="mat_i_core_values[values][<?php echo $i; ?>][key]" value="<?php echo esc_attr( $val['key'] ?? ( 'val_' . $i ) ); ?>">
							</div>
						</div>
					<?php endfor; ?>

					<?php submit_button( __( 'Save Core Values', 'mat-i' ) ); ?>
				</form>

			<?php elseif ( 'principal' === $active_tab ) : ?>
				<?php
				$pr = get_option( 'mat_i_principal_settings', array() );
				?>
				<form method="post" action="options.php">
					<?php settings_fields( 'mat_i_principal_group' ); ?>
					<h2><?php esc_html_e( 'Section 5 — Principal & Leadership Spotlight', 'mat-i' ); ?></h2>
					<table class="form-table" role="presentation">
						<tr>
							<th scope="row"><label for="pr_badge"><?php esc_html_e( 'Sub-Badge', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_principal_settings[badge]" type="text" id="pr_badge" value="<?php echo esc_attr( $pr['badge'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="pr_name"><?php esc_html_e( 'Principal Full Name', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_principal_settings[name]" type="text" id="pr_name" value="<?php echo esc_attr( $pr['name'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="pr_title"><?php esc_html_e( 'Official Designation', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_principal_settings[title]" type="text" id="pr_title" value="<?php echo esc_attr( $pr['title'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="pr_division"><?php esc_html_e( 'Division Tagline', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_principal_settings[division]" type="text" id="pr_division" value="<?php echo esc_attr( $pr['division'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="pr_heading"><?php esc_html_e( 'Message Headline', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_principal_settings[heading]" type="text" id="pr_heading" value="<?php echo esc_attr( $pr['heading'] ?? '' ); ?>" class="large-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="pr_quote"><?php esc_html_e( 'Welcome Quote', 'mat-i' ); ?></label></th>
							<td><textarea name="mat_i_principal_settings[quote]" id="pr_quote" rows="4" class="large-text"><?php echo esc_textarea( $pr['quote'] ?? '' ); ?></textarea></td>
						</tr>
						<tr>
							<th scope="row"><label for="pr_image"><?php esc_html_e( 'Seal / Photo URL', 'mat-i' ); ?></label></th>
							<td>
								<input name="mat_i_principal_settings[image]" type="text" id="pr_image" value="<?php echo esc_attr( $pr['image'] ?? '' ); ?>" class="large-text">
								<button type="button" class="button mat-i-media-upload-btn" data-target="#pr_image"><?php esc_html_e( 'Select / Upload Image', 'mat-i' ); ?></button>
							</td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Action Button 1', 'mat-i' ); ?></th>
							<td>
								<input name="mat_i_principal_settings[btn1_text]" type="text" placeholder="Label" value="<?php echo esc_attr( $pr['btn1_text'] ?? '' ); ?>" class="regular-text">
								<input name="mat_i_principal_settings[btn1_link]" type="text" placeholder="URL" value="<?php echo esc_attr( $pr['btn1_link'] ?? '' ); ?>" class="regular-text">
							</td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Action Button 2', 'mat-i' ); ?></th>
							<td>
								<input name="mat_i_principal_settings[btn2_text]" type="text" placeholder="Label" value="<?php echo esc_attr( $pr['btn2_text'] ?? '' ); ?>" class="regular-text">
								<input name="mat_i_principal_settings[btn2_link]" type="text" placeholder="URL" value="<?php echo esc_attr( $pr['btn2_link'] ?? '' ); ?>" class="regular-text">
							</td>
						</tr>
					</table>
					<?php submit_button( __( 'Save Principal Settings', 'mat-i' ) ); ?>
				</form>

			<?php elseif ( 'admissions' === $active_tab ) : ?>
				<?php
				$adm = get_option( 'mat_i_admissions_settings', array() );
				?>
				<form method="post" action="options.php">
					<?php settings_fields( 'mat_i_admissions_group' ); ?>
					<h2><?php esc_html_e( 'Section 7 — Admissions & 4-Step Pathway', 'mat-i' ); ?></h2>
					<table class="form-table" role="presentation">
						<tr>
							<th scope="row"><label for="adm_badge"><?php esc_html_e( 'Badge', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_admissions_settings[badge]" type="text" id="adm_badge" value="<?php echo esc_attr( $adm['badge'] ?? '' ); ?>" class="regular-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="adm_title"><?php esc_html_e( 'Headline', 'mat-i' ); ?></label></th>
							<td><input name="mat_i_admissions_settings[title]" type="text" id="adm_title" value="<?php echo esc_attr( $adm['title'] ?? '' ); ?>" class="large-text"></td>
						</tr>
						<tr>
							<th scope="row"><label for="adm_desc"><?php esc_html_e( 'Intro Paragraph', 'mat-i' ); ?></label></th>
							<td><textarea name="mat_i_admissions_settings[description]" id="adm_desc" rows="3" class="large-text"><?php echo esc_textarea( $adm['description'] ?? '' ); ?></textarea></td>
						</tr>
						<tr>
							<th scope="row"><label for="adm_image_url"><?php esc_html_e( 'Side Image URL', 'mat-i' ); ?></label></th>
							<td>
								<input name="mat_i_admissions_settings[image_url]" type="text" id="adm_image_url" value="<?php echo esc_attr( $adm['image_url'] ?? '' ); ?>" class="large-text">
								<button type="button" class="button mat-i-media-upload-btn" data-target="#adm_image_url"><?php esc_html_e( 'Select / Upload Image', 'mat-i' ); ?></button>
							</td>
						</tr>
					</table>

					<h3><?php esc_html_e( '4-Step Enrollment Process', 'mat-i' ); ?></h3>
					<?php
					$steps = $adm['steps'] ?? array();
					for ( $s = 0; $s < 4; $s++ ) :
						$step = $steps[ $s ] ?? array();
					?>
						<div style="background: #F8FAFC; border: 1px solid #E2E8F0; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
							<div style="font-weight: 700; margin-bottom: 0.5rem; color: #102A57;">
								<?php echo esc_html( sprintf( __( 'Step %d', 'mat-i' ), $s + 1 ) ); ?>
							</div>
							<div style="display: grid; grid-template-columns: 80px 220px 1fr; gap: 10px;">
								<input name="mat_i_admissions_settings[steps][<?php echo $s; ?>][num]" type="text" placeholder="1" value="<?php echo esc_attr( $step['num'] ?? ( $s + 1 ) ); ?>">
								<input name="mat_i_admissions_settings[steps][<?php echo $s; ?>][title]" type="text" placeholder="Step Title" value="<?php echo esc_attr( $step['title'] ?? '' ); ?>">
								<input name="mat_i_admissions_settings[steps][<?php echo $s; ?>][desc]" type="text" placeholder="Description" value="<?php echo esc_attr( $step['desc'] ?? '' ); ?>">
							</div>
						</div>
					<?php endfor; ?>

					<?php submit_button( __( 'Save Admissions Settings', 'mat-i' ) ); ?>
				</form>
			<?php endif; ?>
		</div>
	</div>

	<script>
	jQuery(document).ready(function($){
		$('.mat-i-media-upload-btn').on('click', function(e){
			e.preventDefault();
			var targetInput = $(this).data('target');
			var mediaUploader = wp.media({
				title: 'Select Image',
				button: { text: 'Use this Image' },
				multiple: false
			}).on('select', function() {
				var attachment = mediaUploader.state().get('selection').first().toJSON();
				$(targetInput).val(attachment.url);
			}).open();
		});
	});
	</script>
	<?php
}
