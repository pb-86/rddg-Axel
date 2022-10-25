<?php
/**
 * Template Name: Contact
 *
 * The template for displaying contact page.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.59
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Title -->
	<h2 class="axel-main__title">
		<?php esc_html_e( 'Kontakt', 'axel' ); ?>
	</h2>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
