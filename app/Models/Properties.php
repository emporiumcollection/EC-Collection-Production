<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class properties extends Sximo  {
	const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';

	protected $table = 'tb_properties';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_properties.* FROM tb_properties  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_properties.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	public function images()
    {
        return $this->hasMany(PropertyImages::class, 'property_id');
    }

	public function roomImages($type_id = null)
    {
        $images = $this->images()
        ->where('type', '=', 'Rooms Images');
        if($type_id){
	        $images->where('category_id', '=', $type_id);
        }

        return $images;
    }

	public function propertyImages()
    {
        return $this->images()->where('type', '=', 'Property Images');
    }

	public function barImages()
    {
        return $this->images()->where('type', '=', 'Bar Gallery Images');
    }

	public function spaImages()
    {
        return $this->images()->where('type', '=', 'Spa Gallery Images');
    }

	public function restrurantImages()
    {
        return $this->images()->where('type', '=', 'Restrurants Gallery Images');
    }

	public function hotelBrochureImages()
    {
        return $this->images()->where('type', '=', 'Hotel Brochure');
    }

	public function suites()
    {
        return $this->hasMany(PropertyCategoryTypes::class, 'property_id');
    }

    public function container(){
        return $this->hasOne(Container::class, 'display_name', 'property_name');
    }

	public function PropertyCategoryPackages()
    {
        return $this->hasOne(PropertyCategoryPackages::class, 'property_id');
    }
}
