<?php


namespace App\Http\Controllers\PhaseOne;
use Illuminate\Http\Request;
use App\Http\Controllers\ContainerController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Http\Controllers\Controller;
use App\User;
use DB, Validator, Input, Redirect, CommonHelper, Mail;

class ReservationController extends Controller {

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index(HotelController $hcontroller, Request $request) {
        $prop_id = $request->query('id');
        if (empty($prop_id)) {
          return abort(404);
        }
        $suit_id = $request->query('suite');
        if (empty($suit_id)) {
            $is_suit = true;
        }
        else {
            $is_suit = false;
        }

        $suites_and_prop_info = $hcontroller->suites_by_prop_id($prop_id);
        if (empty($suites_and_prop_info['propertyDetail'])) {
            return abort(404);
        }

        if (count($suites_and_prop_info) > 0 && count($suites_and_prop_info['propertyDetail']['typedata']) > 0) {
          foreach ($suites_and_prop_info['propertyDetail']['typedata'] as $key => $value) {
            $suites[$value->id] = [
                'title' => $value->category_name,
                'price' => $value->price,
                'room_desc' => $value->room_desc,
                'suites_media' => $suites_and_prop_info['propertyDetail']['roomimgs'][$value->id]
            ];
          }
        }

        $boards = \DB::table('tb_boards')->where('property_id', $prop_id)->get();

        $data = [
            'hotels' => $suites_and_prop_info['propertyDetail']['data'],
            'suits' => $suites,
            'is_suit' => $is_suit,
            'boards' => $boards,
        ];

        // dump($boards); exit;
        return view('frontend.themes.EC.phaseone.reservation', $data);
    }

}
