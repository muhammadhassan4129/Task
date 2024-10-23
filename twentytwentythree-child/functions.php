<?php
function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
    wp_enqueue_script(
        'custom-scripts', // Handle name for the script
        get_stylesheet_directory_uri() . '/js/custom-scripts.js', // Path to the JS file
        array(), // Dependencies (e.g., jQuery), leave empty if none
        null, // Version number, set to null to avoid cache issues
        true // Load script in footer (true), or head (false)
    );
    
}

add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles'); 