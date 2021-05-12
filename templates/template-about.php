<?php
/**
 * Template Name: About
 *
 * The template for displaying the about page.
 *
 * @package WordPress3
 * @subpackage Axel
 * @since 1.25
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<h2><?php esc_html_e( 'About', 'axel' ); ?></h2>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
