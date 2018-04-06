<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Croissant Redirect Manager
 * Description:       In house redirect management without limits
 * Version:           1.0.0
 * Author:            Shortlist Media
 * Author URI:        http://shortlistmedia.co.uk/
 * License:           MIT
 */

defined( 'ABSPATH' ) or die( ':)' );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

add_action( 'muplugins_loaded', function() {
	$container = require __DIR__ . '/di.php';

	$post_type = $container->get( 'redirect' );
	$post_type->register_hooks();

	$acf_fields = $container->get( 'custom_fields' );
	$acf_fields->register_fields();
} );
