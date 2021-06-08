<?php
/**
 * The template for diplaying the header
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.48
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
	<?php get_template_part( 'template-parts/header/skip-links' ); ?>

	<header class="axel-header">
		<?php
		get_template_part( 'template-parts/header/site-name' );
		get_search_form();
		get_template_part( 'template-parts/menus/header-menu' );
		?>
	</header>
