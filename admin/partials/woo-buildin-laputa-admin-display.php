<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://laputa.seomarket.ua
 * @since      1.0.0
 *
 * @package    Woo_Buildin_Laputa
 * @subpackage Woo_Buildin_Laputa/admin/partials
 */
require_once WOO_BUILDIN_LAPUTA_PLUGIN_DIR . '/includes/Feed.php';
$upload_dir = wp_upload_dir();
$base_upload_folder_url = $upload_dir['baseurl'];
?>
<h1>Build-in Laputa</h1>
<p>Запустить контекстную рекламу</p>
<div id="laputa-ambassador-container" data-partner-id="woo-buildin-laputa"></div>

<?php
if(   is_null( $feed_url = Feed::getUrl() )   ):?>
    <p>Не найден xml-файл сгенерированной товарной выгрузки.
        Сгенерировать его необходимо плагином Yml-Exporter by Seomarket</p>
<?php else:?>
    <script>
        var email_nonce = '<?= wp_create_nonce( 'email' ) ?>';
        var set_password_nonce = '<?= wp_create_nonce( 'set_password' ) ?>';
        var get_password_nonce = '<?= wp_create_nonce( 'get_password' ) ?>';

        /**
         * Получить ссылку на xml-выгрузку товаров
         * @returns {object}
         */
        function getFeedUrl(){
            return '<?= $base_upload_folder_url?>/feed-yml.xml';
        }
    </script>
<?php endif;?>

