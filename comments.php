<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.2
 */

?>

<div>
	<?php
	comment_form();
	wp_list_comments();
	the_comments_pagination();
	?>
</div>
