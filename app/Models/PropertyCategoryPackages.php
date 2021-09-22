<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PropertyCategoryPackages extends Sximo  {
	const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

	protected $table = 'tb_properties_category_package';
	protected $primaryKey = 'id';

	public function property()
    {
        return $this->belongsTo(properties::class, 'property_id');
    }

	public function package()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
	

}
