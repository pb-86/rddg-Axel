<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <time datetime="<?php the_time( 'Y-m-d H:i' ); ?>"><?php the_time( 'j F Y' ); ?></time>
    <?php
      if( is_single() ) :
        the_title( '<h1>', '</h1>' );
      else :
        the_title( '<h2><a href="' . get_permalink() . '">', '</a></h2>' );
      endif;
    ?>
    <p><?php _e( 'Written by: ', 'axel' ); ?><?php the_author_posts_link(); ?></p>
  </header>
  <?php the_content(); ?>
  <footer>
    <?php if(  is_single() ) : ?>
      <a href="<?php bloginfo( 'url' ); ?>"><?php _e( 'Back to home page', 'axel' ); ?></a>
    <?php endif; ?>
  </footer>
</article>
