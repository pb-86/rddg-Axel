<?php
/**
 * Szablon kategorii.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<div class="wrapper">

		<!-- Tytuł kategorii -->
		<h1 class="title">
			<?php single_cat_title(); ?>
		</h1>

		<!-- Lista wpisów -->
		<?php get_template_part( 'template-parts/loops/loop', 'excerpt' ); ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
