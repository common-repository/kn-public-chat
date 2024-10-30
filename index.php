<?php
/*
Plugin Name: KN Public Chat
Plugin URI: http://www.KakiNetwork.Com
Description: KN Public Chat is a free WordPress Plugin that lets your visitors and visitor from anyone who install this plugin can chat together in 1 public chat room. For anyone who has cbox.ws premium acc, you can use this plugin for your own purpose also!
Author: Freddie Aziz Jasbindar
Author URI: http://twitter.com/FreddieAziz
Version: 1.0.2
*/
include "functions.php";
register_activation_hook(__FILE__,'install_kn_malay_chat');
register_deactivation_hook(__FILE__,'uninstall_kn_malay_chat');

//shortcode
class kn_malay_chat_code {
     function malay_chat_code() {
            return knmalaychatcode();
     }
}
add_shortcode( 'kn_public_chat', array('kn_malay_chat_code', 'malay_chat_code') );
?>