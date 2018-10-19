<?php
/**
 * File comment
 *
 * @package WordPress
 */

get_header();
?>

<main role="main">
	<?php
	single_cat_title();

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'partials/post/default' );
		endwhile;
			the_posts_pagination();
	else :
		get_template_part( 'partials/post/empty' );
	endif;
	?>
</main>

<aside role="complementary">
	<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
