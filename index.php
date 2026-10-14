<?php
/**
 * The main template file
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main main-content-area">
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="entry-title"><?php esc_html_e( 'Latest Blog Posts', 'mat-i' ); ?></h1>
			</header>

			<div class="posts-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'medium_large', array( 'class' => 'post-card-image' ) ); ?>
							</a>
						<?php else : ?>
							<div class="post-card-image" style="display:flex;align-items:center;justify-content:center;background:var(--mat-bg-surface-elevated);color:var(--mat-text-muted);">
								<span><?php esc_html_e( 'Mat-I Article', 'mat-i' ); ?></span>
							</div>
						<?php endif; ?>

						<div class="post-card-content">
							<div class="post-card-meta">
								<span><?php echo esc_html( get_the_date() ); ?></span>
								<span>&bull;</span>
								<span><?php the_author(); ?></span>
							</div>
							<h2 class="post-card-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="post-card-excerpt">
								<?php the_excerpt(); ?>
							</div>
							<div class="post-card-footer">
								<a href="<?php the_permalink(); ?>" class="btn btn-secondary" style="width:100%;font-size:0.85rem;">
									<?php esc_html_e( 'Read Article', 'mat-i' ); ?> &rarr;
								</a>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<div style="margin-top: 3rem; text-align: center;">
				<?php
				the_posts_navigation(
					array(
						'prev_text' => __( '&larr; Older posts', 'mat-i' ),
						'next_text' => __( 'Newer posts &rarr;', 'mat-i' ),
					)
				);
				?>
			</div>

		<?php else : ?>

			<div class="article-content" style="text-align: center;">
				<h2><?php esc_html_e( 'Nothing Found', 'mat-i' ); ?></h2>
				<p><?php esc_html_e( 'It seems we cannot find what you are looking for.', 'mat-i' ); ?></p>
			</div>

		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
