<?php

// Theme CSS jQuery File calling
function dhal_css_js_file_calling(){
    wp_register_style('dhalem-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('dhalem-style');

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');


    // jQuery
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script('jQuery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

}
add_action('wp_enqueue_scripts', 'dhal_css_js_file_calling');

// Google fonts

function dhale_add_google_fonts(){
    wp_enqueue_style('dhale_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'dhale_add_google_fonts');