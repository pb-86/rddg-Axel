<?php
/**
 * Szablon wyników wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Tytuł -->
	<h1 class="axel-main__title">
		<?php esc_html_e( 'Wyniki wyszukiwania', 'axel' ); ?>
	</h1>

	<!-- Szukana fraza -->
	<div class="axel-main__search-info">
		<?php printf( esc_html( 'Szukałeś: %s' ), '<strong>' . get_search_query() . '</strong>' ); ?>
	</div>

	<!-- Skróty wpisów -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php
get_sidebar();
get_footer();
