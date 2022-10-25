<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.2
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Title -->
	<h2 class="axel-main__title">
		<?php esc_html_e( 'Wyniki wyszukiwania', 'axel' ); ?>
	</h2>

	<!-- Search phrase -->
	<div class="axel-main__search-info">
		<?php printf( esc_html( 'Szukałeś: %s' ), '<strong>' . get_search_query() . '</strong>' ); ?>
	</div>

	<!-- Excertps -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php
get_sidebar();
get_footer();
