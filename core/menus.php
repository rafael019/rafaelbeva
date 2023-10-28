<?php
if (!function_exists('bruceMenus')) :
  function bruceMenus()
  {
    register_nav_menu('header', 'Header');
    register_nav_menu('footer', 'Footer');
  }
  add_action('after_setup_theme', 'bruceMenus');
endif;
