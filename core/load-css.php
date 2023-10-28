<?php
if (!function_exists('bruceLoadCSS')) :
	function bruceLoadCSS()
	{
		wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', '', THEME_VERSION, 'all');
		wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', '', THEME_VERSION, 'all');
		wp_enqueue_style('style', INCLUDE_PATH . '/dist/css/style.css', '', THEME_VERSION, 'all');
	}
	add_action('wp_enqueue_scripts', 'bruceLoadCSS');
endif;
