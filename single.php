<?php
/**
 * Szablon wpisów.
 *
 * @package WordPress
 * @subpackage Axel
 */

get_header();
?>

<main class="main" id="main" tabindex="-1">
	<?php get_template_part( 'template-parts/loops/loop', 'singular' ); ?>
</main>

<?php
get_sidebar();
get_footer();
