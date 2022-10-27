<?php
/**
 * Tytuł i opis strony.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
 */

?>

<div class="axel-site-name">
	<?php if ( is_front_page() || is_home() ) : ?>
		<h1 class="axel-site-name__title">
	<?php endif; ?>

	<a class="axel-site-name__link" href="<?php echo esc_url( home_url() ); ?>">
		<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
	</a>

	<?php if ( is_front_page() || is_home() ) : ?>
		</h1>
	<?php endif; ?>

	<div class="axel-site-name__description">
		<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
	</div>
</div>
