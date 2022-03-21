<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tips extends Sximo  {
	
	protected $table = 'tb_tips';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_tips.* FROM tb_tips  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_tips.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
