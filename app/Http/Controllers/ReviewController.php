<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect; 
use App\Helpers\ReviewHelper;
use App\Models\Properties;

class ReviewController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'review';
	static $per_page	= '10';

	public function __construct()
	{
		
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->model = new Review();
		
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);
	
		$this->data = array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'review',
			'return'	=> self::returnUrl()
			
		);
		
	}

	public function getIndex( Request $request )
	{

		if($this->access['is_view'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');

		$sort = (!is_null($request->input('sort')) ? $request->input('sort') : 'id'); 
		$order = (!is_null($request->input('order')) ? $request->input('order') : 'desc');
		// End Filter sort and order for query 
		// Filter Search for query		
		$filter = (!is_null($request->input('search')) ? $this->buildSearch() : '');
		$this->data['curntprop'] =  '';
		$this->data['curstatus'] =  '';
		if(!is_null($request->input('selprop')) && $request->input('selprop')!='')
		{
			$filter .= ' AND FIND_IN_SET('.$request->input('selprop').', hotel_id)';
			$this->data['curntprop'] = $request->input('selprop');
		}
		if(!is_null($request->input('selstatus')) && $request->input('selstatus')!='')
		{
			if($request->input('selstatus')=='is_approved'){
                $filter .= ' AND is_approved = 1';
            }
            if($request->input('selstatus')=='is_not_approved'){
                $filter .= ' AND is_approved = 0';
            }

			$this->data['curstatus'] = $request->input('selstatus');
		}
		$page = $request->input('page', 1);
		$params = array(
			'page'		=> $page ,
			'limit'		=> (!is_null($request->input('rows')) ? filter_var($request->input('rows'),FILTER_VALIDATE_INT) : static::$per_page ) ,
			'sort'		=> $sort ,
			'order'		=> $order,
			'params'	=> $filter,
			'global'	=> (isset($this->access['is_global']) ? $this->access['is_global'] : 0 ),
			'with'		=> ['hotel'],
		);
		// Get Query 
		$results = $this->model->getRows( $params );		
		
		// Build pagination setting
		$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
		$pagination = new Paginator($results['rows'], $results['total'], $params['limit']);	
		$pagination->setPath('review');
		
		$this->data['rowData']		= $results['rows'];
		// echo "<pre>";
		// print_r($this->data['rowData']);die();
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
		
		$this->data['fetch_prop'] = Properties::orderBy('id','desc')->get();
		// Render into template
		return view('review.index',$this->data);
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
			// $this->data['row'] = $request->hotel_id;
			$this->data['row'] = $this->model->getColumnTable('tb_reviews'); 
		}
		$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['forms']);
		
		$this->data['id'] = $id;
		$this->data['fetch_prop'] = Properties::orderBy('id','desc')->get();
		return view('review.form',$this->data);
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
			$this->data['row'] = $this->model->getColumnTable('tb_reviews'); 
		}
		$this->data['fields'] 		=  \SiteHelpers::fieldLang($this->info['config']['grid']);
		
		$this->data['id'] = $id;
		$this->data['access']		= $this->access;
		return view('review.view',$this->data);	
	}	

	function postSave( Request $request)
	{
		
		$rules = array(
            'rating' => 'required|numeric|max:10|min:1',
            'fname' => 'required|max:50|min:1',
			'lname' => 'required|max:50|min:1'
        );
		$validator = Validator::make($request->all(), $rules);	
		if ($validator->passes()) {
			$data = $this->validatePost('tb_review');
			if(isset($data['is_approved'])){
				$id = $this->model->insertRow($data , $request->input('id'));
			}else{
				$data['is_approved'] = "0";
				$id = $this->model->insertRow($data , $request->input('id'));
			}
			
			if(!is_null($request->input('apply')))
			{
				$return = 'review/update/'.$id.'?return='.self::returnUrl();
			} else {
				$return = 'review?return='.self::returnUrl();
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
			return Redirect::to('review/update/?hotel_id='.$request->input('hotel_id'))->with('messagetext',\Lang::get('core.note_error'))->with('msgstatus','error')
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
		{
			$this->model->destroy($request->input('ids'));
			
			\SiteHelpers::auditTrail( $request , "ID : ".implode(",",$request->input('ids'))."  , Has Been Removed Successfull");
			// redirect
			return Redirect::to('review')
        		->with('messagetext', \Lang::get('core.note_success_delete'))->with('msgstatus','success'); 
	
		} else {
			return Redirect::to('review')
        		->with('messagetext','No Item Deleted')->with('msgstatus','error');				
		}

	}			


}