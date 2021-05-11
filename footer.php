<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.24
 */

?>

<footer class="axel-footer">
	<?php
		get_template_part( 'templates/footer/scroll-to-top' );
		get_template_part( 'templates/menus/footer-menu' );
		get_template_part( 'templates/footer/credits' );
	?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
