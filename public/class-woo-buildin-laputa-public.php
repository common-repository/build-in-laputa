<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://laputa.seomarket.ua
 * @since      1.0.0
 *
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/public
 * @author     Seomarket Ukraine <zinchenko@seomarket.ua>
 */
class Woo_Buildin_Laputa_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $woo_buildin_laputa    The ID of this plugin.
	 */
	private $woo_buildin_laputa;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $woo_buildin_laputa       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $woo_buildin_laputa, $version ) {

		$this->woo_buildin_laputa = $woo_buildin_laputa;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woo_Buildin_Laputa_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woo_Buildin_Laputa_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->woo_buildin_laputa, plugin_dir_url( __FILE__ ) . 'css/woo-buildin-laputa-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woo_Buildin_Laputa_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woo_Buildin_Laputa_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->woo_buildin_laputa, plugin_dir_url( __FILE__ ) . 'js/woo-buildin-laputa-public.js', array( 'jquery' ), $this->version, false );

	}

}
