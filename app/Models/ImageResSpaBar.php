<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ImageResSpaBar extends Sximo  {
	
	protected $table = 'tb_images_res_spa_bar';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_images_res_spa_bar.* FROM tb_images_res_spa_bar  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_images_res_spa_bar.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
