<?php
/**
 * Formularz wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<form class="searchform" method="get" action="<?php echo esc_url( home_url() ); ?>">

	<!-- Etykieta -->
	<label class="screen-reader-text" for="search">
		<?php esc_html_e( 'Wyszukiwarka', 'axel' ); ?>
	</label>

	<!-- Pole wyszukiwania -->
	<input class="searchform__input" type="search" id="search" name="s" autocomplete="on">

	<!-- Przycisk wyszukiwania -->
	<button class="searchform__button button" type="submit">
		<box-icon name="search-alt" aria-hidden="true"></box-icon>
		<?php esc_html_e( 'Szukaj', 'axel' ); ?>
	</button>

</form>
