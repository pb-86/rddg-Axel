<?php
/**
 * The template for displaying sidebar with widget area
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.20
 */

?>

<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</ul>
<?php endif; ?>
