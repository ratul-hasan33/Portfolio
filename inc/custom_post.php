<?php


function custom_slider(){
  register_post_type('header',
    array(
      'labels' => array(
        'name' => ('slider'),
        'singuler_name' => ('slider'),
        'add_new' => ('Add new slider'),
        'add_new_item' => ('Add new slider'),
        'edit_item' => ('Edit slider'),
        'new_item' => ('New slider'),
        'view_item' => ('View slider'),
        'not_found' => ('Sorry, we cound\'n find the slider you are looking for.'),
      ),
      'menu_icon' => 'dashicons-editor-paste-text',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 5,
      'has_archive' => true,
      'hierarchial' => true,
      'show_id' => true,
      'capability_type' => 'post',
      'rewrite' => array('slag' => 'slider'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    )
    );
}
add_action('init', 'custom_slider');



