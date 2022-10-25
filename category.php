<?php
/**
 * The template for displaying category pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.2
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Category title -->
	<h2 class="axel-main__title">
		<?php single_cat_title(); ?>
	</h2>

	<!-- Category post excerpts -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php
get_sidebar();
get_footer();
