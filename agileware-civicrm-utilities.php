<?php

/**
 * @link              https://agileware.com.au
 * @since             1.0.0
 * @package           Agileware_Civicrm_Utilities
 *
 * @wordpress-plugin
 * Plugin Name:       Agileware CiviCRM Utilities
 * Plugin URI:        https://agileware.com.au
 * Description:       A plugin for using with CiviCRM and Caldera Forms
 * Version:           1.0.2
 * Author:            Agileware
 * Author URI:        https://agileware.com.au/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       agileware-civicrm-utilities
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/agileware/agileware-civicrm-utilities
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//TODO check CiviCRM and Caldera Forms activated

require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AGILEWARE_CIVICRM_UTILITIESVERSION', '1.0.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-agileware-civicrm-utilities-activator.php
 */
function activate_agileware_civicrm_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-agileware-civicrm-utilities-activator.php';
	Agileware_Civicrm_Utilities_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-agileware-civicrm-utilities-deactivator.php
 */
function deactivate_agileware_civicrm_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-agileware-civicrm-utilities-deactivator.php';
	Agileware_Civicrm_Utilities_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_agileware_civicrm_utilities' );
register_deactivation_hook( __FILE__, 'deactivate_agileware_civicrm_utilities' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-agileware-civicrm-utilities.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_agileware_civicrm_utilities() {

	$plugin = new Agileware_Civicrm_Utilities();
	$plugin->run();

}

run_agileware_civicrm_utilities();
