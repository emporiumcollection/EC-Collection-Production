<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 


class RestaurantController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'restaurant';
	static $per_page	= '10';

	public function __construct()
	{
		
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->model = new Restaurant();
		
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);
	
		$this->data = array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'restaurant',
			'return'	=> self::returnUrl()
			
		);
		
	}

	public function getIndex( Request $request )
	{

		if($this->access['is_view'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');

		$sort = (!is_null($request->input('sort')) ? $request->input('sort') : 'id'); 
		$order = (!is_null($request->input('order')) ? $request->input('order') : 'asc');
		// End Filter sort and order for query 
		// Filter Search for query		
		$filter = (!is_null($request->input('search')) ? $this->buildSearch() : '');
		if(\Session::get('gid')!=1 && \Session::get('gid')!=2){
			$uid = \Auth::user()->id;
			$filter .= " AND user_id = '".$uid."'" ;
        }
		
		$page = $request->input('page', 1);
		$params = array(
			'page'		=> $page ,
			'limit'		=> (!is_null($request->input('rows')) ? filter_var($request->input('rows'),FILTER_VALIDATE_INT) : static::$per_page ) ,
			'sort'		=> $sort ,
			'order'		=> $order,
			'params'	=> $filter,
			'global'	=> (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
		);
		// Get Query 
		$results = $this->model->getRows( $params );		
		
		// Build pagination setting
		$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
		$pagination = new Paginator($results['rows'], $results['total'], $params['limit']);	
		$pagination->setPath('restaurant');
		
		$this->data['rowData']		= $results['rows'];
		// Build Pagination 
		$this->data['pagination']	= $pagination;
		// Build pager number and append current param GET
		$this->data['pager'] 		= $this->injectPaginate();	
		// Row grid Number 
		$this->data['i']			= ($page * $params['limit'])- $params['limit']; 
		// Grid Configuration 
		$this->data['tableGrid'] 	= $this->info['config']['grid'];
		$this->data['tableForm'] 	= $this->info['config']['forms'];
		$this->data['colspan'] 		= \SiteHelpers::viewColSpan($this->info['config']['grid']);		
		// Group users permission
		$this->data['access']		= $this->access;
		// Detail from master if any
		
		// Master detail link if any 
		$this->data['subgrid']	= (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : array()); 
		// Render into template
		return view('restaurant.index',$this->data);
	}	



	function getUpdate(Request $request, $id = null)
	{
	
		if($id =='')
		{
			if($this->access['is_add'] ==0 )
			return Redirect::to('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}	
		
		if($id !='')
		{
			if($this->access['is_edit'] ==0 )
			return Redirect::to('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}				
				
		$row = $this->model->find($id);
		if($row)
		{
			$this->data['row'] =  $row;
		} else {
			$this->data['row'] = $this->model->getColumnTable('tb_restaurants'); 
		}
		$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['forms']);
		
		$this->data['id'] = $id;
		$fetch_cat = \DB::table('tb_categories')->get();
        $parent_cat = array();
        if (!empty($fetch_cat)) {
            foreach ($fetch_cat as $cat) {
                $parent_cat[$cat->id] = $cat;
            }
        }

        $this->data['categories'] = $parent_cat;
        
        /** Images **/
        $res_gallery = array();
        $res_slider = array();
        $res_menu = array();
        if($id !='')
		{
            $res_gallery = $this->get_restaurant_files($id, 'res', 'gallery');
            $res_slider = $this->get_restaurant_files($id, 'res', 'slider');
            $res_menu = $this->get_restaurant_files($id, 'res', 'menu');
        }
        $this->data['res_gallery'] = $res_gallery;
        $this->data['res_slider'] = $res_slider;
        $this->data['res_menu'] = $res_menu;
        /** End images **/
        
        $this->data['designers'] = \DB::table('tb_designers')->where('designer_status', '1')->get();
		return view('restaurant.form',$this->data);
	}	

	public function getShow( $id = null)
	{
	
		if($this->access['is_detail'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
					
		$row = $this->model->getRow($id);
		if($row)
		{
			$this->data['row'] =  $row;
		} else {
			$this->data['row'] = $this->model->getColumnTable('tb_restaurants'); 
		}
		$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['grid']);
		
		$this->data['id'] = $id;
		$this->data['access']		= $this->access;
		return view('restaurant.view',$this->data);	
	}	

	function postSave( Request $request)
	{
		//print_r($request->all()); die;
		$rules = $this->validateForm();
		if($request->input('id')==''){
        	$data['alias'] = str_slug($request->input('title'));
        	$rules['title'] = 'required|unique:tb_restaurants';
    	}
		else
		{
			$rules['title'] = 'required|unique:tb_restaurants,title,'. $request->input('id');
		}
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			//$data = $this->validatePost('tb_restaurant');
			
			$data['title'] = $request->input('title');
			$data['description'] = $request->input('description');
			if (!is_null($request->input('video_type'))) {
				$data['video_type'] = $request->input('video_type');
			}
			if (!is_null($request->input('video_link_type'))) {
				$data['video_link_type'] = $request->input('video_link_type');
			}
			$data['video_link'] = $request->input('video_link');
    		if($request->input('id')==''){
    			$data['alias'] = str_slug($request->input('title'));
    		}
			if (!empty($request->input('designer'))) {
                $data['designer'] = implode(',', $request->input('designer'));
            } else {
                $data['designer'] = '';
            }
           if (!empty($request->input('category_id'))) {
                $data['category_id'] = implode(',', $request->input('category_id'));
            } else {
                $data['category_id'] = '';
            }
			$uid = \Auth::user()->id;
			$data['user_id'] = $uid;
            $data['reservation_email'] = $request->input('reservation_email');
            $data['reservation_contact'] = $request->input('reservation_contact');
            $data['website'] = $request->input('website');
            //$data['menu'] = $request->input('menu');
			$data['url'] = $request->input('url');
			$data['location'] = $request->input('location');
			$data['usp_text'] = $request->input('usp_text');
			$data['usp_person'] = $request->input('usp_person');
            $data['meta_keyword'] = $request->input('meta_keyword');
			$data['meta_description'] = $request->input('meta_description');
			$destinationPath = public_path() . '/uploads/properties_subtab_imgs/';
			if (!is_null($request->file('video'))) {
                $room_suites_vfile = $request->file('video');
                $room_suites_vfilename = $room_suites_vfile->getClientOriginalName();
                $room_suites_vextension = $room_suites_vfile->getClientOriginalExtension(); //if you need extension of the file
                $room_suites_videofilename = rand(11111111, 99999999) . '-' . rand(11111111, 99999999) . '.' . $room_suites_vextension;
                $room_suites_vuploadSuccess = $room_suites_vfile->move($destinationPath, $room_suites_videofilename);
                if ($room_suites_vuploadSuccess) {
                    $data['video'] = $room_suites_videofilename;
                }
            }
			
			if (!is_null($request->input('part_of_hotel'))) {
				$data['part_of_hotel'] = 1;
			}
				
			$id = $this->model->insertRow($data , $request->input('id'));
			if($request->input('id')==''){
			    $checkDir = \DB::table('tb_container')->select('id')->where('name', 'restaurants')->first();
                if (!empty($checkDir)) {
                	$foldVal = $data['alias'];
                    if ($foldVal != "") {
                        $foldName = trim($foldVal);
                        $slug = \SiteHelpers::seoUrl(trim($foldName));
                        
                        $dirPath = (new ContainerController)->getContainerUserPath($checkDir->id);
    
                        $checkPropFold = \DB::table('tb_container')->select('id')->where('name', $slug)->where('parent_id', $checkDir->id)->first();
                        //print_r($checkPropFold); die;
                        if (!empty($checkPropFold)) {
                            $propFoldId = $checkPropFold->id;
                        } else {
                            $newPropFolder = $this->createNewFolder($foldName, $checkDir->id);
                            if ($newPropFolder !== false) {
                                $propFoldId = $newPropFolder;
                            }
                        }
                        if(!empty($propFoldId)){
                            $galleryID = $this->createNewFolder('gallery',$propFoldId);
        					$sliderID = $this->createNewFolder('slider',$propFoldId);
        					$menuID = $this->createNewFolder('menu',$propFoldId);
        					\DB::table('tb_images_res_spa_bar')->insertGetId(['parent_id'=>$id,'folder_id'=>$propFoldId,'type'=>'res']);
                        }
            		}
                }     
			}
			if(!is_null($request->input('apply')))
			{
				$return = 'restaurant/update/'.$id.'?return='.self::returnUrl();
			} else {
			      
				$return = 'restaurant?return='.self::returnUrl();
			}
            
			// Insert logs into database
			if($request->input('id') =='')
			{
				\SiteHelpers::auditTrail( $request , 'New Data with ID '.$id.' Has been Inserted !');
			} else {
				\SiteHelpers::auditTrail($request ,'Data with ID '.$id.' Has been Updated !');
			}

			return Redirect::to($return)->with('messagetext',\Lang::get('core.note_success'))->with('msgstatus','success');
			
		} else {

			return Redirect::to('restaurant/update/'.$id)->with('messagetext',\Lang::get('core.note_error'))->with('msgstatus','error')
			->withErrors($validator)->withInput();
		}	
	
	}	

	public function postDelete( Request $request)
	{
		
		if($this->access['is_remove'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
		// delete multipe rows 
		if(count($request->input('ids')) >=1)
		{   \DB::table('tb_images_res_spa_bar')->whereIn('parent_id', $request->input('ids'))->delete();
			$this->model->destroy($request->input('ids'));
			
			\SiteHelpers::auditTrail( $request , "ID : ".implode(",",$request->input('ids'))."  , Has Been Removed Successfull");
			// redirect
			return Redirect::to('restaurant')
        		->with('messagetext', \Lang::get('core.note_success_delete'))->with('msgstatus','success'); 
	
		} else {
			return Redirect::to('restaurant')
        		->with('messagetext','No Item Deleted')->with('msgstatus','error');				
		}

	}	

	public function getImages( $id = null)
	{	$this->data['restaurant'] =  Restaurant::find($id);
		$this->data['restaurant']['images'] =  \DB::table('tb_images_res_spa_bar')->where('type', 'res')->where('parent_id', $id)->get();
		$this->data['id'] = $id;	
		$this->data['access']		= $this->access;
		return view('restaurant.gallery_images',$this->data);	
	}	

	public function postUploadimages( Request $request)
	{
		$file = $request->file('files');
		
	    if($file) {

	        $destinationPath = public_path() . '/uploads/restaurants/';
	        $extension = $file[0]->getClientOriginalExtension();
	        $imageName = rand(11111111111, 99999999999) . '-' .rand(11111111111, 99999999999) . '.' . $extension;
	        $upload_success = $file[0]->move($destinationPath, $imageName);

	        if ($upload_success) {

	            // resizing an uploaded file
	            \Image::make($destinationPath . $imageName)->resize(100, 100)->save($destinationPath . "100x100_" . $imageName);
	            $imgdata = array();
	            $imgdata['parent_id'] = $request->input('parent_id');;
	            $imgdata['type'] = $request->input('uploadType');
	            $imgdata['name'] = $imageName;
	            $imgdata['status'] = 'Yes';
	            $imgdata['sorting'] = 0;
	            $imgdata['image_size'] = $file[0]->getClientSize();;
	            $imgdata['image_type'] = $file[0]->getClientMimeType();;
	            $imgdata['mark_main'] = 0;
	            $imgID = \DB::table('tb_images_res_spa_bar')->insertGetId($imgdata);
	            $getupfile = \DB::table('tb_images_res_spa_bar')->where('id', $imgID)->first();
                if (!empty($getupfile)) {
                    $getfilejson['files'][0]['id'] = $imgID;
                    $getfilejson['files'][0]['name'] = $getupfile->name;
                    $getfilejson['files'][0]['size'] = $getupfile->image_size;
                    $getfilejson['files'][0]['thumbnailUrl'] = url('uploads/restaurants/100x100_'.$getupfile->name);
                    $getfilejson['files'][0]['type'] = $getupfile->image_type;
                    $getfilejson['files'][0]['url'] = url('uploads/restaurants/'.$getupfile->name);
                }
                $getfilejson['status']= 'success';
	            return \Response::json($getfilejson, 200);
	        } else {
	        	$getfilejson['status']= 'error';
	            return \Response::json($getfilejson, 400);
	        }
	    }
	}	

	function postDeleteimage(Request $request) {
        $uid = \Auth::user()->id;
        $img_id = $request->input('img_id');
        
        $checkImg = \DB::table('tb_images_res_spa_bar')->where('id', $img_id)->first();
        if ($checkImg) {
        	$filename = public_path() . '/uploads/restaurants/'.$checkImg->name;
        	\File::delete($filename,'100x100_'.$filename);
        	\DB::table('tb_images_res_spa_bar')->where('id', $img_id)->delete();
            $res['status'] = 'success';
            return \Response::json($res);
        } else {
            $res['status'] = 'error';
            return \Response::json($res);
        }
    }

    function postDeleteselectedimage(Request $request) {
        $items = explode(',',$request->input('items'));
		if(!empty($items))
		{
			foreach($items as $item) 
			{
				$checkImg = \DB::table('tb_images_res_spa_bar')->where('id', $item)->first();
				if (!empty($checkImg)) {
					$deleteImg = \DB::table('tb_images_res_spa_bar')->where('id', $item)->delete();
					$filename = public_path() . '/uploads/restaurants/'.$checkImg->name;
					\File::delete($filename,'100x100_'.$filename);
				}
			}
			$res['status'] = 'success';
			$res['imgs'] = $items;
		}
		else {
			$res['status'] = 'error';
		}
		return \Response::json($res);
    }
	
	
	public function restroReservations( Request $request )
	{

		if($this->access['is_view'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');

		$sort = (!is_null($request->input('sort')) ? $request->input('sort') : 'id'); 
		$order = (!is_null($request->input('order')) ? $request->input('order') : 'asc');
		// End Filter sort and order for query 
		// Filter Search for query		
		$filter = (!is_null($request->input('search')) ? $this->buildSearch() : '');
		
		$page = $request->input('page', 1);
		$params = array(
			'page'		=> $page ,
			'limit'		=> (!is_null($request->input('rows')) ? filter_var($request->input('rows'),FILTER_VALIDATE_INT) : static::$per_page ) ,
			'sort'		=> $sort ,
			'order'		=> $order,
			'params'	=> $filter,
			'global'	=> (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
		);
		// Get Query 
		$this->data['reservedata'] = array();
		$checkData = \DB::table('tb_restro_spa_bar_reservation')->where('tbl_id', $request->id)->where('reservetype', 'restro')->get();
		if (!empty($checkData)) {
			$this->data['reservedata'] = $checkData;
		}		
		
		// Build pagination setting
		$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
		$pagination = new Paginator($this->data['reservedata'], count($this->data['reservedata']), $params['limit']);	
		//$pagination->setPath('bar');
		
		//$this->data['rowData']		= $results['rows'];
		// Build Pagination 
		$this->data['pagination']	= $pagination;
		// Build pager number and append current param GET
		$this->data['pager'] 		= $this->injectPaginate();	
		// Row grid Number 
		$this->data['i']			= ($page * $params['limit'])- $params['limit']; 
		// Grid Configuration 
		$this->data['tableGrid'] 	= $this->info['config']['grid'];
		$this->data['tableForm'] 	= $this->info['config']['forms'];
		$this->data['colspan'] 		= \SiteHelpers::viewColSpan($this->info['config']['grid']);		
		// Group users permission
		$this->data['access']		= $this->access;
		// Detail from master if any
		
		// Master detail link if any 
		$this->data['subgrid']	= (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : array()); 
		// Render into template
		
		return view('restaurant.reservation_index',$this->data);
	}
    
    function resturant_images_uploads(Request $request) {
        $checkRest = \DB::table('tb_restaurants')->select('alias')->where('id', $request->input('propId'))->first();        
        if (!empty($checkRest)) {
            $checkDir = \DB::table('tb_container')->select('id')->where('name', 'restaurants')->first();
            if (!empty($checkDir)) {
                $foldVal = trim($checkRest->alias);
                if ($foldVal != "") {
                    $foldName = trim($foldVal);
                    $slug = \SiteHelpers::seoUrl(trim($foldName));
                    
                    $dirPath = (new ContainerController)->getContainerUserPath($checkDir->id);

                    $checkPropFold = \DB::table('tb_container')->select('id')->where('name', $slug)->where('parent_id', $checkDir->id)->first();
                    //print_r($checkPropFold); die;
                    if (!empty($checkPropFold)) {
                        $propFoldId = $checkPropFold->id;
                    } else {
                        $newPropFolder = $this->createNewFolder($foldName, $checkDir->id);
                        if ($newPropFolder !== false) {
                            $propFoldId = $newPropFolder;
                        }
                    }
                    
                    $imgFold = $request->input('uploadType');
                    $PropImgfoldName = trim($imgFold);
                    $PropImgslug = \SiteHelpers::seoUrl(trim($PropImgfoldName));
                    $checkPropImgFold = \DB::table('tb_container')->select('id')->where('name', $PropImgslug)->where('parent_id', $propFoldId)->first();
                    if (!empty($checkPropImgFold)) {
                        $newpropImgFoldId = $checkPropImgFold->id;
                    } else {
                        $newPropImgFolder = $this->createNewFolder($PropImgfoldName, $propFoldId);
                        if ($newPropImgFolder !== false) {
                            $newpropImgFoldId = $newPropImgFolder;
                        }
                    }
                    
                    /*if ($imgFold == 'Rooms Images') {
                        $cat_id = $request->input('category_id');
                        $getcat = \DB::table('tb_properties_category_types')->select('category_name')->where('id', $cat_id)->where('status', 0)->first();
                        if (!empty($getcat)) {
                            $catFold = $getcat->category_name;
                            $CatfoldName = trim($catFold);
                            $Catslug = \SiteHelpers::seoUrl(trim($CatfoldName));
                            $checkCatFold = \DB::table('tb_container')->select('id')->where('name', $Catslug)->where('parent_id', $newpropImgFoldId)->first();
                            if (!empty($checkCatFold)) {
                                $CatFoldId = $checkCatFold->id;
                            } else {
                                $newCatFolder = $this->createNewFolder($CatfoldName, $newpropImgFoldId);
                                if ($newCatFolder !== false) {
                                    $CatFoldId = $newCatFolder;
                                }
                            }
                            $propImgFoldId = $CatFoldId;
                        } else {
                            $propImgFoldId = $newpropImgFoldId;
                        }
                    } else {
                        $propImgFoldId = $newpropImgFoldId;
                    }*/
                    $propImgFoldId  = $newpropImgFoldId;
                    // SET UPLOAD PATH
                    $destinationPath = (new ContainerController)->getContainerUserPath($propImgFoldId);
                    $file = $request->file('files');
                    // GET THE FILE EXTENSION
                    $extension = $file[0]->getClientOriginalExtension();
                    // RENAME THE UPLOAD WITH RANDOM NUMBER
                    $fileName = rand(11111111111, 99999999999) . '-' .rand(11111111111, 99999999999) . '.' . $extension;
                    $fileNamedis = $file[0]->getClientOriginalName();
                    $ftname = explode('.', $fileName);
                    $exha = false;

                    for ($f = 1; $exha != true; $f++) {
                        if (\File::exists($destinationPath . $fileName)) {
                            $fileName = $ftname[0] . '(' . $f . ').' . $extension;
                        } else {
                            $fileName = $fileName;
                            $exha = true;
                        }
                    }
                    // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
                    $upload_success = $file[0]->move($destinationPath, $fileName);
                    $ftype = $file[0]->getClientMimeType();
                    $exFtype = explode('/', $ftype);
                    if ($exFtype[0] == "image") {
                        // open an image file
                        $thimg = \Image::make($destinationPath . $fileName);
                        // now you are able to resize the instance
                        $thimg->resize(128, 130);
                        // finally we save the image as a new file
                        $thumbfile = 'thumb_' . $propImgFoldId . '_' . $fileName;
                        $thimg->save(public_path() . '/uploads/thumbs/' . $thumbfile);

                        // open an image file
                        $mdimg = \Image::make($destinationPath . $fileName);
                        // now you are able to resize the instance
                        $thactualsize = getimagesize($destinationPath . $fileName);
                        if ($thactualsize[0] > $thactualsize[1]) {
                            $mdimg->resize(320, null, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        } else {
                            $mdimg->resize(null, 320, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        }
                        // finally we save the image as a new file
                        $thumbfile = 'format_' . $propImgFoldId . '_' . $fileName;
                        $mdimg->save(public_path() . '/uploads/thumbs/' . $thumbfile);

                        // open an image file
                        $mdimg = \Image::make($destinationPath . $fileName);
                        // now you are able to resize the instance
                        $hfactualsize = getimagesize($destinationPath . $fileName);
                        if ($hfactualsize[0] > $hfactualsize[1]) {
                            $mdimg->resize(1000, null, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        } else {
                            $mdimg->resize(null, 1000, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        }
                        // finally we save the image as a new file
                        $thumbfile = 'highflip_' . $propImgFoldId . '_' . $fileName;
                        $mdimg->save(public_path() . '/uploads/thumbs/' . $thumbfile);

                        /*// open an image file
                        $pthimg = \Image::make($destinationPath . $fileName);
                        // now you are able to resize the instance
                        $pthimg->resize(80, 80);
                        // finally we save the image as a new file
                        $pthumbfile = $fileName;
                        $pthimg->save(public_path() . '/uploads/property_imgs_thumbs/' . $pthumbfile);

                        $fpimg = \Image::make($destinationPath . $fileName);
                        $thactualsize = getimagesize($destinationPath . $fileName);
                        if ($thactualsize[0] > $thactualsize[1]) {
                            $fpimg->resize(425, 283);
                        } else {
                            $fpimg->resize(212, 283);
                        }
                        $thumbfile = 'front_property_' . $propImgFoldId . '_' . $fileName;
                        $fpimg->save(public_path() . '/uploads/property_imgs_thumbs/' . $thumbfile);*/

                        // Set main image if uploaded file is first in folder
                        $countfile = \DB::table('tb_container_files')->where('folder_id', $propImgFoldId)->where(function ($query) {
                                    $query->where('file_type', 'image/jpeg')->orWhere('file_type', 'image/png')->orWhere('file_type', 'image/gif');
                                })->count();
                        if ($countfile == 0) {
                            $copytofolder = public_path() . '/uploads/folder_cover_imgs/';
                            // image for backend
                            $bkimg = \Image::make($destinationPath . $fileName);
                            $bkimg->resize(128, 130);
                            $bkimgfile = 'thumb_' . $fileName;
                            $bkimg->save($copytofolder . $bkimgfile);

                            // open an image file
                            $mdimg = \Image::make($destinationPath . $fileName);
                            $thactualsize = getimagesize($destinationPath . $fileName);
                            if ($thactualsize[0] > $thactualsize[1]) {
                                $mdimg->resize(320, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                });
                            } else {
                                $mdimg->resize(null, 320, function ($constraint) {
                                    $constraint->aspectRatio();
                                });
                            }
                            $thumbfile = 'format_' . $fileName;
                            $mdimg->save($copytofolder . $thumbfile);

                            $cmdata['temp_cover_img'] = $fileName;
                            $cmdata['temp_cover_img_masonry'] = $fileName;
                            $cmdata['updated'] = date('y-m-d');
                            \DB::table('tb_container')->where('id', $propImgFoldId)->update($cmdata);
                        }
                    }

                    $data['folder_id'] = $propImgFoldId;
                    $data['file_name'] = $fileName;
					$data['file_display_name'] = $fileNamedis;
                    $data['file_type'] = $file[0]->getClientMimeType();
                    $data['file_size'] = $file[0]->getClientSize();
                    $data['user_id'] = \Auth::user()->id;
                    $data['created'] = date('y-m-d h:i:s');
                    $data['path'] = $destinationPath;
                    $fileID = \DB::table('tb_container_files')->insertGetId($data);

                    /*$imgdata['property_id'] = $request->input('propId');
                    $imgdata['type'] = $imgFold;
                    $imgdata['file_id'] = $fileID;
                    if ($imgFold == 'Rooms Images') {
                        $imgdata['category_id'] = $request->input('category_id');
                    }
                    $imgdata['user_id'] = \Auth::user()->id;
                    $imgdata['created'] = date('y-m-d h:i:s');
                    $imgID = \DB::table('tb_properties_images')->insertGetId($imgdata);*/

                    $getupfile = \DB::table('tb_container_files')->where('id', $fileID)->first();
                    if (!empty($getupfile)) {
                        $getfilejson['files'][0]['id'] = $fileID;
                        $getfilejson['files'][0]['name'] = ($getupfile->file_display_name!='') ? $getupfile->file_display_name : $getupfile->file_name;
                        $getfilejson['files'][0]['size'] = $getupfile->file_size;
                        if ($getupfile->file_type == "application/pdf") {
                            $getfilejson['files'][0]['thumbnailUrl'] = \URL::to('uploads/images/bigpage_white_acrobat.png');
                        } elseif ($getupfile->file_type == "application/vnd.openxmlformats-officedocument.word") {
                            $getfilejson['files'][0]['thumbnailUrl'] = \URL::to('uploads/images/doc.png');
                        } elseif ($getupfile->file_type == "application/vnd.openxmlformats-officedocument.spre") {
                            $getfilejson['files'][0]['thumbnailUrl'] = \URL::to('uploads/images/xls.png');
                        } else {
                            $getfilejson['files'][0]['thumbnailUrl'] = \URL::to('uploads/thumbs/thumb_'.$propImgFoldId.'_'.$getupfile->file_name);
                        }
                        $getfilejson['files'][0]['type'] = $getupfile->file_type;
                        $getfilejson['files'][0]['url'] = (new ContainerController)->getThumbpath($getupfile->folder_id) . $getupfile->file_name;
                    }
                    return json_encode($getfilejson);
                }
            }
        }
    }
    function createNewFolder($Foldername, $ParentfolderId) {
        if ($Foldername != '') {
            $dirPath = (new ContainerController)->getContainerUserPath($ParentfolderId);
            $slug = \SiteHelpers::seoUrl(trim($Foldername));
            $result = \File::makeDirectory($dirPath . $slug, 0777, true);
            $fdata['parent_id'] = $ParentfolderId;
            $fdata['name'] = $slug;
            $fdata['display_name'] = $Foldername;
            $fdata['file_type'] = 'folder';
            $fdata['user_id'] = \Auth::user()->id;
            $fdata['created'] = date('y-m-d h:i:s');
            $fID = \DB::table('tb_container')->insertGetId($fdata);
            return $fID;
        } else {
            return false;
        }
    }
    
    function get_restaurant_files($r_id, $filetype, $foldertype='gallery') {
        /*$fileArr = \DB::table('tb_properties_images')->join('tb_container_files', 'tb_container_files.id', '=', 'tb_properties_images.file_id')->select('tb_properties_images.*',  \DB::raw("(CASE WHEN (tb_container_files.file_display_name = '') THEN tb_container_files.file_name ELSE tb_container_files.file_display_name END) as file_display_name"), 'tb_container_files.file_name', 'tb_container_files.file_size', 'tb_container_files.file_type', 'tb_container_files.folder_id')->where('tb_properties_images.property_id', $r_id)->where('tb_properties_images.type', $filetype)->get();
        $filen = array();
        if (!empty($fileArr)) {
            $f = 0;
            foreach ($fileArr as $file) {
                $filen[$f] = $file;
                $filen[$f]->imgsrc = (new ContainerController)->getThumbpath($file->folder_id);
                $f++;
            }
        }
        return $filen;*/
        
        
        
        
        $filen = array();
        $fetchresgalleryfolder = array();
		$resfileArr = \DB::table('tb_images_res_spa_bar')->where('parent_id', $r_id)->where('type', $filetype)->first();
        if($foldertype=="menu"){
            if(!empty($resfileArr)){
                $fetchresgalleryfolder = \DB::table('tb_container_files')->select('tb_container_files.id', 'tb_container_files.file_display_name', 'tb_container_files.file_name', 'tb_container_files.folder_id', 'tb_restaurant_menu_title.title', 'tb_container_files.file_size', 'tb_container_files.file_type')->leftJoin('tb_restaurant_menu_title', 'tb_container_files.id', '=', 'tb_restaurant_menu_title.container_id')->join('tb_container', 'tb_container.id', '=', 'tb_container_files.folder_id')->where('tb_container.parent_id', $resfileArr->folder_id)->where('tb_container.name', $foldertype)->get();
            }
            //print_r($fetchresgalleryfolder); die;
            if (!empty($fetchresgalleryfolder)) {
                $f = 0;
                foreach ($fetchresgalleryfolder as $file) {
                    $filen[$f] = $file;
                    $filen[$f]->imgsrc = (new ContainerController)->getThumbpath($file->folder_id);
                    $f++;
                }
            }    
        }else{
            if(!empty($resfileArr)){
                $fetchresgalleryfolder = \DB::table('tb_container')->join('tb_container_files', 'tb_container.id', '=', 'tb_container_files.folder_id')->where('tb_container.parent_id', $resfileArr->folder_id)->where('tb_container.name', $foldertype)->get();
            }
            if (!empty($fetchresgalleryfolder)) {
                $f = 0;
                foreach ($fetchresgalleryfolder as $file) {
                    $filen[$f] = $file;
                    $filen[$f]->imgsrc = (new ContainerController)->getThumbpath($file->folder_id);
                    $f++;
                }
            }
        }
        return $filen;
        //echo "<pre>";
        //print_r($filen); die;
        //print_r($resfileArr); die;
        //print_r($resfileArr); die;
        
        
        
        
        
        
    }
    
    function delete_restaurant_image(Request $request) {
        $uid = \Auth::user()->id;
        $img_id = $request->input('img_id');
        //$checkImg = \DB::table('tb_properties_images')->where('id', $img_id)->first();
        if ($img_id!='') {
            //$deleteEfile = (new ContainerController)->delete_allextra_files($checkImg->file_id, 'file');
            $deleteFile = \DB::table('tb_container_files')->where('id', $img_id)->delete();
            //$deleteImg = \DB::table('tb_properties_images')->where('id', $img_id)->delete();

            $res['status'] = 'success';
            return json_encode($res);
        } else {
            $res['status'] = 'error';
            return json_encode($res);
        }
    }
    
    function delete_selected_image(Request $request) {
        $uid = \Auth::user()->id;
        $items = explode(',',$request->input('items'));
		if(!empty($items))
		{
			foreach($items as $item) 
			{
				//$checkImg = \DB::table('tb_properties_images')->where('id', $item)->first();
				//if (!empty($checkImg)) {
					//$deleteEfile = (new ContainerController)->delete_allextra_files($checkImg->file_id, 'file');
					$deleteFile = \DB::table('tb_container_files')->where('id', $item)->delete();
					//$deleteImg = \DB::table('tb_properties_images')->where('id', $item)->delete();
				//}
			}
			$res['status'] = 'success';
			$res['imgs'] = $items;
		}
		else {
			$res['status'] = 'error';
		}
		return json_encode($res);
    }
    
    function addmenutitle(Request $request){
        $mid = $request->input('mID');  
        $menuTitle = $request->input('menuTitle');
        
        if($mid!=''){
            $mdata['container_id'] = $mid;
            $mdata['title'] = $menuTitle;
            $mdata['created'] = date('Y-m-d H:i:s');
            $objMenu = \DB::table('tb_restaurant_menu_title')->where('container_id', $mid)->first();
            if(!empty($objMenu)){
                \DB::table('tb_restaurant_menu_title')->where('container_id', $mid)->update($mdata);    
            }else{            
                $id = \DB::table('tb_restaurant_menu_title')->insertGetId($mdata);
            }
            $result['status']='success';
            $result['mid'] = $mid;
            $result['menutitle'] = $menuTitle;
            $result['message'] ='Title Added Successfully';
        }else{
            $result['status']='error';
            $result['message'] ='Error! While adding title';
        }    
        echo json_encode($result);
    }
    
    function getMenutitle(Request $request){
        $mid = $request->input('mid');       
        
        if($mid!=''){
            $objMenu = \DB::table('tb_restaurant_menu_title')->where('container_id', $mid)->first();            
            $result['status']='success';
            $result['objmenu'] =$objMenu;
        }else{
            $result['status']='error';            
        }    
        echo json_encode($result);
        
    }
    
}