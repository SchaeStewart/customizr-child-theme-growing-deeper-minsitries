<?php
/* Write your awesome functions below */
function themify_custom_enqueue_child_theme_styles()
{
    wp_enqueue_style('parent-theme-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('theme-style'));
}

add_action('wp_enqueue_scripts', 'themify_custom_enqueue_child_theme_styles', 11);
add_filter('tc_navbar_wrapper_class', 'rdc_navbar_wrapper_class');
function rdc_navbar_wrapper_class()
{
    return array('navbar-wrapper', 'clearfix', 'span12');
}
?>