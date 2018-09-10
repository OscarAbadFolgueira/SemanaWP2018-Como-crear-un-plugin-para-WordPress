<?php
/*
* Plugin Name: Mi Mantenimiento
* Plugin URI: https://ohyeahdev.es
* Description: Plugin de mantenimiento.
* Version: 1.0
* Tested up to: 4.9.8
* Text Domain: mi-mnto
* Domain Path: /languages/
* Author: Oscar Abad Folgueira
* Author URI: https://ohyeahdev.es
* License: GNU General Public License v3.0
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Fuera!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mi_mantenimiento() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'mantenimiento.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'mantenimiento.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'mi_mantenimiento' );