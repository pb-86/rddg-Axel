<?php get_header(); ?>

<?php single_cat_title(); ?>

<?php
  if( have_posts() ) :
    while( have_posts() ) : the_post();
      get_template_part( 'template-parts/post/content' );
    endwhile;
    the_posts_pagination();
  endif;
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
