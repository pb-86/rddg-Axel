<?php
/**
 * File comment
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.2
 */

get_header();
?>

<main role="main">
	<?php
	the_title( '<h1>', '</h1>' );
	echo wp_get_attachment_image( get_the_ID(), 'large' );
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
