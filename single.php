<?php
/**
 * The template for displaying all single posts
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main main-content-area">
	<div class="container" style="max-width: 860px;">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header">
					<div class="post-card-meta" style="justify-content: center; margin-bottom: 1rem;">
						<span><?php echo esc_html( get_the_date() ); ?></span>
						<span>&bull;</span>
						<span><?php esc_html_e( 'By', 'mat-i' ); ?> <?php the_author(); ?></span>
						<?php if ( has_category() ) : ?>
							<span>&bull;</span>
							<span><?php the_category( ', ' ); ?></span>
						<?php endif; ?>
					</div>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail" style="margin-bottom: 2.5rem; border-radius: var(--mat-radius-lg); overflow: hidden; box-shadow: var(--mat-shadow-lg);">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
				<?php endif; ?>

				<div class="article-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mat-i' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>

				<footer class="entry-footer" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--mat-border-color);">
					<?php if ( has_tag() ) : ?>
						<div class="post-tags" style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1.5rem;">
							<strong style="color: var(--mat-text-heading);"><?php esc_html_e( 'Tags:', 'mat-i' ); ?></strong>
							<?php the_tags( '', ' ', '' ); ?>
						</div>
					<?php endif; ?>

					<div class="post-navigation-links" style="display: flex; justify-content: space-between; gap: 1rem;">
						<div><?php previous_post_link( '%link', '&larr; %title' ); ?></div>
						<div><?php next_post_link( '%link', '%title &rarr;' ); ?></div>
					</div>
				</footer>
			</article>

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
	</div>
</main>

<?php
get_footer();
