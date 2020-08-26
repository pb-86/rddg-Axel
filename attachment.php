<?php
/**
 * File comment
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.16
 */

get_header();
?>

<main class="axel-main" role="main">
	<h2>
		<?php the_title(); ?>
	</h2>
	<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
