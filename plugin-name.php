<?php
/**
 * Bootstrap file
 *
 * Plugin Name: Plugin Name
 * Description: The plugin adds information about the games to the site posts.
 * Version:     {VERSION}
 * Author:      {AUTHOR}
 * Author URI:  {AUTHOR_URL}
 * License:     GPLv2 or later
 * Text Domain: plugin-name
 *
 * @package     PluginName
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once plugin_dir_path( __FILE__ ) . 'functions.php';
