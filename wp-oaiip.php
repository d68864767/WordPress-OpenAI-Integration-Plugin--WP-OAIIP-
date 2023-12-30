<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.yourwebsite.com
 * @since             1.0.0
 * @package           WP_OAIIP
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress OpenAI Integration Plugin
 * Plugin URI:        https://www.yourwebsite.com/wp-oaiip
 * Description:       Integrates OpenAI's advanced AI capabilities into your WordPress site to automate and enhance content creation, SEO, and user interaction.
 * Version:           1.0.0
 * Author:            Your Name
 * Author URI:        https://www.yourwebsite.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-oaiip
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-oaiip-activator.php
 */
function activate_wp_oaiip() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-oaiip-activator.php';
	WP_OAIIP_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-oaiip-deactivator.php
 */
function deactivate_wp_oaiip() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-oaiip-deactivator.php';
	WP_OAIIP_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_oaiip' );
register_deactivation_hook( __FILE__, 'deactivate_wp_oaiip' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-oaiip.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_oaiip() {

	$plugin = new WP_OAIIP();
	$plugin->run();

}

run_wp_oaiip();
?>
