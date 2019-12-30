<?php
/**
 * The template part used to display information about no posts
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.9
 */

?>

<article class="axel-article axel-article--noposts">
	<?php
		esc_html_e( 'Sorry, no posts yet. Try search.', 'axel' );
		get_search_form();
	?>
</article>
