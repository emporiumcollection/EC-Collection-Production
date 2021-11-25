<?php
namespace App\Http\Controllers\FrontEnd;

use App\Companion;
use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Traits\Property;
use App\Models\Addresses;
use App\Models\CardDetail;
use App\Models\PropertyCategoryTypes;
use App\Models\ReservationCompanion;
use App\Models\Reservations;
use App\Models\ReservedSuite;
use App\Models\properties;
use App\User;
use Auth;
use Config;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Illuminate\Support\Facades\Session;
use Response;
use Validator;

class ReservationController extends Controller {

    use Property;

    public function when(Request $request, $id = NULL)
    {
        $this->data['property_id'] = $id;
        $url = $this->_checkWhenWhere();

        if (!\Auth::check()){
            Session::put('reservation', [
                'redirect_url' => $url != '' ? $url : $request->fullUrl()
            ]);
            Session::save();
            return redirect('user/login');
        }

        $property = properties::find($id);
        $request->session()->put('hotel_name', $property->property_name);

        $this->_checkBoards($id);

        $arr = $this->reserveSuite();
        $this->data['suites'] = $arr;

        $this->data['selected_suite'] = Session::get('suite_array');

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';       

        $file_name = 'frontend.themes.EC.reservation.when';
        return view($file_name, $this->data);   
    }

    public function where(Request $request, $id = NULL)
    {
        $this->data['property_id'] = $id;
        $url = $this->_checkWhenWhere();

        if (!\Auth::check()){
            Session::put('reservation', [
                'redirect_url' => $url != '' ? $url : $request->fullUrl()
            ]);
            Session::save();
            return redirect('user/login');
        }

        if(Session::get('property_id') != ''){
            $property_id = Session::get('property_id');
        }else{
            $property_id = $id;
            Session::put('property_id', $id);
            Session::save();
        }

        $this->_checkBoards($property_id);

        $arr = $this->reserveSuite();
        $this->data['suites'] = $arr;
        $this->data['selected_suite'] = Session::get('suite_array');

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        
            
        $file_name = 'frontend.themes.EC.reservation.where';
        return view($file_name, $this->data);   
    }

    public function storewhere(Request $request){
        if(isset($request->property_id)){
            Session::put('property_id', $request->property_id);
        }
        Session::put('arrival', date('Y-m-d', strtotime($request->arrival_date)));
        Session::put('departure', date('Y-m-d', strtotime($request->departure_date)));
    }

    public function suite(Request $request, $id = NULL)
    {
        $this->data['property_id'] = $id;
        $url = $this->_checkWhenWhere();

        if (!\Auth::check()){
            Session::put('reservation', [
                'redirect_url' => $url != '' ? $url : $request->fullUrl()
            ]);
            Session::save();
            return redirect('user/login');
        }

        if(Session::get('property_id') != ''){
            $property_id = Session::get('property_id');
        }else{
            $property_id = $id;
            Session::put('property_id', $id);
        }

        $this->data['property'] = properties::with(['suites', 'container'])->where('id', $property_id)->get();
        $this->setSuitePrice($this->data['property']);

        Session::put('hotel_name', $this->data['property'][0]->property_name);
        
        $selected_suite = Session::get('suite_array');

        $this->_checkBoards($property_id);

        $arr = $this->reserveSuite();
        $this->data['suites'] = $arr;      
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
        $selected_suites = Session::get('suite_array');
        $suites = [];
        if(!empty($selected_suites)){
            foreach($selected_suites as $selected_suite_id => $selected_suite){
                $suites[] = PropertyCategoryTypes::where('id', $selected_suite_id)->get();
            }
        }
        return $suites; 
    }

