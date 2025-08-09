<?php
/*
Plugin Name: Related content
Plugin URI: https://wordpress.org/plugins/related-posts
Description: Related Content Plugin
Author: Mohsen Hooshangi
Version: 1.0.0
Licence: GPLv2 or Later
Author URI: http://mh-develop.local
*/
defined('ABSPATH') || exit;

define('RP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('RP_PLUGIN_URL', plugin_dir_url(__FILE__));

function wp_rp_register_assets()
{
    //CSS
    wp_register_style('rp-owl-style', RP_PLUGIN_URL.'assets/css/owl.carousel.min.css', '', '2.3.4');
    wp_register_style('rp-owl-theme-style',RP_PLUGIN_URL.'assets/css/owl.theme.default.min.css', '', '2.3.4');
    wp_register_style('rp-style', RP_PLUGIN_URL.'assets/css/style.css', '', '1.0.0');
    
    wp_enqueue_style('rp-owl-style');
    wp_enqueue_style('rp-owl-theme-style');
    wp_enqueue_style('rp-style');
    //JS
    wp_register_script('rp-owl-js', RP_PLUGIN_URL . 'assets/js/owl.carousel.min.js', ['jquery'], '2.3.4', 'true');
    wp_register_script('rp-main-js', RP_PLUGIN_URL . 'assets/js/main.js', ['jquery'], '1.0.0', 'true');
    
    wp_enqueue_script('rp-owl-js');
    wp_enqueue_script('rp-main-js');
    
}
function wp_rp_register_assets_admin()
{
    wp_register_style('rp-admin-style', RP_PLUGIN_URL.'assets/css/admin/admin-style', '', '1.0.0');
    wp_enqueue_style('rp-admin-style');
}

add_action('wp_enqueue_scripts', 'wp_rp_register_assets');
add_action('admin_enqueue_scripts', 'wp_rp_register_assets_admin');

//INC FILES
include_once RP_PLUGIN_DIR .'view/front/related-posts.php';
include_once RP_PLUGIN_DIR .'_inc/setting/menu.php';

function wp_rp_set_settings(){
    $rp_options_set=[
        '_rp_title'=>'مطالب مرتبط',
        '_rp_number'=>'4',
        '_rp_according_to'=>'category',
        '_rp_order_by'=>'rand',
        '_rp_show_type'=>'block'
    ];
    foreach ($rp_options_set as $key=>$value) add_option($key,$value);
}
 function wp_rp_delete_settings(){
     $rp_options_set=[
         '_rp_title',
         '_rp_number',
         '_rp_according_to',
         '_rp_order_by',
         '_rp_show_type'
     ];
     foreach ($rp_options_set as $key) delete_option($key);
 }
register_activation_hook(__FILE__,'wp_rp_set_settings');
register_deactivation_hook(__FILE__,'wp_rp_delete_settings');
/*var_dump(plugin_basename(__FILE__));*/

/*function plugin_add_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=plugin_name">' . __( 'Settings' ) . '</a>';*/
    /*
     * $settings_link='';
     * $settings_link .= '<a href="options-general.php?page=plugin_name">' . __( 'Settings' ) . '</a>';
    $settings_link .= '<a href="options-general.php?page=plugin_name">' . __( 'Settings' ) . '</a>';*/
    
/*    $links[] = $settings_link;
    array_push( $links, $settings_link);
  	return $links;
}
add_filter( 'plugin_action_links_'.plugin_basename( __FILE__ ), 'plugin_add_settings_link' );*/





