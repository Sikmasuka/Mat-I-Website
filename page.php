<?php
/**
 * The template for displaying all single pages
 *
 * @package Mat-I
 */

get_header();
?>

<main id="primary" class="site-main main-content-area">
	<div class="container" style="max-width: 900px;">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail" style="margin-bottom: 2rem; border-radius: var(--mat-radius-md); overflow: hidden;">
						<?php the_post_thumbnail( 'large' ); ?>
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
