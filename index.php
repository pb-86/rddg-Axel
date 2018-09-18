<?php get_header(); ?>

<main>
  <?php
    if( have_posts() ) :
      while( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content' );
      endwhile;
      the_posts_pagination();
    endif;
  ?>
</main>

<aside>
  <?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
