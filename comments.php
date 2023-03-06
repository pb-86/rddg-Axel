<?php
/**
 * Szablon komentarzy.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="comments">
	<div class="wrapper">

		<?php
		comment_form();
		wp_list_comments();
		the_comments_pagination();
		?>

	</div>
</div>
