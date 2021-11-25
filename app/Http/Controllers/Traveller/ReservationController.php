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

        $trip_dates = CommonHelper::getDateRange($reservations[0]->checkin_date, $reservations[0]->checkout_date);
        $reserve_summary = view('frontend.themes.EC.reservation.partials.summary.reservation_summary',
            [   
                'reservations' => $reservations,
                'hotel_name' => $hotel_name,
                'booking_number' => $booking_number,
                'trip_dates' => $trip_dates
            ])->render();

        return json_encode([
            'reserve_summary' => $reserve_summary
        ]);
    }
}
?>