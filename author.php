<?php get_header(); ?>

<?php the_author(); ?>
<?php the_author_meta( 'description' ); ?>

<?php
  if( have_posts() ) :
    while( have_posts() ) : the_post();
      get_template_part( 'template-parts/post/content' );
    endwhile;
  endif;
?>

<?php _e( 'See also other authors', 'axel' ); ?>
<?php wp_list_authors(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
