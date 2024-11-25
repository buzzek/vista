<?php

/**
 * ACF save field options
 */
add_filter('acf/settings/save_json', 'bn_acf_json_save_point');

function bn_acf_json_save_point($path)
{
    $path = get_stylesheet_directory() . '/inc/config/acf-json';

    return $path;
}

add_filter('acf/settings/load_json', 'bn_acf_json_load_point');

function bn_acf_json_load_point($paths)
{
    unset($paths[0]);

    $paths[] = get_stylesheet_directory() . '/inc/config/acf-json';

    return $paths;
}
