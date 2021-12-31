<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Imagine;
use File;
use Image;

class ImageController extends Controller {

    private $image_path = '/mnt/Emporium-Collection-Webserver/Voyage/s3_bucket';
    private $destination_path;
    private $file_path;
    private $width;
    private $height;
    private $file;
    private $scale;
    private $destination_dir;    

    public function resize($scale, $path, $file, $type = null){

        if($type == 'property-image'){
            $this->propertyImageResize($scale, $path, $file);
        }elseif($type == 'bar-image'){
            $this->barImageResize($scale, $path, $file);
        }elseif($type == 'restrurant-image'){
            $this->restrurantImageResize($scale, $path, $file);
        }elseif($type == 'spa-image'){
            $this->spaImageResize($scale, $path, $file);
        }elseif($type == 'category-image'){
            $this->categoryImageResize($scale, $path, $file);
        }else{
            $this->propertyImageResize($scale, $path, $file);
        }
    }

    private function initializeValues($scale, $file){
        $this->image_path = public_path().'/uploads';
        $size = explode('x', $scale);
        $this->width = $size[0];
        $this->height = $size[1];
        $this->file = $file;
        $this->scale = $scale;
    }

	public function propertyImageResize($scale, $path, $file)
    {
        $this->initializeValues($scale, $file);

        $this->file_path = $this->image_path .
        '/container_user_files/locations/' .
        $path .
        '/property-images/' .
        $this->file;

        $this->destination_dir = public_path() .
        '/cached-images/container_user_files/locations/' .
        $path .
        '/resized';

        $this->resizeImage();
    }

	public function roomImageResize($scale, $path, $category, $file)
	{
        $this->initializeValues($scale, $file);

        $this->file_path = $this->image_path .
        '/container_user_files/locations/' .
        $path .
        '/rooms-images/' .
		$category .
        '/' . $this->file;

        $this->destination_dir = public_path() .
        '/cached-images/container_user_files/locations/' .
        $path . '/' .
        $category .
        '/resized';

        $this->resizeImage();
	}

    public function spaImageResize($scale, $path, $file)
    {
        $this->initializeValues($scale, $file);

        $this->file_path = $this->image_path .
        '/container_user_files/spas/' .
        $path .
        '/gallery/' .
        $this->file;

        $this->destination_dir = public_path() .
        '/cached-images/container_user_files/locations/' .
        $path .
        '/resized';

        $this->resizeImage();
    }

    public function categoryImageResize($scale, $path, $file)
    {
        $this->initializeValues($scale, $file);

        $this->file_path = $this->image_path .
        '/' .
        $path .
        '/' .
        $this->file;

        $this->destination_dir = public_path() .
        '/cached-images/container_user_files/categories/' .
        $path .
        '/resized';

        $this->resizeImage();
    }

    public function barImageResize($scale, $path, $file)
    {
        $this->initializeValues($scale, $file);

        $this->file_path = $this->image_path .
        '/container_user_files/bars/' .
        $path .
        '/gallery/' .
        $this->file;

        $this->destination_dir = public_path() .
        '/cached-images/container_user_files/locations/' .
        $path .
        '/resized';

        $this->resizeImage();
    }

    public function restrurantImageResize($scale, $path, $file)
    {
        $this->initializeValues($scale, $file);

        $this->file_path = $this->image_path .
        '/container_user_files/restaurants/' .
        $path .
        '/gallery/' .
        $this->file;

        $this->destination_dir = public_path() .
        '/cached-images/container_user_files/locations/' .
        $path .
        '/resized';

        $this->resizeImage();
    }

    private function resizeImage(){
        if(!file_exists($this->destination_dir)){
            mkdir($this->destination_dir, 0777, true);
        }

        $this->destination_path = $this->destination_dir . '/' . $this->scale . $this->file;

        if(!file_exists($this->destination_path)){

            /*$size = getimagesize($this->file_path);
            $ratio = $size[0]/$size[1]; // width/height
            if( $ratio > 1) {
                $width = $this->width;
                $height = $this->width/$ratio;
            }
            else {
                $width = $this->width*$ratio;
                $height = $this->width;
            }*/
            if (!file_exists($this->file_path)) {
                $this->file_path = public_path() .
                '/images/default-hotel.png';
            }

            $thimg = Image::make($this->file_path);
            $thimg->resize($this->width, $this->height);
            $thimg->save($this->destination_path);

            /*try{
                $thumbnail = Image::open($this->file_path)
                        ->thumbnail(new Imagine\Image\Box($this->width, $this->height), 'outbound');
                //$thumbnail->effects()->grayscale();
                $thumbnail->save($this->destination_path);
            }catch(Exception $e){*/
/*                Image::make($this->file_path, array(
                    'width' => $this->width,
                    'height' => $this->height,
                    'crop' => true,
                //'grayscale' => true
                ))->save($this->destination_path);
*/            //}
        }

        $file_extension = strtolower(substr(strrchr($this->file,"."),1));
        switch( $file_extension ) {
            case "gif": $ctype="image/gif"; break;
            case "png": $ctype="image/png"; break;
            case "jpeg":
            case "jpg": $ctype="image/jpeg"; break;
            case "svg": $ctype="image/svg+xml"; break;
            default:
        }

        if(!isset($ctype)){
            $ctype = "image/jpeg";
        }

        header('Pragma: public');
        header('Cache-Control: max-age=86400');
        header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
        header('Content-type: ' . $ctype);
        readfile($this->destination_path);
    }
}