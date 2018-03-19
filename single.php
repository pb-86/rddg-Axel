<?php get_header(); ?>

<main>
  <?php
    while( have_posts() ) : the_post();
      get_template_part( 'template-parts/post/content' );
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    endwhile;
  ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
