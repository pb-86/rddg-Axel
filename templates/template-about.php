<?php
/**
 * Template Name: About
 *
 * The template for displaying the about page.
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
		<?php esc_html_e( 'O nas', 'axel' ); ?>
	</h2>

</main>

<?php
get_sidebar();
get_footer();
