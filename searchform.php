<?php
/**
 * Search form
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.20
 */

?>

<form class="axel-search" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<label class="axel-search__label">
		<?php esc_html_e( 'Search', 'axel' ); ?>
		<input class="axel-search__input" type="search" name="s" autocomplete="on">
	</label>
	<button class="axel-search__submit" type="submit">
		<?php esc_html_e( 'Go', 'axel' ); ?>
	</button>
</form>
