<?php
/*
| ----------------------
| # Globals
| ----------------------
*/

define( 'EnrollMS_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'EnrollMS_PLUGIN_ASSETS', plugin_dir_url(__FILE__) . 'assets/' );
define( 'EnrollMS_PLUGIN_VIEW', plugin_dir_path(__FILE__) . 'views/' );
define( 'EnrollMS_PLUGIN_CONTROLLER', plugin_dir_path(__FILE__) . 'controllers/' );
define( 'EnrollMS_PLUGIN_VENDOR', plugin_dir_url(__FILE__) . 'vendor/' );
define( 'EnrollMS_PLUGIN_CSS', plugin_dir_url(__FILE__) . 'css/' );
define( 'EnrollMS_PLUGIN_JS', plugin_dir_url(__FILE__) . 'js/' );

define( 'EnrollMS_TEXT_DOMAIN', 'enrollment-text-domain' );


include EnrollMS_PLUGIN_PATH . 'includes/helpers.php';