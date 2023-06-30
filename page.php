<?php
/**
 * Szablon stron.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<div class="wrapper">

		<?php get_template_part( 'template-parts/loops/loop', 'singular' ); ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
