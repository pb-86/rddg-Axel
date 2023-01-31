<?php
/**
 * Template Name: Kontakt
 *
 * Dodatkowy szablon dla strony "Kontakt"
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Title -->
	<h1 class="axel-main__title">
		<?php esc_html_e( 'Kontakt', 'axel' ); ?>
	</h1>

</main>

<?php
get_sidebar();
get_footer();
