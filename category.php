<?php
/**
 * The template for displaying category pages
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.2
 */

get_header();
?>

<main role="main">
	<?php
	single_cat_title();

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'partials/post/post', 'excerpt' );
		endwhile;
			the_posts_pagination();
	else :
		get_template_part( 'partials/post/post', 'empty' );
	endif;
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
