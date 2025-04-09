<?php
global $theme_prefix, $theme_uri;
$theme_prefix = 'aistudio';
$theme_uri = get_template_directory_uri().'/assets';


// đăng ký các thành phần hỗ trơ cho theme

add_action('after_setup_theme', 'aistudio_theme_support');
function aistudio_theme_support() {
    // đăng ký menu
    register_nav_menus([
        'primary' => 'Primary Menu',
        'vertical' => 'Vertical Menu',
        'mobile' => 'Mobile Menu'
    ]);

}