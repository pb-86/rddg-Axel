<?php
/**
 * The template for displaying category pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.22
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<h2><?php single_cat_title(); ?></h2>
	<?php get_template_part( 'templates/loops/loop', 'excerpt' ); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
