<?php
/**
 * The template for displaying the footer of MAT-I National High School
 *
 * @package Mat-I
 */

?>
<?php
$mat_i_global  = get_option( 'mat_i_global_settings', array() );
$mat_i_phone   = ! empty( $mat_i_global['phone'] ) ? $mat_i_global['phone'] : '09606255099';
$mat_i_email   = ! empty( $mat_i_global['email'] ) ? $mat_i_global['email'] : 'mat-i.nhs@deped.gov.ph';
$mat_i_hours   = ! empty( $mat_i_global['office_hours'] ) ? $mat_i_global['office_hours'] : 'Monday–Friday: 8:00 AM – 5:00 PM';
$mat_i_address = ! empty( $mat_i_global['campus_address'] ) ? $mat_i_global['campus_address'] : 'Mat-I, Claveria, Misamis Oriental, 9004 Philippines';
$mat_i_about   = ! empty( $mat_i_global['footer_about'] ) ? $mat_i_global['footer_about'] : 'Providing holistic secondary education to empower young minds towards academic competence, moral integrity, and community empowerment.';
$mat_i_map_url = ! empty( $mat_i_global['map_embed_url'] ) ? $mat_i_global['map_embed_url'] : 'https://maps.google.com/maps?q=Mat-i%20National%20High%20School&t=&z=15&ie=UTF8&iwloc=&output=embed';
$mat_i_copy    = ! empty( $mat_i_global['copyright_text'] ) ? $mat_i_global['copyright_text'] : '© ' . gmdate( 'Y' ) . ' MAT-I National High School. All Rights Reserved.';
?>
<!-- SECTION 12 — FOOTER -->
<footer id="contact" class="footer-light-bg">
	<div class="container">
		<div class="footer-4col-grid">
			<!-- Col 1 – Brand & Logo -->	
			<div>
				<div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 1rem;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>" alt="MAT-I National High School Logo" style="width: 75px; height: 75px; object-fit: contain; flex-shrink: 0;">
					<div>
						<div style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 700; color: #102A57; line-height: 1.25;">MAT-I National High School</div>
						<div style="font-size: 11px; font-weight: 700; color: #FF851A; margin-top: 2px;">Department of Education</div>
					</div>
				</div>
				<p style="color: #475569; font-size: 13px; margin-bottom: 1.25rem; line-height: 1.6;" id="footerAboutText">
					<?php echo esc_html( $mat_i_about ); ?>
				</p>
				<div style="display: inline-flex; align-items: center; gap: 6px; background: #F1F5F9; border: 1px solid #CBD5E1; padding: 4px 10px; border-radius: 6px; font-size: 11.5px; font-weight: 600; color: #102A57;">
					<span>Region X · Division of Misamis Oriental</span>
				</div>
			</div>

			<!-- Col 2 – Quick Links -->
			<div>
				<h3 class="footer-heading">Quick Links</h3>
				<ul class="footer-quick-links">
					<li><a href="<?php echo esc_url( home_url( '/#enroll' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> Admissions & Enrollment</a></li>
					<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> Academic Programs (Grades 7–12)</a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> School Services & Charter</a></li>
					<li><a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> Vision, Mission & Values</a></li>
					<li><a href="<?php echo esc_url( home_url( '/history/' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> History & Heritage</a></li>
					<li><a href="<?php echo esc_url( home_url( '/organigram/' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> Faculty & Staff Directory</a></li>
					<li><a href="<?php echo esc_url( home_url( '/school-logo/' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> School Seal & Symbolism</a></li>
					<li><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> Campus Photo Gallery</a></li>
					<li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="footer-link-item"><span style="color: #FF851A;">›</span> News & Announcements</a></li>
				</ul>
			</div>

			<!-- Col 3 – Contact Us -->
			<div>
				<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
					<h3 class="footer-heading" style="margin-bottom: 0;">Contact Us</h3>
					<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
						<button type="button" class="btn-fast-edit-section" data-section="global" title="Edit Contact Details" style="background: rgba(16,42,87,0.08); border: 1px solid rgba(16,42,87,0.2); color: #102A57; font-size: 11px; font-weight: 700; padding: 2px 7px; border-radius: 4px; cursor: pointer; display: inline-flex; align-items: center; gap: 3px;">
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
							<span>Edit</span>
						</button>
					<?php endif; ?>
				</div>
				<div style="display: flex; flex-direction: column; gap: 0.95rem;">
					<div class="footer-contact-item">
						<div class="footer-contact-icon">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div>
							<div class="footer-contact-label">CAMPUS ADDRESS</div>
							<div class="footer-contact-val" id="footerAddress"><?php echo esc_html( $mat_i_address ); ?></div>
						</div>
					</div>

					<div class="footer-contact-item">
						<div class="footer-contact-icon">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						</div>
						<div>
							<div class="footer-contact-label">TELEPHONE / MOBILE</div>
							<div class="footer-contact-val" id="footerPhone"><?php echo esc_html( $mat_i_phone ); ?></div>
						</div>
					</div>

					<div class="footer-contact-item">
						<div class="footer-contact-icon">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						</div>
						<div>
							<div class="footer-contact-label">DEPED EMAIL</div>
							<div class="footer-contact-val" id="footerEmail"><?php echo esc_html( $mat_i_email ); ?></div>
						</div>
					</div>

					<div class="footer-contact-item">
						<div class="footer-contact-icon">
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						</div>
						<div>
							<div class="footer-contact-label">OFFICE HOURS</div>
							<div class="footer-contact-val" id="footerHours"><?php echo esc_html( $mat_i_hours ); ?></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Col 4 – Find Us -->
			<div>
				<h3 class="footer-heading">Location & Map</h3>
				<!-- Embedded Google Maps -->
				<iframe class="footer-map-frame" src="<?php echo esc_url( $mat_i_map_url ); ?>" loading="lazy" aria-label="Mat-i National High School Location Map"></iframe>
				<a href="https://www.google.com/maps/place/Mat-i+National+High+School/data=!4m2!3m1!1s0x0:0x732b554d1ed36021?sa=X&ved=1t:2428&ictx=111" target="_blank" rel="noopener noreferrer" style="color: #FF851A; font-size: 11.5px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 4px; margin-top: 0.5rem;">
					<span>Open in Google Maps</span>
					<span>&rarr;</span>
				</a>
			</div>
		</div>

		<!-- Footer Bottom Bar -->
		<div class="footer-bottom-bar">
			<div id="footerCopyText">
				<a href="<?php echo esc_url( home_url( '/login/' ) ); ?>" style="color: inherit; text-decoration: none; cursor: default;" aria-label="Portal">©</a> <?php echo esc_html( preg_replace( '/^[©\s]+/u', '', $mat_i_copy ) ); ?>
			</div>
			<div class="footer-bottom-links" style="display: flex; gap: 1.25rem;">
				<a href="#">DepEd Portal</a>
				<a href="#">Transparency Seal</a>
				<a href="#">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>

<!-- FLOATING ACTION BUTTONS -->
<div class="floating-actions-wrap">
	<!-- Scroll to Top Button -->
	<button class="floating-btn-item scroll-top-btn" aria-label="Scroll to Top">
		<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"/></svg>
		<span class="floating-tooltip">Scroll to Top</span>
	</button>
</div>

<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	require_once get_template_directory() . '/template-parts/cms-fast-edit-modal.php';
}
?>

<?php wp_footer(); ?>
</body>
</html>
