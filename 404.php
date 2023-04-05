<?php
/**
 * Szablon błędu 404.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<div class="wrapper">

		<!-- Tytuł -->
		<h1 class="title">
			<?php esc_html_e( 'Nie znaleziono strony', 'axel' ); ?>
		</h1>

		<!-- Komunikat błędu -->
		<div class="e404-message">
			<p><?php esc_html_e( 'Przepraszamy, ale nie znaleźliśmy strony, której szukasz.', 'axel' ); ?></p>

			<!-- Odnośnik do strony głównej -->
			<a href="<?php echo esc_url( home_url() ); ?>">
				<?php esc_html_e( 'Wróć do strony głównej', 'axel' ); ?>
			</a>
		</div>

	</div>
</main>

<?php
get_sidebar();
get_footer();
