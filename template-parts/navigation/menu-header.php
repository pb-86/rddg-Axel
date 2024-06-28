<?php
/**
 * Menu w nagłówku.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<nav class="navbar navbar--header" aria-label="<?php esc_html__( 'Górne menu', 'axel' ); ?>">

	<button class="hamburger button js-hamburger" aria-controls="menu-header" aria-expanded="false">
		<span class="screen-reader-text">
			<?php esc_html_e( 'Pokaż/zwiń menu', 'axel' ); ?>
		</span>
	</button>

	<?php
	if ( has_nav_menu( 'axel_header_menu' ) ) {
		wp_nav_menu(
			array(
				'container'            => '',
				'container_aria_label' => esc_html__( 'Górne menu', 'axel' ),
				'menu'                 => 'axel_header_menu',
				'menu_id'              => 'menu-header',
				'menu_class'           => 'menu menu--header js-menu-header',
				'theme_location'       => 'axel_header_menu',
			)
		);
	}
	?>

</nav>