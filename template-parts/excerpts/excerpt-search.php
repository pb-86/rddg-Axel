<?php
/**
 * Skrót wpisu w wynikach wyszukiwania
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<article <?php post_class( 'excerpt' ); ?> id="post-<?php the_ID(); ?>">

	<?php	get_template_part( 'template-parts/shared/title', 'link' ); ?>

	<div class="excerpt__meta">
		<?php
		get_template_part( 'template-parts/shared/author' );
		get_template_part( 'template-parts/shared/date' );
		?>
	</div>

</article>
