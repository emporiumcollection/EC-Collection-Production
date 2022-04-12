<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Validator, Input, Redirect ; 
use App\User;
use Auth;
use DB, Response;

class OneLoginController extends Controller
{
    public function getloggedIn(Request $request){
        $reff = $request->input('referer');
        $page = $request->input('page');
        if($page){            
            \Session::put('page', $page);
            \Session::save();
        }
        if($reff){            
            \Session::put('referer', $reff);
            \Session::save();
        }
        // echo \Session::get('referer');die();

        if(\Auth::check())
        {
            // echo \Session::get('referer');die();
            $userId = Auth::id();
            $fname = Auth::user()->first_name;
            $lname = Auth::user()->last_name;
            $email = Auth::user()->email;
            $pass = Auth::user()->password;
            $g_id = Auth::user()->group_id;
            $last_login = Auth::user()->last_login;
            $usernm = Auth::user()->username;
            
            return Redirect::to(\Session::get('referer').'/onelogin?authdata='.base64_encode($email."|".$fname."|".$lname."|".$userId."|".$g_id."|".$last_login."|".$pass."|".$usernm).'&page='.\Session::get('page'));
            
        }else{
            return Redirect::to('user/login');
        }
    }
}