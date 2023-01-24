<?php
/**
 * Szablon sidebara.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<?php if ( is_active_sidebar( 'axel-sidebar' ) ) : ?>

	<aside class="axel-sidebar">

		<?php dynamic_sidebar( 'axel-sidebar' ); ?>

	</aside>

<?php endif; ?>
