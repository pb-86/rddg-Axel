<?php
/**
 * Data dodania wpisu
 *
 * @package WordPress
 * @subpackage Axel
 */

?>

<time class="singular__date" datetime="<?php the_time( 'Y-m-d H:i' ); ?>">
	<?php echo esc_html( human_time_diff( get_post_timestamp(), time() ) ); ?>
	<?php esc_html_e( ' temu', 'axel' ); ?>
</time>
