<?php
/**
 * Formularz wyszukiwania.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<form class="searchform" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<label class="searchform__label" for="search">

		<!-- Etykieta -->
		<span class="screen-reader-text">
			<?php esc_html_e( 'Wyszukiwarka', 'axel' ); ?>
		</span>

		<!-- Pole wyszukiwania -->
		<input class="searchform__input" type="search" id="search" name="s" autocomplete="on">

		<!-- Przycisk wyszukiwania -->
		<button class="button searchform__button" type="submit">
			<?php esc_html_e( 'Szukaj', 'axel' ); ?>
		</button>

	</label>
</form>
