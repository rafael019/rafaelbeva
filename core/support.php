<?php
if (!function_exists('bruceThemeSupport')) :
  function bruceThemeSupport()
  {
    add_theme_support('title-tag'); // Otimiza Títulos para SEO
    add_theme_support('automatic-feed-links'); // Gerar links para o Feed
    add_theme_support('custom-logo'); // Custom logo Wordpress
    add_theme_support('editor-styles'); // Custom logo Wordpress
    add_theme_support('menus'); // Adiciona Suporte aos MENUS
    add_theme_support('post-thumbnails'); // Adiciona suporte a Thumbnails
    add_theme_support('post-formats'); // Adiciona aos formatos de Post
    add_theme_support('responsive-embeds'); // Adiciona suporte eo embed responsivo
    add_theme_support('widgets'); // Adiciona suporte aos Widgets
    add_theme_support('html5', array('comment-lista', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script')); // Adiciona suporte ao HTML5
  }
  add_action('after_setup_theme', 'bruceThemeSupport');
endif;
