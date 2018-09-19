<?php get_header(); ?>

<main role="main">
  <?php
    the_author();
    the_author_meta( 'description' );

    if( have_posts() ) :
      while( have_posts() ) : the_post();
        get_template_part( 'partials/post/default' );
      endwhile;
    endif;

    _e( 'See also other authors', 'axel' );
    wp_list_authors();
  ?>
</main>

<aside role="complementary">
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
