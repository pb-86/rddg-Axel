<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.36
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-wrapper">

		<div class="axel-main__content">
			<?php get_template_part( 'template-parts/loops/loop', 'singular' ); ?>
		</div>

		<?php get_sidebar(); ?>

	</div>
</main>

<?php get_footer(); ?>
