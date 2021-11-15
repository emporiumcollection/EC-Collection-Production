<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class SeasonDates extends Sximo  {
	
	protected $table = 'tb_seasons_dates';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_seasons_dates.* FROM tb_seasons_dates  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_seasons_dates.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	public function season()
    {
        return $this->belongsTo(Seasons::class);
    }
	

}
