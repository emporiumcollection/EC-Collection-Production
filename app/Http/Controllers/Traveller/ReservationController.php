<?php
namespace App\Http\Controllers\Traveller;

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

class ReservationController extends Controller {

    use Property;

    public function reservationList()
    {    
        $reservations = Reservations::with(['reservedSuites.suite', 'reservedCompanions.companion'])
            ->where('user_id', '=', Session::get('uid'))
            ->get();
        
        $reserve_data = \DB::table('tb_reservations')->where('user_id',Session::get('uid'))->get();
        $this->data['properties'] = properties::where('id',$reserve_data[0]->property_id)->get();
        $this->data['reservations'] = $reservations;

        $property_id =$this->data['properties'][0]->id;
        $hotel_name = $this->data['properties'][0]->property_short_name;        
        $this->data['booking_number'] = $reservations[0]->booking_number;
        
        $arrival_date = explode("-",$reserve_data[0]->checkin_date);
        
        $departure_date = explode("-",$reserve_data[0]->checkout_date);
        
        $this->data['arrive'] = $arrival_date[2];
        $this->data['departure'] = $departure_date[2];
        $this->data['year'] = $departure_date[0];
        $this->data['month'] = date('M', $departure_date[1]);
        $this->data['month_int'] = $departure_date[1];
        

        // $this->data['db'] = $this->databaseName();

        // $this->data['policies'] = PropertyCategoryTypes::where('id',$suite_id)->first();        
        $file_name = 'frontend.themes.EC.reservation.receipt';
        return view($file_name, $this->data);   
    }

    public function summaryData($id)
    {
        $reservations = Reservations::with(['reservedSuites.suite', 'reservedCompanions.companion', 'property'])
            ->where('id', '=', $id)
            ->get();

        $property_id = $reservations[0]->property_id;
        $hotel_name = $reservations[0]->property->property_name;        
        $booking_number = $reservations[0]->booking_number;

        // $randomnum = mt_rand(0370,9999);        
        $arrival_date = explode("-", $reservations[0]->checkin_date);        
        $departure_date = explode("-", $reservations[0]->checkout_date);
        
        $arrive = $arrival_date[2];
        $departure = $departure_date[2];
        $year = $departure_date[0];
        $month = date('M', $departure_date[1]);
        $month_int = $departure_date[1];
        $trip_dates = CommonHelper::getDateRange($reservations[0]->checkin_date, $reservations[0]->checkout_date);
        $db = $this->databaseName();
        $reserve_summary = view('frontend.themes.EC.reservation.partials.summary.reservation_summary',
            [   
                'reservations' => $reservations,
                'hotel_name' => $hotel_name,
                'arrive' => $arrive,
                'departure' => $departure,
                'year' => $year,
                'month' => $month,
                'month_int' => $month_int,
                'booking_number' => $booking_number,
                'trip_dates' => $trip_dates
            ])->render();

        return json_encode([
            'reserve_summary' => $reserve_summary
        ]);
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