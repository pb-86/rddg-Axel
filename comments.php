<?php
/**
 * Szablon komentarzy.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="comments">
	<div class="wrapper wrapper--small">

		<?php	comment_form(); ?>

		<ul class="comments__list">
			<?php wp_list_comments(); ?>
		</ul>

		<?php the_comments_pagination(); ?>

	</div>
</div>
