<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://laputa.seomarket.ua
 * @since      1.0.0
 *
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/includes
 * @author     Seomarket Ukraine <zinchenko@seomarket.ua>
 */
class Woo_Buildin_Laputa_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
	    require_once WOO_BUILDIN_LAPUTA_PLUGIN_DIR . '/admin/class-ajax-wpamin-admin.php';
	    require_once WOO_BUILDIN_LAPUTA_PLUGIN_DIR . '/includes/Feed.php';
        delete_site_option( Ajax_Wpamin_Admin::LAPUTA_PASSWORD );
        delete_site_option( Feed::LAPUTA_FEED_URL );
	}

}
