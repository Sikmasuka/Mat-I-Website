<?php
/**
 * Template Name: Faculty & Organigram
 *
 * @package Mat-I
 */

get_header();

// Principal / Apex Leader
$principal_name = 'DAGUIMOL, MARK DON V.';

// Admin Staff Personnel
$admin_staff_personnel = array(
	'ANADIA, LUIGI MIGUEL B.',
	'BALAMAN, ALMA E.',
	'SUDARIO, AMELYN C.',
);

// Junior High School Faculty (18 Members)
$jhs_personnel = array(
	'BACTONG, NORMA T.',
	'BALAMAN, ROMNICK C.',
	'CAGAS, VERCEJIL E.',
	'CRISOLOGO, JANIN Y.',
	'EBON, MYLEENE C.',
	'DAHANG, DALIA P.',
	'GALINDEZ, JUDITH F.',
	'GUCOR, MA. LUNA V.',
	'LANCHINEBRE, KRYZL O.',
	'LLIDO, MA. LYN S.',
	'MALINIS, SHIELA MAE D.',
	'NAYVE, BARBARA C.',
	'OGOC, NICKELYN B.',
	'PAGAYAMAN, GERLIE T.',
	'TAGARDA, CHARMAINE RUBY P.',
	'TAGARDA, MILCHISEDIC J.',
	'UBALDE, MAIDA LYNN S.',
	'ZAPORTIZA, JOSEPH B.',
);

// Senior High School Faculty (11 Members)
$shs_personnel = array(
	'ABRIOL, MICHELLE MARISSE L.',
	'BALANGIAO, KENNETH O.',
	'CANATOY, JASMIN JOY S.',
	'CAPITO, CELESTINE B.',
	'DELA CRUZ, VIRGINIA M.',
	'DINLAYAN, MARLENE A.',
	'JABINIAR, LELANIE D.',
	'LANTA, LARIVER G.',
	'NULO, ROSANNA E.',
	'OPENA, MARIANNE JEAN L.',
	'PALIMA, JAY N.',
);

function mat_i_get_short_initials( $name ) {
	$parts = explode( ',', $name );
	if ( ! empty( $parts[0] ) ) {
		$last_initial = substr( trim( $parts[0] ), 0, 1 );
		$first_initial = '';
		if ( isset( $parts[1] ) ) {
			$first_name = trim( $parts[1] );
			$first_initial = substr( $first_name, 0, 1 );
		}
		return strtoupper( $first_initial . $last_initial );
	}
	return 'MN';
}

// Split JHS into 3 vertical streams
$jhs_col1 = array();
$jhs_col2 = array();
$jhs_col3 = array();
foreach ( $jhs_personnel as $index => $p ) {
	if ( $index % 3 === 0 ) {
		$jhs_col1[] = $p;
	} elseif ( $index % 3 === 1 ) {
		$jhs_col2[] = $p;
	} else {
		$jhs_col3[] = $p;
	}
}

// Split SHS into 3 vertical streams
$shs_col1 = array();
$shs_col2 = array();
$shs_col3 = array();
foreach ( $shs_personnel as $index => $p ) {
	if ( $index % 3 === 0 ) {
		$shs_col1[] = $p;
	} elseif ( $index % 3 === 1 ) {
		$shs_col2[] = $p;
	} else {
		$shs_col3[] = $p;
	}
}
?>

