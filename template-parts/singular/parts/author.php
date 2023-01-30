<?php
/**
 * Link do strony autora
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="axel-excerpt__author">

	<?php
	printf(
		'<a href="%s" aria-label="%s">%s</a>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html__( 'Zobacz inne wpisy tego autora', 'axel' ),
		esc_html( get_the_author_meta( 'display_name' ) )
	)
	?>

</div>
