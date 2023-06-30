<?php
/**
 * Stopka strony.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

	<footer class="footer">

		<?php
		get_template_part( 'template-parts/footer/scroll-to-top' );
		get_template_part( 'template-parts/navigation/menu', 'footer' );
		get_template_part( 'template-parts/footer/credits' );
		?>

	</footer>

	<?php wp_footer(); ?>
</body>
</html>
