<?php
/**
 * Szablon wpisów.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<div class="wrapper">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'template-parts/shared/title' ); ?>

				<div class="post-meta post-meta--top">
					<?php
					get_template_part( 'template-parts/shared/date' );
					get_template_part( 'template-parts/shared/author' );
					?>
				</div>

				<?php
				get_template_part( 'template-parts/shared/thumbnail' );
				get_template_part( 'template-parts/shared/content' );
				?>

				<div class="post-meta post-meta--bottom">
					<?php
					get_template_part( 'template-parts/shared/back-to-home' );
					get_template_part( 'template-parts/shared/print' );
					?>
				</div>
			</article>

			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			wp_link_pages();
			?>
		<?php endwhile; ?>
	</div>
</main>

<?php
get_sidebar();
get_footer();
