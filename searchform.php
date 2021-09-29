<?php
/**
 * Search form
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.51
 */

?>

<form class="axel-search-form" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<label class="axel-search-form__label">
		<span class="screen-reader-text">
			<?php esc_html_e( 'Wyszukiwarka', 'axel' ); ?>
		</span>
		<input class="axel-search-form__input" type="search" id="search" name="s" autocomplete="on" placeholder="<?php esc_attr_e( 'What are you looking for?', 'axel' ); ?>">
		<button class="axel-button axel-search-form__button" type="submit">
			<?php esc_html_e( 'Search', 'axel' ); ?>
		</button>
	</label>
</form>
