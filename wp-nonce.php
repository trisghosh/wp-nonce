<?php 
/*
Plugin Name: Wp Nonce
Plugin URI: https://github.com/trisghosh/wp-nonce
Description: This plugin will let users to use the wp nonce functions using the predefined class
Author: Tristup Ghosh
Version: 1.0
Text Domain : wp-nonce
Author URI: http://www.tristupghosh.com/
*/

// return if file truied to access directly
if ( ! defined( 'ABSPATH' ) ) {
		return;
}
require_once( __DIR__ . '/vendor/autoload.php' );
require_once( plugin_dir_path( __FILE__ ) . 'classes/wp-nonce-class.php' );
//