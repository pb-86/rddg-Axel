<?php
/**
 * The template for displaying category pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.48
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Title -->
	<h2 class="axel-main__title">
		<?php single_cat_title(); ?>
	</h2>

	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
