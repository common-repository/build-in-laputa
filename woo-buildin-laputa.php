<?php

/** *
 * @link              http://laputa.seomarket.ua
 * @since             1.0.0
 * @package           Woo_Buildin_Laputa
 *
 * @wordpress-plugin
 * Plugin Name:       Build-in Laputa
 * Plugin URI:        http://laputa.seomarket.ua/wiki/woo-buildin-laputa/
 * Description:       The build-in version of a popular Laputa-tool-box for context advertising in Google Adwords.
 * Version:           1.0.0
 * Author:            Seomarket Ukraine
 * Author URI:        http://seomarket.ua/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-buildin-laputa
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-buildin-laputa-activator.php
 */
function activate_woo_buildin_laputa() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-buildin-laputa-activator.php';
	Woo_Buildin_Laputa_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-buildin-laputa-deactivator.php
 */
function deactivate_woo_buildin_laputa() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-buildin-laputa-deactivator.php';
	Woo_Buildin_Laputa_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woo_buildin_laputa' );
register_deactivation_hook( __FILE__, 'deactivate_woo_buildin_laputa' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woo-buildin-laputa.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_buildin_laputa() {

    define('WOO_BUILDIN_LAPUTA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
    define('WOO_BUILDIN_LAPUTA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
	$plugin = new Woo_Buildin_Laputa();
	$plugin->run();

}
run_woo_buildin_laputa();
