<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\ContainerController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Http\Controllers\Controller;
use App\User;
use DB,Validator, Input, Redirect, CommonHelper;
class PersonalizedServiceController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->data['pageTitle'] ='';
}
    
    /* Method : Index
     *   Description : The Methos is using for personalized page
    */
    public function index(Request $request) {
       
        $data = array('test');
        return view('frontend.personalized.personalized_service', $this->data);
    }


}
