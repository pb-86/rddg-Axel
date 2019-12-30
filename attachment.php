<?php
/**
 * File comment
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.9
 */

get_header();
?>

<main class="axel-main" role="main">
	<?php
	the_title( '<h1>', '</h1>' );
	echo wp_get_attachment_image( get_the_ID(), 'large' );
	?>
</main>

<aside class="axel-sidebar" role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
