<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<?php get_template_part( 'templates/loops/loop', 'singular' ); ?>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
