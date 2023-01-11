<?php

namespace App\traits;

use function dd;

trait UplodaImage
{

	public function uploadImage($image, $path)
	{
		$image_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
		$image_name .= time().'.'.$image->extension();
		$image->move(public_path($path), $image_name);
		return $image_name;
	}

	public function deleteOldImage($image, $path)
	{
		if (file_exists(public_path($path.'/'.$image))) {
			unlink(public_path($path.'/'.$image));
		}
		if (file_exists(public_path($path.'/'.$image.'_thumb'))) {
			unlink(public_path($path.'/'.$image.'_thumb'));
		}

	}
}