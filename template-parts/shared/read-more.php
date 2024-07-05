<?php
/**
 * Przycisk *Czytaj dalej*
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="read-more">

	<?php
	printf(
		'<a class="read-more__link" href="%s" tabindex="-1">%s</a>',
		esc_url( get_permalink() ),
		esc_html__( 'Czytaj dalej', 'axel' )
	);
	?>

</div>
