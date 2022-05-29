<?php

use Elementor\Core\App\Modules\ImportExport\Directories\Content;

/**
 * @package Hello_Dolly
 * @version 1.7.2

 */
/*
Plugin Name: test
Plugin URI: test
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: ibragim
Version: 1.7.2
Author URI: http://ma.tt/
*/



function bonjour($content)
{
    if (is_single()) {
        $salut = "<p>salut ca va</p>";
        $user_id = get_current_user_id(); 
        $user_info = get_userdata($user_id);

        if($user_info) {
            echo 'Username: '.$user_info->user_login.'<br />';
            echo 'User roles: '.implode(', ', $user_info->roles).'<br />';
            // Attention : $user_info->roles retourne un tableau
        }
        return $salut.$content;
    }
    else {
        return $content;
    }
}


add_action('the_content', 'bonjour');