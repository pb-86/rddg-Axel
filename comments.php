<?php
/**
 * File comment
 *
 * @package WordPress
 */

?>

<div>
	<?php
	if ( have_comments() ) :
		$number_of_comments = get_comments_number();
	endif;
	?>
</div>
