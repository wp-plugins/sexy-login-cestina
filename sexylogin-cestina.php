<?php
/*
Plugin Name: Sexy Login čeština
Plugin URI: http://expres-web.cz
Description: Přeloží plugin Sexy Login do češtiny.
Version: 1.0
Author: Expres-Web.cz
Author URI: http://expres-web.cz
Text Domain: slc

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Maybe load the subscribe2 čeština.
 *
 * @since 1.3
 */
function slc_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/sexy-login-cestina/jazyky/' . apply_filters( 'sl-domain_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'sl-domain', $mofile );
}
add_action( 'wp_loaded', 'slc_load_textdomain' );
