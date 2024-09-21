<?php  
// sidebar register function 

function hasan_widgets_register(){
  register_sidebar( array(
    'name' => __('Main Widgets Area', 'hasan'),
    'id'   => 'sidebar-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'Obak'),
    'before_widgets' => '<div class="child_sidebar">',
    'after_widgets' => '</div>',
    'before_title'  => '<h2 class="title"></h2>',
    'after_title'  => '</h2>',
    ) );


  register_sidebar( array(
    'name' => __('Footer-1', 'hasan'),
    'id'   => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'Obak'),
    'before_widgets' => '<div class="child_sidebar">',
    'after_widgets' => '</div>',
    'before_title'  => '<h2 class="title"></h2>',
    'after_title'  => '</h2>',
    ) );
  register_sidebar( array(
    'name' => __('Footer-2', 'hasan'),
    'id'   => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'Obak'),
    'before_widgets' => '<div class="child_sidebar">',
    'after_widgets' => '</div>',
    'before_title'  => '<h2 class="title"></h2>',
    'after_title'  => '</h2>',
    ) );
  register_sidebar( array(
    'name' => __('Footer-3', 'hasan'),
    'id'   => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'Obak'),
    'before_widgets' => '<div class="child_sidebar">',
    'after_widgets' => '</div>',
    'before_title'  => '<h2 class="title"></h2>',
    'after_title'  => '</h2>',
    ) );
}

add_action('widgets_init', 'hasan_widgets_register');