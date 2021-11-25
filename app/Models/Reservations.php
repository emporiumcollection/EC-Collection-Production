<?php namespace App\Models;

use App\Models\ReservationCompanion;
use App\Models\ReservedSuite;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Sximo  {
	
	protected $table = 'tb_reservations';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_reservations.* FROM tb_reservations  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_reservations.id IS NOT NULL ";
	}

	public function property()
    {
        return $this->belongsTo(properties::class, 'property_id');
    }
	
	public static function queryGroup(){
		return "  ";
	}

	public function reservedSuites(){
		return $this->hasMany(ReservedSuite::class, 'reservation_id');
	}

	public function reservedCompanions(){
		return $this->hasMany(ReservationCompanion::class, 'reservation_id');	
	}

}
