<?php

/**
 * Network Content Widgets and Shortcodes
 *
 * @author    Pea, Glocal
 * @license   GPL-2.0+
 * @link      http://glocal.coop
 * @since     1.2.2
 * @package   WP_Network_Content_Display
 */

/*
Plugin Name: Network Content Widgets and Shortcodes
Description: Widgets and shortcodes that display network content on your multi-site or multi-network install.
Author: Pea, Glocal
Author URI: http://glocal.coop
Version: 1.7.0
License: GPLv3
Text Domain: wp-network-content-display
Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}


/* ---------------------------------- *
 * Constants
 * ---------------------------------- */

if ( !defined( 'WP_NETWORK_CONTENT_DISPLAY_DIR' ) ) {
    define( 'WP_NETWORK_CONTENT_DISPLAY_DIR', plugin_dir_path( __FILE__ ) );
}

if ( !defined( 'WP_NETWORK_CONTENT_DISPLAY_URL' ) ) {
    define( 'WP_NETWORK_CONTENT_DISPLAY_URL', plugin_dir_url( __FILE__ ) );
}

include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/constructors.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/get-content.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/helpers.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/render.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/shortcodes.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/shortcake.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/enqueue.php' );

include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/widgets/class-network-posts-widget.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/widgets/class-network-events-widget.php' );
include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'includes/widgets/class-network-sites-widget.php' );

include_once( WP_NETWORK_CONTENT_DISPLAY_DIR . 'glocal-network-content-widgets.php' );
