<?php
/**
 * Theme Functions
 *
 *
 *
 */

function aquila_enqueue_scripts()
{
    wp_enqueue_style( 'stylesheet',get_stylesheet_uri(), false, '1.1', 'all');
}
add_action('wp_enqueue_scripts','aquila_enqueue_scripts');