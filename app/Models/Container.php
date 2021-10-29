<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use DB;

class container extends Sximo  {
	
	protected $table = 'tb_container';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_container.* FROM tb_container  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_container.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	
	public static function insertRowFile($data){
		return DB::table('tb_container_files')->insertGetId($data);
	}

	public function Property(){
		return $this->belongsTo(properties::class, 'display_name');
	}

	public function files(){
		return $this->hasMany(ContainerFiles::class, 'folder_id');
	}

	public function PropertyImages($containerId){
		$folder = Container::where('parent_id', '=', $containerId)
		->where('display_name', 'Property Images')
		->get()
		->toArray();

		$files = [];
		if(!empty($folder)){			
			$folderId = $folder[0]['id'];
			$files = ContainerFiles::select(['id','file_name'])
			->where('folder_id', '=', $folderId)
			->orderBy('file_sort_num', 'asc')
			->limit(10)
			->get()
			->toArray();	
		}

		return $files;
	}
	

}
