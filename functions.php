<?php
define('REQUIRE_PATH', get_stylesheet_directory());
define('INCLUDE_PATH', get_stylesheet_directory_uri());
define('THEME_VERSION', 1.0);

require_once REQUIRE_PATH . '/core/plugins/wp-bootstrap-navwalker.php'; // Bootstra Navtalker
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

// Paginação no estilo Boostrap 4
if (!function_exists('paginate_links_bs')) {
	function paginate_links_bs()
	{
		global $wp_query;
		ob_start();
		$pagination =  paginate_links(array(
			'base' => str_replace(PHP_INT_MAX, '%#%', esc_url(get_pagenum_link(PHP_INT_MAX))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages,
			'type' => 'array',
			'prev_text'          => __('<span></span> Anterior'),
			'next_text'          => __('Próximo <span></span>'),
		));
		if (!empty($pagination)) : ?>
			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<?php foreach ($pagination as $key => $page_link) : ?>
						<li class="page-item<?php if (strpos($page_link, 'current') !== false) {
																	echo ' active';
																} ?>">
							<?php echo str_replace('page-numbers', 'page-link', $page_link); ?>
						</li>
					<?php endforeach ?>
				</ul>
			</nav>
<?php endif;
		echo ob_get_clean();
	}
}

function my_widget_categories_args($args)
{
	$args['before_widget'] = str_replace('class="widget_categories', 'class="widget_categories list-unstyled', $args['before_widget']);
	return $args;
}
add_filter('widget_categories_args', 'my_widget_categories_args');
