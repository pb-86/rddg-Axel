<?php
/**
 * Szablon komentarzy.
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.66.3
 */

?>

<div class="axel-comments">
	<?php
	comment_form();
	wp_list_comments();
	the_comments_pagination();
	?>
</div>
