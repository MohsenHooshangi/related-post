<?php
function wp_rp_register_menu(){
    add_menu_page(
        'تنظیمات پلاگین مطالب مرتبط',
        'مطالب مرتبط',
        'manage_options',
        'related_post_setting',
        'wp_rp_related_posts_admin_layout',
    );
}
include_once RP_PLUGIN_DIR.'_inc/setting/setting.php';
add_action('admin_menu','wp_rp_register_menu');
