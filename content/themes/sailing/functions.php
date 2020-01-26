<?php

if(!function_exists('sailing_scripts')) {

    function sailing_scripts()
    {
        wp_enqueue_style('theme-css', get_theme_file_uri('public/css/style.css'), [], '1');
        wp_enqueue_script('theme-js', get_theme_file_uri('public/js/app.js'), [], '1', true);
    }
}

add_action('wp_enqueue_scripts', 'sailing_scripts');

if(!function_exists('setup_sailing')) {

    function setup_sailing()
    {
        add_theme_support('title-tag');

        register_nav_menus([
            'main'   => 'Principal',
        ]);

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(400, 400);
    }
}

add_action('after_setup_theme', 'setup_sailing');

function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );


remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_styles', 'print_emoji_styles');

remove_action( 'wp_head', 'wlwmanifest_link' );

remove_action( 'wp_head', 'rsd_link' );

remove_action( 'wp_head', 'wp_generator' );

remove_action( 'wp_head', 'feed_links_extra', 3 );

remove_action( 'wp_head', 'feed_links', 2 );
