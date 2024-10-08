<?php


// Theme Title
add_theme_support('title-tag');

// Thumbnail Image Area
add_theme_support('post-thumbnails', array('page', 'post', 'service', 'slider'));
add_image_size('post-thumbnails', 970, 150, true);

//  Except to 30 word

function hasan_excerpt_more($more) {
  global $post;
return '<br> <br> <a class="readmore" href="'. get_permalink($post->ID) . '"> Read More</a>';
}
add_filter('excerpt_more', 'hasan_excerpt_more');

function hasan_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'hasan_excerpt_length', 999);

//  Pagenav Function
function hasan_pagenav(){
  global $wp_query, $wp_rewrite;
  $pages ='';
  $max = $wp_query->max_num_pages;
  if(!$current = get_query_var('paged')) $current = 1;
  $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $args['total'] = $max;
  $args['current'] = $current;
  $total = 1;
  $args['prev_text'] = 'Prev';
  $args['next_text'] = 'Next';
  if ($max > 1) echo '</pre>
    <div class="wp_pagenav">';
      if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span> of </span>' . $max . '</p>';
      echo $pages . paginate_links($args);
      if ($max > 1 ) echo '</div><pre>';

}