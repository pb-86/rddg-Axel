<?php
/**
 * The template for displaying 404 pages
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.15
 */

get_header();
?>

<main class="axel-main" role="main">
	<h2>
		<?php esc_html_e( "Page can't be found", 'axel' ); ?>
	</h2>
	<?php
	esc_html_e( "Sorry, but we couldn't find the page you were looking for. Try to search.", 'axel' );
	get_search_form();
	?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
