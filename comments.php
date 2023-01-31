<?php
/**
 * Szablon komentarzy.
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="comments">
	<?php
	comment_form();
	wp_list_comments();
	the_comments_pagination();
	?>
</div>
