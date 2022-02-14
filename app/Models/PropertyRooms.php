<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PropertyRooms extends Sximo  {
	const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

	protected $table = 'tb_properties_category_rooms';
	protected $primaryKey = 'id';
	protected $fillable = [
		'property_id', 
		'category_id', 
		'room_name', 
		'category_name', 
		'active_full_year', 
		'room_active_from', 
		'user_id', 
		'status', 
		'num_beds', 
		'suite_size', 
		'corona_guidelines', 
		'corona_link'
	];


	public function property()
    {
        return $this->belongsTo(properties::class, 'property_id');
    }

	public function suite()
    {
        return $this->belongsTo(PropertyCategoryTypes::class, 'category_id');
    }
	

}
