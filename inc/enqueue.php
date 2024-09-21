<?php

// Theme css and jquery file calling

function hasan_css_js_calling(){
  wp_enqueue_style( 'hasan-style', get_stylesheet_uri());
  
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_enqueue_style( 'bootstrap');

    wp_register_style('slick.min', get_template_directory_uri().'/css/slick.min.css', array(), '1.9.0', 'all');
    wp_enqueue_style( 'slick.min');
    wp_register_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css', array(), '1.9.0', 'all');
    wp_enqueue_style( 'slick-theme');

   
    
  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'custom');

  // JQuery
  wp_enqueue_script('jquery');
  wp_enqueue_script('boostrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', true);
 wp_enqueue_script('slick.min', get_template_directory_uri().'/js/slick.min.js', array(), '1.9.0', true);
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hasan_css_js_calling' );

// Google font Enqueue
function hasan_add_google_fonts(){
  wp_enqueue_style('hasan_google_fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', false);

  wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' );
  wp_enqueue_style('Font_Awesome');
}
add_action('wp_enqueue_scripts', 'hasan_add_google_fonts' );
