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
	->add_tab('Tags', array(
		Field::make('complex', 'popuplar_tags', 'Tags')
			->setup_labels(array(
				'plural_name' => 'Tags',
				'singular_name' => 'Tag'
			))
			->add_fields(array(
				Field::make('text', 'name', 'Name'),
				Field::make('text', 'id', 'Id')
			))
	));

Container::make('post_meta', 'page_info', 'Page Info')
	->where('post_type', '=', 'page')
	->or_where('post_type', '=', 'icon')
	->or_where('post_type', '=', 'packs')
	->add_tab('Page settings', array(
		Field::make('text', 'page_title', 'Page title'),
		Field::make('textarea', 'page_description', 'Page description'),
		Field::make('image', 'og_image', 'og:image')
			->set_value_type('url'),
	));

Container::make('post_meta', 'product_info', 'Product Info')
	->where('post_type', '=', 'icon')
	->or_where('post_type', '=', 'packs')
	->add_tab('Page settings', array(
		Field::make('text', 'product_id', 'Product id')
			->set_width(50),
		Field::make('complex', 'thumbs', 'Thumbnails')
			->setup_labels(array(
				'plural_name' => 'Thumbnails',
				'singular_name' => 'Thumbnail'
			))
			->add_fields(array(
				Field::make('image', 'image', 'Image')
					->set_value_type('url'),
			)),
		Field::make('radio', 'pay_status', 'Bullet_icon')
			->add_options(array(
				'premium' =>  'Premium',
				'free' => 'Free',
			))
	));
