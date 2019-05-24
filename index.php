<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.5
 */

get_header();
?>

<main role="main">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/post/post', 'excerpt' );
		}
		the_posts_pagination();
	} else {
		get_template_part( 'template-parts/post/post', 'empty' );
	}
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
