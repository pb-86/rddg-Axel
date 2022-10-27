<?php
/**
 * Szablon kategorii.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">

	<!-- Tytuł kategorii -->
	<h2 class="axel-main__title">
		<?php single_cat_title(); ?>
	</h2>

	<!-- Lista wpisów -->
	<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

</main>

<?php
get_sidebar();
get_footer();
