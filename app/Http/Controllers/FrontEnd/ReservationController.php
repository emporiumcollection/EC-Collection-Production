<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Reservations;
use Illuminate\Http\Request;
use App\Models\PropertyCategoryTypes;
use App\Models\Addresses;
use App\Models\properties;
use App\Http\Traits\Property;
use App\User;
use Config;
use Response;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator,
    Input,
    Redirect;

class ReservationController extends Controller {

    use Property;

    public function when(Request $request, $id)
    {  
        if (!\Auth::check()){
            return redirect('user/login');
        }
        // \Session::put('property_id', $id);
        $properties = PropertyCategoryTypes::first();
        $request->session()
                ->put('property_id',$id); 
        $request->session()
                ->put('suite_name',$properties->category_name); 

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.when';
        return view($file_name, $this->data);   
    }

    public function where(Request $request)
    {
        if (!\Auth::check()){
            return redirect('user/login');
        }

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        
            
        $file_name = 'frontend.themes.EC.reservation.where';
        return view($file_name, $this->data);   
    }

    public function suite(Request $request)
    {
        if (!\Auth::check())
            return redirect('user/login');

        $this->data['property'] = properties::with(['suites', 'container'])->where('id', \Session::get('property_id'))->get();
        
        $selected_suite = \Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->formatPropertyRecords($this->data['property']);
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.suite';
        return view($file_name, $this->data);   
    }

    public function guest(Request $request)
    {
        $data = $this->storeSession($request);
    }

    public function reserveSuite()
    {
            $suite_id = \Session::get('suit_id');
            $arr = [];
            $count = 0;
            foreach($suite_id as $suite_id)
            {
                $count = $count + 1;
                $this->data['suites'] = PropertyCategoryTypes::where('id',$suite_id)->get();
                
                $arr[] = $this->data['suites'];
            }
            
            return $arr;           
    }

    public function suiteBoard()
    {
        if (!\Auth::check())
            return redirect('user/login');

        $arr = $this->reserveSuite();
        
        if(!empty($arr)){            

            $selected_suite = \Session::get('suite_array');
            
            $this->data['selected_suite'] = $selected_suite;
            $this->data['suites'] = $arr;


            /*foreach($selected_suite as $suit_id)
            {
                $this->data['suites_board'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',$suit_id)->first();
            } */
            
            $this->data['suitesboards'] = properties::with('boards')->where('id',\Session::get('property_id'))->get();

            
            $this->data['layout_type'] = 'old';
            $this->data['keyword'] = '';
            $this->data['arrive'] = '';
            $this->data['departure'] = '';
            $this->data['total_guests'] = '';        
            $this->data['location'] = '';        

            $file_name = 'frontend.themes.EC.reservation.suiteboard';
            return view($file_name, $this->data);
        }else{
            return redirect::to('/reservation/suite')->with('massage', 'Please select Guest!');
        }               
    }

    public function Policies()
    {
        if (!\Auth::check())
            return redirect('user/login');

        $arr = $this->reserveSuite();

        $selected_suite = \Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        
        $this->data['policies'] = PropertyCategoryTypes::select('id','property_id','category_name','booking_policy')->where('id',\Session::get('suit_id'))->get();

        $this->data['termDetail'] = \DB::table('tb_properties_custom_plan')->where('property_id',\Session::get('property_id'))->get();

        $this->data['global_terms'] = \DB::table('tb_policies')->get();

        $file_name = 'frontend.themes.EC.reservation.suitepolicies';
        return view($file_name, $this->data);   
    }

    public function selected_suite(Request $request)
    {           
        $suites = $request->suit_id;
        $guest = $request->guest;
        $sum = 0;
        foreach($guest as $value) {
            $sum+= $value;
        }
        $count = 0;
        foreach($suites as $key => $suite)
        {    
            $count = $count+1;
            $suite_array[$suite] = $guest[$key];
        }
        \Session::put('suite_array',$suite_array);
        \Session::put('suit_id',$suites);
        \Session::put('selected_suite_guest',$sum);
        \Session::put('selected_suite_number',$count);
        
    }

    public function whoistravelling()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['companion'] = \DB::table('tb_companion')->where('user_id', \Session::get('uid'))->get();

        $arr = $this->reserveSuite();

        $selected_suite = \Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;
        $this->data['address'] = User::find(\Session::get('uid'));
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';

