<?php
/**
 * Szablon dla wpisów.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php get_template_part( 'template-parts/singular/title' ); ?>

	<div class="post-meta">
		<?php
		get_template_part( 'template-parts/singular/date' );
		get_template_part( 'template-parts/singular/author' );
		?>
	</div>

	<?php
	get_template_part( 'template-parts/singular/thumbnail' );
	get_template_part( 'template-parts/singular/content' );
	get_template_part( 'template-parts/singular/back-to-home' );
	?>

</article>
