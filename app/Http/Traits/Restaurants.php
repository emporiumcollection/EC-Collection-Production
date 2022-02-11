<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;
use Illuminate\Http\Request;
use App\Http\Controllers\ContainerController;
use App\Models\PropertyRoomPrices;
use App\Models\Restaurant;
use App\Models\Bar;
use App\Models\Spa;

use DateTime;
use DB;
use Cache;
trait Restaurants {

	function get_restaurant_files($r_id,$filetype, $foldertype='gallery') {
        $filen = array();
        $fetchresgalleryfolder = array();
		$resfileArr = \DB::table('tb_images_res_spa_bar')->where('parent_id', $r_id)->where('type', $filetype)->first();
        if($foldertype=="menu"){
            if(!empty($resfileArr)){
                $fetchresgalleryfolder = \DB::table('tb_container_files')->select('tb_container_files.id', 'tb_container_files.file_display_name', 'tb_container_files.file_name', 'tb_container_files.folder_id', 'tb_restaurant_menu_title.title', 'tb_container_files.file_size', 'tb_container_files.file_type')->leftJoin('tb_restaurant_menu_title', 'tb_container_files.id', '=', 'tb_restaurant_menu_title.container_id')->join('tb_container', 'tb_container.id', '=', 'tb_container_files.folder_id')->where('tb_container.parent_id', $resfileArr->folder_id)->where('tb_container.name', $foldertype)->get();
            }
            if (!empty($fetchresgalleryfolder)) {
                $f = 0;
                foreach ($fetchresgalleryfolder as $file) {
                    $filen[$f] = $file;
                    $filen[$f]->imgsrc = (new ContainerController)->getThumbpath($file->folder_id);
                    $f++;
                }
            }    
        }else{
            if(!empty($resfileArr)){
                $fetchresgalleryfolder = \DB::table('tb_container')->join('tb_container_files', 'tb_container.id', '=', 'tb_container_files.folder_id')->where('tb_container.parent_id', $resfileArr->folder_id)->where('tb_container.name', $foldertype)->get();
            }
            if (!empty($fetchresgalleryfolder)) {
                $f = 0;
                foreach ($fetchresgalleryfolder as $file) {
                    $filen[$f] = $file;
                    $filen[$f]->imgsrc = (new ContainerController)->getThumbpath($file->folder_id);
                    $f++;
                }
            }
        }
        return $filen;
        //echo "<pre>";
        //print_r($filen); die;
        //print_r($resfileArr); die;
        //print_r($resfileArr); die;
           
    }
}