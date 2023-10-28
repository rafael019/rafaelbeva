<?php

if (function_exists('register_sidebar')) {
  register_sidebar(
    array(
      'name' => 'Barra Lateral',
      'id'   => 'sidebar',
      'description' => 'Sidebar da Página de Posts',
      'before_widget' => '<div class="card mb-4">',
      'after_widget' => '</div></div>',
      'before_title' => ' <h5 class="card-header">',
      'after_title' => '</h5><div class="card-body">',
    )
  );
}
