<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class childpolicies extends Sximo  {
	
	protected $table = 'tb_children_policies';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_children_policies.* FROM tb_children_policies  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_children_policies.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
