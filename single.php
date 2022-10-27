<?php
/**
 * Szablon wpisów.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<?php get_template_part( 'template-parts/loops/loop', 'singular' ); ?>
</main>

<?php
get_sidebar();
get_footer();
