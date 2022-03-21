<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class facilities extends Sximo  {
	
	protected $table = 'tb_booking_hotel_facilities';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_booking_hotel_facilities.* FROM tb_booking_hotel_facilities  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_booking_hotel_facilities.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
