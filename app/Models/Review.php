<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class review extends Sximo  {
	
	protected $table = 'tb_reviews';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_reviews.* FROM tb_reviews  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_reviews.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
