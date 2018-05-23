<?php get_header(); ?>

<main>
  <?php
    while( have_posts() ) : the_post();
      get_template_part( 'template-parts/page/content' );
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
      wp_link_pages();
    endwhile;
  ?>
</main>

<?php comment_form(); ?>
<?php wp_list_comments(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