<main id="primary" class="site-main organigram-page-main">

	<!-- 1. SCHOOL ORGANIZATIONAL CHART HEADER -->
	<div class="school-org-header-section">
		<div class="container" style="max-width: 1320px;">
			<div class="school-org-header-inner">
				<h1 class="school-org-title">
					MAT-I NATIONAL HIGH SCHOOL ORGANIZATIONAL CHART 2026–2027
				</h1>
			</div>
		</div>
	</div>

	<!-- 2. MAIN ORGANIZATIONAL TREE -->
	<div class="organigram-page-wrapper">
		<div class="container" style="max-width: 1320px;">

			<!-- Search Bar -->
			<div class="org-search-wrap">
				<input type="text" id="personnelSearchInput" class="org-search-input" placeholder="Search faculty or staff member..." autocomplete="off">
				<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); pointer-events: none;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
			</div>

			<!-- PURE TOP VERTICAL CONNECTED CANVAS -->
			<div class="org-tree-canvas">
				<div class="org-tree-flow">

					<!-- LEVEL 1: PRINCIPAL APEX NODE -->
					<div class="level-principal-wrap">
						<div class="org-card card-principal scroll-reveal" data-name="<?php echo esc_attr( strtolower( $principal_name ) ); ?>">
							<div class="org-info">
								<span class="org-role">School Principal I</span>
								<span class="org-name"><?php echo esc_html( $principal_name ); ?></span>
							</div>
						</div>
						<!-- Vertical Stem Line to Admin Crossbar -->
						<div class="stem-vertical"></div>
					</div>

					<!-- LEVEL 2: ADMIN STAFF FORK & ROW (CORNER-TO-CORNER ACCURATE) -->
					<div class="level-admin-branch">
						<div class="admin-cards-row">
							<?php foreach ( $admin_staff_personnel as $name ) : ?>
								<div class="admin-card-col">
									<div class="org-card card-admin scroll-reveal stagger-1" data-name="<?php echo esc_attr( strtolower( $name ) ); ?>">
										<div class="org-info">
											<span class="org-role">Administrative Staff</span>
											<span class="org-name" title="<?php echo esc_attr( $name ); ?>"><?php echo esc_html( $name ); ?></span>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

						<!-- Vertical Center Trunk Line connecting down to Faculty -->
						<div class="admin-to-faculty-trunk"></div>
					</div>

					<!-- LEVEL 3: FACULTY LEVEL (JHS & SHS BRANCHES) -->
					<div class="level-faculty-wrapper">
						<div class="faculty-branches-row">

							<!-- BRANCH A: JUNIOR HIGH SCHOOL -->
							<div class="faculty-dept-col">
								<div class="dept-badge dept-badge-jhs scroll-reveal stagger-2">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
									<span>Junior High School Faculty (<?php echo count( $jhs_personnel ); ?>)</span>
								</div>

								<!-- Vertical line down to JHS grid -->
								<div class="dept-stem-vertical"></div>

								<!-- Responsive Grid (3-Col on Big Screen, 2-Col on Tablet, 1-Col on Mobile) -->
								<div class="dept-columns-grid">
									<?php foreach ( $jhs_personnel as $name ) : ?>
										<div class="faculty-grid-item">
											<div class="org-card card-jhs scroll-reveal" data-name="<?php echo esc_attr( strtolower( $name ) ); ?>">
												<div class="org-info">
													<span class="org-role">JHS Teacher</span>
													<span class="org-name" title="<?php echo esc_attr( $name ); ?>"><?php echo esc_html( $name ); ?></span>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>

							<!-- BRANCH B: SENIOR HIGH SCHOOL -->
							<div class="faculty-dept-col">
								<div class="dept-badge dept-badge-shs scroll-reveal stagger-3">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
									<span>Senior High School Faculty (<?php echo count( $shs_personnel ); ?>)</span>
								</div>

								<!-- Vertical line down to SHS grid -->
								<div class="dept-stem-vertical"></div>

								<!-- Responsive Grid (3-Col on Big Screen, 2-Col on Tablet, 1-Col on Mobile) -->
								<div class="dept-columns-grid">
									<?php foreach ( $shs_personnel as $name ) : ?>
										<div class="faculty-grid-item">
											<div class="org-card card-shs scroll-reveal" data-name="<?php echo esc_attr( strtolower( $name ) ); ?>">
												<div class="org-info">
													<span class="org-role">SHS Teacher</span>
													<span class="org-name" title="<?php echo esc_attr( $name ); ?>"><?php echo esc_html( $name ); ?></span>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<!-- No search results alert -->
			<div id="noPersonnelFound" style="display: none; text-align: center; padding: 2rem 1rem; color: #64748B; font-size: 13.5px;">
				<p style="margin: 0; font-weight: 500;">No personnel found matching your search query.</p>
			</div>

			<!-- Bottom Navigation Links -->
			<div class="organigram-bottom-nav">
				<a href="<?php echo esc_url( home_url( '/mission-vision/' ) ); ?>" class="btn-org-primary">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
					<span>Vision & Mission</span>
					<span>&rarr;</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/history/' ) ); ?>" class="btn-org-secondary">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
					<span>History & Heritage</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/school-logo/' ) ); ?>" class="btn-org-secondary">
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					<span>School Logo & Seal</span>
				</a>
			</div>

		</div>
	</div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
	const searchInput = document.getElementById('personnelSearchInput');
	const allCards = document.querySelectorAll('.org-card');
	const noFound = document.getElementById('noPersonnelFound');

	if (searchInput) {
		searchInput.addEventListener('input', function() {
			const query = this.value.trim().toLowerCase();
			let visibleCount = 0;

			allCards.forEach(card => {
				const name = card.getAttribute('data-name') || '';
				const wrapper = card.closest('.faculty-grid-item') || card.closest('.admin-card-col') || card.closest('.level-principal-wrap');
				if (name.includes(query)) {
					if (wrapper) wrapper.style.display = '';
					card.style.display = '';
					visibleCount++;
				} else {
					if (!card.classList.contains('card-principal') || query !== '') {
						if (wrapper && !card.classList.contains('card-principal')) wrapper.style.display = 'none';
						card.style.display = 'none';
					}
				}
			});

			if (noFound) {
				noFound.style.display = (visibleCount === 0 && query !== '') ? 'block' : 'none';
			}
		});
	}
});
</script>

<?php
get_footer();
