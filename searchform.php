<?php
/**
 * Search form
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.8.1
 */

?>

<form role="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<input type="search" name="s" />
	<button type="submit"><?php esc_html_e( 'Search', 'axel' ); ?></button>
</form>
