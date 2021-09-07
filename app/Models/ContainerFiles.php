<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ContainerFiles extends Sximo  {
	const CREATED_AT = 'created';

	protected $table = 'tb_container_files';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public function container()
    {
        return $this->belongsTo(Container::class, 'folder_id');
    }
	

}
