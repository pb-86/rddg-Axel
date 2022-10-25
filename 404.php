<?php
/**
 * The template for displaying 404 pages
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
		<?php esc_html_e( 'Nie znaleziono strony', 'axel' ); ?>
	</h2>

	<!-- Error message -->
	<div class="axel-main__404-message">
		<?php esc_html_e( 'Przepraszamy, ale nie znaleźliśmy strony, której szukasz.', 'axel' ); ?>
	</div>

	<!-- Back to home page link -->
	<a class="axel-main__404-button" href="<?php echo esc_url( home_url() ); ?>">
		<?php esc_html_e( 'Wróć do strony głównej', 'axel' ); ?>
	</a>

</main>

<?php
get_sidebar();
get_footer();
