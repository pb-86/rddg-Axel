<?php
/**
 * Szablon wyników wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<div class="wrapper">

		<!-- Tytuł -->
		<?php get_template_part( 'template-parts/singular/title' ); ?>

		<?php if ( get_search_query() ) : ?>
			<!-- Szukana fraza -->
			<div class="search-query">
				<?php
				printf(
					'%s: <strong>%s</strong>',
					esc_html__( 'Szukałeś', 'axel' ),
					get_search_query()
				);
				?>
			</div>
		<?php endif; ?>

		<!-- Skróty wpisów -->
		<?php get_template_part( 'template-parts/loops/loop', 'excerpts' ); ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
