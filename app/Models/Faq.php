<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class faq extends Sximo  {
	
	protected $table = 'tb_faqs';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_faqs.* FROM tb_faqs  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_faqs.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
