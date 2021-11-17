<?php 
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class review extends Sximo  {
	
	protected $table = 'tb_reviews';
	protected $primaryKey = 'id';

   	protected $fillable = ['id', 'hotel_id', 'rating','fname', 'lname', 'country','comment','is_approved'];
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
