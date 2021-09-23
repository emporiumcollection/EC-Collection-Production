<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showForgetPasswordForm()
    {
         return view('forgotpassword.forgetPassword');
    }

     public function submitForgetPasswordForm(Request $request)
    {           
        $rules = array(
                'email' => 'required|email|exists:tb_users',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {            
            $token = Str::random(64);
  
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);
        $fetchData = DB::table('password_resets')->get();

        \Mail::send('emails.auth.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
  
        return back()->with('/user/login', 'We have e-mailed your password reset link!');
        }        
    }

    public function showResetPasswordForm($token) { 
        // echo "<pre>";print_r($token);exit;
         return view('forgotpassword.forgetPasswordLink', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $rules = array(
            'email' => 'required|email|exists:tb_users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {   
            
            $updatePassword = DB::table('password_resets')
                            ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                            ])
                            ->first();
  
            if(!$updatePassword){
                return back()->withInput()->with('error', 'Invalid token!');
            }

            $user = User::where('email', $request->email)
                    ->update(['password' => \Hash::make($request->password)]);
 
            DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
            return redirect('/user/login')->with('message', 'Your password has been changed!');
        }
    }

}
