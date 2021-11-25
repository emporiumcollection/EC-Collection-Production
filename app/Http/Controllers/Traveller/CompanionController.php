<?php

namespace App\Http\Controllers\Traveller;

use App\Http\Controllers\Controller;
use App\User;
use App\SecurityQuestions;
use App\Category;
use Socialize;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator,
    Input,
    Redirect;

class CompanionController extends Controller {
    
    protected $layout = "layouts.main";

    public function __construct() {
        parent::__construct();
    }

    public function getCompanion(){
        $user = User::find(\Session::get('uid'));
        $this->data['companion'] = \DB::table('tb_companion')->where('user_id', \Session::get('uid'))->where('status', 0)->get();
        $user = User::find(\Session::get('uid'));
        $is_demo6 = trim(\CommonHelper::isHotelDashBoard($user->group_id));        
        $file_name = 'users_admin.traveller.users.companion';      
        return view($file_name, $this->data);
    }
    
    public function viewCompanion(Request $request){
        $id = $request->input('id'); 
        $companion = \DB::table('tb_companion')->where('id', $id)->get();
        echo json_encode($companion);
    }
    public function addcompanion(Request $request){
        $user = User::find(\Session::get('uid'));

        $return_array = array();
        if (!\Auth::check())
            return Redirect::to('user/login');
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        $id = $request->input('id'); 

        $user = User::find(\Session::get('uid'));
        $id = $request->id;            
        $companion_data['user_id'] = $user->id;
        $companion_data['first_name'] = $request->input('first_name');
        $companion_data['last_name'] = $request->input('last_name');           
        $companion_data['email'] = $request->input('email');
        $companion_data['phone_number'] = $request->input('phone_number');
        $companion_data['gender'] = $request->input('gender');
        $companion_data['preferred_language'] = $request->input('preferred_language');
        $companion_data['preferred_currency'] = $request->input('preferred_currency');
        if (!empty($request->input('id'))) {
            
            if ($validator->passes()) { 
                
                
                    \DB::table('tb_companion')->where('id',$id)->update($companion_data);                           
                    
                    if (!is_null(Input::file('profile_avatar'))) {
                        $file = $request->file('profile_avatar');
                        
                        $destinationPath = public_path().'/uploads/users';
                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension(); //if you need extension of the file
                        $newfilename = $id . '.' . $extension;
                        $uploadSuccess = $request->file('profile_avatar')->move($destinationPath, $newfilename);
                        if ($uploadSuccess) {
                            $data['avatar'] = $newfilename;
                            \DB::table('tb_companion')->where('id', $id)->update(['avatar' => $newfilename]);   
                        }
                    }  
                    
                    $edata = array();
                    $emlData['frmemail'] = 'marketing@emporium-voyage.com';
                    $edata['first_name'] = $request->input('first_name');
                    $edata['last_name'] = $request->input('last_name'); 
                    $edata['email'] = trim($request->input('email'));
                    
                    $emlData['email'] = trim($request->input('email'));
                    $emlData['subject'] = 'Companion Add';                
                    $etemp = 'companion';
                    // echo view('user.emails.' . $etemp, $edata); die;

                    \Mail::send('user.emails.' . $etemp, $edata, function($message) use ($emlData) {
                        $message->from($emlData['frmemail'], CNF_APPNAME);
            
                        $message->to($emlData['email']);
            
                        $message->subject($emlData['subject']);
                    });
                                               
                return redirect::to('/users/companion')->with('massage','You have successfully added a travel companion!');          
                
            } else {
                 return redirect::to('/editcompanion/'.$id)->with('Errmassage','Error while Edit companion!');          
            }        
        }
        else{
        
            if ($validator->passes()) { 
                
                
                
                $companionId = \DB::table('tb_companion')->insertGetId($companion_data);             
                if($companionId > 0){

                    if (!is_null(Input::file('profile_avatar'))) {

                        $file = $request->file('profile_avatar');
                        $destinationPath = public_path('uploads\users');
                        $filename = $file->getClientOriginalName();
                        $extension = $file->getClientOriginalExtension(); //if you need extension of the file
                        // $newfilename = \Session::get('uid') . '.' . $extension;
                        $newfilename = $companionId . '.' . $extension;
                        $uploadSuccess = $file->move($destinationPath,$newfilename);
                        if ($uploadSuccess) {
                            $data['avatar'] = $newfilename;
                            \DB::table('tb_companion')->where('id', $companionId)->update(['avatar' => $newfilename]);   
                        }
                    }  
                    
                    $edata = array();
                    $emlData['frmemail'] = 'marketing@emporium-voyage.com';
                    $edata['first_name'] = $request->input('first_name');
                    $edata['last_name'] = $request->input('last_name'); 
                    $edata['email'] = trim($request->input('email'));
                    
                    $emlData['email'] = trim($request->input('email'));
                    $emlData['subject'] = 'Companion Add';                
                    $etemp = 'companion';
                    // echo view('user.emails.' . $etemp, $edata); die;


                    \Mail::send('user.emails.' . $etemp, $edata, function($message) use ($emlData) {
                        $message->from($emlData['frmemail'], CNF_APPNAME);
            
                        $message->to($emlData['email']);
            
                        $message->subject($emlData['subject']);
                    });
                                
                           
                return redirect::to('users/companion')->with('massage','You have successfully added a travel companion!');           
                
                } else {
                     return redirect::to('users/companion')->with('Errmassage','Error while adding companion!');            
                }
            }        
            else {
                return redirect::to('users/companion')->with('Errmassage','Error while adding companion!');            
            }
        }
    }
    public function editCompanion($id){
        $user = User::find(\Session::get('uid'));
        $return_array = array();
        if (!\Auth::check())
            return Redirect::to('user/login');
        $is_demo6 = trim(\CommonHelper::isHotelDashBoard($user->group_id));

        $data = \DB::table('tb_companion')->where('id',$id)->first();

        $file_name = 'users_admin.traveller.users.companion';      
        return view('users_admin.traveller.users.companion',compact('data'));
    }
    
    public function deleteCompanion($id){
        $user = User::find(\Session::get('uid'));
        $return_array = array();
        if (!\Auth::check())
            return Redirect::to('user/login');
        $deleted = \DB::table('tb_companion')->where('id','=',$id)->delete();
        $return_array['status'] = 'success';
        $return_array['message'] = 'Deleted successfully';      
        echo json_encode($return_array);
         return redirect::to('user/companion')->with('massage', 'data deleted Succesfully');
    }
}
