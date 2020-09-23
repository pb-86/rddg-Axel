<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.19
 */

?>

<footer class="axel-footer">
	<?php
	/**
	 * This function displays footer menu from list registered
	 * in file: includes/menus.php
	 *
	 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu
	 */

	$args = array(
		'menu'           => 'footer_menu',
		'menu_id'        => '',
		'menu_class'     => 'axel-menu',
		'container'      => '',
		'theme_location' => 'footer_menu',
	);
	wp_nav_menu( $args );
	?>

	<?php esc_html_e( 'Axel theme made by Reddog Systems', 'axel' ); ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
