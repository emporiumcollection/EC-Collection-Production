<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Sximo  {
	const CREATED_AT = 'created';

	protected $table = 'tb_properties_images';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public function property()
    {
        return $this->belongsTo(properties::class);
    }

	public function file()
    {
        return $this->hasOne(ContainerFiles::class, 'id', 'file_id');
    }
	

}
