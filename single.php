<?php get_header(); ?>

<?php
  while( have_posts() ) : the_post();
    get_template_part( 'template-parts/post/content' );
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  endwhile;
?>

<?php comment_form(); ?>
<?php wp_list_comments(); ?>
<?php the_comments_pagination(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
