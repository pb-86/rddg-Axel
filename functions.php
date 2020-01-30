<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel
 * @version 0.10.1
 */

define( 'AXEL_THEME_VERSION', '0.10.1' );

define( 'AXEL_THEME_URI', get_template_directory_uri() );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . '/assets/images' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . '/assets/css' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . '/assets/scripts' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . '/assets/vendor' );
define( 'AXEL_THEME_LANGS', AXEL_THEME_URI . '/languages' );

require_once 'includes/setup.php';    // Basic theme setup.
require_once 'includes/menus.php';    // Registering menus.
require_once 'includes/sidebars.php'; // Registering sidebar.
require_once 'includes/styles.php';   // Registering CSS styles.
require_once 'includes/scripts.php';  // Registering JS scripts.