        $file_name = 'frontend.themes.EC.reservation.whotravelling';
        return view($file_name, $this->data);   
    }

    public function addresses(Request $request){
        
         if (!\Auth::check())
            return Redirect::to('user/login');
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {                 
            $user = User::find(\Session::get('uid'));
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->mobile_number = $request->input('phone');
            $user->address = $request->input('address1');
            $user->city = $request->input('city');
            // $user->email = $request->input('state');
            $user->country = $request->input('country');
            $user->title = $request->input('title');
            $user->zip_code = $request->input('zip_code');
            $user->save();  
        }
    }

    public function addcompanion(Request $request)
    {
        if (!\Auth::check())
            return Redirect::to('user/login');
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
            if ($validator->passes()) {                 
                $user = User::find(\Session::get('uid'));
                $id = $user->id;            
                $companion_data['user_id'] = $user->id;
                $companion_data['first_name'] = $request->input('first_name');
                $companion_data['last_name'] = $request->input('last_name');           
                $companion_data['email'] = $request->input('email');
                $companion_data['phone_number'] = $request->input('phone');
                $companionId = \DB::table('tb_companion')->insert($companion_data);
            }
    }

    public function paymentmethod()
    {
        if (!\Auth::check())
            return redirect('user/login');

        $arr = $this->reserveSuite();
        
        $selected_suite = \Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.payment_method';
        return view($file_name, $this->data);   
    }

    public function hotelpolicies()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.hotel_policies';
        return view($file_name, $this->data);   
    }

    public function bookingsummary(Request $request)
    {
        if (!\Auth::check())
            return redirect('user/login');

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
  
        $this->data['properties'] = properties::where('id',\Session::get('property_id'))->get();
        $hotel_name = $this->data['properties'][0]->property_short_name;

        $words = explode(' ', $hotel_name);
        $this->data['hotel_name'] = $words[0][0].$words[1][0];

        $this->data['db'] = $this->databaseName();
        
        $this->data['randomnum'] = mt_rand(0370,9999);        
        $arrival_date = explode("-",\Session::get('arrival'));
        $departure_date = explode("-",\Session::get('departure'));
        // echo "<pre>";print_r($departure_date);exit; 
        $this->data['arrive'] = $arrival_date[2];
        $this->data['departure'] = $departure_date[2];
        $this->data['year'] = $departure_date[0];
        $this->data['month'] = date('M', $departure_date[1]);
        $this->data['month_int'] = $departure_date[1];
        
        $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',\Session::get('suit_id'))->first();

        $selected_suite = \Session::get('suit_id');
        $arr = [];
        foreach($selected_suite as $suite_id)
        {
            $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',$suite_id)->get();

            $this->data['policies'] = PropertyCategoryTypes::where('id',$suite_id)->first();

            $this->data['suites_name'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',$suite_id)->first();        

            $arr[] = $this->data['suites'];
        }

        $selected_suite = \Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;
                    
        $file_name = 'frontend.themes.EC.reservation.booking_summary';
        return view($file_name, $this->data);   
    }


    public function storecompanionTosession(Request $request)
    {   
        $companion_data = $request->companion;

        $companion_array = [];
        foreach($companion_data as $key => $data)
        {    
            $companion_array[] = [ $key => $data ];
        }

        \Session::put('companion_data',$companion_array);
        $request->session()->put('companion_data', $companion_array); 
    }   

    public function reservationList()
    {
        
        if (!\Auth::check())
            return redirect('user/login');

        $this->data['properties'] = properties::where('id',\Session::get('property_id'))->get();
        // echo "<pre>";print_r($this->data['properties']);exit;
        $hotel_name = $this->data['properties'][0]->property_short_name;

        $words = explode(' ', $hotel_name);
        $this->data['hotel_name'] = $words[0][0].$words[1][0];

        $this->data['randomnum'] = mt_rand(0370,9999);        
         $arrival_date = explode("-",\Session::get('arrival'));
        $departure_date = explode("-",\Session::get('departure'));
        
        $this->data['arrive'] = $arrival_date[2];
        $this->data['departure'] = $departure_date[2];
        $this->data['year'] = $departure_date[0];
        $this->data['month'] = date('M', $departure_date[1]);
        $this->data['month_int'] = $departure_date[1];
        
        $suite_id = \Session::get('suit_id');

        $this->data['db'] = $this->databaseName();

        $arr = [];
        foreach($suite_id as $suite_id)
        {
            $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',$suite_id)->get();
            $arr[] = $this->data['suites'];
        }
        $selected_suite = \Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;

        $suite_id = \Session::get('suit_id');
        $companion = \Session::get('companion_data');
        
        $this->data['companion'] = \DB::table('tb_companion')->where('user_id', \Session::get('uid'))->get();
        
        $this->data['count'] = \DB::table('tb_companion')->where('user_id', \Session::get('uid'))->count();

        $this->data['policies'] = PropertyCategoryTypes::where('id',$suite_id)->first();        
        $file_name = 'frontend.themes.EC.reservation.receipt';
        return view($file_name, $this->data);   
    }


    public function addReservationData()
    {
        $data['property_id'] = \Session::get('uid');
        $data['checkin_date'] = \Session::get('arrival_date');
        $data['checkout_date'] = \Session::get('departure_date');
        $data['adult'] = \Session::get('adult');           
        $data['junior'] = \Session::get('children');
        
        \DB::table('tb_reservations')->insert($data);
    }

    public function databaseName(){

        if(request()->getHost() == 'development.emporium-voyage.com'){

        $db = Config::get('app.EmporiumVoyage');   

        }

        if(request()->getHost() == 'emporium-safari.com'){

        $db = Config::get('app.EmporiumSafari');   

        }

        if(request()->getHost() == 'emporium-spa.com'){

        $db = Config::get('app.EmporiumSpa');   

        }

        if(request()->getHost() == 'emporium-islands.com'){

        $db = Config::get('app.EmporiumIslands');   

        }
        return $db; 
    }

}