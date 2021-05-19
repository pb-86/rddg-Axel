<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.39
 */

define( 'AXEL_THEME_VERSION', '1.38' );

define( 'AXEL_THEME_URI', get_template_directory_uri() );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . '/assets/images/compressed/' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . '/assets/styles/css/' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . '/assets/scripts/minified/' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . '/assets/vendor/' );

require_once 'settings/setup.php';    // Basic theme setup.
require_once 'settings/menus.php';    // Registering menus.
require_once 'settings/sidebars.php'; // Registering sidebar.
require_once 'settings/styles.php';   // Registering CSS styles.
require_once 'settings/scripts.php';  // Registering JS scripts.
