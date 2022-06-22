<?php

add_action('init', 'i3d_post_types');
function i3d_post_types()
{
	register_post_type('icon', [
		'label'  => null,
		'labels' => [
			'name'               => 'Icon', // основное название для типа записи
			'singular_name'      => 'Icons', // название для одной записи этого типа
			'add_new'            => 'Add Icon', // для добавления новой записи
			'add_new_item'       => 'Adding icon', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Icon', // для редактирования типа записи
			'new_item'           => 'New Icon', // текст новой записи
			'view_item'          => 'View Icon', // для просмотра записи этого типа.
			'search_items'       => 'Search Icon', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Icons', // название меню
		],
		'items_list_navigation'    => 'true',
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-star-filled',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	]);

	register_post_type('packs', [
		'label'  => null,
		'labels' => [
			'name'               => 'Pack', // основное название для типа записи
			'singular_name'      => 'Packs', // название для одной записи этого типа
			'add_new'            => 'Add Pack', // для добавления новой записи
			'add_new_item'       => 'Adding Pack', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Pack', // для редактирования типа записи
			'new_item'           => 'New Pack', // текст новой записи
			'view_item'          => 'View Pack', // для просмотра записи этого типа.
			'search_items'       => 'Search Pack', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Packs', // название меню
		],
		'items_list_navigation'    => 'true',
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-screenoptions',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}
