<?php

/**
 *
 * Define global values
 *
 */

define('CONFIG', dirname(__FILE__) . '/inc/config/');
define('IMAGES', get_template_directory_uri() . '/dist/img/');
define('WEBSITE_NAME', get_bloginfo('name'));
define('VER', is_string(wp_get_theme()->get('Version')) ? wp_get_theme()->get('Version') : false);

/*
*
*   Import all .php files from destination
*
*   @param string $path path to folder with php files
*
*
*/
function importFilesFromFolder($path)
{
    foreach (glob($path . "*.php") as $filename) {
        include $filename;
    }
}

/*
*   Imports a template file from the temporary directory
*
*   The `gtp` function is a shorthand for WordPress's `get_template_part()`,
*   which loads a part of the theme template.
*   It loads a template file from a subdirectory within the `tmp/` folder in the theme.
*
*   This is useful for organizing template files into a folder structure,
*   allowing for better file management and readability.
*
*   @param string $dir       The name of the subdirectory within `tmp/` from which the file should be loaded.
*   @param string $file_name The name of the template file to be loaded (without the .php extension).
*
*   @return void
*
*/

function gtp($dir, $file_name)
{
    return get_template_part('tmp/' . $dir . '/' . $file_name);
}



importFilesFromFolder(CONFIG);
