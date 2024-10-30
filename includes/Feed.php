<?php


/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 24.07.17
 * Time: 17:42
 */
class Feed
{
    const LAPUTA_FEED_URL = 'laputa_feed_url';


    /**
     * @return string|null
     */
    public static function getUrl(){
        $feed_file_name = get_site_option( Feed::LAPUTA_FEED_URL, null );

        return is_file( (string)(ABSPATH . $feed_file_name) ) ? $feed_file_name : null;
    }
}