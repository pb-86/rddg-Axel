<?php
/**
 * Skrót wpisu.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article <?php post_class( 'excerpt' ); ?> id="post-<?php the_ID(); ?>">

	<?php
	get_template_part( 'template-parts/singular/parts/thumbnail' );
	get_template_part( 'template-parts/singular/parts/author' );
	get_template_part( 'template-parts/singular/parts/date' );
	get_template_part( 'template-parts/singular/parts/title' );
	get_template_part( 'template-parts/singular/parts/content' );
	get_template_part( 'template-parts/singular/parts/read-more' );
	?>

</article>
