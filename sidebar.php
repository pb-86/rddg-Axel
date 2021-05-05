<?php
/**
 * The template for displaying sidebar with widget area
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.21
 */

?>

<aside class="axel-sidebar">
	<?php if ( is_active_sidebar( 'axel-sidebar-1' ) ) : ?>
		<ul id="sidebar">
			<?php dynamic_sidebar( 'axel-sidebar-1' ); ?>
		</ul>
	<?php endif; ?>
</aside>
