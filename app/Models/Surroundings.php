<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class surroundings extends Sximo  {
	
	protected $table = 'tb_surroundings';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_surroundings.* FROM tb_surroundings  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_surroundings.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
