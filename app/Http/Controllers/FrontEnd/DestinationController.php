<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Validator, Input, Redirect;

class DestinationController extends Controller {

    public function __construct() {
        parent::__construct();
    }
	
	 public function getDestinatinosAjax(Request $request) {
		
		$category_id = $request->catID;
		$res = array(); 
		if($category_id!='')
		{

			$checkdestination = DB::table('tb_categories')->select('id')->where('category_published', 1)->where('id', $category_id)->count();
			if($checkdestination > 0)
			{
				$fetchchilds = DB::table('tb_categories')->select('id', 'parent_category_id', 'category_name', 'category_image', 'category_custom_title')->where('category_published', 1)->where('parent_category_id', $category_id)->where('parent_category_id', '!=', 8)->get();
				if(!empty($fetchchilds))
				{
					$res['status'] = 'success';
					$res['dests'] = $fetchchilds;
					
				}
				else
				{
					$res['status'] = 'error';
					$res['errors'] = 'No child destination found!';
				}
			}
			else
			{
				$res['status'] = 'error';
				$res['errors'] = 'Destination not exist!';
			}
		}
		else
		{
			$res['status'] = 'error';
			$res['errors'] = 'Please select destination first!';
		}
		response()->json($res);
    }

    public function getExperiencesAjax(Request $request) {
		
		$res = array(); 
		$fetchexperience = DB::table('tb_categories')->select('id', 'parent_category_id', 'category_name', 'category_image', 'category_custom_title')->where('category_published', 1)->where('parent_category_id', 8)->get();
		if(!empty($fetchexperience))
		{
			$res['status'] = 'success';
			$res['dests'] = $fetchexperience;
			
		}
		else
		{
			$res['status'] = 'error';
			$res['errors'] = 'No Experiences found!';
		}
		response()->json($res);
    }
	
	public function getMenusAjax(Request $request) {
		$menu_id = $request->menuID;
		$menu_pos = $request->menu_pos;
		$res = array(); 
		$fetchmenu = DB::table('tb_menu')->where('parent_id', $menu_id)->where('position', $menu_pos)->where('active', 1)->orderBy('ordering','asc')->get();
		if(!empty($fetchmenu))
		{
			$res['status'] = 'success';
			$res['menus'] = $fetchmenu;
			
		}
		else
		{
			$res['status'] = 'error';
			$res['errors'] = 'No Menus found!';
		}
		response()->json($res);
    }

}
