<?php
/**
 * The template for diplaying the header
 *
 * @package WordPress
 * @subpackage Axel
 * @version 1.19
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

<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#axel-main">
	<?php esc_html_e( 'Skip to content', 'axel' ); ?>
</a>

<nav class="axel-nav">
	<?php
	/**
	 * This function displays main menu from list registered
	 * in file: includes/menus.php
	 *
	 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu
	 */

	$args = array(
		'menu'           => 'header_menu',
		'menu_id'        => '',
		'menu_class'     => 'axel-menu',
		'container'      => '',
		'theme_location' => 'header_menu',
	);
	wp_nav_menu( $args );
	?>
</nav>

<header class="axel-header">
	<?php
	/**
	 * Displaying custom logo if it has been set.
	 */
	axel_logo();
	?>

	<?php
	/**
	 * This function displays search form.
	 *
	 * @link https://developer.wordpress.org/reference/functions/get_search_form
	 */
		get_search_form();
	?>
</header>
