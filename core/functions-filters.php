<?php

// Habilita Editor Clássico post types selecionados
function classic_editor_cpt($current_status, $post_type)
{
  $disabled_post_types = array('slider');
  if (in_array($post_type, $disabled_post_types, true)) {
    $current_status = false;
  }
  return $current_status;
}
add_filter('use_block_editor_for_post_type', 'classic_editor_cpt', 10, 2);

// Logo do Tela inicial aponta para a home do site
function custom_loginlogo_url($url)
{
  return home_url();
}
add_filter('login_headerurl', 'custom_loginlogo_url');
