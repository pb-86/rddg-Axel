<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.48
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<?php get_template_part( 'template-parts/loops/loop', 'singular' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
