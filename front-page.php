<?php
/**
 * The front page template for MAT-I National High School
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- =========================================================================
	     SECTION 1 — HERO BANNER
	     ========================================================================= -->
	<?php
	$mat_i_hero = get_option( 'mat_i_hero_settings', array() );
	$hero_badge = ! empty( $mat_i_hero['badge'] ) ? $mat_i_hero['badge'] : 'Welcome to MAT-I NHS · DepEd Region X';
	$hero_hdln  = ! empty( $mat_i_hero['headline'] ) ? $mat_i_hero['headline'] : 'Shaping Leaders, Building Futures';
	$hero_hdln  = str_replace( array( "\r\n", "\r", "\n" ), ' ', $hero_hdln );
	$hero_para  = ! empty( $mat_i_hero['paragraph'] ) ? $mat_i_hero['paragraph'] : 'MAT-I National High School provides quality, accessible, and relevant basic secondary education committed to academic competence, moral integrity, and community empowerment in Claveria, Misamis Oriental.';
	$hero_img   = ! empty( $mat_i_hero['banner_image'] ) ? $mat_i_hero['banner_image'] : get_template_directory_uri() . '/assets/images/hero.jpg';
	$hero_seal  = ! empty( $mat_i_hero['seal_badge'] ) ? $mat_i_hero['seal_badge'] : 'DepEd Division of Misamis Oriental';
	$cta1_text  = ! empty( $mat_i_hero['cta1_text'] ) ? $mat_i_hero['cta1_text'] : 'Enrollment Guidelines';
	$cta1_link  = ! empty( $mat_i_hero['cta1_link'] ) ? $mat_i_hero['cta1_link'] : '#enroll';
	$cta2_text  = ! empty( $mat_i_hero['cta2_text'] ) ? $mat_i_hero['cta2_text'] : 'Academic Offerings';
	$cta2_link  = ! empty( $mat_i_hero['cta2_link'] ) ? $mat_i_hero['cta2_link'] : '#programs';
	$cta3_text  = ! empty( $mat_i_hero['cta3_text'] ) ? $mat_i_hero['cta3_text'] : 'School Services';
	$cta3_link  = ! empty( $mat_i_hero['cta3_link'] ) ? $mat_i_hero['cta3_link'] : home_url( '/services/' );
	$stat1_num  = ! empty( $mat_i_hero['stat1_number'] ) ? $mat_i_hero['stat1_number'] : '1980';
	$stat1_lbl  = ! empty( $mat_i_hero['stat1_label'] ) ? $mat_i_hero['stat1_label'] : 'Year Established';
	$stat2_num  = ! empty( $mat_i_hero['stat2_number'] ) ? $mat_i_hero['stat2_number'] : 'Grades 7–12';
	$stat2_lbl  = ! empty( $mat_i_hero['stat2_label'] ) ? $mat_i_hero['stat2_label'] : 'Junior & Senior High';
	$stat3_num  = ! empty( $mat_i_hero['stat3_number'] ) ? $mat_i_hero['stat3_number'] : '2 Tracks';
	$stat3_lbl  = ! empty( $mat_i_hero['stat3_label'] ) ? $mat_i_hero['stat3_label'] : 'Academic · Tech-Pro';
	?>
	<section class="hero-wrapper">
		<!-- Slide Backgrounds (Hero Banner Image) -->
		<div class="hero-slide-bg active" style="background-image: url('<?php echo esc_url( $hero_img ); ?>');"></div>
		<div class="hero-slide-bg" style="background-image: url('<?php echo esc_url( $hero_img ); ?>');"></div>
		<div class="hero-slide-bg" style="background-image: url('<?php echo esc_url( $hero_img ); ?>');"></div>

		<!-- Gradient Overlay -->
		<div class="hero-overlay"></div>

		<div class="container hero-container">
			<div class="hero-grid">
				<!-- Left Column Content -->
				<div class="hero-left-content animate-fadeInUp">
					<div style="display: flex; align-items: center; gap: 8px; margin-bottom: 0.85rem; flex-wrap: wrap;">
						<div class="hero-badge-pill" style="margin-bottom: 0;">
							<span id="heroSlideBadge"><?php echo esc_html( $hero_badge ); ?></span>
						</div>
						<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
							<button type="button" class="btn-fast-edit-section" data-section="hero" title="Edit Hero Section" style="background: rgba(255,133,26,0.9); border: none; color: #FFFFFF; font-size: 11px; font-weight: 700; padding: 4px 10px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.25);">
								<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
								<span>Edit Hero</span>
							</button>
						<?php endif; ?>
					</div>
					<h1 class="hero-heading" id="heroSlideHeading"><?php echo esc_html( $hero_hdln ); ?></h1>
					<p class="hero-para" id="heroSlidePara">
						<?php echo esc_html( $hero_para ); ?>
					</p>
					<div class="hero-cta-buttons">
						<a href="<?php echo esc_url( $cta1_link ); ?>" class="btn-hero-primary open-beef-btn" id="heroCta1">
							<span><?php echo esc_html( $cta1_text ); ?></span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
						</a>
						<a href="<?php echo esc_url( $cta2_link ); ?>" class="btn-hero-secondary" id="heroCta2"><?php echo esc_html( $cta2_text ); ?></a>
						<a href="<?php echo esc_url( $cta3_link ); ?>" class="btn-hero-secondary btn-hero-outline" id="heroCta3"><?php echo esc_html( $cta3_text ); ?></a>
					</div>
					<div class="hero-stats-strip">
						<div class="hero-stat-item">
							<span class="stat-number" id="heroStat1Num"><?php echo esc_html( $stat1_num ); ?></span>
							<span class="stat-label" id="heroStat1Lbl"><?php echo esc_html( $stat1_lbl ); ?></span>
						</div>
						<div class="hero-stat-divider"></div>
						<div class="hero-stat-item">
							<span class="stat-number" id="heroStat2Num"><?php echo esc_html( $stat2_num ); ?></span>
							<span class="stat-label" id="heroStat2Lbl"><?php echo esc_html( $stat2_lbl ); ?></span>
						</div>
						<div class="hero-stat-divider"></div>
						<div class="hero-stat-item">
							<span class="stat-number" id="heroStat3Num"><?php echo esc_html( $stat3_num ); ?></span>
							<span class="stat-label" id="heroStat3Lbl"><?php echo esc_html( $stat3_lbl ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Hero Slider Navigation Dots -->
		<div class="hero-dots-container" aria-label="Hero slider navigation">
			<button type="button" class="hero-dot active" aria-label="Slide 1"></button>
			<button type="button" class="hero-dot" aria-label="Slide 2"></button>
			<button type="button" class="hero-dot" aria-label="Slide 3"></button>
		</div>
	</section>

	<!-- =========================================================================
	     SECTION 2 — INSTITUTIONAL PILLARS & DEPED CORE VALUES
	     ========================================================================= -->
	<?php
	$mat_i_cv_data = get_option( 'mat_i_core_values', array() );
	$cv_badge      = ! empty( $mat_i_cv_data['badge'] ) ? $mat_i_cv_data['badge'] : 'FOUNDATION OF CHARACTER';
	$cv_heading    = ! empty( $mat_i_cv_data['heading'] ) ? $mat_i_cv_data['heading'] : 'DepEd Core Values & Institutional Legacy';
	$cv_desc       = ! empty( $mat_i_cv_data['description'] ) ? $mat_i_cv_data['description'] : 'Nurturing every Mat-Inians with holistic competencies, ethical discipline, and unwavering civic dedication.';
	$cv_values     = ! empty( $mat_i_cv_data['values'] ) && is_array( $mat_i_cv_data['values'] ) ? $mat_i_cv_data['values'] : array(
		array( 'key' => 'diyos', 'title' => 'Maka-Diyos', 'desc' => 'Cultivating spiritual grounding, moral discernment, truthfulness, and ethical responsibility in daily school life.' ),
		array( 'key' => 'tao', 'title' => 'Makatao', 'desc' => 'Fostering empathy, inclusivity, peer respect, and collaborative spirit that celebrates diverse learner potentials.' ),
		array( 'key' => 'kalikasan', 'title' => 'Makakalikasan', 'desc' => 'Championing ecological stewardship, clean energy habits, campus greening, and community disaster preparedness.' ),
		array( 'key' => 'bansa', 'title' => 'Makabansa', 'desc' => 'Inspiring national pride, cultural appreciation, civic awareness, and selfless service to the Filipino nation.' ),
	);
	$cv_links_lbl  = ! empty( $mat_i_cv_data['links_label'] ) ? $mat_i_cv_data['links_label'] : 'Explore MAT-I National High School:';
	$cv_links      = ! empty( $mat_i_cv_data['links'] ) && is_array( $mat_i_cv_data['links'] ) ? $mat_i_cv_data['links'] : array(
		array( 'label' => 'Vision & Mission', 'url' => home_url( '/mission-vision/' ) ),
		array( 'label' => 'School History (1980)', 'url' => home_url( '/history/' ) ),
		array( 'label' => 'School Seal & Logo', 'url' => home_url( '/school-logo/' ) ),
		array( 'label' => 'Faculty & Organigram', 'url' => home_url( '/organigram/' ) ),
	);

	$cv_icons = array(
		0 => '<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>',
		1 => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
		2 => '<path d="M12 2a10 10 0 0 0-7.07 17.07l1.41-1.41A8 8 0 1 1 12 20v2a10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/>',
		3 => '<path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/>',
	);
	?>
	<section id="about-overview" class="institutional-section">
		<div class="container">
			<div style="text-align: center; max-width: 680px; margin: 0 auto 1.5rem;">
				<div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
					<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;" id="coreValuesBadge"><?php echo esc_html( $cv_badge ); ?></span>
					<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
						<button type="button" class="btn-fast-edit-section" data-section="core_values" title="Edit DepEd Core Values" style="background: rgba(16,42,87,0.08); border: 1px solid rgba(16,42,87,0.18); color: #102A57; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px;">
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
							<span>Edit Values</span>
						</button>
					<?php endif; ?>
				</div>
				<h2 class="section-title-navy" id="coreValuesHeading" style="font-size: clamp(22px, 2.5vw, 30px); margin-top: 0.25rem;"><?php echo esc_html( $cv_heading ); ?></h2>
				<p id="coreValuesDesc" style="font-size: 14px; color: #64748B; margin-top: 0.5rem; line-height: 1.6;">
					<?php echo esc_html( $cv_desc ); ?>
				</p>
			</div>

			<!-- 4 Core Values Grid -->
			<div class="core-values-grid" id="coreValuesGrid">
				<?php foreach ( $cv_values as $idx => $val ) : 
					$icon_path = isset( $cv_icons[ $idx ] ) ? $cv_icons[ $idx ] : $cv_icons[0];
				?>
					<div class="core-value-card" id="coreValueCard-<?php echo esc_attr( $idx ); ?>">
						<div class="core-value-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><?php echo $icon_path; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></svg>
						</div>
						<h3 class="core-value-title"><?php echo esc_html( $val['title'] ); ?></h3>
						<p class="core-value-desc"><?php echo esc_html( $val['desc'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- Institutional Explore Strip -->
			<div class="institutional-links-bar">
				<div style="display: flex; align-items: center; gap: 0.6rem;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FF851A" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
					<span style="font-size: 13.5px; font-weight: 700; color: #102A57;" id="coreValuesLinksLabel"><?php echo esc_html( $cv_links_lbl ); ?></span>
				</div>
				<div class="institutional-links-group" id="coreValuesLinksGroup">
					<?php foreach ( $cv_links as $l_item ) : ?>
						<a href="<?php echo esc_url( $l_item['url'] ); ?>" class="institutional-btn-pill">
							<span><?php echo esc_html( $l_item['label'] ); ?></span>
							<span>&rarr;</span>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================================
	     SECTION 3 — SCHOOL SERVICES & CITIZEN'S CHARTER QUICK HUB
	     ========================================================================= -->
	<section id="services-hub" class="services-hub-section">
		<div class="container">
			<div style="display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
				<div>
					<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">STUDENT & ALUMNI ASSISTANCE</span>
					<h2 class="section-title-navy">Frontline School Services & Citizen's Charter</h2>
					<p style="font-size: 13.5px; color: #64748B; margin-top: 0.35rem;">Access transparent, standardized, and free official school services.</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color: #FF851A; font-weight: 700; font-size: 13px; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
					<span>View All Services & Flowcharts</span>
					<span>&rarr;</span>
				</a>
			</div>

			<!-- 4 Quick Service Cards -->
			<div class="services-hub-grid">
				<!-- Card 1 -->
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-hub-card">
					<div class="service-hub-badge-row">
						<span class="service-hub-tag">Official Records</span>
						<span class="service-hub-free-pill">
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							<span>Free</span>
						</span>
					</div>
					<h3 class="service-hub-title">Form 137 / Form 138 (SF9 & SF10)</h3>
					<p class="service-hub-desc">Issuance and release of permanent records, official transcript of records, and report cards for transferees or graduates.</p>
					<div class="service-hub-meta">
						<span style="display: inline-flex; align-items: center; gap: 4px; color: #64748B;">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
							<span>1–3 Working Days</span>
						</span>
						<span style="font-weight: 700; color: #FF851A;">Charter &rarr;</span>
					</div>
				</a>

				<!-- Card 2 -->
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-hub-card">
					<div class="service-hub-badge-row">
						<span class="service-hub-tag">Certifications</span>
						<span class="service-hub-free-pill">
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							<span>Free</span>
						</span>
					</div>
					<h3 class="service-hub-title">Good Moral & Enrollment Certificate</h3>
					<p class="service-hub-desc">Certification of enrollment status, good moral character, CAV requirements, and graduation credentials.</p>
					<div class="service-hub-meta">
						<span style="display: inline-flex; align-items: center; gap: 4px; color: #64748B;">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
							<span>15–60 Mins</span>
						</span>
						<span style="font-weight: 700; color: #FF851A;">Charter &rarr;</span>
					</div>
				</a>

				<!-- Card 3 -->
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-hub-card">
					<div class="service-hub-badge-row">
						<span class="service-hub-tag">Admissions</span>
						<span class="service-hub-free-pill">
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							<span>Free</span>
						</span>
					</div>
					<h3 class="service-hub-title">Learner Registration & LIS Validation</h3>
					<p class="service-hub-desc">Learner Reference Number (LRN) validation, transferee verification, and basic education enrollment processing.</p>
					<div class="service-hub-meta">
						<span style="display: inline-flex; align-items: center; gap: 4px; color: #64748B;">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
							<span>Same Day</span>
						</span>
						<span style="font-weight: 700; color: #FF851A;">Charter &rarr;</span>
					</div>
				</a>

				<!-- Card 4 -->
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-hub-card">
					<div class="service-hub-badge-row">
						<span class="service-hub-tag">Student Support</span>
						<span class="service-hub-free-pill">
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							<span>Free</span>
						</span>
					</div>
					<h3 class="service-hub-title">Guidance Counseling & Facilities Booking</h3>
					<p class="service-hub-desc">Individual learner guidance, career path consultation, psychological support, and institutional facility booking.</p>
					<div class="service-hub-meta">
						<span style="display: inline-flex; align-items: center; gap: 4px; color: #64748B;">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
							<span>Scheduled</span>
						</span>
						<span style="font-weight: 700; color: #FF851A;">Charter &rarr;</span>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- =========================================================================
	     SECTION 4 — ACADEMIC PROGRAMS & CURRICULUM OFFERINGS
	     ========================================================================= -->
	<section id="programs" style="background: var(--page-bg); padding: 5rem 0; border-bottom: 1px solid var(--border-color);">
		<div class="container">
			<div style="max-width: 960px; margin: 0 auto 2rem; display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
				<div>
					<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">CURRICULUM OFFERINGS</span>
					<h2 class="section-title-navy">Academic Programs (Grades 7–12)</h2>
					<p style="font-size: 13.5px; color: #64748B; margin-top: 0.35rem;">Comprehensive Junior High foundations and Senior High School specialized tracks.</p>
				</div>
				<button class="open-beef-btn" style="background: transparent; border: none; cursor: pointer; color: #FF851A; font-weight: 700; display: flex; align-items: center; gap: 0.25rem; font-size: 13px; font-family: inherit;">
					<span>Enrollment Prerequisites & Forms</span>
					<span>&rarr;</span>
				</button>
			</div>

			<!-- Junior High Highlight Card -->
			<div class="jhs-highlight-card">
				<div style="max-width: 680px;">
					<div style="display: inline-flex; align-items: center; gap: 6px; background: #EFF6FF; color: #102A57; padding: 3px 10px; border-radius: 6px; font-weight: 700; font-size: 11px; margin-bottom: 0.5rem; text-transform: uppercase; border: 1px solid #DBEAFE;">
						<span>Junior High School · Grades 7 to 10</span>
					</div>
					<h3 style="font-size: 18px; font-weight: 700; color: #102A57; margin-bottom: 0.25rem;">Standard DepEd Basic Secondary Curriculum</h3>
					<p style="font-size: 13px; color: #475569; line-height: 1.6;">Rigorous instruction in English, Science, Mathematics, Filipino, Araling Panlipunan, Values Education (EsP), MAPEH, and Technology & Livelihood Education (TLE).</p>
				</div>
				<button class="btn-hero-primary open-beef-btn" style="border: none; cursor: pointer; font-size: 13px; padding: 10px 20px; font-family: inherit;">
					<span>Enroll in Junior High</span>
				</button>
			</div>

			<!-- Senior High 2 Offerings Grid (Academic & Tech-Pro) -->
			<div class="programs-grid">
				<!-- Offering 1: Academic Track -->
				<div class="program-card-item">
					<div class="program-img-wrap">
						<img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&h=320&fit=crop&auto=format" alt="Academic Track Senior High School">
						<div class="program-img-overlay">
							<span class="program-dept-name">Academic Track</span>
						</div>
					</div>
					<div class="program-card-body">
						<h3 class="program-title">Academic Track</h3>
						<p class="program-desc">Comprehensive university preparation cultivating critical thinking, scientific inquiry, communication mastery, and foundational research for higher education and professional degree programs.</p>
						<div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px solid #F1F5F9; display: flex; justify-content: space-between; align-items: center;">
							<span style="font-size: 11px; font-weight: 700; color: #102A57;">Pathways: University Degrees & Higher Ed</span>
							<button class="strand-details-btn" data-strand="academic" style="background: transparent; border: none; cursor: pointer; color: #FF851A; font-weight: 700; font-size: 12px; font-family: inherit;">Curriculum &rarr;</button>
						</div>
					</div>
				</div>

				<!-- Offering 2: Tech-Pro Track -->
				<div class="program-card-item">
					<div class="program-img-wrap">
						<img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=600&h=320&fit=crop&auto=format" alt="Tech-Pro Track Technical Workshop">
						<div class="program-img-overlay">
							<span class="program-dept-name">Tech-Voc Track</span>
						</div>
					</div>
					<div class="program-card-body">
						<h3 class="program-title">Tech-Pro Track (TVL)</h3>
						<p class="program-desc">Technical-Vocational-Livelihood & Professional specialization delivering hands-on competency training, workshop mastery, and TESDA National Certificate (NC II/III) qualifications for immediate career readiness.</p>
						<div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px solid #F1F5F9; display: flex; justify-content: space-between; align-items: center;">
							<span style="font-size: 11px; font-weight: 700; color: #102A57;">Pathways: TESDA NC II/III, Tech Careers, Trade</span>
							<button class="strand-details-btn" data-strand="techpro" style="background: transparent; border: none; cursor: pointer; color: #FF851A; font-weight: 700; font-size: 12px; font-family: inherit;">Curriculum &rarr;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================================
	     SECTION 5 — PRINCIPAL'S WELCOME & LEADERSHIP SPOTLIGHT
	     ========================================================================= -->
	<?php
	$mat_i_pr_data = get_option( 'mat_i_principal_settings', array() );
	$pr_badge      = ! empty( $mat_i_pr_data['badge'] ) ? $mat_i_pr_data['badge'] : 'LEADERSHIP & VISION';
	$pr_name       = ! empty( $mat_i_pr_data['name'] ) ? $mat_i_pr_data['name'] : 'MARK DON V. DAGUIMOL';
	$pr_title      = ! empty( $mat_i_pr_data['title'] ) ? $mat_i_pr_data['title'] : 'School Principal · MAT-I NHS';
	$pr_division   = ! empty( $mat_i_pr_data['division'] ) ? $mat_i_pr_data['division'] : 'Department of Education · Division of Misamis Oriental';
	$pr_heading    = ! empty( $mat_i_pr_data['heading'] ) ? $mat_i_pr_data['heading'] : 'Dedicated to Quality Education and Empowered Youth';
	$pr_quote      = ! empty( $mat_i_pr_data['quote'] ) ? $mat_i_pr_data['quote'] : '“At MAT-I National High School, we believe that education is the most transformative instrument for community empowerment. Our mission is to provide an inclusive, safe, and academically stimulating environment where every learner is guided towards critical thinking, moral uprightness, and lifelong excellence.”';
	$pr_image      = ! empty( $mat_i_pr_data['image'] ) ? $mat_i_pr_data['image'] : get_template_directory_uri() . '/assets/images/Mat-i-logo.png';
	$pr_btn1_text  = ! empty( $mat_i_pr_data['btn1_text'] ) ? $mat_i_pr_data['btn1_text'] : 'Meet Our Faculty & Staff (32+ Educators)';
	$pr_btn1_link  = ! empty( $mat_i_pr_data['btn1_link'] ) ? $mat_i_pr_data['btn1_link'] : home_url( '/organigram/' );
	$pr_btn2_text  = ! empty( $mat_i_pr_data['btn2_text'] ) ? $mat_i_pr_data['btn2_text'] : 'Read School History';
	$pr_btn2_link  = ! empty( $mat_i_pr_data['btn2_link'] ) ? $mat_i_pr_data['btn2_link'] : home_url( '/history/' );
	?>
	<section id="principal-spotlight" class="principal-spotlight-section">
		<div class="container">
			<div class="principal-card-box">
				<!-- Principal Identity Wrap -->
				<div class="principal-avatar-wrap">
					<div class="principal-badge-seal">
						<img src="<?php echo esc_url( $pr_image ); ?>" id="principalAvatarImg" alt="Mat-I NHS Official Seal">
					</div>
					<div class="principal-title-name" id="principalName"><?php echo esc_html( $pr_name ); ?></div>
					<div class="principal-role-title" id="principalTitle"><?php echo esc_html( $pr_title ); ?></div>
					<div style="margin-top: 0.5rem; font-size: 12px; color: rgba(255,255,255,0.65);" id="principalDivision"><?php echo esc_html( $pr_division ); ?></div>
				</div>

				<!-- Principal Message -->
				<div>
					<div style="display: flex; align-items: center; gap: 8px;">
						<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;" id="principalBadge"><?php echo esc_html( $pr_badge ); ?></span>
						<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
							<button type="button" class="btn-fast-edit-section" data-section="principal" title="Edit Leadership Message" style="background: rgba(255,133,26,0.9); border: none; color: #FFFFFF; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px;">
								<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
								<span>Edit Principal</span>
							</button>
						<?php endif; ?>
					</div>
					<h2 id="principalHeading" style="font-size: clamp(22px, 2.5vw, 28px); font-weight: 800; color: #FFFFFF; margin: 0.35rem 0 1.25rem;"><?php echo esc_html( $pr_heading ); ?></h2>
					<blockquote class="principal-message-text" id="principalQuote">
						<?php echo esc_html( $pr_quote ); ?>
					</blockquote>
					<div style="display: flex; gap: 1rem; flex-wrap: wrap;">
						<a href="<?php echo esc_url( $pr_btn1_link ); ?>" class="btn-hero-primary" id="principalBtn1" style="font-size: 13px;">
							<span><?php echo esc_html( $pr_btn1_text ); ?></span>
							<span>&rarr;</span>
						</a>
						<a href="<?php echo esc_url( $pr_btn2_link ); ?>" class="btn-hero-secondary" id="principalBtn2" style="font-size: 13px;">
							<span><?php echo esc_html( $pr_btn2_text ); ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================================
	     SECTION 6 — NEWS & OFFICIAL BULLETINS
	     ========================================================================= -->
	<section id="news" class="news-section-bg">
		<div class="container">
			<div style="display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
				<div>
					<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">OFFICIAL BULLETIN</span>
					<div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
						<h2 class="section-title-navy" style="margin-bottom: 0;">News & Announcements</h2>
						<?php if ( current_user_can( 'edit_posts' ) ) : ?>
							<button type="button" id="openAddNewsModalBtn" class="btn-pill-enroll" style="background: #102A57; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 5px; font-size: 11.5px; padding: 5px 12px; font-family: inherit;" title="Post an announcement directly">
								<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
								<span>+ Add News</span>
							</button>
						<?php endif; ?>
					</div>
					<p style="font-size: 13.5px; color: #64748B; margin-top: 0.35rem;">Latest institutional advisories, academic schedules, and student achievements.</p>
				</div>
				<!-- Search Bar -->
				<div style="position: relative; width: 100%; max-width: 280px;">
					<input type="text" id="newsSearchInput" placeholder="Search bulletins..." style="width: 100%; padding: 8px 12px 8px 34px; font-size: 13px; border: 1px solid #CBD5E1; border-radius: 8px; outline: none; background: #FFFFFF; font-family: inherit;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); pointer-events: none;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
				</div>
			</div>

			<!-- Category Filter Pills -->
			<div class="news-filter-pills-row" style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 2rem;">
				<button class="news-filter-btn active" data-category="all">All Updates</button>
				<button class="news-filter-btn" data-category="Admissions">Admissions</button>
				<button class="news-filter-btn" data-category="Academic Fair">Academic Fair</button>
				<button class="news-filter-btn" data-category="Student Honors">Student Honors</button>
				<button class="news-filter-btn" data-category="Faculty Research">Faculty Research</button>
				<button class="news-filter-btn" data-category="Facilities">Facilities</button>
			</div>

			<div class="news-cards-grid" id="newsCardsGrid">
				<?php
				$news_query = new WP_Query( array(
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'posts_per_page' => 15,
				) );

				if ( $news_query->have_posts() ) :
					while ( $news_query->have_posts() ) : $news_query->the_post();
						$post_id    = get_the_ID();
						$categories = get_the_category();
						$cat_name   = ! empty( $categories ) ? $categories[0]->name : 'General News';
						$image_meta = get_post_meta( $post_id, '_news_image_url', true );
						if ( ! empty( $image_meta ) ) {
							$image_url = $image_meta;
						} elseif ( has_post_thumbnail() ) {
							$image_url = get_the_post_thumbnail_url( $post_id, 'medium_large' );
						} else {
							$image_url = 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=crop&auto=format';
						}
						$full_content = get_the_content();
						$excerpt      = wp_trim_words( $full_content, 22, '...' );
				?>
						<article class="news-card-item" id="news-card-<?php echo esc_attr( $post_id ); ?>" data-id="<?php echo esc_attr( $post_id ); ?>" data-category="<?php echo esc_attr( $cat_name ); ?>">
							<div class="news-card-img-wrap">
								<img src="<?php echo esc_url( $image_url ); ?>" class="news-card-img" alt="<?php the_title_attribute(); ?>">
								<span class="news-cat-badge"><?php echo esc_html( $cat_name ); ?></span>
								<?php if ( current_user_can( 'edit_posts' ) ) : ?>
									<div class="news-admin-actions">
										<button type="button" class="btn-news-ctrl btn-news-edit" data-id="<?php echo esc_attr( $post_id ); ?>" title="Edit this announcement">
											<svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
											<span>Edit</span>
										</button>
										<button type="button" class="btn-news-ctrl btn-news-delete" data-id="<?php echo esc_attr( $post_id ); ?>" title="Delete this announcement">
											<svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
											<span>Delete</span>
										</button>
									</div>
								<?php endif; ?>
							</div>
							<div class="news-card-body">
								<h3 class="news-card-title"><?php the_title(); ?></h3>
								<p class="news-card-text"><?php echo esc_html( $excerpt ); ?></p>
								<div class="news-card-full-content" style="display: none;"><?php echo esc_html( $full_content ); ?></div>
								<div class="news-card-footer">
									<span class="news-card-date"><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></span>
									<a href="<?php the_permalink(); ?>" class="news-card-link">Read More &rarr;</a>
								</div>
							</div>
						</article>
				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
			
			<div id="noNewsFound" style="display: none; text-align: center; padding: 2rem; color: #64748B; font-size: 14px;">
				No bulletins match your filter or search query.
			</div>

			<!-- View All News & Bulletins Link -->
			<div style="margin-top: 2.75rem; text-align: center;">
				<a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="btn-all-news" style="box-shadow: 0 4px 14px rgba(16, 42, 87, 0.08);">
					<span>View All Bulletins & Archive</span>
					<span style="color: #FF851A;">&rarr;</span>
				</a>
			</div>
		</div>
	</section>

	<!-- =========================================================================
	     SECTION 7 — ADMISSIONS & 4-STEP ENROLLMENT GUIDE
	     ========================================================================= -->
	<?php
	$mat_i_adm_data = get_option( 'mat_i_admissions_settings', array() );
	$adm_badge      = ! empty( $mat_i_adm_data['badge'] ) ? $mat_i_adm_data['badge'] : 'OFFICIAL ADMISSIONS';
	$adm_title      = ! empty( $mat_i_adm_data['title'] ) ? $mat_i_adm_data['title'] : 'Enroll at MAT-I National High School';
	$adm_desc       = ! empty( $mat_i_adm_data['description'] ) ? $mat_i_adm_data['description'] : 'Join a nurturing public academic community committed to character formation, scholastic competence, and leadership development.';
	$adm_img        = ! empty( $mat_i_adm_data['image_url'] ) ? $mat_i_adm_data['image_url'] : 'https://images.unsplash.com/photo-1736496503629-2d64fafca24e?w=800&h=600&fit=crop&auto=format';
	$adm_steps      = ! empty( $mat_i_adm_data['steps'] ) && is_array( $mat_i_adm_data['steps'] ) ? $mat_i_adm_data['steps'] : array(
		array( 'num' => '1', 'title' => 'Submit BEEF Form', 'desc' => 'Accomplish the official DepEd registration form.' ),
		array( 'num' => '2', 'title' => 'Document Check', 'desc' => 'Present PSA Birth Certificate & Form 138/SF9.' ),
		array( 'num' => '3', 'title' => 'Strand Interview', 'desc' => 'Career profiling for Senior High applicants.' ),
		array( 'num' => '4', 'title' => 'Section Assignment', 'desc' => 'Receive official certificate of enrollment.' ),
	);
	?>
	<section id="enroll" class="enrollment-panel-grid">
		<div class="enrollment-left-img" id="enrollmentBgImg" style="background-image: url('<?php echo esc_url( $adm_img ); ?>');">
			<div class="enrollment-img-overlay-tint"></div>
			<div class="enrollment-floating-badge">
				<div class="enrollment-badge-pulse-row">
					<span class="enrollment-pulse-dot"></span>
					<span class="enrollment-pulse-text">S.Y. 2025–2026 Admissions Open</span>
				</div>
				<div class="enrollment-badge-sub">DepEd Free Secondary Public Education · No Collection Policy</div>
			</div>
		</div>
		<div class="enrollment-right-navy">
			<div style="display: flex; align-items: center; gap: 8px; margin-bottom: 0.4rem;">
				<span style="color: #FF851A; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;" id="admissionsBadge"><?php echo esc_html( $adm_badge ); ?></span>
				<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
					<button type="button" class="btn-fast-edit-section" data-section="admissions" title="Edit Admissions Process" style="background: rgba(255,133,26,0.9); border: none; color: #FFFFFF; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 9999px; cursor: pointer; display: inline-flex; align-items: center; gap: 4px;">
						<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
						<span>Edit Admissions</span>
					</button>
				<?php endif; ?>
			</div>
			<h2 id="admissionsTitle" style="font-size: clamp(22px, 3vw, 32px); font-weight: 700; color: #FFFFFF; line-height: 1.25; margin-bottom: 0.85rem;"><?php echo esc_html( $adm_title ); ?></h2>
			<p id="admissionsDesc" style="color: rgba(255,255,255,0.85); font-size: 14px; line-height: 1.6; margin-bottom: 1.5rem; max-width: 540px;">
				<?php echo esc_html( $adm_desc ); ?>
			</p>

			<!-- 4-Step On-Page Visual Pathway (2x2 Grid with Interactive Triggers) -->
			<div class="enroll-steps-grid enroll-steps-2x2" id="admissionsStepsGrid">
				<?php foreach ( $adm_steps as $step_idx => $step ) :
					$step_num = ! empty( $step['num'] ) ? $step['num'] : ( $step_idx + 1 );
					$is_beef   = ( '1' == $step_num );
					$is_strand = ( '3' == $step_num );
					$extra_class = $is_beef ? 'open-beef-btn' : ( $is_strand ? 'strand-details-btn' : '' );
					$extra_attr  = $is_strand ? 'data-strand="academic"' : '';
				?>
					<div class="enroll-step-item <?php echo esc_attr( $extra_class ); ?>" <?php echo $extra_attr; ?> <?php if ( $is_beef || $is_strand ) echo 'role="button" tabindex="0" title="Click to view details"'; ?>>
						<div class="enroll-step-header">
							<div class="enroll-step-num"><?php echo esc_html( $step_num ); ?></div>
							<?php if ( $is_beef ) : ?>
								<span class="enroll-step-action-tag">Open Form &rarr;</span>
							<?php elseif ( $is_strand ) : ?>
								<span class="enroll-step-action-tag">View Tracks &rarr;</span>
							<?php endif; ?>
						</div>
						<div class="enroll-step-title"><?php echo esc_html( $step['title'] ); ?></div>
						<div class="enroll-step-desc"><?php echo esc_html( $step['desc'] ); ?></div>
					</div>
				<?php endforeach; ?>
			</div>

			<div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 1rem;">
				<button class="btn-hero-primary open-beef-btn" style="border: none; cursor: pointer; font-family: inherit;">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
					<span>Download BEEF Form & Checklist</span>
				</button>
				<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="btn-hero-secondary">View School Profile</a>
			</div>
		</div>
	</section>

	<!-- =========================================================================
	     MODAL 1: STRAND CURRICULUM MODAL
	     ========================================================================= -->
	<div id="strandModal" class="mat-modal-backdrop hidden" aria-hidden="true" role="dialog">
		<div class="mat-modal-box">
			<div class="mat-modal-header">
				<div>
					<span id="modalTrackBadge" class="modal-dept-badge">Academic Track</span>
					<h3 id="modalStrandTitle" class="modal-title-text">STEM Strand</h3>
				</div>
				<button id="closeStrandModal" class="mat-modal-close" aria-label="Close modal">&times;</button>
			</div>
			<div class="mat-modal-body">
				<p id="modalStrandDesc" style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 1.25rem;"></p>
				
				<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Specialized Strand Subjects</h4>
				<ul id="modalSpecializedSubjects" class="modal-subjects-list" style="margin-bottom: 1.25rem;"></ul>

				<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Career & College Pathways</h4>
				<p id="modalPathways" style="font-size: 13.5px; color: #334155; line-height: 1.6; margin-bottom: 1.5rem;"></p>
			</div>
			<div class="mat-modal-footer">
				<button class="btn-hero-primary open-beef-btn" style="border: none; cursor: pointer; padding: 8px 16px; font-size: 13px; font-family: inherit;">Proceed to Enrollment</button>
			</div>
		</div>
	</div>

	<!-- =========================================================================
	     MODAL 2: ADMISSIONS & BEEF FORM MODAL
	     ========================================================================= -->
	<div id="beefModal" class="mat-modal-backdrop hidden" aria-hidden="true" role="dialog">
		<div class="mat-modal-box">
			<div class="mat-modal-header">
				<div>
					<span class="modal-dept-badge">DepEd Official Form</span>
					<h3 class="modal-title-text">Basic Education Enrollment Form (BEEF)</h3>
				</div>
				<button id="closeBeefModal" class="mat-modal-close" aria-label="Close modal">&times;</button>
			</div>
			<div class="mat-modal-body">
				<div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 10px; padding: 1rem; margin-bottom: 1.25rem;">
					<div style="font-weight: 700; font-size: 13.5px; color: #102A57; margin-bottom: 0.25rem;">MAT-I National High School</div>
					<div style="font-size: 12.5px; color: #64748B;">Department of Education · Division of Misamis Oriental · Claveria</div>
				</div>

				<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">Document Checklist (Incoming Grade 7 & SHS)</h4>
				<ul class="modal-subjects-list" style="margin-bottom: 1.25rem;">
					<li>PSA Authenticated Birth Certificate (Original & 2 Photocopies)</li>
					<li>SF9 / Form 138 (Final Report Card with Learner Reference Number — LRN)</li>
					<li>Certificate of Good Moral Character from previous school</li>
					<li>2 pcs 2x2 Recent ID Pictures (White background with nametag)</li>
					<li>Duly accomplished DepEd BEEF Registration Form</li>
				</ul>

				<h4 style="font-size: 13px; font-weight: 700; color: #102A57; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem;">4-Step Enrollment Process</h4>
				<ol style="font-size: 13px; color: #475569; padding-left: 1.25rem; line-height: 1.7; margin: 0;">
					<li><strong>Form Submission:</strong> Accomplish and submit the BEEF form online or at the Registrar's Office.</li>
					<li><strong>Document Verification:</strong> Present credentials for LIS LRN validation.</li>
					<li><strong>Strand Assessment:</strong> Senior High learners undergo strand interview and guidance profiling.</li>
					<li><strong>Section Assignment:</strong> Receive official Certificate of Enrollment and class schedule.</li>
				</ol>
			</div>
			<div class="mat-modal-footer" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 0.5rem;">
				<span style="font-size: 12px; color: #64748B;">Registrar: mat-i.nhs@deped.gov.ph</span>
				<button onclick="window.print()" class="btn-hero-primary" style="border: none; cursor: pointer; padding: 8px 16px; font-size: 13px; font-family: inherit; display: inline-flex; align-items: center; gap: 6px;">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
					<span>Print Checklist / Form</span>
				</button>
			</div>
		</div>
	</div>

	<?php if ( current_user_can( 'edit_posts' ) ) : ?>
	<!-- =========================================================================
	     MODAL 3: INLINE NEWS BULLETIN EDITOR MODAL (ADMIN)
	     ========================================================================= -->
	<div id="newsAdminModal" class="mat-modal-backdrop hidden" aria-hidden="true" role="dialog">
		<div class="mat-modal-box news-admin-modal-box">
			<div class="mat-modal-header" style="align-items: center;">
				<div>
					<span id="newsModalActionBadge" class="modal-dept-badge">Create Announcement</span>
					<h3 id="newsModalTitle" class="modal-title-text">Add School Bulletin</h3>
				</div>
				<button type="button" id="closeNewsModal" class="mat-modal-close" aria-label="Close modal">&times;</button>
			</div>
			<form id="newsAdminForm" class="news-admin-form">
				<input type="hidden" id="newsFormPostId" name="post_id" value="">
				<div class="mat-modal-body" style="display: flex; flex-direction: column; gap: 1rem; padding: 1.25rem 1.5rem;">
					
					<!-- Title -->
					<div class="form-field-group">
						<label for="newsFormTitle" class="news-form-label">Bulletin Title <span style="color: #EF4444;">*</span></label>
						<input type="text" id="newsFormTitle" name="title" required placeholder="e.g., Enrollment for S.Y. 2025–2026 Now Open" class="news-form-input">
					</div>

					<!-- Category & Image URL Row -->
					<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
						<div class="form-field-group">
							<label for="newsFormCategory" class="news-form-label">Category</label>
							<select id="newsFormCategory" name="category" class="news-form-select">
								<option value="Admissions">Admissions</option>
								<option value="Academic Fair">Academic Fair</option>
								<option value="Student Honors">Student Honors</option>
								<option value="Faculty Research">Faculty Research</option>
								<option value="Facilities">Facilities</option>
								<option value="General News">General News</option>
							</select>
						</div>
						<div class="form-field-group">
							<label for="newsFormImageUrl" class="news-form-label">Cover Image URL (Optional)</label>
							<input type="url" id="newsFormImageUrl" name="image_url" placeholder="https://..." class="news-form-input">
						</div>
					</div>

					<!-- Content / Summary -->
					<div class="form-field-group">
						<label for="newsFormContent" class="news-form-label">Announcement Description / Details <span style="color: #EF4444;">*</span></label>
						<textarea id="newsFormContent" name="content" rows="4" required placeholder="Enter the official school advisory, updates, or details here..." class="news-form-textarea"></textarea>
					</div>

				</div>

				<div class="mat-modal-footer" style="display: flex; justify-content: flex-end; align-items: center; gap: 0.75rem; padding: 1rem 1.5rem; background: #F8FAFC; border-top: 1px solid #E2E8F0; border-radius: 0 0 16px 16px;">
					<button type="button" id="cancelNewsModalBtn" class="btn-news-cancel">Cancel</button>
					<button type="submit" id="saveNewsSubmitBtn" class="btn-news-save">
						<span id="saveNewsBtnText">Save Bulletin</span>
						<span id="saveNewsBtnSpinner" class="btn-spinner hidden"></span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Floating Toast Alert -->
	<div id="matIToast" class="mat-toast mat-toast-success">
		<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
		<span id="matIToastMessage">Announcement saved successfully!</span>
	</div>
	<?php endif; ?>

</main><!-- #main -->

<?php
get_footer();
