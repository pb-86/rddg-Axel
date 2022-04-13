<?php
/**
 * The template for displaying 404 pages
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
		<?php esc_html_e( "Page can't be found", 'axel' ); ?>
	</h2>

	<!-- Error message -->
	<div class="axel-main__404-message">
		<?php esc_html_e( "Sorry, but we couldn't find the page you were looking for.", 'axel' ); ?>
	</div>

	<!-- Back to home page link -->
	<a class="axel-main__404-button" href="<?php echo esc_url( home_url() ); ?>">
		<?php esc_html_e( 'Go back to home page', 'axel' ); ?>
	</a>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
