<?php

/*
My Theme function
*/

// All Default Function
include_once('inc/default.php');

// Adding post_service
include_once('inc/custom_post.php');


// Theme css and jquery file calling
include_once('inc/enqueue.php');


// Theme Funtion 
include_once('inc/theme_funtion.php');


// Menu Register
// include_once('inc/menu_register.php');


// Widgets Register
include_once('inc/widgets_register.php');


// Shortcode Register
// include_once('inc/shortcode.php');

// acf-add-options-page
if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
  
  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}