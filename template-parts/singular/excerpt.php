<?php
/**
 * Skrót wpisu.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article <?php post_class( 'axel-excerpt' ); ?> id="post-<?php the_ID(); ?>">

	<header class="axel-excerpt__header">
		<?php
		get_template_part( 'template-parts/singular/parts/thumbnail' );
		get_template_part( 'template-parts/singular/parts/author' );
		get_template_part( 'template-parts/singular/parts/date' );
		get_template_part( 'template-parts/singular/parts/title' );
		?>
	</header>

	<?php
	get_template_part( 'template-parts/singular/parts/content' );
	get_template_part( 'template-parts/singular/parts/read-more' );
	?>

</article>
