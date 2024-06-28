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
	get_template_part( 'template-parts/singular/title' );
	get_template_part( 'template-parts/singular/thumbnail' );
	get_template_part( 'template-parts/singular/content' );
	?>

	<div class="post-meta post-meta--bottom">
		<?php
		get_template_part( 'template-parts/singular/back-to-home' );
		get_template_part( 'template-parts/singular/print' );
		?>
	</div>

</article>
