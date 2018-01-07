<?php 
/**
 * Plugin Name: Namespace Autoload with Composer Demo
 * Plugin URI: https://www.spencerfeng.com.au/using-namespaces-and-autoloading-with-composer-in-wordpress-plugins
 * Description: Learn how to use namespaces and autoloading with composer in WordPress plugins.
 * Version: 0.1.0
 * Author: Spencer Feng
 * Author URI: https://www.spencerfeng.com.au
 * License: GPL2
 */

define('BASE_PATH', plugin_dir_path(__FILE__));
define('BASE_URL', plugin_dir_url(__FILE__));

// include the Composer autoload file
require BASE_PATH . 'vendor/autoload.php';

use Spencerfeng\NamespaceAutoloadWithComposerDemo\Shortcodes;
use Spencerfeng\NamespaceAutoloadWithComposerDemo\Plugin;

// instantiate classes
$shortcode = new Shortcodes\DisplayTodaysDateShortcode();
$plugin    = new Plugin();

// register all shortcodes
$plugin->addShortcode($shortcode);

// initialise the plugin
$plugin->init();