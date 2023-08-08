<?php
/**
 * Link do strony autora
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<div class="post-author">

	<box-icon name="user-circle" aria-hidden="true"></box-icon>

	<?php
	printf(
		'<a class="post-author__link" href="%s"><span class="screen-reader-text">%s</span> %s</a>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html__( 'Zobacz inne wpisy autora', 'axel' ),
		esc_html( get_the_author_meta( 'display_name' ) )
	)
	?>

</div>
