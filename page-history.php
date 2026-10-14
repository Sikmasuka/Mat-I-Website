<?php
/**
 * Template Name: School History & Heritage
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- 1. HERO BANNER -->
	<section class="history-hero-section">
		<div class="history-hero-grid-pattern"></div>

		<div class="container" style="position: relative; z-index: 2;">
			<!-- Breadcrumbs -->
			<nav aria-label="Breadcrumb" class="history-breadcrumbs">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="separator">/</span>
				<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Us</a>
				<span class="separator">/</span>
				<span class="active-crumb">History & Heritage</span>
			</nav>

			<div style="max-width: 820px;">
				<div class="history-hero-badge">
					<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
					<span>Institutional Legacy</span>
				</div>
				<h1 class="history-hero-title">
					The History & Heritage of <br><span class="text-gradient-emerald">Mat-I National High School</span>
				</h1>
				<p class="history-hero-lead">
					Trace the inspiring four-decade journey of Mat-I NHS from its humble founding in 1980 to becoming a leading public educational institution in the municipality of Claveria.
				</p>
			</div>
		</div>
	</section>

	<!-- 2. MAIN CONTENT -->
	<div class="history-page-wrapper">
		<div class="container">

			<!-- Narrative Overview Card -->
			<div class="history-narrative-card">
				<div class="timeline-pill">
					<span>Historical Narrative</span>
				</div>
				<h2 style="font-family: 'Poppins', sans-serif; font-size: clamp(20px, 2.5vw, 26px); font-weight: 800; color: #102A57; margin-bottom: 1rem;">
					A Legacy Built on Community, Resilience, and Service
				</h2>
				<p style="font-size: 14.5px; color: #475569; line-height: 1.8; margin-bottom: 1rem;">
					Mat-I National High School was established in 1980 through the collaborative vision of local community leaders, pioneering educators, and dedicated parents who recognized the pressing need for accessible secondary education in the rural barangays of Claveria, Misamis Oriental.
				</p>
				
				<blockquote class="history-quote-box">
					“Education is the greatest equalizer. What began as makeshift classrooms and a handful of passionate volunteer educators has blossomed into a comprehensive national secondary school molding generations of scholars and community leaders.”
				</blockquote>

				<p style="font-size: 14.5px; color: #475569; line-height: 1.8; margin: 0;">
					Throughout its decades of service under the Department of Education (DepEd), the school has consistently expanded its curriculum, improved state-of-the-art facilities, and championed holistic learner development across academic, athletic, and vocational disciplines.
				</p>
			</div>

			<!-- Chronological Timeline -->
			<div class="timeline-section-header">
				<div class="timeline-pill">
					<span>Chronology of Milestones</span>
				</div>
				<h2 class="timeline-title">Key Milestones (1980 – Present)</h2>
				<p class="timeline-desc">
					Explore the transformative milestones that shaped Mat-I National High School into the reputable institution it is today.
				</p>
			</div>

			<div class="timeline-container">
				
				<!-- Node 1: 1980 -->
				<div class="timeline-node-item">
					<div class="timeline-marker-pin"></div>
					<div class="timeline-card-box">
						<span class="timeline-year-chip">1980</span>
						<h3 class="timeline-card-heading">The Founding Era</h3>
						<p class="timeline-card-text">
							Founded as a community barangay high school to provide secondary education access to youth in Barangay Mat-i and neighboring localities, eliminating the need for perilous daily travel.
						</p>
					</div>
				</div>

				<!-- Node 2: 1992 -->
				<div class="timeline-node-item">
					<div class="timeline-marker-pin"></div>
					<div class="timeline-card-box">
						<span class="timeline-year-chip">1992</span>
						<h3 class="timeline-card-heading">Official Nationalization</h3>
						<p class="timeline-card-text">
							Formally integrated and nationalized under the Department of Education, Culture and Sports (now DepEd). The school received permanent plantilla teacher items and standardized academic funding.
						</p>
					</div>
				</div>

				<!-- Node 3: 2005 -->
				<div class="timeline-node-item">
					<div class="timeline-marker-pin"></div>
					<div class="timeline-card-box">
						<span class="timeline-year-chip">2005</span>
						<h3 class="timeline-card-heading">Campus Infrastructure Expansion</h3>
						<p class="timeline-card-text">
							Construction of multi-story standard concrete school buildings, dedicated science laboratories, and an administrative complex to accommodate rapid enrollment growth.
						</p>
					</div>
				</div>

				<!-- Node 4: 2016 -->
				<div class="timeline-node-item">
					<div class="timeline-marker-pin"></div>
					<div class="timeline-card-box">
						<span class="timeline-year-chip">2016</span>
						<h3 class="timeline-card-heading">Senior High School Implementation</h3>
						<p class="timeline-card-text">
							Successfully launched the K-to-12 Senior High School Program offering full Academic Strands (STEM, HUMSS, ABM) and Technical-Vocational-Livelihood (TVL) specializations with dedicated workshop facilities.
						</p>
					</div>
				</div>

				<!-- Node 5: Present -->
				<div class="timeline-node-item">
					<div class="timeline-marker-pin"></div>
					<div class="timeline-card-box">
						<span class="timeline-year-chip">Present Day</span>
						<h3 class="timeline-card-heading">Digital Transformation & Excellence</h3>
						<p class="timeline-card-text">
							Mat-I NHS now serves over a thousand learners with modern ICT laboratories, research programs, competitive science fair honors, and consistent performance in national achievement assessments.
						</p>
					</div>
				</div>

			</div>

			<!-- Bottom Navigation Links -->
			<div class="organigram-bottom-nav">
				<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="btn-org-primary">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
					<span>Vision & Mission</span>
					<span>&rarr;</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/school-logo/' ) ); ?>" class="btn-org-secondary">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					<span>School Logo & Seal</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/organigram/' ) ); ?>" class="btn-org-secondary">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					<span>Faculty & Organigram</span>
				</a>
			</div>

		</div>
	</div>

</main>

<?php
get_footer();
