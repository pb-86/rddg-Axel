<?php
/**
 * The template part for displaying site name.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.29
 */

?>

<div class="axel-site-name">
	<?php if ( is_front_page() || is_home() ) : ?>
		<h1 class="axel-site-name__title">
	<?php endif; ?>

	<a class="axel-site-name__link" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>">
		<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
	</a>

	<?php if ( is_front_page() || is_home() ) : ?>
		</h1>
	<?php endif; ?>

	<div class="axel-site-name__description">
		<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
	</div>
</div>
