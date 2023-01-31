<?php
/**
 * Tytuł i opis strony.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="axel-site-name">

	<div class="axel-site-name__title">
		<a class="axel-site-name__link" href="<?php echo esc_url( home_url() ); ?>">
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</a>
	</div>

	<div class="axel-site-name__description">
		<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
	</div>

</div>
