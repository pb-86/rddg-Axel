<?php get_header(); ?>

<?php $curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) ); ?>

<main>
  <header>
    <h1><?php echo $curauth->display_name; ?></h1>
    <?php echo $curauth->description; ?>
  </header>
  <?php
    if( have_posts() ) :
      while( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content' );
      endwhile;
    endif;
  ?>
  <footer>
    <h1><?php _e( 'See also other authors', 'axel' ); ?></h1>
    <?php wp_list_authors(); ?>
  </footer>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
