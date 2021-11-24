<?php

namespace App\Models;

use App\Companion;
use Illuminate\Database\Eloquent\Model;

class ReservationCompanion extends Model
{
	protected $table = 'tb_reservation_companions';

	public function companion(){
		return $this->belongsTo(Companion::class, 'companion_id');	
	}
}