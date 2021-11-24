<?php
namespace App\Http\Controllers\Traveller;

use App\Companion;
use App\Http\Controllers\Controller;
use App\Http\Traits\Property;
use App\Models\Addresses;
use App\Models\PropertyCategoryTypes;
use App\Models\ReservationCompanion;
use App\Models\Reservations;
use App\Models\ReservedSuite;
use App\Models\properties;
use App\Models\CardDetail;
use Illuminate\Support\Facades\Session;
use App\User;
use Config;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Response;
use Validator,
    Input,
    Redirect;
use Auth;

class ReservationController extends Controller {

    use Property;

    public function reservationList()
    {
        $reserve_data = \DB::table('tb_reservations')->where('user_id',Session::get('uid'))->get();
        $this->data['properties'] = properties::where('id',$reserve_data[0]->property_id)->get();

        $reservations = Reservations::with(['reservedSuites.suite', 'reservedCompanions.companion'])
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        $this->data['reservations'] = $reservations;
        
        // echo "<pre>";  print_r($reservations[0]->reservedCompanions);exit;
        // foreach($reservations[0]->reservedCompanions as $data){
        //     print_r($data->companion->first_name);exit;
        // }

        $property_id =$this->data['properties'][0]->id;
        $hotel_name = $this->data['properties'][0]->property_short_name;        

        $suite_id = ReservedSuite::where('reservation_id',$reserve_data[0]->id)->get();

        $suites = [];    
        foreach($suite_id as $suite){
            $suites[] = PropertyCategoryTypes::where('id', $suite->suite_id)->get()->toArray()[0];
        }

        $this->data['suites'] = $suites;
        $words = explode(' ', $hotel_name);
        $this->data['hotel_name'] = $words[0][0].$words[1][0];

        $this->data['randomnum'] = mt_rand(0370,9999);        
        $arrival_date = explode("-",$reserve_data[0]->checkin_date);
        
        $departure_date = explode("-",$reserve_data[0]->checkout_date);
        
        $this->data['arrive'] = $arrival_date[2];
        $this->data['departure'] = $departure_date[2];
        $this->data['year'] = $departure_date[0];
        $this->data['month'] = date('M', $departure_date[1]);
        $this->data['month_int'] = $departure_date[1];
        
        $suite_id = Session::get('suit_id');

        $this->data['db'] = $this->databaseName();

        // $this->data['policies'] = PropertyCategoryTypes::where('id',$suite_id)->first();        
        $file_name = 'frontend.themes.EC.reservation.receipt';
        return view($file_name, $this->data);   
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
?>