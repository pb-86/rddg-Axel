<?php
/**
 * Szablon dla stron.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php
	get_template_part( 'template-parts/singular/parts/title' );
	get_template_part( 'template-parts/singular/parts/thumbnail' );
	get_template_part( 'template-parts/singular/parts/content' );
	get_template_part( 'template-parts/singular/parts/back-to-home' );
	?>

</article>
