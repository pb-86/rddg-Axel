<?php
/**
 * Przycisk *Czytaj dalej*
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="axel-excerpt__read-more">

	<?php
	printf(
		'<a class="axel-excerpt__read-more_link" href="%s" tabindex="-1">%s</a>',
		esc_url( get_permalink() ),
		esc_html__( 'Czytaj dalej', 'axel' )
	);
	?>

</div>
