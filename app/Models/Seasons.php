<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class seasons extends Sximo  {
	
	protected $table = 'tb_seasons';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_seasons.* FROM tb_seasons  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_seasons.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	public function property()
    {
        return $this->belongsTo(properties::class);
    }

    public function dates()
    {
        return $this->hasMany(SeasonDates::class, 'season_id');
    }

    public function rates()
    {
        return $this->hasMany(PropertyRoomPrices::class, 'season_id');
    }
	

}
