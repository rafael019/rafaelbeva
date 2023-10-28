<?php
if (!function_exists('bruceLoadJS')) :
	function bruceLoadJS()
	{
		wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, THEME_VERSION, true);
		wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', false, THEME_VERSION, true);
		wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.min.js', false, THEME_VERSION, true);
	}
	add_action('wp_enqueue_scripts', 'bruceLoadJS');
endif;
