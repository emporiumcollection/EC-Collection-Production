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
        $file_name = 'users_admin.traveller.users.reservation_list';
        return view($file_name, $this->data);   
    }

    public function summaryData($id)
    {
        $reservations = Reservations::with(['reservedSuites.suite', 'reservedCompanions.companion', 'property',])
            ->where('id', '=', $id)
            ->first();
        $property = $this->getPropertyById($reservations->property_id);
        $this->setGalleryAndFormat($property);
        
        
        $checkin_date = new \DateTime($reservations->checkin_date);
        $current_date = new \DateTime();
        
        $diff = date_diff($current_date, $checkin_date);
        $diffdate = $diff->format("%a");
        $cancelation_status = false;
        foreach($reservations->reservedSuites as $key => $reservedSuite){
            $period = $reservedSuite->suite->cancelation_period;
            if($period && $diffdate >= $period){
                $cancelation_status = true;
            }
        }
        $property_id = $reservations->property_id;
        $hotel_name = $reservations->property->property_name;        
        $booking_number = $reservations->booking_number;

        $trip_dates = CommonHelper::getDateRange($reservations->checkin_date, $reservations->checkout_date);
        $reserve_summary = view('frontend.themes.EC.reservation.partials.summary.reservation_summary',
            [   
                'reservations' => $reservations,
                'property' => $property,
                'hotel_name' => $hotel_name,
                'booking_number' => $booking_number,
                'trip_dates' => $trip_dates,
                'cancelation_status' => $cancelation_status
            ])->render();

        return json_encode([
            'reserve_summary' => $reserve_summary
        ]);
    }
}
?>