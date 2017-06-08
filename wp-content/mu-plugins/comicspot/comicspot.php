<?php
/*
 * Plugin Name: Comicspot
 * Plugin URI:
 * Description: Handles visitor check-in for an office and maintain a log of each visitor.
 * Author: Solomon Scott
 * Version: 1.0.0
 * Author URI: http://solomonscott.com
 * License: GPL2+
 * Text Domain: check-in
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'COMICSPOT__VERSION', '1.0.0' );
define( 'COMICSPOT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'COMICSPOT__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'COMICSPOT__PLUGIN_BASE', plugin_basename( __FILE__ ) );
define( 'COMICSPOT__PLUGIN_FILE', __FILE__ );
define( 'COMICSPOT__PLUGIN_NAME', 'comicspot' );

require_once COMICSPOT__PLUGIN_DIR . '/includes/class.comicspot.php';

Comicspot::init();