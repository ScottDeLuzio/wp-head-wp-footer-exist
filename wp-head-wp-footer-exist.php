<?php
/*
Plugin Name: Does wp_head and wp_footer functions exist
Description: Checks to see if the wp_head and wp_footer functions exist in the active theme.
Version: 1.0.0
Author: Scott DeLuzio
Author URI: https://scottdeluzio.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-head-wp-footer-exist
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Add Head Check
include( 'includes/head-check.php' );

// Add Footer Check
include( 'includes/footer-check.php' );
