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
    public function index() {
        $data = [
            'hotels' => [],
            'anchors' => [],
        ];
        return view('frontend.themes.EC.phaseone.reservation', $data);
    }

}
