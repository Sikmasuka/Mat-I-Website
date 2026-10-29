<?php
/**
 * Template Name: Campus Gallery
 *
 * Visual showcase of MAT-I National High School campus life,
 * facilities, student activities, and achievements.
 *
 * @package Mat-I
 */

get_header();

// 1. Scan the local gallery directory for uploaded school images
$gallery_dir_path = get_template_directory() . '/assets/images/gallery/';
$gallery_dir_uri  = get_template_directory_uri() . '/assets/images/gallery/';
$local_images     = array();

if ( is_dir( $gallery_dir_path ) ) {
	$scanned_files = glob( $gallery_dir_path . '*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE );
	if ( ! empty( $scanned_files ) ) {
		foreach ( $scanned_files as $filepath ) {
			$filename       = basename( $filepath );
			$local_images[] = $gallery_dir_uri . $filename;
		}
	}
}

// 2. Curated Gallery Showcase Items with Bento Grid Classes
$gallery_items = array(
	array(
		'id'         => 1,
		'title'      => 'MAT-I NHS Main Academic Campus & Grounds',
		'category'   => 'campus',
		'badge'      => 'Campus Grounds',
		'tile_class' => 'tile-featured',
		'date'       => 'S.Y. 2025–2026',
		'image'      => ! empty( $local_images[0] ) ? $local_images[0] : get_template_directory_uri() . '/assets/images/hero.jpg',
	),
	array(
		'id'         => 2,
		'title'      => 'Student Leadership & Community Engagement',
		'category'   => 'activities',
		'badge'      => 'Student Life',
		'tile_class' => 'tile-tall',
		'date'       => 'October 2025',
		'image'      => ! empty( $local_images[1] ) ? $local_images[1] : 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=1000&q=80',
	),
	array(
		'id'         => 3,
		'title'      => 'STEM Science Laboratory & Experiments',
		'category'   => 'academics',
		'badge'      => 'Academic & STEM',
		'tile_class' => 'tile-wide',
		'date'       => 'September 2025',
		'image'      => ! empty( $local_images[2] ) ? $local_images[2] : 'https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?auto=format&fit=crop&w=1000&q=80',
	),
	array(
		'id'         => 4,
		'title'      => 'Annual Commencement & Moving-Up Rites',
		'category'   => 'events',
		'badge'      => 'Events & Rites',
		'tile_class' => 'tile-standard',
		'date'       => 'July 2025',
		'image'      => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1000&q=80',
	),
	array(
		'id'         => 5,
		'title'      => 'Information & Computer Technology Hub',
		'category'   => 'academics',
		'badge'      => 'Technology Hub',
		'tile_class' => 'tile-standard',
		'date'       => 'August 2025',
		'image'      => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1000&q=80',
	),
	array(
		'id'         => 6,
		'title'      => 'Intramural Athletic Meet & Sports Fest',
		'category'   => 'sports',
		'badge'      => 'Sports & Wellness',
		'tile_class' => 'tile-wide',
		'date'       => 'November 2025',
		'image'      => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?auto=format&fit=crop&w=1000&q=80',
	),
	array(
		'id'         => 7,
		'title'      => 'Brigada Eskwela & Stakeholders Day',
		'category'   => 'events',
		'badge'      => 'Community Spirit',
		'tile_class' => 'tile-standard',
		'date'       => 'August 2025',
		'image'      => get_template_directory_uri() . '/assets/images/hero.jpg',
	),
	array(
		'id'         => 8,
		'title'      => 'Cultural Arts, Dance & Music Guild',
		'category'   => 'activities',
		'badge'      => 'Culture & Arts',
		'tile_class' => 'tile-tall',
		'date'       => 'December 2025',
		'image'      => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=1000&q=80',
	),
	array(
		'id'         => 9,
		'title'      => 'Environmental Greening & Tree Planting',
		'category'   => 'campus',
		'badge'      => 'Makakalikasan',
		'tile_class' => 'tile-standard',
		'date'       => 'September 2025',
		'image'      => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=1000&q=80',
	),
);

// If user uploaded additional photos beyond the curated ones, dynamically append them
if ( count( $local_images ) > 3 ) {
	for ( $i = 3; $i < count( $local_images ); $i++ ) {
		$gallery_items[] = array(
			'id'         => count( $gallery_items ) + 1,
			'title'      => 'Campus Photo ' . ( $i + 1 ),
			'category'   => 'campus',
			'badge'      => 'Campus Life',
			'tile_class' => 'tile-standard',
			'date'       => 'S.Y. 2025–2026',
			'image'      => $local_images[ $i ],
		);
	}
}

$total_photos = count( $gallery_items );
?>

<main id="primary" class="site-main">

	<!-- 1. HERO BANNER -->
	<section class="gallery-hero-wrapper">
		<div class="gallery-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');"></div>
		<div class="gallery-hero-overlay"></div>

		<div class="container" style="position: relative; z-index: 2;">
			<!-- Breadcrumbs -->
			<nav aria-label="Breadcrumb" class="gallery-breadcrumbs">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="separator">/</span>
				<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Us</a>
				<span class="separator">/</span>
				<span class="active-crumb">Campus Gallery</span>
			</nav>

			<div class="gallery-hero-pill">
				<span class="gallery-hero-pill-dot"></span>
				<span>Visual Heritage & Campus Showcase</span>
			</div>

			<h1 class="gallery-hero-title">
				Capturing Excellence, <br>
				<span class="highlight">Moments & Memories</span>
			</h1>

			<!-- Quick Stats Strip -->
			<div class="gallery-stats-bar">
				<div class="gallery-stat-item">
					<span class="gallery-stat-number" id="statsTotalCount"><?php echo esc_html( $total_photos ); ?></span>
					<span class="gallery-stat-label">Curated Photos</span>
				</div>
				<div class="gallery-stat-divider"></div>
				<div class="gallery-stat-item">
					<span class="gallery-stat-number">5</span>
					<span class="gallery-stat-label">Showcase Categories</span>
				</div>
				<div class="gallery-stat-divider"></div>
				<div class="gallery-stat-item">
					<span class="gallery-stat-number">1980–Present</span>
					<span class="gallery-stat-label">Legacy & Heritage</span>
				</div>
				<div class="gallery-stat-divider"></div>
				<div class="gallery-stat-item">
					<span class="gallery-stat-number">Claveria</span>
					<span class="gallery-stat-label">Misamis Oriental</span>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. STICKY FILTER CONTROLS & SEARCH -->
	<section class="gallery-controls-section">
		<div class="container gallery-controls-wrapper">
			<!-- Filter Category Pills -->
			<div class="gallery-filter-tabs" id="galleryFilterTabs">
				<button type="button" class="gallery-filter-btn active" data-filter="all">
					<span>All Photos</span>
					<span class="filter-count" id="countAll"><?php echo esc_html( $total_photos ); ?></span>
				</button>
				<button type="button" class="gallery-filter-btn" data-filter="campus">
					<span>Campus & Grounds</span>
				</button>
				<button type="button" class="gallery-filter-btn" data-filter="academics">
					<span>Academics & STEM</span>
				</button>
				<button type="button" class="gallery-filter-btn" data-filter="activities">
					<span>Student Life</span>
				</button>
				<button type="button" class="gallery-filter-btn" data-filter="sports">
					<span>Sports & Wellness</span>
				</button>
				<button type="button" class="gallery-filter-btn" data-filter="events">
					<span>Events & Rites</span>
				</button>
			</div>

			<!-- Live Search Filter -->
			<div class="gallery-search-wrap">
				<svg class="gallery-search-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
				<input type="text" id="gallerySearchInput" class="gallery-search-input" placeholder="Search photos..." autocomplete="off">
			</div>
		</div>
	</section>

	<!-- 3. MAIN UNIQUE BENTO GRID SECTION -->
	<section class="gallery-main-section">
		<div class="container">
			<div class="gallery-info-strip">
				<div>
					Showing <span id="galleryVisibleCount" class="gallery-count-badge"><?php echo esc_html( $total_photos ); ?></span> photos
				</div>
				<div style="font-size: 12.5px; color: #94A3B8;">
					Click photo to view full-screen
				</div>
			</div>

			<!-- Bento Grid Showcase -->
			<div class="gallery-bento-grid" id="galleryBentoGrid">
				<?php foreach ( $gallery_items as $index => $item ) : ?>
					<div class="gallery-tile <?php echo esc_attr( $item['tile_class'] ); ?>"
					     data-category="<?php echo esc_attr( $item['category'] ); ?>"
					     data-index="<?php echo esc_attr( $index ); ?>"
					     data-title="<?php echo esc_attr( $item['title'] ); ?>"
					     data-image="<?php echo esc_url( $item['image'] ); ?>"
					     data-badge="<?php echo esc_attr( $item['badge'] ); ?>"
					     data-date="<?php echo esc_attr( $item['date'] ); ?>"
					     tabindex="0"
					     role="button"
					     aria-label="<?php echo esc_attr( $item['title'] ); ?>">
						
						<img src="<?php echo esc_url( $item['image'] ); ?>"
						     alt="<?php echo esc_attr( $item['title'] ); ?>"
						     class="gallery-tile-img"
						     loading="lazy">

						<div class="gallery-tile-overlay">
							<div class="gallery-tile-top">
								<span class="gallery-tile-badge"><?php echo esc_html( $item['badge'] ); ?></span>
								<div class="gallery-tile-zoom-btn" title="View Full Photo">
									<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 3 21 3 21 9"/><polyline points="9 21 3 21 3 15"/><line x1="21" y1="3" x2="14" y2="10"/><line x1="3" y1="21" x2="10" y2="14"/></svg>
								</div>
							</div>

							<div class="gallery-tile-bottom">
								<span class="gallery-tile-date"><?php echo esc_html( $item['date'] ); ?></span>
								<h3 class="gallery-tile-title"><?php echo esc_html( $item['title'] ); ?></h3>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

				<!-- Empty State for zero search results -->
				<div class="gallery-empty-state hidden" id="galleryEmptyState">
					<svg class="gallery-empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
					<h3 style="font-size: 17px; font-weight: 700; color: #102A57; margin-bottom: 4px;">No photos found</h3>
					<p style="font-size: 13.5px; color: #64748B; margin-bottom: 1rem;">Try another keyword or reset the filter.</p>
					<button type="button" class="gallery-filter-btn" id="galleryResetFilterBtn" style="margin: 0 auto;">Reset Filter</button>
				</div>
			</div>
		</div>
	</section>

	<!-- 4. INTERACTIVE LIGHTBOX MODAL -->
	<div id="matGalleryLightbox" class="mat-lightbox-backdrop hidden" role="dialog" aria-modal="true" aria-label="Photo Viewer">
		<div class="mat-lightbox-container" id="matLightboxContainer">
			<!-- Lightbox Top Bar -->
			<div class="mat-lightbox-header">
				<span class="mat-lightbox-counter" id="matLightboxCounter">Photo 1 of <?php echo esc_html( $total_photos ); ?></span>
				<div class="mat-lightbox-actions">
					<a href="#" id="matLightboxDownloadBtn" class="mat-lightbox-btn" download target="_blank" rel="noopener noreferrer" title="Download High-Res Image">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
						<span>Download</span>
					</a>
					<button type="button" id="matLightboxCloseBtn" class="mat-lightbox-close" aria-label="Close photo viewer">&times;</button>
				</div>
			</div>

			<!-- Lightbox Image Stage with Prev/Next Navigation -->
			<div class="mat-lightbox-stage">
				<button type="button" id="matLightboxPrevBtn" class="mat-lightbox-nav mat-lightbox-prev" aria-label="Previous photo">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
				</button>

				<img src="" alt="" id="matLightboxImg" class="mat-lightbox-img">

				<button type="button" id="matLightboxNextBtn" class="mat-lightbox-nav mat-lightbox-next" aria-label="Next photo">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
				</button>
			</div>

			<!-- Lightbox Clean Footer -->
			<div class="mat-lightbox-footer">
				<div class="mat-lightbox-footer-info">
					<span id="matLightboxBadge" class="gallery-tile-badge">Badge</span>
					<h3 class="mat-lightbox-caption-title" id="matLightboxTitle">Title</h3>
				</div>
				<div class="mat-lightbox-footer-meta">
					<span id="matLightboxDate" class="mat-lightbox-date">Date</span>
				</div>
			</div>
		</div>
	</div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
	// 1. Bento Tiles & Filter Elements
	const tiles = Array.from(document.querySelectorAll('.gallery-tile'));
	const filterBtns = document.querySelectorAll('.gallery-filter-btn');
	const searchInput = document.getElementById('gallerySearchInput');
	const visibleCountEl = document.getElementById('galleryVisibleCount');
	const emptyState = document.getElementById('galleryEmptyState');
	const resetBtn = document.getElementById('galleryResetFilterBtn');

	let currentFilter = 'all';
	let currentSearch = '';

	function applyFilters() {
		let visibleTiles = [];

		tiles.forEach(tile => {
			const category = tile.getAttribute('data-category') || '';
			const title = (tile.getAttribute('data-title') || '').toLowerCase();
			const badge = (tile.getAttribute('data-badge') || '').toLowerCase();

			const matchesCategory = (currentFilter === 'all') || (category === currentFilter);
			const matchesSearch = !currentSearch || title.includes(currentSearch) || badge.includes(currentSearch);

			if (matchesCategory && matchesSearch) {
				tile.style.display = '';
				visibleTiles.push(tile);
			} else {
				tile.style.display = 'none';
			}
		});

		if (visibleCountEl) {
			visibleCountEl.textContent = visibleTiles.length;
		}

		if (emptyState) {
			if (visibleTiles.length === 0) {
				emptyState.classList.remove('hidden');
			} else {
				emptyState.classList.add('hidden');
			}
		}
	}

	filterBtns.forEach(btn => {
		btn.addEventListener('click', function () {
			filterBtns.forEach(b => b.classList.remove('active'));
			this.classList.add('active');
			currentFilter = this.getAttribute('data-filter') || 'all';
			applyFilters();
		});
	});

	if (searchInput) {
		searchInput.addEventListener('input', function () {
			currentSearch = this.value.trim().toLowerCase();
			applyFilters();
		});
	}

	if (resetBtn) {
		resetBtn.addEventListener('click', function () {
			if (searchInput) searchInput.value = '';
			currentSearch = '';
			const allBtn = document.querySelector('.gallery-filter-btn[data-filter="all"]');
			if (allBtn) allBtn.click();
		});
	}

	// 2. Lightbox Functionality
	const lightbox = document.getElementById('matGalleryLightbox');
	const lbImg = document.getElementById('matLightboxImg');
	const lbTitle = document.getElementById('matLightboxTitle');
	const lbBadge = document.getElementById('matLightboxBadge');
	const lbDate = document.getElementById('matLightboxDate');
	const lbCounter = document.getElementById('matLightboxCounter');
	const lbDownload = document.getElementById('matLightboxDownloadBtn');
	const closeBtn = document.getElementById('matLightboxCloseBtn');
	const prevBtn = document.getElementById('matLightboxPrevBtn');
	const nextBtn = document.getElementById('matLightboxNextBtn');

	let activeIndex = 0;

	function getVisibleTiles() {
		return tiles.filter(t => t.style.display !== 'none');
	}

	function openLightbox(index) {
		const visible = getVisibleTiles();
		if (!visible.length) return;

		activeIndex = (index + visible.length) % visible.length;
		const targetTile = visible[activeIndex];

		const imgSrc = targetTile.getAttribute('data-image');
		const title = targetTile.getAttribute('data-title');
		const badge = targetTile.getAttribute('data-badge');
		const date = targetTile.getAttribute('data-date');

		lbImg.src = imgSrc;
		lbImg.alt = title;
		lbTitle.textContent = title;
		lbBadge.textContent = badge;
		lbDate.textContent = date;
		lbCounter.textContent = `Photo ${activeIndex + 1} of ${visible.length}`;
		lbDownload.href = imgSrc;

		lightbox.classList.remove('hidden');
		document.body.style.overflow = 'hidden';
	}

	function closeLightbox() {
		lightbox.classList.add('hidden');
		document.body.style.overflow = '';
		lbImg.src = '';
	}

	tiles.forEach(tile => {
		tile.addEventListener('click', function () {
			const visible = getVisibleTiles();
			const idx = visible.indexOf(tile);
			if (idx !== -1) {
				openLightbox(idx);
			}
		});

		tile.addEventListener('keydown', function (e) {
			if (e.key === 'Enter' || e.key === ' ') {
				e.preventDefault();
				this.click();
			}
		});
	});

	if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
	if (prevBtn) {
		prevBtn.addEventListener('click', function (e) {
			e.stopPropagation();
			openLightbox(activeIndex - 1);
		});
	}
	if (nextBtn) {
		nextBtn.addEventListener('click', function (e) {
			e.stopPropagation();
			openLightbox(activeIndex + 1);
		});
	}

	lightbox.addEventListener('click', function (e) {
		if (e.target === lightbox) {
			closeLightbox();
		}
	});

	document.addEventListener('keydown', function (e) {
		if (lightbox.classList.contains('hidden')) return;

		if (e.key === 'Escape') {
			closeLightbox();
		} else if (e.key === 'ArrowLeft') {
			openLightbox(activeIndex - 1);
		} else if (e.key === 'ArrowRight') {
			openLightbox(activeIndex + 1);
		}
	});
});
</script>

<?php
get_footer();
