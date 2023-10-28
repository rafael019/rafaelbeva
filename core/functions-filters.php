<?php
// Logo do Tela inicial aponta para a home do site
function custom_loginlogo_url($url)
{
  return home_url();
}
add_filter('login_headerurl', 'custom_loginlogo_url');


function add_svg_mime_type()
{
  add_filter('mime_types', 'custom_mime_types');
}

function custom_mime_types($mime_types)
{
  $mime_types['svg'] = 'image/svg+xml';
  return $mime_types;
}

add_action('init', 'add_svg_mime_type');
