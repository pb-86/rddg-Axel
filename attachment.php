<?php
/**
 * File comment
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<div class="axel-main__content">
		<h2><?php the_title(); ?></h2>
		<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
	</div>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
