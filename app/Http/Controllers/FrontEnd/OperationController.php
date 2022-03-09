<?php 
namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\controller;	
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;
use App\Models\properties;
/**
 * 
 */
class OperationController extends Controller
{

	function removeCategoryDir()
    {
        $path = public_path("cached-images/container_user_files/categories/category_imgs/");
        $tmp = CommonHelper::deleteDir($path);
    }

    public function removePropertyDir($id){
        print_r($id);exit;
        $property = properties::select('id','property_name','property_slug')
        ->where('id',$id)
        ->first();

        $propert_dir = str_slug($property->property_name);
        $path = public_path("cached-images/container_user_files/locations/".$propert_dir."/");

        if(file_exists($path)){
            $tmp = CommonHelper::deleteDir($path);
        }
    }
}

?>