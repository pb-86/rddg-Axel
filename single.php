<?php
/**
 * The template for displaying single post
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.21
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
