<?php
/*
* Plugin Name: SemanaWP
* Plugin URI: https://ohyeahdev.es
* Description: Plugin para SemanaWP.
* Version: 1.0
* Tested up to: 4.9.8
* Text Domain: semanawp
* Domain Path: /languages/
* Author: Oscar Abad Folgueira
* Author URI: https://ohyeahdev.es
* License: GNU General Public License v3.0
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Largo de aquí!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mostrar_semanawp () {

	$mensaje = "<h3 style='text-align:center; color: blue;'>SemanaWP</h3>";

	return $mensaje;
}


add_shortcode( 'semanawp', 'mostrar_semanawp');

function mostrar_semanawp2( $atts ) {

	$atributos = shortcode_atts( array( 
				'texto'		=>	'texto por defecto',
				), $atts
			);

	$mensaje = "<h3 style='text-align:center; color: blue;'>" . $atributos[ 'texto' ] . "</h3>";

	return $mensaje;
}


add_shortcode( 'semanawp2', 'mostrar_semanawp2');