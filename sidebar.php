<?php
/**
 * The template for displaying sidebar with widget area
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.58
 */

?>

<aside class="axel-sidebar">

	<?php if ( is_active_sidebar( 'axel-sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'axel-sidebar-1' ); ?>
	<?php endif; ?>

</aside>
