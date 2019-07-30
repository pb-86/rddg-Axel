<?php
/**
 * The template for diplaying the header
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.6
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>

<nav role="navigation">
	<?php
	/**
	 * This function displays current menu from list registered in
	 * file: includes/menus.php
	 *
	 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu
	 */

	$args = array(
		'menu'           => 'header_menu',
		'menu_id'        => '',
		'menu_class'     => '',
		'container'      => '',
		'theme_location' => 'header_menu',
	);
	wp_nav_menu( $args );
	?>
</nav>

<header role="banner">
	<a href="<?php echo esc_url( home_url() ); ?>">
		<img class="logo" src="" alt="Logo">
	</a>
	<?php
	/**
	 * This function displays search form.
	 *
	 * @link https://developer.wordpress.org/reference/functions/get_search_form
	 */
		get_search_form();
	?>
</header>
