<?php
/**
 * Szablon sidebara.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

	<aside class="sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside>

<?php endif; ?>
