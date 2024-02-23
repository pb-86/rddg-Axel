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
		<?php get_template_part( 'template-parts/singular/title' ); ?>

		<!-- Lista wpisów -->
		<?php get_template_part( 'template-parts/loops/loop', 'excerpts' ); ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
