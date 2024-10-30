<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://laputa.seomarket.ua
 * @since      1.0.0
 *
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/admin
 * @author     Seomarket Ukraine <zinchenko@seomarket.ua>
 */
class Ajax_Wpamin_Admin {
    const LAPUTA_PASSWORD = 'laputa-password';

    /**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}


    /**
     *
     */
    function get_laputa_password() {


        if(
            !isset( $_GET['wpamin_nonce'] )
                AND !isset( $_POST['wpamin_nonce'] )
            OR !wp_verify_nonce($_POST['wpamin_nonce'], 'get_password')
                AND !wp_verify_nonce($_GET['wpamin_nonce'], 'get_password')
        ) {
            die('Nonce validation failed');
        }

        die( get_site_option( self::LAPUTA_PASSWORD  ) );
    }


    /**
     *
     */
    function set_laputa_password() {


        if(
            !isset( $_GET['wpamin_nonce'] )
                AND !isset( $_POST['wpamin_nonce'] )
            OR !wp_verify_nonce($_POST['wpamin_nonce'], 'set_password')
                AND !wp_verify_nonce($_GET['wpamin_nonce'], 'set_password')
        ) {
            die('Nonce validation failed');
        }

        if( !empty($_GET[ self::LAPUTA_PASSWORD ]) ){
            $password = $_GET[ self::LAPUTA_PASSWORD ];
        }elseif( !empty($_POST[ self::LAPUTA_PASSWORD ]) ){
            $password = $_POST[ self::LAPUTA_PASSWORD ];
        }else{
            echo(
                json_encode(array(
                'error' => array(
                    'msg' => 'Passwords is not specified',
                    'code' => 400,
                ),
            ))
            );
            throw new Exception();
        }

        $success_saving =  (get_site_option( self::LAPUTA_PASSWORD ) === false )
            ? add_site_option(self::LAPUTA_PASSWORD, $password)
            : update_site_option(self::LAPUTA_PASSWORD, $password);


        if( ! $success_saving ){
            echo json_encode([
                'message' => 'Error saving password',
                'code' => 500,
            ]);
            throw new Requests_Exception_HTTP_500();
        }

        die( 'Passwords has been successfully saved' );
    }


    /**
     *
     */
    function get_user_email() {

        if( !isset( $_GET['wpamin_nonce'] ) && !isset( $_POST['wpamin_nonce'] ) || !wp_verify_nonce($_POST['wpamin_nonce'], 'email') && !wp_verify_nonce($_GET['wpamin_nonce'], 'email')) {
            die('Forbidden');
        }

        wp_localize_script('wpamin-app', 'wpamin_vars', [
                'nonce' => wp_create_nonce('wpamin-nonce'),
            ]
        );

        $current_user = wp_get_current_user();
        $response =  json_encode( [
            "username" => $current_user->user_login,
            "user_email" => $current_user->user_email,
        ] );

        die( $response );
    }

}
