<?php
/**
 * Stopka strony.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
 */

?>

	<footer class="axel-footer">
		<?php
		get_template_part( 'template-parts/footer/scroll-to-top' );
		get_template_part( 'template-parts/menus/footer-menu' );
		get_template_part( 'template-parts/footer/credits' );
		?>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
