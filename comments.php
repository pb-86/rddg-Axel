<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.45
 */

?>

<div class="axel-comments">
	<?php
	comment_form();
	wp_list_comments();
	the_comments_pagination();
	?>
</div>
