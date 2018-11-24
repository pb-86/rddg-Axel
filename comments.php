<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.1
 */

?>

<div>
	<?php
	if ( have_comments() ) :
		$number_of_comments = get_comments_number();
	endif;
	?>
</div>
