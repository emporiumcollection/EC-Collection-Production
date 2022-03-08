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
use Illuminate\Support\Facades\Session;
use ValidateRequests;
use Validator;
use Redirect;


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
        $replace = "+";
        $Countrycode = substr_replace($request->code, $replace, 0, 0);
        $space = ltrim($request->mobile_number," ");
        $mobile_number = ltrim($space,0);
        $request->mobile_number =  $Countrycode.$mobile_number;
        
        $valid = $this->validate($request, [
            'mobile_number' => 'required',
            'email' => 'required|string||unique:tb_users',
            'password' => 'required|string|max:15',
        ]);

        if (empty($valid)) {
        
        $token = Config::get('app.TWILIO_AUTH_TOKEN');
        $twilio_sid = Config::get("app.TWILIO_SID");
        $twilio_verify_sid = Config::get("app.TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $varification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($request->mobile_number, "sms");
        }else{
            return redirect()->to('/register')->with(['message' => 'Please Enter valid detail']);
        }

    }

    protected function verify(Request $request)
    {
        $replace = "+";
        $Countrycode = substr_replace($request->country_code, $replace, 0, 0);
        $space = ltrim($request->txtmobileNumber," ");
        $mobile_number = ltrim($space,0);
        $request->mobile_number =  $Countrycode.$mobile_number;
        $request->verification_code = implode('', $request->code);
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:tb_users'
        );
        $validator = Validator::make($request->all(), $rules);
        /* Get credentials from .env */
        $token = Config::get('app.TWILIO_AUTH_TOKEN');
        $twilio_sid = Config::get("app.TWILIO_SID");
        $twilio_verify_sid = Config::get("app.TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($request->verification_code, array('to' => $request->mobile_number));

        if ($validator->passes()) {

           $user = User::create([
                'group_id' => $request->user_type,
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

                $redirect_to = \CommonHelper::checkReservation();

                return view('users_admin/traveller/users/register_invitation', compact('redirect_to'));
            }else{
                return redirect()->back()->with(['message' => 'Please try again']);
            }
        }
        else {
            return redirect()->back()->withErrors($validator)->withInput();          
        }  
    }

    public function logout(Request $request) {
        $currentdomain = \Config::get('app.currentdomain');
        $onelogindomain = \Config::get('app.onelogindomain');

        Session::forget('arrival');
        Session::forget('departure');
        Session::forget('adult');
        Session::forget('children');
        Session::forget('board');
        Session::forget('suite_array');
        Session::forget('companions');
        Session::forget('reservation');
        Session::forget('suite_id');
        Session::forget('suit_id');
        Session::forget('board_id');
        Session::forget('board_price');
        Session::forget('selected_suite_number');
        Session::forget('selected_suite_guest');
        Session::forget('booking_number');
        Session::forget('Guests');
        Session::forget('page');
        
        Auth::logout();

        if($currentdomain != 'emporiumcollection'){
            return Redirect::to($onelogindomain.'/logout?referer='.request()->getSchemeAndHttpHost());
        }else{
            return Redirect::to($request->get('referer'));
        }        
        return redirect('/');
    }
}
