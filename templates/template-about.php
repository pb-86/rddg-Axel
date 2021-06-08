<?php
/**
 * Template Name: About
 *
 * The template for displaying the about page.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.48
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<h2><?php esc_html_e( 'About', 'axel' ); ?></h2>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
