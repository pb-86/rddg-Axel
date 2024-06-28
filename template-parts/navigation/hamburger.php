<?php
/**
 * Przycisk roziwjania menu mobilnego (hamburger).
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<button class="hamburger button js-hamburger" aria-controls="menu-header" aria-expanded="false">
	<span class="screen-reader-text">
		<?php esc_html_e( 'Pokaż/zwiń menu', 'axel' ); ?>
	</span>
</button>
