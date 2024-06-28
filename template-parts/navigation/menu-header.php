<?php
/**
 * Menu w nagłówku.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<?php if ( has_nav_menu( 'axel_header_menu' ) ) : ?>

	<nav class="navbar navbar--header" aria-label="<?php esc_html_e( 'Górne menu', 'axel' ); ?>">
		<div class="wrapper">

			<?php get_template_part( 'template-parts/navigation/hamburger' ); ?>

			<?php
			wp_nav_menu(
				array(
					'container'      => '',
					'menu'           => 'axel_header_menu',
					'menu_id'        => 'menu-header',
					'menu_class'     => 'menu menu--header js-menu-header',
					'theme_location' => 'axel_header_menu',
				)
			);
			?>

		</div>
	</nav>

<?php endif; ?>
