<?php
/**
 * Tytuł i opis strony.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<?php if ( get_bloginfo( 'name' ) || get_bloginfo( 'description' ) ) : ?>

	<div class="site-name">

		<?php if ( get_bloginfo( 'name' ) ) : ?>
			<div class="site-name__title">
				<a class="site-name__link" href="<?php echo esc_url( home_url() ); ?>">
					<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
				</a>
			</div>
		<?php endif; ?>

		<?php if ( get_bloginfo( 'description' ) ) : ?>
			<div class="site-name__description">
				<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
			</div>
		<?php endif; ?>

	</div>

<?php endif; ?>
