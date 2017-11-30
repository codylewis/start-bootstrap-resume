<?php

function add_theme_scripts()
{
    wp_enqueue_style('style', get_theme_file_uri() . '/css/resume.min.css');

    wp_enqueue_script('script', get_theme_file_uri() . '/js/resume.min.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
