<?php


// Theme Funtion 
function hasan_logo_customizer_register($wp_customize){
  // Header area
  $wp_customize->add_section('hasan_header_area', array(
    'title' =>__('Header Area', 'ecommerce'),
    'description' => 'If you interested your header area, you can do it here.',
  ));
  $wp_customize->add_setting('hasan_logo', array(
    'default' => get_bloginfo('template_directory') .'/img/logo.png',
  ));
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'hasan_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested your header area, you can do it here.',
    'setting' => 'hasan_logo',
    'section' => 'hasan_header_area', 
  )));


  // Contact Form
  $wp_customize->add_section('contact_area', array(
    'title' =>__('Contact Area', 'ecommerce'),
    'description' => 'If you interested your hero area, you can do it here.',
  ));

  // Contact Img
  $wp_customize->add_setting('contact_logo', array(
    'default' => get_bloginfo('template_directory') .'/img/contact.png',
  ));
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'contact_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested your hero area, you can do it here.',
    'setting' => 'contact_logo',
    'section' => 'contact_area', 
  )));

//  Contact Email
  $wp_customize->add_setting('contact_Email_section', array(
    'default' => 'ratul33-5206@diu.edu.bd',
  ));
  $wp_customize-> add_control('contact_Email_section', array(
    'label' => 'Contact Email Address',
    'description' => 'If you interested to change your Email Address, you can do it here.',
    'setting' => 'contact_Email_section',
    'section' => 'contact_area',
  ));
  

  // Service area
  $wp_customize->add_section('hasan_service-1_area', array(
    'title' =>__('Service-1 Area', 'ecommerce'),
    'description' => 'If you interested your hero area, you can do it here.',
  ));
  $wp_customize->add_setting('hasan_service-1_logo', array(
    'default' => get_bloginfo('template_directory') .'/img/theme-dv.png',
  ));
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'hasan_service-1_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested your service-1 area, you can do it here.',
    'setting' => 'hasan_service-1_logo',
    'section' => 'hasan_service-1_area', 
  )));


 
  
 



// Footer position
$wp_customize->add_section('hasan_footer_option', array(
  'title' =>__('Footer option', 'ecommerce'),
  'description' => 'If you interested to change you footer setting, you can do it here.',
));
$wp_customize->add_setting('hasan_copyright_section', array(
  'default' => '&copy; Copyright 2024 | Ratul Hasan',
));
$wp_customize-> add_control('hasan_copyright_section', array(
  'label' => 'Copyright text',
  'description' => 'If you interested to change you copyright text, you can do it here.',
  'setting' => 'hasan_copyright_section',
  'section' => 'hasan_footer_option',
));


// Theme color
$wp_customize->add_section('hasan_theme_color', array(
  'title' =>__('Theme color', 'ecommerce'),
  'description' => 'If you interested to change your theme color, you can do it here.',
));
$wp_customize->add_setting('hasan_bg_color', array(
  'default' => '#031914',
));
$wp_customize-> add_control( new WP_Customize_Color_Control($wp_customize, 'hasan_bg_color', array(
  'label' => 'Background Color',
  'setting' => 'hasan_bg_color',
  'section' => 'hasan_theme_color',
)));




}
add_action('customize_register' , 'hasan_logo_customizer_register');


