<?php

add_filter('big_image_size_threshold', function () {
	return 1600;
});
add_filter('big_image_size_threshold', '__return_zero');

add_filter('intermediate_image_sizes_advanced', 'i3d_remove_default_sizes');

function i3d_remove_default_sizes($sizes)
{
	// unset($sizes['thumbnail']); // миниатюра
	// unset($sizes['medium']); // средний
	unset($sizes['large']); // крупный
	unset($sizes['medium_large']); // с шириной 768
	unset($sizes['1536x1536']);
	unset($sizes['2048x2048']);
	unset($sizes['scaled']);
	unset($sizes['fullsize']);
	return $sizes;
}


// #region watermark
/**
 * - [ ] Получи все картинки, которые появляются на серве при загрузке
 * - [ ] Сделай так, чтобы вотермарка ставилась на ресайзнутую 264 картинку
 */

add_filter('wp_generate_attachment_metadata', 'water_mark', 10, 2);
// https://stackoverflow.com/questions/12388796/adding-watermarking-to-wordpress-function-php
function water_mark($meta, $id)
{

	if (!isset($meta['sizes'])) {
		return $meta;
	}

	$upload_path = wp_upload_dir();
	$path = $upload_path['basedir'];

	//handle the different media upload directory structures
	if (isset($path)) {
		$file = trailingslashit($upload_path['basedir'] . $upload_path['subdir'] . '/') . $meta['sizes']['medium']['file'];
		// $water_path = trailingslashit($upload_path['basedir'] . '/') . 'watermark.png';
		$water_path = wp_upload_dir()['baseurl'] . '/watermarks/' . mt_rand(1, 3)  . '-' . mt_rand(1, 3) . '.png';
	} else {
		$file = trailingslashit($upload_path['basedir'] . $upload_path['subdir'] . '/') . $meta['sizes']['medium']['file'];
		$water_path = wp_upload_dir()['baseurl'] . '/watermarks/' . mt_rand(1, 3)  . '-' . mt_rand(1, 3) . '.png';
	}

	//list original image dimensions
	list($orig_w, $orig_h, $orig_type) = @getimagesize($file);

	//load watermark - list its dimensions
	$watermark = imagecreatefrompng($water_path);
	list($wm_w, $wm_h, $wm_type) = @getimagesize($water_path);

	//if your watermark is a transparent png uncomment below
	imagealphablending($watermark, 1);
	imagesavealpha($watermark, true);

	//load fullsize image
	$image = wp_load_image($file);

	//if your watermark is a transparent png uncomment below
	imagealphablending($image, 1);
	imagesavealpha($image, true);

	//greyscale image
	// imagefilter($image, IMG_FILTER_GRAYSCALE);

	//create merged copy
	//if your watermark is a transparent png uncomment below
	// imagecopyresampled($image, $watermark, $orig_w - ($wm_w- 9), $orig_h - ($wm_h- 9), 0, 0, $orig_w, $orig_h, $wm_w, $wm_h);
	// imagecopy($image, $watermark, $orig_w - ($wm_w- 9), $orig_h - ($wm_h- 9), 0, 0, $orig_w, $orig_h, $wm_w, $wm_h);

	imagecopyresized($image, $watermark, ($wm_h - $orig_h) / 2, ($wm_w - $orig_w) / 2, 0, 0, $orig_h, $orig_h, $wm_h, $wm_h);




	// imagecopyresampled($image, $watermark, 0, 0, 0, 0, $orig_w, $orig_h, $orig_w, $orig_h);


	// Другими словами, imagecopyresampled() берет прямоугольный участок из $watermark с шириной src_width и высотой src_height на координатах src_x,src_y и помещает его в прямоугольный участок изображения dst_image шириной dst_width и высотой dst_height на координатах dst_x,dst_y.

	// imagecopy// ($image, $watermark, $orig_w - ($wm_w- 9), $orig_h - ($wm_h- 9), 0, 0, $wm_w, $wm_h);

	//if your watermark is a transparent png comment out below
	// imagecopymerge($image, $watermark, $orig_w - ($wm_w+ 10), $orig_h - ($wm_h+ 10), 0, 0, $wm_w, $wm_h, 70);

	//save image backout
	switch ($orig_type) {
		case IMAGETYPE_GIF:
			imagegif($image, $file);
			break;
		case IMAGETYPE_PNG:
			imagepng($image, $file, 9);
			break;
		case IMAGETYPE_JPEG:
			imagejpeg($image, $file, 95);
			break;
	}

	imagedestroy($watermark);
	imagedestroy($image);

	//return metadata info
	wp_update_attachment_metadata($id, $meta);
	return $meta;
}

function i3d_get_thumb($id, $size = 'medium')
{
	if ($id == get_the_ID()) {
		return wp_get_attachment_image_src(get_post_thumbnail_id($id), 'medium');
	} else {
		return wp_get_attachment_image_src($id, $size);
	}
}
function i3d_watermarked_url($url, $sizes)
{
	return str_replace("-{$sizes['w']}x{$sizes['h']}", '', $url);
}
function i3d_watermarked_url_by_id($id)
{
	$image = i3d_get_thumb($id);
	$url = $image[0];
	$sizes = array(
		'w' => $image[1],
		'h' => $image[2]
	);
	// return esc_url(i3d_watermarked_url($url, $sizes));
	return $url;
}
// #endregion watermark
