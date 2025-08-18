<?php

/**
 * Plugin Name: Ahmed Plugin
 * Plugin URI:  https://example.com
 * Description: test plugin
 * Version:     1.0.0
 * Author:      Ahmed
 * Author URI:  https://yourwebsite.com
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ahmed-plugin
 *
 * @package     Ahmed_Plugin
 */

if (!defined('ABSPATH')) {
  die;
}
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
  require_once dirname(__FILE__) . '/vendor/autoload.php';
}
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_DIR', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_ahmed_plugin()
{
  Activate::activate();
}

function deactive_ahmed_plugin()
{
  Deactivate::deactivate();
}


register_activation_hook(__FILE__,  'activate_ahmed_plugin');
register_deactivation_hook(__FILE__, 'deactive_ahmed_plugin');

if (class_exists('Inc\\Init')) {
  Inc\Init::register_services();
}
