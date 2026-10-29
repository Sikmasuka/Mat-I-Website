<?php
/**
 * The template for displaying all single posts / school announcements
 *
 * Clean, modern editorial layout with official DepEd branding,
 * social sharing capabilities, and related advisories.
 *
 * @package Mat-I
 */

get_header();

while ( have_posts() ) :
	the_post();
	$post_id    = get_the_ID();
	$categories = get_the_category();
	$cat_name   = ! empty( $categories ) ? $categories[0]->name : 'Official Bulletin';
	$cat_slug   = ! empty( $categories ) ? $categories[0]->slug : 'bulletin';

	// Featured image or fallback meta
	$image_meta = get_post_meta( $post_id, '_news_image_url', true );
	if ( ! empty( $image_meta ) ) {
		$image_url = $image_meta;
	} elseif ( has_post_thumbnail() ) {
		$image_url = get_the_post_thumbnail_url( $post_id, 'full' );
	} else {
		$image_url = 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=1200&h=650&fit=crop&auto=format';
	}

	// Calculate reading time
	$content_raw = get_the_content();
	$word_count  = str_word_count( wp_strip_all_tags( $content_raw ) );
	$read_time   = max( 1, ceil( $word_count / 180 ) );

	$current_url = get_permalink();
	$share_title = urlencode( get_the_title() );
	$share_url   = urlencode( $current_url );
?>

<main id="primary" class="site-main single-news-page">

	<!-- 1. HERO HEADER BANNER -->
	<section class="single-news-hero">
		<div class="single-news-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.jpg' ); ?>');"></div>
		<div class="single-news-hero-overlay"></div>

		<div class="container" style="position: relative; z-index: 2; max-width: 900px;">
			<!-- Breadcrumb Navigation -->
			<nav aria-label="Breadcrumb" class="single-news-breadcrumbs">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="separator">/</span>
				<a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">News & Bulletins</a>
				<span class="separator">/</span>
				<span class="active-crumb"><?php echo esc_html( wp_trim_words( get_the_title(), 6, '...' ) ); ?></span>
			</nav>

			<!-- Category Pill & DepEd Advisory Badge -->
			<div class="single-news-badges-row">
				<span class="single-news-pill-cat"><?php echo esc_html( $cat_name ); ?></span>
				<span class="single-news-pill-deped">
					<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					Official Institutional Advisory
				</span>
			</div>

			<!-- Main Article Title -->
			<h1 class="single-news-title"><?php the_title(); ?></h1>

			<!-- Article Meta Info -->
			<div class="single-news-meta-strip">
				<div class="meta-item">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
					<span>Published: <?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></span>
				</div>
				<span class="meta-dot">&bull;</span>
				<div class="meta-item">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
					<span>By <?php the_author(); ?></span>
				</div>
				<span class="meta-dot">&bull;</span>
				<div class="meta-item">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
					<span><?php echo esc_html( $read_time ); ?> min read</span>
				</div>
				<?php if ( current_user_can( 'edit_posts' ) ) : ?>
					<span class="meta-dot">&bull;</span>
					<a href="<?php echo esc_url( get_edit_post_link() ); ?>" class="meta-edit-link">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
						Edit Post
					</a>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- 2. ARTICLE CONTENT CONTAINER -->
	<section class="single-news-body-section">
		<div class="container" style="max-width: 900px;">
			<article id="post-<?php the_ID(); ?>" class="single-news-article-card">

				<!-- Full Image Display with Text Overlaid Inside -->
				<div class="single-news-featured-wrap single-news-media-overlay-wrap">
					<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php the_title_attribute(); ?>" class="single-news-featured-img">
					<div class="single-news-img-overlay-dark"></div>

					<div class="single-news-overlay-content">
						<div class="single-news-content-text">
							<?php the_content(); ?>
						</div>

						<?php
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mat-i' ),
								'after'  => '</div>',
							)
						);
						?>

						<?php if ( has_tag() ) : ?>
							<div class="single-news-tags-row-overlay" style="margin-top: 1rem; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
								<strong class="tags-label" style="color: rgba(255, 255, 255, 0.75); font-size: 12px;">Keywords:</strong>
								<div class="tags-list">
									<?php the_tags( '', ' ', '' ); ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<!-- 3. ENGAGEMENT & SHARING TOOLBAR -->
				<div class="single-news-share-toolbar">
					<div class="share-label-wrap">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
						<span>Share this Advisory:</span>
					</div>
					<div class="share-buttons-group">
						<!-- Facebook Share -->
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_attr( $share_url ); ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-fb" title="Share on Facebook">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
							<span>Facebook</span>
						</a>
						<!-- X / Twitter -->
						<a href="https://twitter.com/intent/tweet?url=<?php echo esc_attr( $share_url ); ?>&text=<?php echo esc_attr( $share_title ); ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-x" title="Share on X">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
							<span>Post</span>
						</a>
						<!-- Copy Link Button -->
						<button type="button" class="btn-share btn-share-copy" id="btnCopyArticleLink" data-url="<?php echo esc_url( $current_url ); ?>" title="Copy link to clipboard">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
							<span id="btnCopyText">Copy Link</span>
						</button>
						<!-- Print Button -->
						<button type="button" class="btn-share btn-share-print" onclick="window.print();" title="Print this memorandum">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
							<span>Print</span>
						</button>
					</div>
				</div>

				<!-- 4. PREVIOUS / NEXT NAVIGATION -->
				<div class="single-news-post-nav">
					<div class="nav-prev">
						<?php
						$prev_post = get_previous_post();
						if ( ! empty( $prev_post ) ) :
						?>
							<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="post-nav-card">
								<span class="post-nav-direction">&larr; Previous Advisory</span>
								<span class="post-nav-title"><?php echo esc_html( wp_trim_words( get_the_title( $prev_post->ID ), 7, '...' ) ); ?></span>
							</a>
						<?php endif; ?>
					</div>
					<div class="nav-next">
						<?php
						$next_post = get_next_post();
						if ( ! empty( $next_post ) ) :
						?>
							<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="post-nav-card text-right">
								<span class="post-nav-direction">Next Advisory &rarr;</span>
								<span class="post-nav-title"><?php echo esc_html( wp_trim_words( get_the_title( $next_post->ID ), 7, '...' ) ); ?></span>
							</a>
						<?php endif; ?>
					</div>
				</div>

			</article>

			<!-- 5. RELATED ANNOUNCEMENTS SECTION -->
			<div class="single-news-related-section">
				<div class="related-header">
					<div>
						<span style="color: #FF851A; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em;">MORE UPDATES</span>
						<h2 class="related-title">Related School Advisories</h2>
					</div>
					<a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="btn-all-news">
						<span>View All Bulletins</span>
						<span>&rarr;</span>
					</a>
				</div>

				<div class="related-cards-grid">
					<?php
					$related_args = array(
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'posts_per_page' => 3,
						'post__not_in'   => array( $post_id ),
					);

					if ( ! empty( $categories ) ) {
						$related_args['cat'] = $categories[0]->term_id;
					}

					$related_query = new WP_Query( $related_args );

					// Fallback to recent posts if no category match
					if ( ! $related_query->have_posts() ) {
						unset( $related_args['cat'] );
						$related_query = new WP_Query( $related_args );
					}

					if ( $related_query->have_posts() ) :
						while ( $related_query->have_posts() ) : $related_query->the_post();
							$rel_id      = get_the_ID();
							$rel_cats    = get_the_category();
							$rel_cat     = ! empty( $rel_cats ) ? $rel_cats[0]->name : 'Advisory';
							$rel_meta    = get_post_meta( $rel_id, '_news_image_url', true );
							if ( ! empty( $rel_meta ) ) {
								$rel_img = $rel_meta;
							} elseif ( has_post_thumbnail() ) {
								$rel_img = get_the_post_thumbnail_url( $rel_id, 'medium_large' );
							} else {
								$rel_img = 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=crop&auto=format';
							}
					?>
							<article class="news-card-item">
								<div class="news-card-img-wrap">
									<img src="<?php echo esc_url( $rel_img ); ?>" class="news-card-img" alt="<?php the_title_attribute(); ?>">
									<span class="news-cat-badge"><?php echo esc_html( $rel_cat ); ?></span>
								</div>
								<div class="news-card-body">
									<h3 class="news-card-title"><?php the_title(); ?></h3>
									<p class="news-card-text"><?php echo esc_html( wp_trim_words( get_the_content(), 16, '...' ) ); ?></p>
									<div class="news-card-footer">
										<span class="news-card-date"><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></span>
										<a href="<?php the_permalink(); ?>" class="news-card-link">Read Details &rarr;</a>
									</div>
								</div>
							</article>
					<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>

		</div>
	</section>

