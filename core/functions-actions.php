<?php

// Itens que serão exibidos somente no painel do administrador
if (!current_user_can('administrator')) {
	function remove_acf_menu()
	{
		remove_menu_page('index.php'); // Painel
		remove_menu_page('edit.php'); // Posts
		remove_menu_page('upload.php'); // Media
		remove_menu_page('edit-comments.php'); // Comentários
		remove_menu_page('themes.php'); // Aparência
		remove_menu_page('plugins.php'); // Plugins
		remove_menu_page('tools.php'); // Ferramentas
		remove_menu_page('options-general.php'); // Configurações
		remove_menu_page('edit.php?post_type=acf-field-group'); // Advance Custom Fields
		remove_menu_page('cptui_main_menu'); // Custom Post Types UI
		remove_menu_page('wpcf7'); // Contact Form 7
	}
	add_action('admin_menu', 'remove_acf_menu', 999);
}

// Debug menu WP Amin, só descomente se desejar ver os names dos itens do WP-Admin
// add_action( 'admin_init', function () {
// 	echo "add_action( 'admin_init', function () {<br>";
// 	foreach ( $GLOBALS['menu'] as $menu ) {
// 			echo "&nbsp;&nbsp;&nbsp;&nbsp;remove_menu_page( '$menu[2]' );<br>";
// 	}
// 	echo "}, PHP_INT_MAX );";
// 	exit();
// } );



//Remove Anexos quando post é excluído (Imagens, Galeria, PDF e etc...)
function delete_associated_post($post_id)
{
	$medias = get_children(array(
		'post_parent' => $post_id,
		'post_type'   => 'attachment'
	));

	if ($medias) {
		foreach ($medias as $media) {
			wp_delete_attachment($media->ID);
		}
	}
}
add_action('before_delete_post', 'delete_associated_post');

// Remove Thumbnail quando o post é excluído
function wps_remove_attachment_with_post($post_id)
{
	if (has_post_thumbnail($post_id)) {
		$attachment_id = get_post_thumbnail_id($post_id);
		wp_delete_attachment($attachment_id, true);
	}
}
add_action('before_delete_post', 'wps_remove_attachment_with_post', 10);
