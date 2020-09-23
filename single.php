<?php
/**
 * The template for displaying single post
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
	}
	?>
</main>

<aside class="axel-sidebar">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
