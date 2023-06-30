<?php
/**
 * Stopka strony.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

	<footer class="footer">

		<div class="footer__navigation">
			<div class="wrapper">
				<?php
				get_template_part( 'template-parts/navigation/menu', 'footer' );
				get_template_part( 'template-parts/footer/scroll-to-top' );
				?>
			</div>
		</div>

		<div class="footer__credits">
			<div class="wrapper">
				<?php get_template_part( 'template-parts/footer/credits' ); ?>
			</div>
		</div>

	</footer>

	<?php wp_footer(); ?>
</body>
</html>
