<?php

/**
 *
 * Register menus
 *
 */
function add_nav_menus()
{
    register_nav_menus(array(
        'header-menu' => 'Header menu',
        'footer-menu' => 'Footer menu',
    ));
}
add_action('init', 'add_nav_menus');


/**
 *
 * Add support for ico
 *
 */
function allow_ico_upload($existing_mimes)
{
    $existing_mimes['ico'] = 'image/vnd.microsoft.icon';
    return $existing_mimes;
}
add_filter('mime_types', 'allow_ico_upload');
