<?php

function my_deregister_styles()    {
  wp_dequeue_style('dashicons');
}

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_resource_hints', 2);

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_action('wp_print_styles', 'my_deregister_styles', 100);
add_action('wp_enqueue_script', 'jquery');
