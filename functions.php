<?php

function super_theme_files()
{
    // The second argument is the location that points to the main file.
    wp_enqueue_style('super_theme_main_files', get_stylesheet_uri());
}

// 'wp_enqueue_scripts' tells WordPress to load some CSS with JavaScript files.
add_action('wp_enqueue_scripts', 'super_theme_files');
