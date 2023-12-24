<?php
/**
 * Plugin Name: WP Ajax Form Submission
 * Plugin URI:
 * Description: This plugin is used to submit form data using ajax.
 * Version: 1.0.0
 * Author: Shamim Hasan
 * Author URI: https://codepopular.com
 * License: GPL2
 * Text Domain: wp-ajax-form-submission
 * Domain Path: /languages/
 * @package WP_Ajax_Form_Submission
 * @category Core
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Declear common constant

if ( ! defined( 'WPAFS_VERSION' ) ) {
    define( 'WPAFS_VERSION', '1.0.0' );
}

if ( ! defined( 'WPAFS_FILE' ) ) {
    define( 'WPAFS_FILE', __FILE__ );
}

if ( ! defined( 'WPAFS_PATH' ) ) {
    define( 'WPAFS_PATH', plugin_dir_path( WPAFS_FILE ) );
}

if ( ! defined( 'WPAFS_URL' ) ) {
    define( 'WPAFS_URL', plugins_url( '', WPAFS_FILE ) );
}

if ( ! defined( 'WPAFS_ASSETS' ) ) {
    define( 'WPAFS_ASSETS', WPAFS_URL . '/assets' );
}

if ( ! defined( 'WPAFS_INC' ) ) {
    define( 'WPAFS_INC', WPAFS_PATH . 'inc' );
}

if ( ! defined( 'WPAFS_ADMIN' ) ) {
    define( 'WPAFS_ADMIN', WPAFS_PATH . 'admin' );
}

// Load the loader class

require_once WPAFS_INC . '/Loader.php';