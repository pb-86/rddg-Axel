<?php
/**
 * Szablon dla wpisów i stron.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'axel-singular' ); ?>>

	<header class="axel-singular__header">
		<?php
		get_template_part( 'template-parts/singular/parts/author' );
		get_template_part( 'template-parts/singular/parts/date' );
		get_template_part( 'template-parts/singular/parts/title' );
		get_template_part( 'template-parts/singular/parts/thumbnail' );
		?>
	</header>

	<?php	get_template_part( 'template-parts/singular/parts/content' ); ?>

	<footer class="singular__footer">
		<?php get_template_part( 'template-parts/singular/parts/back-to-home' ); ?>
	</footer>

</article>
