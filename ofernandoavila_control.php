<?php
/*
Plugin Name: Ofernandoavila's Blog Controller
Plugin URI: https://ofernandoavila.com/
Description: A fantastic blog controller to ofernandoavila's blog theme maded with ReactJS
Version: 1.0.0
Author: Fernando Avila
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: ofernandoavila
*/

function get_bloginfo_data() {
    return [
        'title' => get_bloginfo('title'),
        'description' => get_bloginfo('description'),
        'url' => get_bloginfo('url'),
        'wp_version' => get_bloginfo('version'),
    ];
}

add_action( 'rest_api_init', function() {
    register_rest_route(
        'blog-theme/v1',
        'info',
        [
            'methods' => 'GET',
            'callback' => 'get_bloginfo_data'
        ]
    );
});