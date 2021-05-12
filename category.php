<?php
/**
 * The template for displaying category pages
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<h2><?php single_cat_title(); ?></h2>
		<?php get_template_part( 'templates/loops/loop', 'excerpt' ); ?>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
