<?php
/**
 * Tytuł wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<h2 class="axel-excerpt__title">

	<?php
	printf(
		'<a class="axel-excerpt__title-link" href="%s">%s</a>',
		esc_url( get_permalink() ),
		esc_html( get_the_title() )
	);
	?>

</h2>
