<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel
 * @since 1.65.3
 */

define( 'AXEL_THEME_VERSION', '1.65.3' );

// Defining useful constants for further use.
define( 'AXEL_THEME_URI', get_template_directory_uri() );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . '/assets/images/' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . '/assets/styles/' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . '/assets/scripts/' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . '/assets/vendor/' );

// Basic theme setup.
require_once 'settings/setup.php';

// Registering CSS styles.
require_once 'settings/styles.php';

// Registering JS scripts.
require_once 'settings/scripts.php';

// Registering menus.
require_once 'settings/menus.php';

// Registering sidebars.
require_once 'settings/sidebars.php';

// Code that helps speed up site.
require_once 'settings/optimisation.php';
