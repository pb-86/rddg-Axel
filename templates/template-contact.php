<?php
/**
 * Template Name: Contact
 *
 * The template for displaying contact page
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<h2><?php esc_html_e( 'Contact', 'axel' ); ?></h2>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
