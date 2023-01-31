<?php
/**
 * Formularz wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<form class="search-form" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<label class="search-form__label" for="search">

		<!-- Etykieta -->
		<span class="screen-reader-text">
			<?php esc_html_e( 'Wyszukiwarka', 'axel' ); ?>
		</span>

		<!-- Pole wyszukiwania -->
		<input class="search-form__input" type="search" id="search" name="s" autocomplete="on">

		<!-- Przycisk wyszukiwania -->
		<button class="button search-form__button" type="submit">
			<?php esc_html_e( 'Szukaj', 'axel' ); ?>
		</button>

	</label>
</form>
