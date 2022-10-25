<?php
/**
 * The template for displaying search results
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.58
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
