<?php
/**
 * Tytuł wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<?php if ( is_singular() ) : ?>
	<h1 class="singular__title">
<?php else : ?>
	<h2 class="singular__title">
<?php endif; ?>

	<?php
	printf(
		'<a class="singular__title-link" href="%s">%s</a>',
		esc_url( get_permalink() ),
		esc_html( get_the_title() )
	);
	?>

<?php if ( is_singular() ) : ?>
	</h1>
<?php else : ?>
	</h2>
<?php endif; ?>