</main>

<script>
// Copy article link to clipboard with visual feedback
document.addEventListener('DOMContentLoaded', function() {
	var copyBtn = document.getElementById('btnCopyArticleLink');
	var copyText = document.getElementById('btnCopyText');
	if (copyBtn && copyText) {
		copyBtn.addEventListener('click', function() {
			var url = this.getAttribute('data-url') || window.location.href;
			if (navigator.clipboard && window.isSecureContext) {
				navigator.clipboard.writeText(url).then(function() {
					showCopied();
				}).catch(function() {
					fallbackCopy(url);
				});
			} else {
				fallbackCopy(url);
			}
		});

		function showCopied() {
			var oldText = copyText.textContent;
			copyText.textContent = 'Link Copied!';
			copyBtn.style.background = '#10B981';
			copyBtn.style.color = '#FFFFFF';
			copyBtn.style.borderColor = '#10B981';
			setTimeout(function() {
				copyText.textContent = oldText;
				copyBtn.style.background = '';
				copyBtn.style.color = '';
				copyBtn.style.borderColor = '';
			}, 2500);
		}

		function fallbackCopy(text) {
			var tempInput = document.createElement('input');
			tempInput.value = text;
			document.body.appendChild(tempInput);
			tempInput.select();
			try {
				document.execCommand('copy');
				showCopied();
			} catch (err) {}
			document.body.removeChild(tempInput);
		}
	}
});
</script>

<?php
endwhile;

get_footer();
