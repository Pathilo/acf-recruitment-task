<?php 
add_action("wp_enqueue_scripts", "js_wp_enqueue_scripts");

function js_wp_enqueue_scripts() {
    // global css
    wp_enqueue_style('global_variables', get_stylesheet_directory_uri() . "/files/assets/styles/css/global_variables.css");
    wp_enqueue_style('global_styles', get_stylesheet_directory_uri() . "/files/assets/styles/css/global_styles.css");
    wp_enqueue_style('splide_css', get_stylesheet_directory_uri() . "/files/assets/styles/css/splide.min.css");


    // global js
    wp_enqueue_script('splide_min_js', get_stylesheet_directory_uri() . "/files/assets/js/splide.min.js", '', '',true);
}