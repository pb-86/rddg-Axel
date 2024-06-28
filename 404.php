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

		<article>
			<?php get_template_part( 'template-parts/singular/title' ); ?>
	
			<div class="content error-message">
				<p><?php esc_html_e( 'Przepraszamy, ale nie znaleźliśmy strony, której szukasz.', 'axel' ); ?></p>
			</div>
	
			<div class="post-meta post-meta--bottom">
				<?php get_template_part( 'template-parts/singular/back-to-home' ); ?>
			</div>
		</article>

	</div>
</main>

<?php
get_sidebar();
get_footer();
