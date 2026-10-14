<?php
/**
 * Template Name: School Logo & Seal
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- 1. HERO BANNER -->
	<section class="logo-hero-section">
		<div class="logo-hero-grid-pattern"></div>
		<div class="logo-hero-glow-emerald"></div>
		<div class="logo-hero-glow-gold"></div>

		<div class="container" style="position: relative; z-index: 2;">
			<!-- Breadcrumbs -->
			<nav aria-label="Breadcrumb" class="logo-breadcrumbs">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="separator">/</span>
				<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Us</a>
				<span class="separator">/</span>
				<span class="active-crumb">School Logo & Seal</span>
			</nav>

			<div style="max-width: 820px;">
				<div class="logo-hero-badge">
					<span class="badge-pulse-dot"></span>
					<span>Institutional Identity</span>
				</div>
				<h1 class="logo-hero-title">
					The Official Seal of <br><span class="text-gradient-emerald">Mat-I National High School</span>
				</h1>
				<p class="logo-hero-lead">
					Discover the symbolic heritage, core philosophy, and enduring ideals reflected within every heraldic element of the Mat-I National High School official emblem.
				</p>
			</div>
		</div>
	</section>

	<!-- 2. MAIN PAGE CONTENT -->
	<div class="logo-page-wrapper">
		<div class="container">

			<!-- EMBLEM SHOWCASE CARD -->
			<section class="emblem-showcase-card">
				<div class="emblem-showcase-grid">
					
					<!-- Left: Seal Visual Stage -->
					<div class="seal-stage-container">
						<div class="seal-stage-rings">
							<div class="seal-ring-outer"></div>
							<div class="seal-ring-inner"></div>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>" alt="Official Seal of Mat-I National High School" class="seal-stage-img">
						</div>

						<div class="seal-stage-actions">
							<a href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Mat-i-logo.png' ); ?>" download="Mat-I-NHS-Official-Logo.png" class="btn-seal-download">
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
								<span>Download Seal</span>
							</a>
							<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="btn-seal-mission">
								<span>Vision & Mission</span>
								<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</a>
						</div>
					</div>

					<!-- Right: Overview & Institutional Significance -->
					<div>
						<div class="showcase-dossier-pill">
							<span>Emblem Significance</span>
						</div>
						<h2 class="showcase-dossier-heading">
							The Official Seal of Mat-I National High School
						</h2>
						<p class="showcase-lead-para">
							The official seal of Mat-i National High School embodies the institution's commitment to providing quality education, fostering holistic development, and producing learners who are academically competent, morally upright, and socially responsible.
						</p>
						<p class="showcase-sub-para">
							Every element of the seal carries a symbolic meaning that reflects the school's vision, mission, history, and aspirations for the youth of Claveria, Misamis Oriental, and the Philippines.
						</p>

						<!-- Key Institutional Facts -->
						<div class="emblem-metadata-strip">
							<div class="metadata-chip-item">
								<span class="metadata-chip-label">Institution</span>
								<span class="metadata-chip-value">Mat-I NHS</span>
							</div>
							<div class="metadata-chip-item">
								<span class="metadata-chip-label">Established</span>
								<span class="metadata-chip-value">1980</span>
							</div>
							<div class="metadata-chip-item">
								<span class="metadata-chip-label">Jurisdiction</span>
								<span class="metadata-chip-value">Claveria, Mis. Or.</span>
							</div>
							<div class="metadata-chip-item">
								<span class="metadata-chip-label">Governance</span>
								<span class="metadata-chip-value">DepEd Philippines</span>
							</div>
						</div>
					</div>

				</div>
			</section>

			<!-- 3. MEANING OF EACH SYMBOL (4-COLUMN x 2-ROW GRID) -->
			<section>
				<div class="symbols-section-header">
					<div class="symbols-section-pill">
						<span>Heraldic Analysis</span>
					</div>
					<h2 class="symbols-section-title">
						Meaning of Each Symbol
					</h2>
					<p class="symbols-section-desc">
						An in-depth explanation of the heraldic components, iconography, and colors comprising the institutional seal.
					</p>
				</div>

				<div class="symbols-grid-4col">
					
					<!-- Row 1, Card 1: Scalloped Maroon Outer Border -->
					<article class="heraldic-card card-theme-maroon">
						<div class="heraldic-watermark">01</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">01</span>
							<span class="heraldic-category-tag">Outer Design</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">Scalloped Maroon Outer Border</h3>
							<p class="heraldic-symbol-text">
								The maroon, scalloped border symbolizes strength, resilience, and excellence. Its seal-like design represents the school's authority, integrity, and enduring commitment to upholding high standards in education. The maroon color also signifies courage, determination, and the passion of the entire school community in pursuing academic and personal excellence.
							</p>
						</div>
					</article>

					<!-- Row 1, Card 2: School Name -->
					<article class="heraldic-card card-theme-navy">
						<div class="heraldic-watermark">02</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">02</span>
							<span class="heraldic-category-tag">Institutional Identity</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">"MATI NATIONAL HIGH SCHOOL"</h3>
							<p class="heraldic-symbol-text">
								The school name prominently displayed around the seal signifies the institution's identity and pride. It serves as a reminder that every learner, teacher, alumnus, and stakeholder belongs to a community united by shared values, traditions, and aspirations.
							</p>
						</div>
					</article>

					<!-- Row 1, Card 3: Rising Sun and Rays -->
					<article class="heraldic-card card-theme-amber">
						<div class="heraldic-watermark">03</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">03</span>
							<span class="heraldic-category-tag">Illumination</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">Rising Sun and Rays</h3>
							<p class="heraldic-symbol-text">
								The rising sun represents hope, enlightenment, and new beginnings. Its radiant rays symbolize the knowledge, wisdom, and opportunities that education provides. Each day at Mati National High School is viewed as a new opportunity for learners to grow intellectually, emotionally, socially, and morally.
							</p>
						</div>
					</article>

					<!-- Row 1, Card 4: Open Book -->
					<article class="heraldic-card card-theme-blue">
						<div class="heraldic-watermark">04</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">04</span>
							<span class="heraldic-category-tag">Wisdom & Learning</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">Open Book</h3>
							<p class="heraldic-symbol-text">
								The open book is the universal symbol of education, learning, and the pursuit of knowledge. It represents the school's dedication to academic excellence, lifelong learning, critical thinking, and the continuous search for truth. The open pages also signify openness to innovation, discovery, and diverse perspectives.
							</p>
						</div>
					</article>

					<!-- Row 2, Card 5: Torch -->
					<article class="heraldic-card card-theme-red">
						<div class="heraldic-watermark">05</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">05</span>
							<span class="heraldic-category-tag">Inspiration</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">Torch</h3>
							<p class="heraldic-symbol-text">
								The torch symbolizes the light of knowledge, truth, and wisdom. It reflects the school's mission to ignite the minds of learners through quality education and to empower them to become responsible citizens and future leaders. The burning flame represents inspiration, perseverance, and the unwavering pursuit of excellence.
							</p>
						</div>
					</article>

					<!-- Row 2, Card 6: Green Laurel Branches -->
					<article class="heraldic-card card-theme-green">
						<div class="heraldic-watermark">06</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">06</span>
							<span class="heraldic-category-tag">Honor & Victory</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">Green Laurel Branches</h3>
							<p class="heraldic-symbol-text">
								The pair of green laurel branches symbolizes achievement, honor, peace, and success. Traditionally associated with victory, the laurel represents the accomplishments of the school's students, faculty, alumni, and the entire Mat-i National High School community. The green color also reflects growth, hope, and continuous development.
							</p>
						</div>
					</article>

					<!-- Row 2, Card 7: The Year "1980" -->
					<article class="heraldic-card card-theme-purple">
						<div class="heraldic-watermark">07</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">07</span>
							<span class="heraldic-category-tag">Founding Legacy</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">The Year "1980"</h3>
							<p class="heraldic-symbol-text">
								The inscription 1980 commemorates the year of the school's establishment. It serves as a tribute to the generations of educators, learners, and stakeholders who have contributed to the institution's growth and enduring legacy in providing quality public education.
							</p>
						</div>
					</article>

					<!-- Row 2, Card 8: Location -->
					<article class="heraldic-card card-theme-sky">
						<div class="heraldic-watermark">08</div>
						<div class="heraldic-card-header">
							<span class="heraldic-num-badge">08</span>
							<span class="heraldic-category-tag">Community Roots</span>
						</div>
						<div class="heraldic-card-body">
							<h3 class="heraldic-symbol-name">"CLAVERIA, MIS. OR."</h3>
							<p class="heraldic-symbol-text">
								The location proudly identifies the school as an educational institution serving the municipality of Claveria, Misamis Oriental. It reflects the school's strong connection with the local community and its commitment to contributing to the educational, social, and economic development of the municipality.
							</p>
						</div>
					</article>

				</div>
			</section>

			<!-- 4. SYNTHESIS CARD ("THE SEAL AS A WHOLE") -->
			<section class="seal-synthesis-box">
				<div class="synthesis-bg-glow"></div>

				<div class="synthesis-inner-content">
					<div class="synthesis-badge">
						<span>Institutional Synthesis</span>
					</div>
					
					<h2 class="synthesis-heading">
						The Seal as a Whole
					</h2>

					<p class="synthesis-quote-body">
						The official seal of Mat-i National High School represents a community dedicated to academic excellence, character formation, and lifelong learning. The harmonious combination of the torch, open book, rising sun, laurel branches, and institutional seal reflects the school's commitment to nurturing learners who are knowledgeable, ethical, resilient, and prepared to meet the challenges of an ever-changing world.
					</p>

					<p class="synthesis-quote-tail">
						More than an emblem, the seal stands as a symbol of the school's enduring mission to illuminate minds, cultivate values, celebrate achievements, and inspire every learner to become productive citizens who contribute meaningfully to their families, communities, and the nation.
					</p>

					<div class="synthesis-action-row">
						<a href="<?php echo esc_url( home_url( '/#enroll' ) ); ?>" class="btn-synthesis-enroll">
							<span>Enroll at Mat-I NHS</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
						</a>
						<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="btn-synthesis-secondary">
							<span>View Vision & Mission</span>
						</a>
					</div>
				</div>
			</section>

		</div>
	</div>

</main>

<?php
get_footer();
