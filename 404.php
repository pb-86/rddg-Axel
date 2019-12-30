<?php
/**
 * The template for displaying 404 pages
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.9
 */

get_header();
?>

<main class="axel-main" role="main">
	<?php
	esc_html_e( "That page can't be found. Try to search.", 'axel' );
	get_search_form();
	?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
