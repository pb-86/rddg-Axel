<?php
/**
 * Szablon błędu 404.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Tytuł -->
	<h2 class="axel-main__title">
		<?php esc_html_e( 'Nie znaleziono strony', 'axel' ); ?>
	</h2>

	<!-- Komunikat błędu -->
	<div class="axel-main__404-message">
		<?php esc_html_e( 'Przepraszamy, ale nie znaleźliśmy strony, której szukasz.', 'axel' ); ?>
	</div>

	<!-- Odnośnik do strony głównej -->
	<a class="axel-main__404-button" href="<?php echo esc_url( home_url() ); ?>">
		<?php esc_html_e( 'Wróć do strony głównej', 'axel' ); ?>
	</a>

</main>

<?php
get_sidebar();
get_footer();
