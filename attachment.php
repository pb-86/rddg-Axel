<?php
/**
 * File comment
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.19
 */

get_header();
?>

<main class="axel-main" id="axel-main" tabindex="-1">
	<h2>
		<?php the_title(); ?>
	</h2>
	<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
</main>

<aside class="axel-sidebar">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
