<?php
/**
 * Template Name: Mission, Vision & Core Values
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- 1. HERO SECTION (Landing Page Hero Style) -->
	<section class="mv-hero-wrapper">
		<div class="mv-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');"></div>
		<div class="mv-hero-overlay"></div>

		<div class="container" style="position: relative; z-index: 2;">
			<div class="mv-hero-content">
				<!-- Breadcrumbs -->
				<nav aria-label="Breadcrumb" class="mv-breadcrumbs">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<span class="separator">/</span>
					<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Us</a>
					<span class="separator">/</span>
					<span class="active-crumb">Vision, Mission & Core Values</span>
				</nav>

				<div class="hero-badge-pill">
					<span class="hero-badge-dot"></span>
					<span>DepEd Educational Framework & Institutional Pillars</span>
				</div>

				<h1 class="hero-title" style="font-size: clamp(26px, 3.8vw, 42px); margin-bottom: 1rem; line-height: 1.2;">
					Empowering Excellence Through <br><span class="text-gradient-emerald">Vision, Mission & Core Values</span>
				</h1>

				<p class="hero-subtitle" style="font-size: 15px; max-width: 720px; margin-bottom: 1.75rem; line-height: 1.7; color: rgba(255, 255, 255, 0.88);">
					Anchored on the Department of Education mandate, MAT-I National High School is committed to nurturing holistic, empowered, and patriotic learners. Discover the foundational vision, strategic mission, and enduring values that guide our educational leadership and community stewardship.
				</p>

				<div class="hero-cta-group" style="display: flex; align-items: center; gap: 1.75rem; flex-wrap: wrap; margin-bottom: 0;">
					<a href="#vision" class="btn-hero-primary">
						<span>Explore Vision & Mission</span>
						<svg class="arrow-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</a>
					<a href="#core-values" class="btn-hero-secondary">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FF851A" stroke-width="2.2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
						<span>DepEd Core Values</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. QUICK JUMP NAVIGATION BAR -->
	<div class="mv-jump-nav-bar">
		<div class="container mv-jump-links-wrap">
			<a href="#vision" class="mv-jump-link">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
				<span>Our Vision</span>
			</a>
			<a href="#mission" class="mv-jump-link">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
				<span>Our Mission</span>
			</a>
			<a href="#core-values" class="mv-jump-link">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
				<span>Core Values</span>
			</a>
			<a href="#deped-mandate" class="mv-jump-link">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 10a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v11H9V10z"/></svg>
				<span>DepEd Mandate</span>
			</a>
		</div>
	</div>

	<!-- 3. SECTION: VISION (Navy Institutional Style matching Landing Page #about) -->
	<section id="vision" class="mv-vision-navy-section">
		<div class="container">
			<div class="mv-vision-grid">
				
				<!-- Left: School Seal with Emerald Glow -->
				<div class="seal-glow-wrap">
					<div class="seal-glow-bg"></div>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>" alt="Mat-I NHS Official Seal" style="width: 210px; height: 210px; object-fit: contain; position: relative; z-index: 1;">
				</div>

				<!-- Right: The Vision Statement & Pillars -->
				<div>
					<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">THE DEPED VISION</span>
					<h2 class="section-title-navy" style="margin-bottom: 1.25rem;">Our Vision</h2>

					<div class="mv-vision-quote-card">
						<p class="mv-vision-quote-text">
							“We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to building the nation.
							<br><br>
							As a learner-centered public institution, the Department of Education continuously improves itself to better serve its stakeholders.”
						</p>
					</div>

					<!-- 3 Vision Strategic Pillars -->
					<div class="mv-vision-pillars-grid">
						<div class="mv-vision-pillar-box">
							<div class="mv-vision-pillar-title">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
								<span>Nation-Building</span>
							</div>
							<p class="mv-vision-pillar-desc">Empowering learners to become patriotic, active, and socially responsible citizens.</p>
						</div>

						<div class="mv-vision-pillar-box">
							<div class="mv-vision-pillar-title">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
								<span>Full Potential</span>
							</div>
							<p class="mv-vision-pillar-desc">Cultivating academic excellence, moral character, and lifelong learning capabilities.</p>
						</div>

						<div class="mv-vision-pillar-box">
							<div class="mv-vision-pillar-title">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21.5 2v6h-6"/><path d="M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>
								<span>Continuous Growth</span>
							</div>
							<p class="mv-vision-pillar-desc">Driving innovation in learner-centered pedagogy, faculty mentorship, and school governance.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- 4. SECTION: MISSION (White Section matching Academic Programs Grid on Landing Page) -->
	<section id="mission" class="mv-mission-white-section">
		<div class="container">
			<div style="margin-bottom: 2rem;">
				<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">WHAT DRIVES US</span>
				<h2 class="section-title-navy">The DepEd Mission</h2>
				<p style="font-size: 14.5px; color: #64748B; margin-top: 0.25rem; max-width: 740px; line-height: 1.65;">
					To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education. MAT-I NHS fosters an inclusive educational ecosystem where:
				</p>
			</div>

			<div class="mv-mission-cards-grid">
				
				<!-- Card 1: Students -->
				<div class="mv-mission-program-card">
					<div class="mv-mission-img-wrap">
						<img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=500&h=300&fit=crop&auto=format" alt="Students Learning">
						<div class="mv-mission-img-overlay">
							<span class="mv-mission-dept-tag">Learner Centered</span>
						</div>
					</div>
					<div class="mv-mission-card-body">
						<h3 class="mv-mission-card-title">Students</h3>
						<p class="mv-mission-card-desc">
							Engage in a child-friendly, gender-sensitive, safe, and motivating learning environment that fosters academic growth and personal well-being.
						</p>
					</div>
				</div>

				<!-- Card 2: Teachers -->
				<div class="mv-mission-program-card">
					<div class="mv-mission-img-wrap">
						<img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=500&h=300&fit=crop&auto=format" alt="Teachers Mentoring">
						<div class="mv-mission-img-overlay">
							<span class="mv-mission-dept-tag">Instructional Leadership</span>
						</div>
					</div>
					<div class="mv-mission-card-body">
						<h3 class="mv-mission-card-title">Teachers</h3>
						<p class="mv-mission-card-desc">
							Empower learning experiences and continuously mentor students to unlock their highest intellectual and creative potential.
						</p>
					</div>
				</div>

				<!-- Card 3: Administrators & Staff -->
				<div class="mv-mission-program-card">
					<div class="mv-mission-img-wrap">
						<img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=500&h=300&fit=crop&auto=format" alt="School Administration">
						<div class="mv-mission-img-overlay">
							<span class="mv-mission-dept-tag">Institutional Stewardship</span>
						</div>
					</div>
					<div class="mv-mission-card-body">
						<h3 class="mv-mission-card-title">Administrators & Staff</h3>
						<p class="mv-mission-card-desc">
							Serve as dedicated stewards of the institution, ensuring an enabling, efficient, and supportive infrastructure for educational excellence.
						</p>
					</div>
				</div>

				<!-- Card 4: Family & Community -->
				<div class="mv-mission-program-card">
					<div class="mv-mission-img-wrap">
						<img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=500&h=300&fit=crop&auto=format" alt="Family and Community Partnership">
						<div class="mv-mission-img-overlay">
							<span class="mv-mission-dept-tag">Community Stakeholders</span>
						</div>
					</div>
					<div class="mv-mission-card-body">
						<h3 class="mv-mission-card-title">Family & Community</h3>
						<p class="mv-mission-card-desc">
							Actively collaborate as trusted partners, sharing joint responsibility in developing resilient, lifelong learners and responsible citizens.
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- 5. SECTION: CORE VALUES (Slate Section matching News Section on Landing Page) -->
	<section id="core-values" class="mv-values-slate-section">
		<div class="container">
			<div style="margin-bottom: 2rem;">
				<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">PILLARS OF CHARACTER</span>
				<h2 class="section-title-navy">DepEd Core Values</h2>
				<p style="font-size: 14.5px; color: #64748B; margin-top: 0.25rem; max-width: 740px; line-height: 1.65;">
					Every MAT-I NHS learner, educator, and leader is anchored upon the four core values of the Department of Education:
				</p>
			</div>

			<div class="mv-values-4col-grid">
				
				<!-- 1. Maka-Diyos -->
				<div class="mv-value-shortcut-card">
					<div class="mv-value-card-bg" style="background-image: url('https://images.unsplash.com/photo-1544717305-2782549b5136?w=500&h=300&fit=crop&auto=format');"></div>
					<div class="mv-value-card-overlay">
						<div class="mv-value-title-row">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#FF851A" stroke-width="2.2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
							<span>Maka-Diyos</span>
						</div>
						<div class="mv-value-card-desc">Expressing spiritual conviction and moral integrity while demonstrating respect for diverse beliefs and faith traditions.</div>
					</div>
				</div>

				<!-- 2. Maka-tao -->
				<div class="mv-value-shortcut-card">
					<div class="mv-value-card-bg" style="background-image: url('https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=500&h=300&fit=crop&auto=format');"></div>
					<div class="mv-value-card-overlay">
						<div class="mv-value-title-row">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#FF851A" stroke-width="2.2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
							<span>Maka-tao</span>
						</div>
						<div class="mv-value-card-desc">Promoting empathy, inclusivity, and human dignity through mutual respect, compassion, and collaborative goodwill.</div>
					</div>
				</div>

				<!-- 3. Makakalikasan -->
				<div class="mv-value-shortcut-card">
					<div class="mv-value-card-bg" style="background-image: url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=500&h=300&fit=crop&auto=format');"></div>
					<div class="mv-value-card-overlay">
						<div class="mv-value-title-row">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#FF851A" stroke-width="2.2"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
							<span>Makakalikasan</span>
						</div>
						<div class="mv-value-card-desc">Advocating environmental stewardship, sustainable practices, and responsible care for our natural resources.</div>
					</div>
				</div>

				<!-- 4. Makabansa -->
				<div class="mv-value-shortcut-card">
					<div class="mv-value-card-bg" style="background-image: url('https://images.unsplash.com/photo-1532619675605-1ede6c2ed2b0?w=500&h=300&fit=crop&auto=format');"></div>
					<div class="mv-value-card-overlay">
						<div class="mv-value-title-row">
							<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#FF851A" stroke-width="2.2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
							<span>Makabansa</span>
						</div>
						<div class="mv-value-card-desc">Exhibiting active civic commitment, national pride, and dedication to unity, cultural heritage, and nation-building.</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- 6. SECTION: DEPED MANDATE (Split Grid matching Landing Page Enrollment Panel) -->
	<section id="deped-mandate" style="background-color: var(--white);">
		<div class="enrollment-panel-grid">
			<!-- Left Image -->
			<div class="mv-mandate-left-img" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');">
				<div class="enrollment-left-overlay">
					<div style="color: rgba(255,255,255,0.75); font-size: 11.5px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.25rem;">DepEd Mandate</div>
					<div style="font-family: var(--font-heading); font-size: 20px; font-weight: 800; color: var(--white); line-height: 1.25;">Republic Act No. 9155</div>
					<div style="color: var(--green-cta); font-size: 12.5px; font-weight: 600; margin-top: 0.25rem;">Governance of Basic Education Act</div>
				</div>
			</div>

			<!-- Right Dark Navy Panel -->
			<div class="mv-mandate-right-navy">
				<span style="color: var(--green-cta); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; display: block; margin-bottom: 0.5rem;">LEGAL BASIS & GOVERNANCE</span>
				<h2 class="section-title-white" style="font-size: clamp(22px, 3vw, 30px); margin-bottom: 1rem;">The DepEd Mandate</h2>
				<p style="font-size: 14px; line-height: 1.75; color: rgba(255, 255, 255, 0.85); margin-bottom: 1.75rem;">
					Enacted under Republic Act No. 9155 (Governance of Basic Education Act), the Department of Education formulates, implements, and coordinates national educational policies and standards. MAT-I National High School honors this mandate by ensuring a complete, equitable, and learner-focused secondary education system that prepares students for higher learning, workforce readiness, and community leadership.
				</p>
				<div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
					<a href="<?php echo esc_url( home_url( '/school-logo/' ) ); ?>" class="btn-hero-primary">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						<span>School Seal Heritage</span>
					</a>
					<a href="<?php echo esc_url( home_url( '/history/' ) ); ?>" class="btn-hero-secondary">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
						<span>History & Milestones</span>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
