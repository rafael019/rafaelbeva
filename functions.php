<?php
define('REQUIRE_PATH', get_stylesheet_directory());
define('INCLUDE_PATH', get_stylesheet_directory_uri());
define('THEME_VERSION', 1.0);

require_once REQUIRE_PATH . '/core/gutenberg.php'; // Compatibilidade com Gutemberg
require_once REQUIRE_PATH . '/core/load-css.php'; // Carrega arquivos CSS
require_once REQUIRE_PATH . '/core/load-js.php'; // Carrega arquivos JavaScript
require_once REQUIRE_PATH . '/core/gutenberg.php'; // Compatibilidade com Gutemberg
require_once REQUIRE_PATH . '/core/functions-general.php'; // Funções Gerais
require_once REQUIRE_PATH . '/core/functions-actions.php'; // Actions Wordpress
require_once REQUIRE_PATH . '/core/functions-filters.php'; // Filtros Wordpress
require_once REQUIRE_PATH . '/core/customizer.php'; // Customizador do Wordpress
require_once REQUIRE_PATH . '/core/support.php'; // Adiciona Suportes
require_once REQUIRE_PATH . '/core/menus.php'; // Registra Menus
require_once REQUIRE_PATH . '/core/sidebar.php'; // Registra Sidebar

// Link do Logo Customizado
function logoLink()
{
	$custom_logo_id = get_theme_mod('custom_logo');
	$image = wp_get_attachment_image_src($custom_logo_id, 'full');
	echo $image[0];
}
