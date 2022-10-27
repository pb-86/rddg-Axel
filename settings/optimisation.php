<?php
/**
 * Przyspieszanie działania strony.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.66.3
 */

// Usuwa WP Emoji.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
