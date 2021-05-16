<?php
/**
 * Search form
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.24
 */

?>

<form class="axel-search-form" method="get" action="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>">
	<label class="screen-reader-text" for="search">
		<?php esc_html_e( 'Wyszukiwarka', 'axel' ); ?>
	</label>
	<input class="axel-search-form__input" type="search" id="search" name="s" autocomplete="on" placeholder="<?php esc_html_e( 'What are you looking for?', 'axel' ); ?>">
	<button class="axel-search-form__button" type="submit">
		<?php esc_html_e( 'Search', 'axel' ); ?>
	</button>
</form>
