<?php
/**
 * The template for diplaying the header
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
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
	<?php get_template_part( 'templates/header/skip-link' ); ?>

	<header class="axel-header">
		<div class="axel-wrapper">
			<?php
			get_template_part( 'templates/header/site-name' );
			get_search_form();
			get_template_part( 'templates/menus/header-menu' );
			?>
		</div>
	</header>
