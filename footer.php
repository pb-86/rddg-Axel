<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.25
 */

?>

<footer class="axel-footer">
	<div class="axel-wrapper">
		<?php
		get_template_part( 'templates/footer/scroll-to-top' );
		get_template_part( 'templates/menus/footer-menu' );
		get_template_part( 'templates/footer/credits' );
		?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
