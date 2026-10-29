<?php
/**
 * Template Name: News & Announcements
 *
 * Dedicated archive and directory of all MAT-I National High School
 * advisories, memoranda, academic updates, and achievements.
 *
 * @package Mat-I
 */

get_header();

// Setup pagination
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );

$news_args = array(
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => 12,
	'paged'          => $paged,
);

// Optional category filter from URL parameter
$selected_cat = isset( $_GET['category'] ) ? sanitize_text_field( wp_unslash( $_GET['category'] ) ) : '';
if ( ! empty( $selected_cat ) && 'all' !== strtolower( $selected_cat ) ) {
	$news_args['category_name'] = $selected_cat;
}

$all_news_query = new WP_Query( $news_args );
$total_posts_count = wp_count_posts()->publish;
?>

<main id="primary" class="site-main news-archive-page">

	<!-- 1. HERO BANNER -->
	<section class="news-archive-hero">
		<div class="news-archive-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');"></div>
		<div class="news-archive-hero-overlay"></div>

		<div class="container" style="position: relative; z-index: 2;">
			<!-- Breadcrumbs -->
			<nav aria-label="Breadcrumb" class="news-breadcrumbs">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="separator">/</span>
				<span class="active-crumb">News & Announcements</span>
			</nav>

			<div class="news-hero-pill">
				<span class="news-hero-pill-dot"></span>
				<span>DepEd MAT-I Official Bulletin</span>
			</div>

			<h1 class="news-hero-title">
				School News & <span class="highlight">Announcements</span>
			</h1>

			<p class="news-hero-subtitle">
				Stay updated with the latest academic memoranda, school calendar events, enrollment advisories, and student triumphs at MAT-I National High School.
			</p>

			<!-- Quick Stats Strip -->
			<div class="news-stats-bar">
				<div class="news-stat-item">
					<span class="news-stat-number"><?php echo esc_html( $total_posts_count ); ?></span>
					<span class="news-stat-label">Total Advisories</span>
				</div>
				<div class="news-stat-divider"></div>
				<div class="news-stat-item">
					<span class="news-stat-number">5</span>
					<span class="news-stat-label">Categories</span>
				</div>
				<div class="news-stat-divider"></div>
				<div class="news-stat-item">
					<span class="news-stat-number">S.Y. 2025–2026</span>
					<span class="news-stat-label">Academic Year</span>
				</div>
				<div class="news-stat-divider"></div>
				<div class="news-stat-item">
					<span class="news-stat-number">DepEd Region X</span>
					<span class="news-stat-label">Division of Misamis Oriental</span>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. FILTER & SEARCH TOOLBAR -->
	<section class="news-toolbar-section">
		<div class="container">
			<div class="news-toolbar-wrap">
				<!-- Category Filter Pills -->
				<div class="news-filter-pills-row" style="margin-bottom: 0;">
					<button class="news-filter-btn <?php echo ( empty( $selected_cat ) || 'all' === $selected_cat ) ? 'active' : ''; ?>" data-category="all">All Updates</button>
					<button class="news-filter-btn <?php echo ( 'admissions' === strtolower( $selected_cat ) ) ? 'active' : ''; ?>" data-category="Admissions">Admissions</button>
					<button class="news-filter-btn <?php echo ( 'academic fair' === strtolower( $selected_cat ) ) ? 'active' : ''; ?>" data-category="Academic Fair">Academic Fair</button>
					<button class="news-filter-btn <?php echo ( 'student honors' === strtolower( $selected_cat ) ) ? 'active' : ''; ?>" data-category="Student Honors">Student Honors</button>
					<button class="news-filter-btn <?php echo ( 'faculty research' === strtolower( $selected_cat ) ) ? 'active' : ''; ?>" data-category="Faculty Research">Faculty Research</button>
					<button class="news-filter-btn <?php echo ( 'facilities' === strtolower( $selected_cat ) ) ? 'active' : ''; ?>" data-category="Facilities">Facilities</button>
				</div>

				<div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
					<!-- Search Input -->
					<div class="news-search-box">
						<input type="text" id="newsSearchInput" placeholder="Search advisories & circulars..." autocomplete="off">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
					</div>

					<!-- Admin Quick Add Button -->
					<?php if ( current_user_can( 'edit_posts' ) ) : ?>
						<button type="button" id="openAddNewsModalBtn" class="btn-fast-media" style="padding: 9px 14px; border-radius: 8px;" title="Post an announcement directly">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
							<span>+ Post Advisory</span>
						</button>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- 3. NEWS CARDS GRID SECTION -->
	<section class="news-grid-section">
		<div class="container">

			<div class="news-cards-grid" id="newsCardsGrid">
				<?php
				if ( $all_news_query->have_posts() ) :
					while ( $all_news_query->have_posts() ) :
						$all_news_query->the_post();
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
									<a href="<?php the_permalink(); ?>" class="news-card-link">Read Full Details &rarr;</a>
								</div>
							</div>
						</article>
				<?php
					endwhile;
				else :
				?>
					<div class="news-empty-state">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
						<h3>No Advisories Found</h3>
						<p>There are no school announcements currently matching your selection.</p>
					</div>
				<?php
				endif;
				?>
			</div>

			<div id="noNewsFound" style="display: none; text-align: center; padding: 3rem 1rem; color: #64748B; font-size: 14px;">
				<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="1.5" style="margin: 0 auto 0.75rem auto; display: block;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
				No bulletins match your filter or search query.
			</div>

			<!-- 4. PAGINATION -->
			<?php if ( $all_news_query->max_num_pages > 1 ) : ?>
				<div class="news-pagination-wrap">
					<?php
					echo paginate_links( array(
						'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
						'format'    => '?paged=%#%',
						'current'   => max( 1, $paged ),
						'total'     => $all_news_query->max_num_pages,
						'prev_text' => '&larr; Previous',
						'next_text' => 'Next &rarr;',
						'type'      => 'list',
					) );
					?>
				</div>
			<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		</div>
	</section>

	<!-- =========================================================================
	     ADMIN INLINE NEWS CRUD MODAL
	     ========================================================================= -->
	<?php if ( current_user_can( 'edit_posts' ) ) : ?>
		<div id="matINewsModal" class="mat-modal-overlay" aria-hidden="true">
			<div class="mat-modal-dialog">
				<div class="mat-modal-header">
					<div class="modal-title-wrap">
						<span id="newsModalActionBadge" class="modal-dept-badge">Create Announcement</span>
						<h3 class="mat-modal-title" id="newsModalHeading">School Bulletin Manager</h3>
					</div>
					<button type="button" class="btn-modal-close" id="closeNewsModalBtn" aria-label="Close modal">&times;</button>
				</div>
				<form id="matINewsForm" class="mat-modal-form">
					<input type="hidden" id="newsFormPostId" name="post_id" value="0">
					<div class="modal-field-group">
						<label for="newsFormTitle" class="news-form-label">Announcement Title <span style="color: #EF4444;">*</span></label>
						<input type="text" id="newsFormTitle" name="news_title" class="news-form-input" placeholder="e.g. S.Y. 2025–2026 General Orientation" required>
					</div>
					<div class="modal-field-group">
						<label for="newsFormCategory" class="news-form-label">Category</label>
						<select id="newsFormCategory" name="news_category" class="news-form-select">
							<option value="Admissions">Admissions</option>
							<option value="Academic Fair">Academic Fair</option>
							<option value="Student Honors">Student Honors</option>
							<option value="Faculty Research">Faculty Research</option>
							<option value="Facilities">Facilities</option>
							<option value="General News">General News</option>
						</select>
					</div>
					<div class="modal-field-group">
						<label for="newsFormImageUrl" class="news-form-label">Cover Image URL</label>
						<div class="news-img-input-row">
							<input type="url" id="newsFormImageUrl" name="news_image_url" class="news-form-input" placeholder="https://example.com/photo.jpg">
							<button type="button" id="btnUploadNewsImg" class="btn-fast-media">Media Library</button>
						</div>
					</div>
					<div class="modal-field-group">
						<label for="newsFormContent" class="news-form-label">Announcement Description / Details <span style="color: #EF4444;">*</span></label>
						<textarea id="newsFormContent" name="news_content" class="news-form-textarea" rows="4" placeholder="Full advisory details for learners, teachers, and guardians..." required></textarea>
					</div>
					<div class="mat-modal-footer">
						<button type="button" class="btn-modal-cancel" id="cancelNewsModalBtn">Cancel</button>
						<button type="submit" class="btn-modal-submit" id="saveNewsBtn">
							<span class="btn-text">Save Bulletin</span>
							<span class="btn-spinner" style="display: none;"></span>
						</button>
					</div>
				</form>
			</div>
		</div>
		<div id="matIToast" class="mat-toast">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
			<span id="matIToastMessage">Announcement saved successfully!</span>
		</div>
	<?php endif; ?>

</main>

<?php
get_footer();
