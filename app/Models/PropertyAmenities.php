<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenities extends Sximo  {
	const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

	protected $table = 'tb_properties_category_amenities';
	protected $primaryKey = 'id';

	public function property()
    {
        return $this->belongsTo(properties::class, 'property_id');
    }

	public function suite()
    {
        return $this->belongsTo(PropertyCategoryTypes::class, 'cat_id');
    }
	

}
