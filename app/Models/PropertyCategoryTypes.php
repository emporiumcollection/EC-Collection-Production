<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PropertyCategoryTypes extends Sximo  {
	const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

	protected $table = 'tb_properties_category_types';
	protected $primaryKey = 'id';

	public function property()
    {
        return $this->belongsTo(properties::class);
    }

	public function rooms()
    {
        return $this->hasMany(PropertyRooms::class, 'category_id');
    }
	

}
