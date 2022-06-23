<?php
if (!defined('ABSPATH')) {
	exit; // exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make('theme_options', 'i3d_theme_settings',  'Content edit')
	->add_tab('Links', array(
		Field::make('text', 'email', 'Email')
			->set_width(50),
		Field::make('text', 'phone', 'Phone')
			->set_width(50),
		Field::make('text', 'privacy_url', 'Privacy Url')
			->set_width(50),
		Field::make('text', 'license_url', 'License Url')
			->set_width(50),
		Field::make('text', 'icons_price', 'Icons Price')
			->set_width(30),
		Field::make('text', 'packs_price', 'Packs Price')
			->set_width(30),
		Field::make('text', 'currency_price', 'Currency')
			->set_width(30),
		Field::make('complex', 'lead_emails', 'Lead emails')
			->setup_labels(array(
				'plural_name' => 'Emails',
				'singular_name' => 'Email'
			))
			->add_fields(array(
				Field::make('text', 'lead_email', 'Lead Email')
			))
	))
	->add_tab('Icons Bullets', array(
		Field::make('textarea', 'premium_icons_bullets', 'Premium Icons Bullets')
			->set_rows(8),
		Field::make('textarea', 'free_icons_bullets', 'Free Icons Bullets')
			->set_rows(4),
	))
	->add_tab('Popular Tags', array(
		Field::make('association', 'popular_tags')
			->set_types(array(
				array(
					'type' => 'term',
					'taxonomy' => 'post_tag',
				),
			))
	))
	->add_tab('Trending Icons', array(
		Field::make('association', 'trending_icons')
			->set_types(array(
				array(
					'type' => 'post',
					'post_type' => 'icon',
				),
			))
	))
	->add_tab('Trending Packs', array(
		Field::make('association', 'trending_packs')
			->set_types(array(
				array(
					'type' => 'post',
					'post_type' => 'packs',
				),
			))
	));

Container::make('post_meta', 'page_info', 'Page Info')
	->where('post_type', '=', 'page')
	->add_tab('Page settings', array(
		Field::make('text', 'page_title', 'Page title'),
		Field::make('textarea', 'page_description', 'Page description'),
		Field::make('image', 'og_image', 'og:image')
			->set_value_type('url'),
	));

Container::make('post_meta', 'product_info', 'Product Info')
	->where('post_type', '=', 'icon')
	->add_tab('Product settings', array(
		Field::make('text', 'product_id', 'Product id')
			->set_width(50),
		Field::make('radio', 'pay_status', 'Pay Status')
			->add_options(array(
				'premium' =>  'Premium',
				'free' => 'Free',
			)),
		Field::make('complex', 'thumbs', 'Thumbnails')
			->set_conditional_logic(array(
				'relation' => 'AND',
				array(
					'field' => 'pay_status',
					'compare' => '=',
					'value' => 'premium',
				)
			))
			->setup_labels(array(
				'plural_name' => 'Thumbnails',
				'singular_name' => 'Thumbnail'
			))
			->add_fields(array(
				Field::make('image', 'image', 'Image')
					->set_width(50),
				Field::make('text', 'name', 'Name')
					->set_width(50),
			))
			->set_default_value(array(
				array(
					'name' => 'Perspective / Matte',
				),
				array(
					'name' => 'Perspective / Glossy',
				),
				array(
					'name' => 'Isometric / Matte',
				),
				array(
					'name' => 'Isometric / Glossy',
				),
				array(
					'name' => 'Front / Matte',
				),
				array(
					'name' => 'Front / Glossy',
				),
			)),
	));


Container::make('post_meta', 'pack_info', 'Pack Info')
	->where('post_type', '=', 'packs')
	->add_tab('Pack settings', array(
		Field::make('text', 'product_id', 'Product id')
			->set_width(50),
		Field::make('text', 'pack_price', 'Pack Price')
			->set_width(50),
		Field::make('association', 'pack_icons')
			->set_types(array(
				array(
					'type' => 'post',
					'post_type' => 'icon',
				),
			))
	));
