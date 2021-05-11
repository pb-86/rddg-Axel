<?php
/**
 * Search form
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.24
 */

?>

<form class="axel-searchform" method="get" action="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>">
	<label class="screen-reader-text" for="search">
		<?php esc_html_e( 'Wyszukiwarka', 'axel' ); ?>
	</label>
	<input type="search" id="search" name="s" autocomplete="on">
	<button type="submit">
		<?php esc_html_e( 'Szukaj', 'axel' ); ?>
	</button>
</form>
