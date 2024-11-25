<?php


/**
 * Register theme stylesheet.
 */
function bn_base_styles()
{

    wp_register_style(
        'bn-style',
        get_template_directory_uri() . '/dist/css/main.css',
        array(),
        VER
    );

    wp_enqueue_style('bn-style');
}
add_action('wp_enqueue_scripts', 'bn_base_styles');

/**
 * Register theme scripts.
 */
function bn_main_scripts()
{
    wp_enqueue_script('bn-script', get_template_directory_uri() . '/dist/js/main.min.js', array(), VER, true);
}
add_action('wp_enqueue_scripts', 'bn_main_scripts');
