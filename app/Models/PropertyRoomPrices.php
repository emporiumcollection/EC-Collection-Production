<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PropertyRoomPrices extends Sximo  {
	const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

	protected $table = 'tb_properties_category_rooms_price';
	protected $primaryKey = 'id';

	public function property()
    {
        return $this->belongsTo(properties::class, 'property_id');
    }

	public function season()
    {
        return $this->belongsTo(Seasons::class, 'season_id');
    }
	

}
