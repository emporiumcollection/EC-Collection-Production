<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Imagine;
use File;
use Image;

class ImageController extends Controller {

	public function __construct()
	{
		
	}

	public function propertyImageResize($scale, $path, $file)
    {
        $size = explode('x', $scale);
        $width = $size[0];
        $height = $size[1];

        $image_path = '/mnt/Emporium-Collection-Webserver/Voyage/s3_bucket';
        $file_path = $image_path .
        '/container_user_files/locations/' .
        $path .
        '/property-images/' .
        $file;

        $destination_dir = public_path() .
        '/cached-images/container_user_files/locations/' .
        $path .
        '/resized';

        if(!file_exists($destination_dir)){
                mkdir($destination_dir, 0777, true);
        }

        $destination_path = $destination_dir . '/' . $scale.$file;

        if(!file_exists($destination_path)){
                /*
                $thumbnail = Image::open($file_path)
                        ->thumbnail(new Imagine\Image\Box($width, $height));

                $thumbnail->effects()->grayscale();

                $thumbnail->save($destination_path);
                 */
            Image::make($file_path,array(
			'width' => $width,
            'height' => $height,
            'grayscale' => true
            ))->save($destination_path);

        }

        $file_extension = strtolower(substr(strrchr($file,"."),1));
        switch( $file_extension ) {
            case "gif": $ctype="image/gif"; break;
            case "png": $ctype="image/png"; break;
            case "jpeg":
            case "jpg": $ctype="image/jpeg"; break;
            case "svg": $ctype="image/svg+xml"; break;
            default:
        }

        header('Pragma: public');
        header('Cache-Control: max-age=86400');
        header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
        header('Content-type: ' . $ctype);
        readfile($destination_path);
    }


	public function roomImageResize($scale, $path, $category, $file)
	{
		$size = explode('x', $scale);
		$width = $size[0];
		$height = $size[1];

        $image_path = '/mnt/Emporium-Collection-Webserver/Voyage/s3_bucket';
        $file_path = $image_path .
        '/container_user_files/locations/' .
        $path .
        '/room-images/' .
		'/' . $category .
        $file;

        $destination_dir = public_path() .
        '/cached-images/container_user_files/locations/' .
		'/' . $category .
        $path .
        '/resized';

        if(!file_exists($destination_dir)){
            mkdir($destination_dir, 0777, true);
        }

		$destination_path = $destination_dir . '/' . $scale.$file;

		if(!file_exists($destination_path)){
            Image::make($file_path,array(
			'width' => $width,
            'height' => $height,
            'grayscale' => true
            ))->save($destination_path);
		}

		$file_extension = strtolower(substr(strrchr($file,"."),1));
		switch( $file_extension ) {
		    case "gif": $ctype="image/gif"; break;
		    case "png": $ctype="image/png"; break;
		    case "jpeg":
		    case "jpg": $ctype="image/jpeg"; break;
		    case "svg": $ctype="image/svg+xml"; break;
		    default:
		}

		header('Pragma: public');
		header('Cache-Control: max-age=86400');
		header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
		header('Content-type: ' . $ctype);
		readfile($destination_path);
	}

}