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
		<div class="error-message">
			<p><?php esc_html_e( 'Przepraszamy, ale nie znaleźliśmy strony, której szukasz.', 'axel' ); ?></p>
		</div>

		<!-- Wróc do strony głównej -->
		<?php get_template_part( 'template-parts/singular/back-to-home' ); ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