    public function suiteBoard()
    {
        if (!\Auth::check())
            return redirect('user/login');

        $arr = $this->reserveSuite();

        $this->_checkBoards(Session::get('board'));
        
        if(!empty($arr)){            

            $selected_suite = Session::get('suite_array');
            
            $this->data['selected_suite'] = $selected_suite;
            $this->data['suites'] = $arr;


            /*foreach($selected_suite as $suit_id)
            {
                $this->data['suites_board'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',$suit_id)->first();
            } */
            
            $this->data['suitesboards'] = properties::with('boards')->where('id',Session::get('property_id'))->first();

            
            $this->data['layout_type'] = 'old';
            $this->data['keyword'] = '';
            $this->data['arrive'] = '';
            $this->data['departure'] = '';
            $this->data['total_guests'] = '';        
            $this->data['location'] = '';        
            $this->data['board'] = Session::get('board');

            $file_name = 'frontend.themes.EC.reservation.suiteboard';
            return view($file_name, $this->data);
        }else{
            return redirect::to('/reservation/suite')->with('massage', 'Please select Guest!');
        }               
    }

    public function storeSuiteBoard(Request $request)
    {
        if(isset($request->board)){
            Session::put('board', $request->board);
        }
        return redirect()->to('/reservation/policies');
    }

    public function Policies()
    {
        if (!\Auth::check())
            return redirect('user/login');

        $arr = $this->reserveSuite();

        $this->_checkBoards(Session::get('board'));

        $selected_suite = Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        
        $this->data['policies'] = PropertyCategoryTypes::select('id','property_id','category_name','booking_policy')->where('id',Session::get('suit_id'))->get();

        $this->data['termDetail'] = \DB::table('tb_properties_custom_plan')->where('property_id',Session::get('property_id'))->get();

        $this->data['global_terms'] = \DB::table('tb_policies')->get();

        $file_name = 'frontend.themes.EC.reservation.suitepolicies';
        return view($file_name, $this->data);   
    }

    public function selected_suite(Request $request)
    {           
        $suites_id = $request->suit_id;
        $guests = $request->guests;
        $adult = (int) $request->adult;
        $junior = (int) $request->junior;
        $infant = (int) $request->infant;
        $sum = 0;
        $number_of_suites = 0;
        $suite_array = $suitIds = [];
        if(Session::has('suite_array')){
            $suite_array = Session::get('suite_array');
        }

        if(Session::has('suit_id')){
            $suitIds = Session::get('suit_id');
        }

        $suitIds[] = $suites_id[0];

        foreach($suites_id as $key => $suite){
            $suite_array[$suite] = [
                'price' => $this->getSuitePrice($suite),
                'adult' => $adult,
                'junior' => $junior,
                'infant' => $infant,
                'total_guests' => ($adult + $junior + $infant)
            ];
        }

        foreach($suite_array as $suite){
            $sum += $suite['total_guests'];
            $number_of_suites++;
        }

        Session::put('suite_array', $suite_array);
        $this->_reCalculateGuestTotal();
        $selected_suite = Session::get('suite_array');

        Session::put('suit_id', array_unique($suitIds));
        // Session::put('selected_suite_guest', $sum);
        // Session::put('selected_suite_number', $number_of_suites);

        $suite = PropertyCategoryTypes::find($suites_id[0]);

        $suites = $this->reserveSuite();
        
        $suite_selection_html = view('frontend.themes.EC.reservation.partials.suite.guest-selection', ['suite' => $suite])->render();
        
        $reserve_suite_html = view('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites ,'selected_suite' => $selected_suite])->render();        

        return json_encode([
            'suite_selection_html' => $suite_selection_html,
            'reserve_suite_html' => $reserve_suite_html
        ]);
    }

    public function whoistravelling()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['companion'] = \DB::table('tb_companion')->where('user_id', Auth::user()->id)->get();

        $arr = $this->reserveSuite();

        // Session::forget('companions');

        $this->_checkBoards(Session::get('board'));

        $selected_suite = Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;
        $this->data['address'] = User::find(Session::get('uid'));
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
            'address_first_name' => 'required',
            'address_last_name' => 'required',
            'address_email' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {                 
            $user = User::find(Session::get('uid'));
            $user->first_name = $request->input('address_first_name');
            $user->last_name = $request->input('address_last_name');
            $user->email = $request->input('address_email');
            $user->mobile_number = $request->input('address_phone');
            $user->address = $request->input('address_address1');
            $user->city = $request->input('address_city');
            // $user->email = $request->input('state');
            $user->country = $request->input('address_country');
            $user->title = $request->input('address_title');
            $user->zip_code = $request->input('address_zip_code');
            $user->save();
            Session::put('reservation.user_address', [
                'address' => $user->address,
                'city' => $user->city,
                'zip_code' => $user->zip_code,
                'country' => $user->country,
            ]);
            return json_encode(['status' => true]);
        }else{
            return json_encode(['status' => false, 'errors' => $validator->errors()]);
        }
    }

