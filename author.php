<?php
/**
 * Szablon strony o autorach.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<div class="wrapper">

		<!-- Nazwa autora -->
		<?php get_template_part( 'template-parts/shared/title' ); ?>

		<!-- Biografia -->
		<div class="author-bio">
			<?php the_author_meta( 'description' ); ?>
		</div>

		<!-- Skróty wpisów autora -->
		<?php get_template_part( 'template-parts/loops/loop', 'excerpts' ); ?>

		<!-- Lista pozostałych autorów -->
		<div class="other-authors">
			<?php
			esc_html_e( 'Sprawdź innych autorów', 'axel' );
			wp_list_authors();
			?>
		</div>

	</div>
</main>

<?php
get_sidebar();
get_footer();
