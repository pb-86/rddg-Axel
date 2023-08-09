<?php
/**
 * Nagłówek strony.
 *
 * @package WordPress
 * @subpackage Axel
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
	<?php get_template_part( 'template-parts/navigation/skip-links' ); ?>

	<header class="header <?php axel_custom_header_class(); ?>" <?php axel_custom_header(); ?>>
		<div class="header__dimm">

		<?php
		get_template_part( 'template-parts/header/site-name' );
		get_search_form();
		?>

		</div>
	</header>

	<?php get_template_part( 'template-parts/navigation/menu', 'header' ); ?>