    public function addcompanion(Request $request)
    {
        if (!\Auth::check())
            return Redirect::to('user/login');

        $companion_html = '';
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'gender' => 'required',
            'preferred_language' => 'required',
            'suite' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {                 
            $user = User::find(Session::get('uid'));
            $companion_data = [
                'user_id' => $user->id,
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone')
            ];
            $companion = new Companion();
            $companion->user_id = $user->id;
            $companion->first_name = $request->first_name;
            $companion->last_name = $request->last_name;
            $companion->email = $request->email;
            $companion->phone_number = $request->phone;
            $companion->gender = $request->gender;
            $companion->preferred_language = $request->preferred_language;
            $companion->save();

            $selected_suite = $companions = [];
            if(Session::has('suite_array')){
                $selected_suite = Session::get('suite_array');
            }
            if(Session::has('companions')){
                $companions = Session::get('companions');
            }
            $selected_suite[$request->suite]['adult']++;
            $companions[$companion->id] = [
                'suite_id' => $request->suite
            ];
            Session::put('companions', $companions);
            Session::put('suite_array', $selected_suite);
            $this->_reCalculateGuestTotal();

            $suites = $this->reserveSuite();

            $companion_html = view('frontend.themes.EC.reservation.partials.whotravelling.companion-detail', [
                'companion' => $companion,
                'suites' => $suites
            ])->render();
            return json_encode([
                'status' => $companion->id,
                'companion_html' => $companion_html
            ]);
        }else{
            return json_encode(['status' => false, 'errors' => $validator->errors()]);
        }
    }

    public function paymentmethod()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $id = Session::get('uid');
        $arr = $this->reserveSuite();

        $this->_checkBoards(Session::get('board'));
        
        
        $selected_suite = Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        
        $this->data['cards'] = CardDetail::where('user_id', '=', $id)->orderBy('id','desc')->get();
        
