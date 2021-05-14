<?php
/**
 * The template for displaying single post
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.29
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<?php get_template_part( 'template-parts/loops/loop', 'singular' ); ?>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
