<?php
/**
 * Szablon sidebara.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<aside class="axel-sidebar">

	<?php if ( is_active_sidebar( 'axel-sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'axel-sidebar-1' ); ?>
	<?php endif; ?>

</aside>