        $file_name = 'frontend.themes.EC.reservation.payment_method';
        return view($file_name, $this->data);   
    }
    public function savepaymentmethod(Request $request)
    {
        
        if (!\Auth::check())
            return redirect('user/login');
            
            if(isset($request->card_id)){
                Session::put('payment_card_id',$request->card_id);
                return response()->json(['status' => true, 'card_id' => $request->card_id]);
            }else{
                $rules = array(
                    'card_type' => 'required',
                    'card_number' => 'required|min:16',
                    'exp_month' => 'required',
                    'exp_year' => 'required',
                    'card_name' => 'required',
                    'srequirements' => 'required'
                );
        
                $validator = Validator::make($request->all(), $rules);
                if ($validator->passes()) {
                    $id = Session::get('uid');
                    $full_name = $request->card_name;
                    $name = explode(" ", $full_name); 
                    
                    $payment_data = array(
                        'user_id' => $id, 
                        'card_type' => $request->card_type, 
                        'card_number' => $request->card_number, 
                        'exp_month' => $request->exp_month, 
                        'exp_year' => $request->exp_year,
                        'first_name' => $name[0],
                        'last_name' => $name[1],
                        'created_at' => date("Y-m-d"),
                        'srequirements' => $request->srequirements
                        );
                    $payment_id = \DB::table('tb_cards')->insertGetId($payment_data);
                    Session::put('payment_card_id', $payment_id);
                    return response()->json(['status' => true, 'card_id' => $payment_id]);
                }
                else {
                    return json_encode(['ststus' => false, 'errors' => $validator->errors()]);
                } 
            }
            
            
    }

    public function hotelpolicies()
    {
        if (!\Auth::check())
            return redirect('user/login');

        $this->_checkBoards(Session::get('board'));

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

        $this->_checkBoards(Session::get('board'));
  
        $this->data['properties'] = properties::where('id',Session::get('property_id'))->get();
        $hotel_name = $this->data['properties'][0]->property_short_name;

        $words = explode(' ', $hotel_name);
        $this->data['hotel_name'] = $words[0][0].$words[1][0];

        $this->data['db'] = $this->databaseName();
        
        $this->data['randomnum'] = mt_rand(0370,9999);

        $booking_number = 'EC'.'-'.$this->data['db'].'-'.$this->data['hotel_name'].'-'.$this->data['randomnum'] ;

        Session::put('booking_number', $booking_number);

        $trip_dates = CommonHelper::getDateRange(Session::get('arrival'), Session::get('departure'));
        $this->data['trip_dates'] = $trip_dates;
        
        $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',Session::get('suit_id'))->first();

        $selected_suite = Session::get('suit_id');
        $arr = [];
        foreach($selected_suite as $suite_id)
        {
            $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',$suite_id)->get();

            $this->data['policies'] = PropertyCategoryTypes::where('id',$suite_id)->first();

            $this->data['suites_name'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',$suite_id)->first();        

            $arr[] = $this->data['suites'];
        }

        $selected_suite = Session::get('suite_array');
        
        $this->data['selected_suite'] = $selected_suite;
        $this->data['suites'] = $arr;
                    
        $file_name = 'frontend.themes.EC.reservation.booking_summary';
        return view($file_name, $this->data);   
    }


    public function storecompanionTosession(Request $request)
    {
        $companions = [];
        $companion_id = $request->companion_id;
        $suite_id = $request->suite_id;
        $operation = $request->operation;
        $selected_suite = Session::get('suite_array');
        if(Session::has('companions')){
            $companions = Session::get('companions');
        }
        if($operation == 'save'){
            $selected_suite[$suite_id]['adult']++;
            $companions[$companion_id] = [
                'suite_id' => $suite_id
            ];
        }else{
            if($suite_id){
                $selected_suite[$suite_id]['adult']--;
                unset($companions[$companion_id]);
            }
        }
        Session::put('companions', $companions);
        Session::put('suite_array', $selected_suite);
        Session::save();
        $this->_reCalculateGuestTotal();
    }

    public function addReservationData()
    {
        $data['price'] = $data['adult'] = $data['junior'] = $data['baby'] = 0;
        $data['user_id'] = Auth::user()->id;
        $data['property_id'] = Session::get('property_id');
        $data['checkin_date'] = Session::get('arrival') ? date('Y-m-d', strtotime(Session::get('arrival'))) : '';
        
        $data['checkout_date'] = Session::get('departure') ? date('Y-m-d', strtotime(Session::get('departure'))) : '';        
        $data['board'] = Session::get('board') ? Session::get('board') : 0;
        $data['card_id'] = Session::get('payment_card_id');
        $data['booking_number'] = Session::get('booking_number');
        $reserved_suites = Session::get('suite_array');
        foreach($reserved_suites as $reserved_suite){
            $data['price'] += $reserved_suite['price'];
            $data['adult'] += $reserved_suite['adult'];
            $data['junior'] += $reserved_suite['junior'];
            $data['baby'] += $reserved_suite['infant'];
        }
        $companions = Session::get('companions');

        $reservation_id = \DB::table('tb_reservations')->insertGetId($data);
        foreach($reserved_suites as $suite_id => $suite){
            $reserveSuite = new ReservedSuite();
            $reserveSuite->reservation_id = $reservation_id;
            $reserveSuite->suite_id = $suite_id;
            $reserveSuite->adult = $suite['adult'];
            $reserveSuite->junior = $suite['junior'];
            $reserveSuite->infant = $suite['infant'];
            $reserveSuite->guest = $suite['total_guests'];
            $reserveSuite->price = $suite['price'];
            $reserveSuite->save();
        }
        foreach($companions as $companion_id => $companion){
            $reserveComapanion = new ReservationCompanion();
            $reserveComapanion->reservation_id = $reservation_id;
            $reserveComapanion->companion_id = $companion_id;
            $reserveComapanion->suite_id = $companion['suite_id'];
            $reserveComapanion->save();
        }

        Session::forget('arrival');
        Session::forget('departure');
        Session::forget('adult');
        Session::forget('children');
        Session::forget('board');
        Session::forget('suite_array');
        Session::forget('companions');
        Session::forget('reservation');
        Session::forget('suite_id');
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

    public function removeSuiteSelection($id)
    {
        $suites_count = $total_guests = 0;
        $suite_ids = [];
        Session::forget("suite_array.$id");
        $this->_reCalculateGuestTotal();
        /*$selected_suites = Session::get("suite_array");
        foreach($selected_suites as $suite_id => $suite){
            $suite_ids[] = $suite_id;
            $suites_count++; 
            $total_guests = ($suite['adult'] + $suite['junior'] + $suite['infant']);
        }
        Session::put('suit_id', $suite_ids);
        Session::put('selected_suite_number', $suites_count);
        Session::put('selected_suite_guest', $total_guests);*/

        $suite = PropertyCategoryTypes::find($id);

        $suites = $this->reserveSuite();
        $selected_suite = Session::get('suite_array');
        
        $suite_selection_html = view('frontend.themes.EC.reservation.partials.suite.guest-selection', ['suite' => $suite])->render();

        $reserve_suite_html = view('frontend.themes.EC.reservation.reservation-summary', ['suites' => $suites ,'selected_suite' => $selected_suite])->render();        

        return json_encode([
            'suite_selection_html' => $suite_selection_html,
            'reserve_suite_html' => $reserve_suite_html
        ]);
    }

    public function validateSuiteSelection(Request $request)
    {
        $prv_selected_total_guest = 0;
        if(Session::has('suites')){
            $prv_selected_total_guest = Session::get('Guests');
        }
        $totalGuest = $request->totalGuest;
        if($totalGuest == 0 || $totalGuest < $prv_selected_total_guest){
            return json_encode([
                'status' => false,
                'message' => 'Please select suite(s) for remaining '.($prv_selected_total_guest - $totalGuest).' guest(s)',
                'class' => 'danger'
            ]);
        }elseif($totalGuest > $prv_selected_total_guest){
            return json_encode([
                'status' => false,
                'message' => 'You have selected more guests than your previous selection',
                'class' => 'danger'
            ]);
        }
        return json_encode([
            'status' => true
        ]);
        exit;
    }

    public function validateCompanion()
    {
     if(Session::has('companions')){
         return json_encode([
            'status' => true
        ]);
        exit;
    }else{
        return json_encode([
            'status' => false,
            'message' => 'Please Add Companion and Select Your Companion',
            'class' => 'danger'
        ]);
    }   
    }

    private function _checkBoards($id)
    {
        $this->data['boards'] = [];
        $property = properties::with('boards')->where('id', $id)->first();
        if(!empty($property->boards)){
            $this->data['boards'] = $property->boards->toArray();
        }
    }

    private function setSuitePrice(&$properties){
        foreach($properties as $property){
            foreach($property->suites as $sk => $suite){
                $property->suites[$sk]->price = $this->getSuitePrice($suite->id);
            }   
        }
    }

    private function _checkWhenWhere()
    {
        $url = '';
        if(Session::get('arrival') != '' && Session::get('departure') != ''){
            if(!empty(Session::get('suites'))){
                $url = '/reservation/suite/'.$this->data['property_id'];
            }else{
                $url = '/reservation/where/'.$this->data['property_id'];
            }
        }
        return $url;
    }

    private function _reCalculateGuestTotal()
    {
        $suites = [];
        $selected_suite_guest = $selected_suite_number = 0;
        if(Session::has('suite_array')){
            $suites = Session::get('suite_array');
        }
        if(!empty($suites)){
            foreach($suites as $key => $suite){
                $suites[$key]['total_guests'] = ($suite['adult'] + $suite['junior'] + $suite['infant']);
                $selected_suite_guest += $suites[$key]['total_guests'];
                $selected_suite_number++;
            }
        }

        Session::put('suite_array', $suites);
        Session::put('selected_suite_number', $selected_suite_number);
        Session::put('selected_suite_guest', $selected_suite_guest);
    }
}