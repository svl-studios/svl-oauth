<?php
/**
 * Plugin Name: Svl-OAuth
 * Plugin URI: http://github.com/svl-studios/svl-oauth
 * Description: A WordPress plugin that allows users to login or register by authenticating with an existing Google, Facebook, LinkedIn, Github, Reddit or Windows Live account via OAuth 2.0. Easily drops into new or existing sites, integrates with existing users.
 * Version: 1.0.0
 * Author: Kevin Provance
 * Author URI: http://svlstudios.com
 * License: GPL3
 *
 * @package         Svl OAuth
 * @author          Kevin Provance <kevin@svlstudios.com>
 * @license         GNU General Public License, version 3
 * @copyright       2019 SVL Studios
 */

// Based upon WP-OAuth by Perry Butler.

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// start the user session for persisting user/login state during ajax, header redirect, and cross domain calls.
if ( ! isset( $_SESSION ) ) {
	session_start();
}

// Require the main plugin class.
require_once plugin_dir_path( __FILE__ ) . 'class-wpoa.php';

WPOA::$version = '0.4.2';

// Register hooks that are fired when the plugin is activated and deactivated, respectively.
register_activation_hook( __FILE__, array( 'WPOA', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WPOA', 'deactivate' ) );

WPOA::instance();
