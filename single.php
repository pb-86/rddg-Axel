<?php
/**
 * The template for displaying single post
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.22
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<?php get_template_part( 'templates/loops/loop', 'singular' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
