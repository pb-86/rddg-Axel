<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.20
 */

?>

<div>
	<?php
	comment_form();
	wp_list_comments();
	the_comments_pagination();
	?>
</div>
