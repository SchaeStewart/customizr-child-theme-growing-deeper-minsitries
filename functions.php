<?php
///* Write your awesome functions below */
//function themify_custom_enqueue_child_theme_styles()
//{
//    wp_enqueue_style('parent-theme-css', get_template_directory_uri() . '/style.css');
//    wp_enqueue_style('child-style', get_stylesheet_uri(), array('theme-style'));
//}
//
//add_action('wp_enqueue_scripts', 'themify_custom_enqueue_child_theme_styles', 11);
//add_filter('tc_navbar_wrapper_class', 'rdc_navbar_wrapper_class');
//function rdc_navbar_wrapper_class()
//{
//    return array('navbar-wrapper', 'clearfix', 'span12');
//}
//

// START OF Center Header Block Items (Needs additional CSS CODE BLOCK 1 in Child Theme style.css)

// NAVBAR WRAPPER //
// center the Navbar
//
// Built in to 3.2.1
//

// LOGO //
// center the Logo
//
// Built in to 3.2.1
//

// TAGLINE //
// center the Tagline
add_filter('tc_tagline_class', 'rdc_tagline_class');
function rdc_tagline_class() {
    return 'span12';
}

// SOCIAL ICONS //
// center the output of tc_social_in_header:
add_filter('tc_social_header_block_class', 'rdc_social_header_block_class');
function rdc_social_header_block_class($social_header_block_class) {
    if ('span5' == $social_header_block_class) {
        $social_header_block_class = 'span12';
    }
    return $social_header_block_class;
}

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