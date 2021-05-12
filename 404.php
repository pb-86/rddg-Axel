<?php
/**
 * The template for displaying 404 pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<h2><?php esc_html_e( "Page can't be found", 'axel' ); ?></h2>
		<?php
		esc_html_e( "Sorry, but we couldn't find the page you were looking for. Try to search.", 'axel' );
		get_search_form();
		?>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
