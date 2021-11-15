<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Config;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;
use ValidateRequests;
use Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
        // echo "<pre>";print_r($request->all());exit();
        $replace = "+";
        $Countrycode = substr_replace($request->code, $replace, 0, 0);
        $space = ltrim($request->mobile_number," ");
        $mobile_number = ltrim($space,0);
        $request->mobile_number =  $Countrycode.$mobile_number;
        // echo "<pre>";print_r( $request->mobile_number);exit;
        // $valid = $this->validate($request, [
        //     'mobile_number' => 'required|unique:tb_users',
        //     'email' => 'required|string||unique:tb_users',
        //     'password' => 'required|string|max:15',
        // ]);
        // if (empty($valid)) {
        // $token = Config::get('app.TWILIO_AUTH_TOKEN');
        // $twilio_sid = Config::get("app.TWILIO_SID");
        // $twilio_verify_sid = Config::get("app.TWILIO_VERIFY_SID");
        // $twilio = new Client($twilio_sid, $token);
        // $varification = $twilio->verify->v2->services($twilio_verify_sid)
        //     ->verifications
        //     ->create($request->mobile_number, "sms");
        // }else{
        //     return redirect()->to('/dashboard')->with(['message' => 'Please Enter valis detail']);
        // }

    }

    protected function verify(Request $request)
    {
        $replace = "+";
        $Countrycode = substr_replace($request->country_code, $replace, 0, 0);
        $space = ltrim($request->txtmobileNumber," ");
        $mobile_number = ltrim($space,0);
        $request->mobile_number =  $Countrycode.$mobile_number;
        $request->verification_code = implode('', $request->code);
        // $data = $this->validate($request, [
        //     'mobile_number' => 'required',
        //     'verification_code' => 'required',
        // ]);
        /* Get credentials from .env */
        // $token = Config::get('app.TWILIO_AUTH_TOKEN');
        // $twilio_sid = Config::get("app.TWILIO_SID");
        // $twilio_verify_sid = Config::get("app.TWILIO_VERIFY_SID");
        // $twilio = new Client($twilio_sid, $token);
        // $verification = $twilio->verify->v2->services($twilio_verify_sid)
        //     ->verificationChecks
        //     ->create($request->verification_code, array('to' => $request->mobile_number));

        // if ($verification->valid) {

           $user = User::create([
                'group_id' => 3,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'mobile_code' => $request->country_code,
                'questions_id' => $request->question,
                'answer' => $request->answer,
                'country' => $request->nationality,
                'prefer_communication_with' => $request->language,
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $lastId = DB::getPdo()->lastInsertId();

            DB::table('tb_users_membership')
                ->insert([
                    'user_id' => $lastId,
                    'membership_id' => $request->membership_id,
                    'created' =>date('Y-m-d H:i:s') ,
                    'updated' =>date('Y-m-d H:i:s'),
                ]);
            if($user){                
                /* Authenticate user */
                Auth::login($user);
                return view('users_admin/traveller/users/register_invitation');
            }else{
                return redirect()->back()->with(['message' => 'Please try again']);
            }
        }
        // return back()->route('register')->with(['phone_number' => $request->mobile_number, 'error' => 'Invalid verification code entered!']);
    // }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/');
    }
}
