<?php
/*
 * Plugin Name: kitaniaSC
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: kitaniasc
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-kitaniasc.php' );
require_once( 'includes/class-kitaniasc-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-kitaniasc-admin-api.php' );
require_once( 'includes/lib/class-kitaniasc-post-type.php' );
require_once( 'includes/lib/class-kitaniasc-taxonomy.php' );

/**
 * Returns the main instance of kitaniaSC to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object kitaniaSC
 */
function kitaniaSC () {
	$instance = kitaniaSC::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = kitaniaSC_Settings::instance( $instance );
	}

	return $instance;
}

kitaniaSC();