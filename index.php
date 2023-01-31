<?php
/**
 * Główny szablon.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">

	<!-- Tytuł -->
	<h1 class="screen-reader-text">
		<?php esc_html_e( 'Najnowsze wpisy', 'axel' ); ?>
	</h1>

	<!-- Skróty wpisów -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php
get_sidebar();
get_footer();
