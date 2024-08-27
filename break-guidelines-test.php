<?php
/**
 * Plugin Name: Break Guidelines Test Plugin
 * Plugin URI:  https://github.com/davidperezgar/break-guidelines-test
 * Description: Breaks the Guidelines for testing.
 * Version:     1.0.0
 * Author:      davidperezgar
 * Author URI:  https://github.com/davidperezgar
 * Text Domain: break-guidelines-test
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Requires at least: 5.4
 * Requires PHP: 7.0
 * Requires Plugins: Required plugins
 *
 * @package     BreakGuidelinesTest
 * @author      davidperezgar
 * @copyright   2024 DavidPerez
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 * Prefix:      brea_
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

define( 'BREA_VERSION', '1.0.0' );
define( 'BREA_PLUGIN', __FILE__ );
define( 'BREA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BREA_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// Include files.
require_once BREA_PLUGIN_PATH . 'break-sanitize.php';
require_once BREA_PLUGIN_PATH . 'break-curl.php';
