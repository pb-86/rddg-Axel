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

		<?php
		// Tytuł strony.
		if ( get_bloginfo( 'name' ) ) {
			if ( is_home() || is_front_page() ) {
				printf(
					'<h1><a class="site-name__link" href="%s" rel="home">%s</a></h1>',
					esc_url( home_url( '/' ) ),
					esc_html( get_bloginfo( 'name' ) )
				);
			} else {
				printf(
					'<a class="site-name__link" href="%s" rel="home">%s</a>',
					esc_url( home_url( '/' ) ),
					esc_html( get_bloginfo( 'name' ) )
				);
			}
		}

		// Opis strony.
		if ( get_bloginfo( 'description' ) ) {
			printf(
				'<div class="site-name__description">%s</div>',
				esc_html( get_bloginfo( 'description' ) )
			);
		}
		?>

	</div>
<?php endif; ?>
