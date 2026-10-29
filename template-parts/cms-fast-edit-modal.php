<?php
/**
 * Enhanced CMS Fast-Edit Front-End Modal
 *
 * Professional, clear, organized fast-edit modal with grouped card sections,
 * clear typography, field badges, helper hints, and integrated WordPress media picker.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! current_user_can( 'edit_theme_options' ) ) {
	return;
}

$hero_data       = get_option( 'mat_i_hero_settings', array() );
$core_values     = get_option( 'mat_i_core_values', array() );
$principal_data  = get_option( 'mat_i_principal_settings', array() );
$admissions_data = get_option( 'mat_i_admissions_settings', array() );
$global_data     = get_option( 'mat_i_global_settings', array() );
?>

<!-- MODAL: FAST-EDIT SECTION MODAL -->
<div id="sectionFastEditModal" class="mat-modal-backdrop hidden" aria-hidden="true" role="dialog">
	<div class="mat-modal-box fast-edit-modal-box" style="display: flex; flex-direction: column; max-height: 88vh;">
		
		<!-- Modal Header -->
		<div class="mat-modal-header" style="align-items: center; padding: 1.25rem 1.6rem; border-bottom: 1px solid #E2E8F0;">
			<div style="display: flex; align-items: center; gap: 12px;">
				<div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(255,133,26,0.12); color: #FF851A; display: flex; align-items: center; justify-content: center;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
				</div>
				<div>
					<span id="fastEditBadge" class="modal-dept-badge" style="background: #102A57;">Theme Fast-Edit</span>
					<h3 id="fastEditTitle" class="modal-title-text" style="font-size: 16px; margin-top: 2px;">Edit Section</h3>
				</div>
			</div>
			<button type="button" id="closeSectionFastEditModal" class="mat-modal-close" aria-label="Close modal">&times;</button>
		</div>

		<form id="sectionFastEditForm" style="display: flex; flex-direction: column; overflow: hidden; flex: 1;">
			<input type="hidden" id="fastEditSectionName" name="section" value="">
			
			<div class="mat-modal-body" id="fastEditBodyContainer" style="overflow-y: auto; padding: 1.4rem 1.6rem; display: flex; flex-direction: column; gap: 1.15rem;">
				
				<!-- ==========================================
				     1. HERO SECTION FORM
				     ========================================== -->
				<div class="fast-edit-group hidden" id="fastEditGroup_hero">
					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>1. Main Headline & Content</span>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Top Badge Pill</label>
							<input type="text" name="badge" class="news-form-input" value="<?php echo esc_attr( $hero_data['badge'] ?? '' ); ?>">
							<span class="fast-edit-hint">Displays above the large headline.</span>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Hero Headline</label>
							<textarea name="headline" rows="2" class="news-form-textarea" style="font-size: 14px; font-weight: 600;"><?php echo esc_textarea( $hero_data['headline'] ?? '' ); ?></textarea>
							<span class="fast-edit-hint">Use Enter for line breaks.</span>
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Lead Paragraph</label>
							<textarea name="paragraph" rows="3" class="news-form-textarea"><?php echo esc_textarea( $hero_data['paragraph'] ?? '' ); ?></textarea>
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>2. Visual Banner & Image</span>
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Hero Slide Background Image</label>
							<div class="fast-edit-media-row">
								<input type="text" name="banner_image" id="fastEdit_hero_banner_image" class="news-form-input" value="<?php echo esc_attr( $hero_data['banner_image'] ?? '' ); ?>">
								<button type="button" class="btn-fast-media mat-i-pick-media-btn" data-target="#fastEdit_hero_banner_image">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
									<span>Choose Media</span>
								</button>
							</div>
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>3. Call to Action Buttons</span>
						</div>
						<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem; margin-bottom: 0.75rem;">
							<div class="form-field-group">
								<label class="news-form-label">Primary Button (CTA 1)</label>
								<input type="text" name="cta1_text" class="news-form-input" value="<?php echo esc_attr( $hero_data['cta1_text'] ?? '' ); ?>" placeholder="Button Label">
								<input type="text" name="cta1_link" class="news-form-input" style="margin-top: 5px;" value="<?php echo esc_attr( $hero_data['cta1_link'] ?? '' ); ?>" placeholder="URL or #enroll">
							</div>
							<div class="form-field-group">
								<label class="news-form-label">Secondary Button (CTA 2)</label>
								<input type="text" name="cta2_text" class="news-form-input" value="<?php echo esc_attr( $hero_data['cta2_text'] ?? '' ); ?>" placeholder="Button Label">
								<input type="text" name="cta2_link" class="news-form-input" style="margin-top: 5px;" value="<?php echo esc_attr( $hero_data['cta2_link'] ?? '' ); ?>" placeholder="URL or #programs">
							</div>
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Tertiary Button (CTA 3)</label>
							<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem;">
								<input type="text" name="cta3_text" class="news-form-input" value="<?php echo esc_attr( $hero_data['cta3_text'] ?? '' ); ?>" placeholder="Button Label">
								<input type="text" name="cta3_link" class="news-form-input" value="<?php echo esc_attr( $hero_data['cta3_link'] ?? '' ); ?>" placeholder="URL">
							</div>
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>4. Hero Statistics Strip</span>
						</div>
						<div style="display: grid; grid-template-columns: 90px 1fr; gap: 8px; margin-bottom: 6px;">
							<input type="text" name="stat1_number" class="news-form-input" value="<?php echo esc_attr( $hero_data['stat1_number'] ?? '' ); ?>" placeholder="1980" style="font-weight: 700; text-align: center;">
							<input type="text" name="stat1_label" class="news-form-input" value="<?php echo esc_attr( $hero_data['stat1_label'] ?? '' ); ?>" placeholder="Year Established">
						</div>
						<div style="display: grid; grid-template-columns: 90px 1fr; gap: 8px; margin-bottom: 6px;">
							<input type="text" name="stat2_number" class="news-form-input" value="<?php echo esc_attr( $hero_data['stat2_number'] ?? '' ); ?>" placeholder="Grades 7–12" style="font-weight: 700; text-align: center;">
							<input type="text" name="stat2_label" class="news-form-input" value="<?php echo esc_attr( $hero_data['stat2_label'] ?? '' ); ?>" placeholder="Junior & Senior High">
						</div>
						<div style="display: grid; grid-template-columns: 90px 1fr; gap: 8px;">
							<input type="text" name="stat3_number" class="news-form-input" value="<?php echo esc_attr( $hero_data['stat3_number'] ?? '' ); ?>" placeholder="2 Tracks" style="font-weight: 700; text-align: center;">
							<input type="text" name="stat3_label" class="news-form-input" value="<?php echo esc_attr( $hero_data['stat3_label'] ?? '' ); ?>" placeholder="Academic · Tech-Pro">
						</div>
					</div>
				</div>

				<!-- ==========================================
				     2. DEPED CORE VALUES FORM
				     ========================================== -->
				<div class="fast-edit-group hidden" id="fastEditGroup_core_values">
					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>Header Titles & Description</span>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Sub-Badge (Orange Pill)</label>
							<input type="text" name="badge" class="news-form-input" value="<?php echo esc_attr( $core_values['badge'] ?? '' ); ?>">
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Section Heading</label>
							<input type="text" name="heading" class="news-form-input" value="<?php echo esc_attr( $core_values['heading'] ?? '' ); ?>" style="font-weight: 600;">
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Intro Description</label>
							<textarea name="description" rows="2" class="news-form-textarea"><?php echo esc_textarea( $core_values['description'] ?? '' ); ?></textarea>
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>The 4 DepEd Institutional Pillars</span>
						</div>
						<?php
						$cv_list = $core_values['values'] ?? array();
						for ( $i = 0; $i < 4; $i++ ) :
							$cvi = $cv_list[ $i ] ?? array();
						?>
							<div style="background: #FFFFFF; border: 1px solid #CBD5E1; padding: 0.85rem; border-radius: 8px; margin-bottom: 0.65rem;">
								<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px;">
									<span style="font-weight: 700; font-size: 12px; color: #FF851A;">Pillar <?php echo $i + 1; ?></span>
									<span style="font-size: 11px; color: #64748B;">Core Value Card</span>
								</div>
								<input type="hidden" name="values[<?php echo $i; ?>][key]" value="<?php echo esc_attr( $cvi['key'] ?? ( 'val_' . $i ) ); ?>">
								<input type="text" name="values[<?php echo $i; ?>][title]" class="news-form-input" style="margin-bottom: 6px; font-weight: 600;" value="<?php echo esc_attr( $cvi['title'] ?? '' ); ?>" placeholder="Pillar Title (e.g. Maka-Diyos)">
								<textarea name="values[<?php echo $i; ?>][desc]" rows="2" class="news-form-textarea" placeholder="Pillar explanation or moral principle..."><?php echo esc_textarea( $cvi['desc'] ?? '' ); ?></textarea>
							</div>
						<?php endfor; ?>
					</div>
				</div>

				<!-- ==========================================
				     3. PRINCIPAL & LEADERSHIP FORM
				     ========================================== -->
				<div class="fast-edit-group hidden" id="fastEditGroup_principal">
					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>1. Principal Identity</span>
						</div>
						<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem; margin-bottom: 0.85rem;">
							<div class="form-field-group">
								<label class="news-form-label">Full Name</label>
								<input type="text" name="name" class="news-form-input" value="<?php echo esc_attr( $principal_data['name'] ?? '' ); ?>" style="font-weight: 700;">
							</div>
							<div class="form-field-group">
								<label class="news-form-label">Official Designation</label>
								<input type="text" name="title" class="news-form-input" value="<?php echo esc_attr( $principal_data['title'] ?? '' ); ?>">
							</div>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Division Tagline</label>
							<input type="text" name="division" class="news-form-input" value="<?php echo esc_attr( $principal_data['division'] ?? '' ); ?>">
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Principal Avatar / Official Seal Image</label>
							<div class="fast-edit-media-row">
								<input type="text" name="image" id="fastEdit_principal_image" class="news-form-input" value="<?php echo esc_attr( $principal_data['image'] ?? '' ); ?>">
								<button type="button" class="btn-fast-media mat-i-pick-media-btn" data-target="#fastEdit_principal_image">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
									<span>Choose Media</span>
								</button>
							</div>
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>2. Leadership Statement</span>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Sub-Badge</label>
							<input type="text" name="badge" class="news-form-input" value="<?php echo esc_attr( $principal_data['badge'] ?? '' ); ?>">
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Statement Headline</label>
							<input type="text" name="heading" class="news-form-input" value="<?php echo esc_attr( $principal_data['heading'] ?? '' ); ?>" style="font-weight: 600;">
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Welcome Quote</label>
							<textarea name="quote" rows="4" class="news-form-textarea" style="line-height: 1.6; font-style: italic;"><?php echo esc_textarea( $principal_data['quote'] ?? '' ); ?></textarea>
						</div>
					</div>
				</div>

				<!-- ==========================================
				     4. ADMISSIONS & PATHWAY FORM
				     ========================================== -->
				<div class="fast-edit-group hidden" id="fastEditGroup_admissions">
					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>1. Header & Side Image</span>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Badge</label>
							<input type="text" name="badge" class="news-form-input" value="<?php echo esc_attr( $admissions_data['badge'] ?? '' ); ?>">
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Headline</label>
							<input type="text" name="title" class="news-form-input" value="<?php echo esc_attr( $admissions_data['title'] ?? '' ); ?>" style="font-weight: 600;">
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Intro Description</label>
							<textarea name="description" rows="2" class="news-form-textarea"><?php echo esc_textarea( $admissions_data['description'] ?? '' ); ?></textarea>
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Left Side Visual Banner</label>
							<div class="fast-edit-media-row">
								<input type="text" name="image_url" id="fastEdit_adm_image_url" class="news-form-input" value="<?php echo esc_attr( $admissions_data['image_url'] ?? '' ); ?>">
								<button type="button" class="btn-fast-media mat-i-pick-media-btn" data-target="#fastEdit_adm_image_url">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
									<span>Choose Media</span>
								</button>
							</div>
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>2. 4-Step Visual Pathway</span>
						</div>
						<?php
						$steps = $admissions_data['steps'] ?? array();
						for ( $s = 0; $s < 4; $s++ ) :
							$st = $steps[ $s ] ?? array();
						?>
							<div style="background: #FFFFFF; border: 1px solid #CBD5E1; padding: 0.85rem; border-radius: 8px; margin-bottom: 0.65rem;">
								<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 6px;">
									<span style="font-weight: 700; font-size: 12px; color: #102A57;">Step <?php echo $s + 1; ?></span>
									<span style="font-size: 11px; color: #64748B;">Pathway Step</span>
								</div>
								<input type="hidden" name="steps[<?php echo $s; ?>][num]" value="<?php echo esc_attr( $st['num'] ?? ( $s + 1 ) ); ?>">
								<input type="text" name="steps[<?php echo $s; ?>][title]" class="news-form-input" style="margin-bottom: 6px; font-weight: 600;" value="<?php echo esc_attr( $st['title'] ?? '' ); ?>" placeholder="Step Title">
								<input type="text" name="steps[<?php echo $s; ?>][desc]" class="news-form-input" value="<?php echo esc_attr( $st['desc'] ?? '' ); ?>" placeholder="Step Description">
							</div>
						<?php endfor; ?>
					</div>
				</div>

				<!-- ==========================================
				     5. GLOBAL & CONTACT INFO FORM
				     ========================================== -->
				<div class="fast-edit-group hidden" id="fastEditGroup_global">
					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>1. Direct Contact Details</span>
						</div>
						<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem; margin-bottom: 0.85rem;">
							<div class="form-field-group">
								<label class="news-form-label">Phone / Mobile</label>
								<input type="text" name="phone" class="news-form-input" value="<?php echo esc_attr( $global_data['phone'] ?? '' ); ?>">
							</div>
							<div class="form-field-group">
								<label class="news-form-label">DepEd Email</label>
								<input type="email" name="email" class="news-form-input" value="<?php echo esc_attr( $global_data['email'] ?? '' ); ?>">
							</div>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Official Office Hours</label>
							<input type="text" name="office_hours" class="news-form-input" value="<?php echo esc_attr( $global_data['office_hours'] ?? '' ); ?>">
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Campus Physical Address</label>
							<input type="text" name="campus_address" class="news-form-input" value="<?php echo esc_attr( $global_data['campus_address'] ?? '' ); ?>">
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Google Maps Embed URL</label>
							<input type="url" name="map_embed_url" class="news-form-input" value="<?php echo esc_attr( $global_data['map_embed_url'] ?? '' ); ?>">
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>2. Official Social Media Channels</span>
						</div>
						<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem; margin-bottom: 0.85rem;">
							<div class="form-field-group">
								<label class="news-form-label">Facebook Page</label>
								<input type="url" name="facebook_url" class="news-form-input" value="<?php echo esc_attr( $global_data['facebook_url'] ?? '' ); ?>">
							</div>
							<div class="form-field-group">
								<label class="news-form-label">Twitter / X Channel</label>
								<input type="url" name="twitter_url" class="news-form-input" value="<?php echo esc_attr( $global_data['twitter_url'] ?? '' ); ?>">
							</div>
						</div>
						<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem;">
							<div class="form-field-group">
								<label class="news-form-label">Instagram Channel</label>
								<input type="url" name="instagram_url" class="news-form-input" value="<?php echo esc_attr( $global_data['instagram_url'] ?? '' ); ?>">
							</div>
							<div class="form-field-group">
								<label class="news-form-label">YouTube Channel</label>
								<input type="url" name="youtube_url" class="news-form-input" value="<?php echo esc_attr( $global_data['youtube_url'] ?? '' ); ?>">
							</div>
						</div>
					</div>

					<div class="fast-edit-card-section">
						<div class="fast-edit-section-header">
							<span>3. Footer Branding & Copyright</span>
						</div>
						<div class="form-field-group" style="margin-bottom: 0.85rem;">
							<label class="news-form-label">Footer Bio / Summary</label>
							<textarea name="footer_about" rows="3" class="news-form-textarea"><?php echo esc_textarea( $global_data['footer_about'] ?? '' ); ?></textarea>
						</div>
						<div class="form-field-group">
							<label class="news-form-label">Copyright Notice Line</label>
							<input type="text" name="copyright_text" class="news-form-input" value="<?php echo esc_attr( $global_data['copyright_text'] ?? '' ); ?>">
						</div>
					</div>
				</div>

			</div>

			<!-- Modal Footer -->
			<div class="mat-modal-footer" style="display: flex; justify-content: space-between; align-items: center; padding: 1.15rem 1.6rem; background: #F8FAFC; border-top: 1px solid #E2E8F0; border-radius: 0 0 16px 16px;">
				<div style="font-size: 11.5px; color: #64748B;">
					<span>Instant update without page reload</span>
				</div>
				<div style="display: flex; align-items: center; gap: 0.75rem;">
					<button type="button" id="cancelSectionFastEditBtn" class="btn-news-cancel">Cancel</button>
					<button type="submit" id="saveSectionFastEditSubmitBtn" class="btn-news-save" style="background: #102A57;">
						<span id="saveSectionFastEditBtnText">Save Changes</span>
						<span id="saveSectionFastEditBtnSpinner" class="btn-spinner hidden"></span>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
