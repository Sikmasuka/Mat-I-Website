<?php
/**
 * CMS Content Defaults & Initial Data Seeder
 *
 * Populates native wp_options with existing website content on first boot.
 * Ensures zero downtime, safe defaults, and complete offline independence.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Seed all default CMS settings if not already seeded.
 */
function mat_i_seed_cms_defaults() {
	if ( get_option( 'mat_i_cms_seeded_v1' ) ) {
		return;
	}

	$theme_uri = get_template_directory_uri();

	// 1. Global Site Settings (Contact, Socials, Header & Footer info)
	if ( ! get_option( 'mat_i_global_settings' ) ) {
		$global_defaults = array(
			'school_name'     => 'MAT-I National High School',
			'deped_subtitle'  => 'Department of Education · Division of Misamis Oriental',
			'division_region' => 'Region X · Division of Misamis Oriental',
			'phone'           => '09606255099',
			'email'           => 'mat-i.nhs@deped.gov.ph',
			'office_hours'    => 'Mon–Fri: 8:00 AM – 5:00 PM',
			'campus_address'  => 'Mat-I, Claveria, Misamis Oriental, 9004 Philippines',
			'map_embed_url'   => 'https://maps.google.com/maps?q=Claveria%20Misamis%20Oriental&t=&z=13&ie=UTF8&iwloc=&output=embed',
			'facebook_url'    => 'https://facebook.com',
			'twitter_url'     => 'https://twitter.com',
			'instagram_url'   => 'https://instagram.com',
			'youtube_url'     => 'https://youtube.com',
			'footer_about'    => 'Providing holistic secondary education to empower young minds towards academic competence, moral integrity, and community empowerment.',
			'copyright_text'  => '© ' . gmdate( 'Y' ) . ' MAT-I National High School · Republic of the Philippines Department of Education. All Rights Reserved.',
		);
		add_option( 'mat_i_global_settings', $global_defaults, '', 'no' );
	}

	// 2. Hero Section Settings
	if ( ! get_option( 'mat_i_hero_settings' ) ) {
		$hero_defaults = array(
			'badge'          => 'Welcome to MAT-I NHS · DepEd Region X',
			'headline'       => "Shaping Leaders,\nBuilding Futures",
			'paragraph'      => 'MAT-I National High School provides quality, accessible, and relevant basic secondary education committed to academic competence, moral integrity, and community empowerment in Claveria, Misamis Oriental.',
			'banner_image'   => $theme_uri . '/assets/images/hero.jpg',
			'seal_badge'     => 'DepEd Division of Misamis Oriental',
			'cta1_text'      => 'Enrollment Guidelines',
			'cta1_link'      => '#enroll',
			'cta2_text'      => 'Academic Offerings',
			'cta2_link'      => '#programs',
			'cta3_text'      => 'School Services',
			'cta3_link'      => home_url( '/services/' ),
			'stat1_number'   => '1980',
			'stat1_label'    => 'Year Established',
			'stat2_number'   => 'Grades 7–12',
			'stat2_label'    => 'Junior & Senior High',
			'stat3_number'   => '4 Strands',
			'stat3_label'    => 'STEM · HUMSS · ABM · TVL',
		);
		add_option( 'mat_i_hero_settings', $hero_defaults, '', 'no' );
	}

	// 3. Section 2: DepEd Core Values & Institutional Pillars
	if ( ! get_option( 'mat_i_core_values' ) ) {
		$core_values_defaults = array(
			'badge'       => 'FOUNDATION OF CHARACTER',
			'heading'     => 'DepEd Core Values & Institutional Legacy',
			'description' => 'Nurturing every Mat-Inians with holistic competencies, ethical discipline, and unwavering civic dedication.',
			'values'      => array(
				array(
					'key'   => 'diyos',
					'title' => 'Maka-Diyos',
					'desc'  => 'Cultivating spiritual grounding, moral discernment, truthfulness, and ethical responsibility in daily school life.',
				),
				array(
					'key'   => 'tao',
					'title' => 'Makatao',
					'desc'  => 'Fostering empathy, inclusivity, peer respect, and collaborative spirit that celebrates diverse learner potentials.',
				),
				array(
					'key'   => 'kalikasan',
					'title' => 'Makakalikasan',
					'desc'  => 'Championing ecological stewardship, clean energy habits, campus greening, and community disaster preparedness.',
				),
				array(
					'key'   => 'bansa',
					'title' => 'Makabansa',
					'desc'  => 'Inspiring national pride, cultural appreciation, civic awareness, and selfless service to the Filipino nation.',
				),
			),
			'links_label' => 'Explore MAT-I National High School:',
			'links'       => array(
				array(
					'label' => 'Vision & Mission',
					'url'   => home_url( '/mission-vision/' ),
				),
				array(
					'label' => 'School History (1980)',
					'url'   => home_url( '/history/' ),
				),
				array(
					'label' => 'School Seal & Logo',
					'url'   => home_url( '/school-logo/' ),
				),
				array(
					'label' => 'Faculty & Organigram',
					'url'   => home_url( '/organigram/' ),
				),
			),
		);
		add_option( 'mat_i_core_values', $core_values_defaults, '', 'no' );
	}

	// 4. Section 5: Principal's Welcome & Leadership Spotlight
	if ( ! get_option( 'mat_i_principal_settings' ) ) {
		$principal_defaults = array(
			'badge'          => 'LEADERSHIP & VISION',
			'name'           => 'MARK DON V. DAGUIMOL',
			'title'          => 'School Principal · MAT-I NHS',
			'division'       => 'Department of Education · Division of Misamis Oriental',
			'heading'        => 'Dedicated to Quality Education and Empowered Youth',
			'quote'          => '“At MAT-I National High School, we believe that education is the most transformative instrument for community empowerment. Our mission is to provide an inclusive, safe, and academically stimulating environment where every learner is guided towards critical thinking, moral uprightness, and lifelong excellence.”',
			'image'          => $theme_uri . '/assets/images/Mat-i-logo.png',
			'btn1_text'      => 'Meet Our Faculty & Staff (32+ Educators)',
			'btn1_link'      => home_url( '/organigram/' ),
			'btn2_text'      => 'Read School History',
			'btn2_link'      => home_url( '/history/' ),
		);
		add_option( 'mat_i_principal_settings', $principal_defaults, '', 'no' );
	}

	// 5. Section 7: Admissions & 4-Step Enrollment Guide
	if ( ! get_option( 'mat_i_admissions_settings' ) ) {
		$admissions_defaults = array(
			'badge'       => 'OFFICIAL ADMISSIONS',
			'title'       => 'Enroll at MAT-I National High School',
			'description' => 'Join a nurturing public academic community committed to character formation, scholastic competence, and leadership development.',
			'image_url'   => 'https://images.unsplash.com/photo-1736496503629-2d64fafca24e?w=800&h=600&fit=crop&auto=format',
			'steps'       => array(
				array(
					'num'   => '1',
					'title' => 'Submit BEEF Form',
					'desc'  => 'Accomplish the official DepEd registration form.',
				),
				array(
					'num'   => '2',
					'title' => 'Document Check',
					'desc'  => 'Present PSA Birth Certificate & Form 138/SF9.',
				),
				array(
					'num'   => '3',
					'title' => 'Strand Interview',
					'desc'  => 'Career profiling for Senior High applicants.',
				),
				array(
					'num'   => '4',
					'title' => 'Section Assignment',
					'desc'  => 'Receive official certificate of enrollment.',
				),
			),
			'beef_form_url' => '#beefModal',
		);
		add_option( 'mat_i_admissions_settings', $admissions_defaults, '', 'no' );
	}

	// Mark seeder as executed
	update_option( 'mat_i_cms_seeded_v1', 1, 'no' );
}
add_action( 'after_setup_theme', 'mat_i_seed_cms_defaults' );
