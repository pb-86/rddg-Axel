<?php
/**
 * Template Name: O nas
 *
 * Dodatkowy szablon dla strony "O nas".
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Title -->
	<h1 class="axel-main__title">
		<?php esc_html_e( 'O nas', 'axel' ); ?>
	</h1>

</main>

<?php
get_sidebar();
get_footer();
