<?php
/**
 * Główny szablon.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Tytuł -->
	<h2 class="screen-reader-text">
		<?php esc_html_e( 'Najnowsze wpisy', 'axel' ); ?>
	</h2>

	<!-- Skróty wpisów -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php
get_sidebar();
get_footer();
