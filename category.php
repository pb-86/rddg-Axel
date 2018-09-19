<?php get_header(); ?>

<main role="main">
  <?php
    single_cat_title();

    if( have_posts() ) :
      while( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/default' );
      endwhile;
      the_posts_pagination();
    endif;
  ?>
</main>

<aside role="complementary">
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
