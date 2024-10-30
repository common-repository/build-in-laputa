<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://laputa.seomarket.ua
 * @since      1.0.0
 *
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/includes
 * @author     Seomarket Ukraine <zinchenko@seomarket.ua>
 */
class Woo_Buildin_Laputa_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-buildin-laputa',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
