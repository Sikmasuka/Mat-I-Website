<?php
/**
 * Template Name: School Services
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- 1. HERO SECTION -->
	<section class="services-hero-wrapper" style="text-align: center;">
		<div class="services-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');"></div>
		<div class="services-hero-overlay"></div>

		<div class="container" style="position: relative; z-index: 2;">
			<div class="services-hero-content" style="margin: 0 auto; text-align: center; display: flex; flex-direction: column; align-items: center;">
				<h1 style="font-size: clamp(24px, 3.2vw, 36px); font-weight: 800; color: #FFFFFF; line-height: 1.2; margin: 0 0 1rem 0; text-align: center;">
					Mat-I NHS <span style="color: #FF851A;">School Services</span>
				</h1>

				<!-- Hero Search Bar -->
				<div class="hero-search-wrapper" style="width: 100%; max-width: 540px; position: relative;">
					<svg class="hero-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); pointer-events: none;">
						<circle cx="11" cy="11" r="8"></circle>
						<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
					</svg>
					<input type="text" id="serviceSearchInput" class="hero-search-input" placeholder="Search service (e.g., Certificate, Good Moral, Enrollment)..." autocomplete="off" style="width: 100%; padding: 10px 18px 10px 44px; border-radius: 9999px; border: 2px solid rgba(255, 255, 255, 0.2); background: rgba(255, 255, 255, 0.95); font-size: 14px; color: #102A57; outline: none; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18); transition: all 0.2s ease;" />
				</div>
			</div>
		</div>
	</section>

	<!-- 2. SERVICES CONTENT SECTION -->
	<section class="services-section" style="padding-top: 2.5rem;">
		<div class="container">

			<!-- Accordion Services List -->
			<div class="services-accordion-list" id="servicesAccordionList">

				<!-- SERVICE 1 -->
				<div class="service-card active" data-service-title="Issuance of Certificates Enrollment Good Moral Character Certification">
					<button class="service-header-trigger" type="button" aria-expanded="true">
						<div class="service-title-group">
							<div class="service-number-badge">1</div>
							<div>
								<div class="service-card-title">
									1. Issuance of Certificates (Enrollment, Good Moral Character, Certification, etc.)
								</div>
								<div class="service-meta-strip">
									<span class="service-badge badge-office">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
										Registrar / Guidance / Admin
									</span>
									<span class="service-badge badge-time">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
										15–60 mins
									</span>
									<span class="service-badge badge-fee">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
										No Fees (Free)
									</span>
								</div>
							</div>
						</div>
						<div class="service-toggle-chevron">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</div>
					</button>

					<div class="service-body">
						<!-- Service Details Grid -->
						<div class="service-details-grid">
							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
									Office or Division
								</div>
								<div class="service-info-value">
									Registrar / Guidance Office / School Administration
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
									Classification & Type of Transaction
								</div>
								<div class="service-info-value">
									Simple Transaction · Government-to-Citizen (G2C)
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
									Who May Avail
								</div>
								<div class="service-info-value">
									Learners, Parents, Guardians, Alumni, Authorized Representatives
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
									Processing Time & Fees
								</div>
								<div class="service-info-value">
									<strong>15–60 minutes</strong> &middot; Fees to be Paid: <span style="color: #166534; font-weight: 600;">None</span>
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
									Person Responsible
								</div>
								<div class="service-info-value">
									Registrar, Guidance Designate, Adviser, School Head
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
									Checklist of Requirements
								</div>
								<ul class="service-requirements-list">
									<li>Accomplished Request Form</li>
									<li>Valid ID</li>
									<li>Supporting Documents, as applicable</li>
								</ul>
							</div>
						</div>

						<!-- Step-by-Step Procedures Table -->
						<div style="margin-top: 1.5rem;">
							<h4 style="font-size: 14px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">
								Processing Procedures
							</h4>
							<div class="procedure-table-wrapper">
								<table class="procedure-table">
									<thead>
										<tr>
											<th style="width: 25%;">Client Steps</th>
											<th style="width: 25%;">Agency Actions</th>
											<th style="width: 10%;">Fees</th>
											<th style="width: 18%;">Processing Time</th>
											<th style="width: 22%;">Person Responsible</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Submit request/application and requirements</td>
											<td>Receive and verify documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>5 minutes</td>
											<td>Receiving Personnel</td>
										</tr>
										<tr>
											<td>Wait for evaluation</td>
											<td>Evaluate and validate records/documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>30 minutes</td>
											<td>Registrar/Concerned Personnel</td>
										</tr>
										<tr>
											<td>Receive schedule or approved document</td>
											<td>Prepare, sign, and release document/action</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>25 minutes</td>
											<td>Registrar/School Head</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICE 2 -->
				<div class="service-card" data-service-title="Request for Academic Records Form 137 Form 138 TOR Permanent Record Transcript">
					<button class="service-header-trigger" type="button" aria-expanded="false">
						<div class="service-title-group">
							<div class="service-number-badge">2</div>
							<div>
								<div class="service-card-title">
									2. Request for Academic Records (Form 137, Form 138, TOR, Permanent Record)
								</div>
								<div class="service-meta-strip">
									<span class="service-badge badge-office">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
										Registrar / Guidance / Admin
									</span>
									<span class="service-badge badge-time">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
										1 hr – 6 hrs
									</span>
									<span class="service-badge badge-fee">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
										No Fees (Free)
									</span>
								</div>
							</div>
						</div>
						<div class="service-toggle-chevron">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</div>
					</button>

					<div class="service-body">
						<!-- Service Details Grid -->
						<div class="service-details-grid">
							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
									Office or Division
								</div>
								<div class="service-info-value">
									Registrar / Guidance Office / School Administration
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
									Classification & Type of Transaction
								</div>
								<div class="service-info-value">
									Simple Transaction · Government-to-Citizen (G2C)
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
									Who May Avail
								</div>
								<div class="service-info-value">
									Learners, Parents, Guardians, Alumni, Authorized Representatives
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
									Processing Time & Fees
								</div>
								<div class="service-info-value">
									<strong>1 hour to 6 hours</strong> &middot; Fees to be Paid: <span style="color: #166534; font-weight: 600;">None</span>
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
									Person Responsible
								</div>
								<div class="service-info-value">
									Registrar, Guidance Designate, Adviser, School Head
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
									Checklist of Requirements
								</div>
								<ul class="service-requirements-list">
									<li>Accomplished Request Form</li>
									<li>Valid ID</li>
									<li>Supporting Documents, as applicable</li>
								</ul>
							</div>
						</div>

						<!-- Step-by-Step Procedures Table -->
						<div style="margin-top: 1.5rem;">
							<h4 style="font-size: 14px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">
								Processing Procedures
							</h4>
							<div class="procedure-table-wrapper">
								<table class="procedure-table">
									<thead>
										<tr>
											<th style="width: 25%;">Client Steps</th>
											<th style="width: 25%;">Agency Actions</th>
											<th style="width: 10%;">Fees</th>
											<th style="width: 18%;">Processing Time</th>
											<th style="width: 22%;">Person Responsible</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Submit request/application and requirements</td>
											<td>Receive and verify documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>5 minutes</td>
											<td>Receiving Personnel</td>
										</tr>
										<tr>
											<td>Wait for evaluation</td>
											<td>Evaluate and validate records/documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>15-60 minutes</td>
											<td>Registrar/Concerned Personnel</td>
										</tr>
										<tr>
											<td>Receive schedule or approved document</td>
											<td>Prepare, sign, and release document/action</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>1 hour to 6 hours</td>
											<td>Registrar/School Head</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICE 3 -->
				<div class="service-card" data-service-title="Enrollment of Learners Admission Registration Enrolment">
					<button class="service-header-trigger" type="button" aria-expanded="false">
						<div class="service-title-group">
							<div class="service-number-badge">3</div>
							<div>
								<div class="service-card-title">
									3. Enrollment of Learners
								</div>
								<div class="service-meta-strip">
									<span class="service-badge badge-office">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
										Registrar / Guidance / Admin
									</span>
									<span class="service-badge badge-time">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
										15 mins – 60 mins
									</span>
									<span class="service-badge badge-fee">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
										No Fees (Free)
									</span>
								</div>
							</div>
						</div>
						<div class="service-toggle-chevron">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</div>
					</button>

					<div class="service-body">
						<!-- Service Details Grid -->
						<div class="service-details-grid">
							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
									Office or Division
								</div>
								<div class="service-info-value">
									Registrar / Guidance Office / School Administration
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
									Classification & Type of Transaction
								</div>
								<div class="service-info-value">
									Simple Transaction · Government-to-Citizen (G2C)
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
									Who May Avail
								</div>
								<div class="service-info-value">
									Learners, Parents, Guardians, Alumni, Authorized Representatives
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
									Processing Time & Fees
								</div>
								<div class="service-info-value">
									<strong>15 minutes – 60 minutes</strong> &middot; Fees to be Paid: <span style="color: #166534; font-weight: 600;">None</span>
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
									Person Responsible
								</div>
								<div class="service-info-value">
									Registrar, Guidance Designate, Adviser, School Head
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
									Checklist of Requirements
								</div>
								<ul class="service-requirements-list">
									<li>Accomplished Request Form</li>
									<li>Valid ID</li>
									<li>Supporting Documents, as applicable</li>
								</ul>
							</div>
						</div>

						<!-- Step-by-Step Procedures Table -->
						<div style="margin-top: 1.5rem;">
							<h4 style="font-size: 14px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">
								Processing Procedures
							</h4>
							<div class="procedure-table-wrapper">
								<table class="procedure-table">
									<thead>
										<tr>
											<th style="width: 25%;">Client Steps</th>
											<th style="width: 25%;">Agency Actions</th>
											<th style="width: 10%;">Fees</th>
											<th style="width: 18%;">Processing Time</th>
											<th style="width: 22%;">Person Responsible</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Submit request/application and requirements</td>
											<td>Receive and verify documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>5 minutes</td>
											<td>Receiving Personnel</td>
										</tr>
										<tr>
											<td>Wait for evaluation</td>
											<td>Evaluate and validate records/documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>15-20 minutes</td>
											<td>Registrar/Concerned Personnel</td>
										</tr>
										<tr>
											<td>Receive schedule or approved document</td>
											<td>Prepare, sign, and release document/action</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>As scheduled</td>
											<td>Registrar/School Head</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICE 4 -->
				<div class="service-card" data-service-title="Request for Academic Conference for Special Cases Consultation Meeting">
					<button class="service-header-trigger" type="button" aria-expanded="false">
						<div class="service-title-group">
							<div class="service-number-badge">4</div>
							<div>
								<div class="service-card-title">
									4. Request for Academic Conference for Special Cases
								</div>
								<div class="service-meta-strip">
									<span class="service-badge badge-office">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
										Registrar / Guidance / Admin
									</span>
									<span class="service-badge badge-time">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
										5–15 mins
									</span>
									<span class="service-badge badge-fee">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
										No Fees (Free)
									</span>
								</div>
							</div>
						</div>
						<div class="service-toggle-chevron">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</div>
					</button>

					<div class="service-body">
						<!-- Service Details Grid -->
						<div class="service-details-grid">
							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
									Office or Division
								</div>
								<div class="service-info-value">
									Registrar / Guidance Office / School Administration
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
									Classification & Type of Transaction
								</div>
								<div class="service-info-value">
									Simple Transaction · Government-to-Citizen (G2C)
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
									Who May Avail
								</div>
								<div class="service-info-value">
									Learners, Parents, Guardians, Alumni, Authorized Representatives
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
									Processing Time & Fees
								</div>
								<div class="service-info-value">
									<strong>5–15 minutes</strong> &middot; Fees to be Paid: <span style="color: #166534; font-weight: 600;">None</span>
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
									Person Responsible
								</div>
								<div class="service-info-value">
									Registrar, Guidance Designate, Adviser, School Head
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
									Checklist of Requirements
								</div>
								<ul class="service-requirements-list">
									<li>Accomplished Request Form</li>
									<li>Valid ID</li>
									<li>Supporting Documents, as applicable</li>
								</ul>
							</div>
						</div>

						<!-- Step-by-Step Procedures Table -->
						<div style="margin-top: 1.5rem;">
							<h4 style="font-size: 14px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">
								Processing Procedures
							</h4>
							<div class="procedure-table-wrapper">
								<table class="procedure-table">
									<thead>
										<tr>
											<th style="width: 25%;">Client Steps</th>
											<th style="width: 25%;">Agency Actions</th>
											<th style="width: 10%;">Fees</th>
											<th style="width: 18%;">Processing Time</th>
											<th style="width: 22%;">Person Responsible</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Submit request/application and requirements</td>
											<td>Receive and verify documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>1-5 minutes</td>
											<td>Receiving Personnel</td>
										</tr>
										<tr>
											<td>Wait for evaluation</td>
											<td>Evaluate and validate records/documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>2-5 minutes</td>
											<td>Registrar/Concerned Personnel</td>
										</tr>
										<tr>
											<td>Receive schedule or approved document</td>
											<td>Prepare, sign, and release document/action</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>2-5 minutes</td>
											<td>Registrar/School Head</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICE 5 -->
				<div class="service-card" data-service-title="Request for Correction of School Records Change of Name Clerical Error">
					<button class="service-header-trigger" type="button" aria-expanded="false">
						<div class="service-title-group">
							<div class="service-number-badge">5</div>
							<div>
								<div class="service-card-title">
									5. Request for Correction of School Records
								</div>
								<div class="service-meta-strip">
									<span class="service-badge badge-office">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
										Registrar / Guidance / Admin
									</span>
									<span class="service-badge badge-time">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
										60 mins
									</span>
									<span class="service-badge badge-fee">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
										No Fees (Free)
									</span>
								</div>
							</div>
						</div>
						<div class="service-toggle-chevron">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</div>
					</button>

					<div class="service-body">
						<!-- Service Details Grid -->
						<div class="service-details-grid">
							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
									Office or Division
								</div>
								<div class="service-info-value">
									Registrar / Guidance Office / School Administration
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
									Classification & Type of Transaction
								</div>
								<div class="service-info-value">
									Simple Transaction · Government-to-Citizen (G2C)
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
									Who May Avail
								</div>
								<div class="service-info-value">
									Learners, Parents, Guardians, Alumni, Authorized Representatives
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
									Processing Time & Fees
								</div>
								<div class="service-info-value">
									<strong>60 minutes</strong> &middot; Fees to be Paid: <span style="color: #166534; font-weight: 600;">None</span>
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
									Person Responsible
								</div>
								<div class="service-info-value">
									Registrar, Guidance Designate, Adviser, School Head
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
									Checklist of Requirements
								</div>
								<ul class="service-requirements-list">
									<li>Accomplished Request Form</li>
									<li>Valid ID</li>
									<li>Supporting Documents, as applicable</li>
								</ul>
							</div>
						</div>

						<!-- Step-by-Step Procedures Table -->
						<div style="margin-top: 1.5rem;">
							<h4 style="font-size: 14px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">
								Processing Procedures
							</h4>
							<div class="procedure-table-wrapper">
								<table class="procedure-table">
									<thead>
										<tr>
											<th style="width: 25%;">Client Steps</th>
											<th style="width: 25%;">Agency Actions</th>
											<th style="width: 10%;">Fees</th>
											<th style="width: 18%;">Processing Time</th>
											<th style="width: 22%;">Person Responsible</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Submit request/application and requirements</td>
											<td>Receive and verify documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>5 minutes</td>
											<td>Receiving Personnel</td>
										</tr>
										<tr>
											<td>Wait for evaluation</td>
											<td>Evaluate and validate records/documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>15-60 minutes</td>
											<td>Registrar/Concerned Personnel</td>
										</tr>
										<tr>
											<td>Receive schedule or approved document</td>
											<td>Prepare, sign, and release document/action</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>1 minute</td>
											<td>Registrar/School Head</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICE 6 -->
				<div class="service-card" data-service-title="Request for Correction of School Records for CAV Purposes Certification Authentication Verification DFA Apostille">
					<button class="service-header-trigger" type="button" aria-expanded="false">
						<div class="service-title-group">
							<div class="service-number-badge">6</div>
							<div>
								<div class="service-card-title">
									6. Request for Correction of School Records for CAV Purposes
								</div>
								<div class="service-meta-strip">
									<span class="service-badge badge-office">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
										Registrar / Guidance / Admin
									</span>
									<span class="service-badge badge-time">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
										1 hr – 6 hrs
									</span>
									<span class="service-badge badge-fee">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
										No Fees (Free)
									</span>
								</div>
							</div>
						</div>
						<div class="service-toggle-chevron">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
						</div>
					</button>

					<div class="service-body">
						<!-- Service Details Grid -->
						<div class="service-details-grid">
							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v14M21 7v14M6 3h12a2 2 0 0 1 2 2v2H4V5a2 2 0 0 1 2-2z"/></svg>
									Office or Division
								</div>
								<div class="service-info-value">
									Registrar / Guidance Office / School Administration
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
									Classification & Type of Transaction
								</div>
								<div class="service-info-value">
									Simple Transaction · Government-to-Citizen (G2C)
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
									Who May Avail
								</div>
								<div class="service-info-value">
									Learners, Parents, Guardians, Alumni, Authorized Representatives
								</div>
							</div>

							<div class="service-info-box">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
									Processing Time & Fees
								</div>
								<div class="service-info-value">
									<strong>1 hour – 6 hours</strong> &middot; Fees to be Paid: <span style="color: #166534; font-weight: 600;">None</span>
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
									Person Responsible
								</div>
								<div class="service-info-value">
									Registrar, Guidance Designate, Adviser, School Head
								</div>
							</div>

							<div class="service-info-box" style="grid-column: 1 / -1;">
								<div class="service-info-label">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
									Checklist of Requirements
								</div>
								<ul class="service-requirements-list">
									<li>Accomplished Request Form</li>
									<li>Valid ID</li>
									<li>Supporting Documents, as applicable</li>
								</ul>
							</div>
						</div>

						<!-- Step-by-Step Procedures Table -->
						<div style="margin-top: 1.5rem;">
							<h4 style="font-size: 14px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">
								Processing Procedures
							</h4>
							<div class="procedure-table-wrapper">
								<table class="procedure-table">
									<thead>
										<tr>
											<th style="width: 25%;">Client Steps</th>
											<th style="width: 25%;">Agency Actions</th>
											<th style="width: 10%;">Fees</th>
											<th style="width: 18%;">Processing Time</th>
											<th style="width: 22%;">Person Responsible</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Submit request/application and requirements</td>
											<td>Receive and verify documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>5 minutes</td>
											<td>Receiving Personnel</td>
										</tr>
										<tr>
											<td>Wait for evaluation</td>
											<td>Evaluate and validate records/documents</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>15-60 minutes</td>
											<td>Registrar/Concerned Personnel</td>
										</tr>
										<tr>
											<td>Receive schedule or approved document</td>
											<td>Prepare, sign, and release document/action</td>
											<td><span style="color: #166534; font-weight: 600;">None</span></td>
											<td>1 hour - 6 hours</td>
											<td>Registrar/School Head</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- 3. PUBLIC ASSISTANCE / HELPDESK BANNER -->
			<div class="services-helpdesk-card">
				<div class="helpdesk-content">
					<h3>Need Assistance with Your Request?</h3>
					<p>
						For inquiries on requirements, tracking document release, or special accommodation, you may visit our Public Assistance and Complaints Desk (PACD) at the Administrative Office.
					</p>
				</div>
				<div class="helpdesk-contacts">
					<div class="helpdesk-contact-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<span>09606255099</span>
					</div>
					<div class="helpdesk-contact-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						<span>mat-i.nhs@deped.gov.ph</span>
					</div>
					<div class="helpdesk-contact-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						<span>Mon–Fri: 8:00 AM – 5:00 PM</span>
					</div>
				</div>
			</div>

		</div>
	</section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
	// Accordion Toggle
	const triggers = document.querySelectorAll('.service-header-trigger');
	triggers.forEach(function(btn) {
		btn.addEventListener('click', function() {
			const card = this.closest('.service-card');
			const isExpanded = card.classList.contains('active');
			
			// Toggle current card
			if (isExpanded) {
				card.classList.remove('active');
				this.setAttribute('aria-expanded', 'false');
			} else {
				card.classList.add('active');
				this.setAttribute('aria-expanded', 'true');
			}
		});
	});

	// Live Search Filtering
	const searchInput = document.getElementById('serviceSearchInput');
	if (searchInput) {
		searchInput.addEventListener('input', function(e) {
			const filter = e.target.value.toLowerCase().trim();
			const cards = document.querySelectorAll('#servicesAccordionList .service-card');
			
			cards.forEach(function(card) {
				const title = (card.getAttribute('data-service-title') || card.textContent).toLowerCase();
				if (title.includes(filter)) {
					card.style.display = '';
				} else {
					card.style.display = 'none';
				}
			});
		});
	}
});
</script>

<?php
get_footer();
