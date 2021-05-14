<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.29
 */

?>

<footer class="axel-footer">
	<div class="axel-wrapper">
		<?php
		get_template_part( 'template-parts/footer/scroll-to-top' );
		get_template_part( 'template-parts/menus/footer-menu' );
		get_template_part( 'template-parts/footer/credits' );
		?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
