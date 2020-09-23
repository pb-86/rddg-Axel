<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.19
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'templates/parts/singular' );
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		wp_link_pages();
	}
	?>
</main>

<aside class="axel-sidebar">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
