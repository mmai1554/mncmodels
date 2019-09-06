<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mainetcare
 * @since             1.0.0
 * @package           Mncmodels
 *
 * @wordpress-plugin
 * Plugin Name:       MaiNetCare Models
 * Plugin URI:        https://github.com/mmai1554/mncmodels.git
 * Description:       Models (CPTs) and Shortcodes for the mainetcare-website
 * Version:           1.0.0
 * Author:            MaiNetCare GmbH
 * Author URI:        https://mainetcare
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mncmodels
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MNCMODELS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mncmodels-activator.php
 */
function activate_mncmodels() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mncmodels-activator.php';
	Mncmodels_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mncmodels-deactivator.php
 */
function deactivate_mncmodels() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mncmodels-deactivator.php';
	Mncmodels_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mncmodels' );
register_deactivation_hook( __FILE__, 'deactivate_mncmodels' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mncmodels.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mncmodels() {

	$plugin = new Mncmodels();
	$plugin->run();

}
run_mncmodels();
