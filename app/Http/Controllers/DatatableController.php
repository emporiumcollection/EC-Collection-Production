<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Companion;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Collection;
use DB;
use App\User;
use Auth;

class DatatableController extends Controller
{
    public function getDatatable()
    {
    $user = User::find(\Session::get('uid'));

        $field = $_GET['sort']['field'];
        $Order = $_GET['sort']['sort'];
        if (isset($field) && isset($Order)) {
            $companions = DB::table('tb_companion')
                ->select('id','first_name','last_name','email','gender','preferred_language','preferred_currency')
                ->where('user_id',$user->id)
                ->orderBy('id',$Order)        
                ->get();   
        }
        else{
            $companions = Companion::all();    
        }
        return $companions;
    }
    public function getInviteGuest()
    {
        $user = User::find(\Session::get('uid'));
        $field = $_GET['sort']['field'];
        $Order = $_GET['sort']['sort'];
        
        if (isset($field) && isset($Order)) {
            $companions = DB::table('tb_invitee')
                ->select('id','user_id','first_name','last_name','email','message','referral_code')
                ->where('user_id',$user->id)
                ->orderBy('id',$Order)        
                ->get();   
        }
        else{
            $companions = DB::table('tb_invitee')
                ->select('id','user_id','first_name','last_name','email','message','referral_code')
                ->where('user_id',$user->id)
                ->get();    
        }
        return $companions;
    }

    public function getPreferencesData()
    {
        $user = User::find(\Session::get('uid'));
        $field = $_GET['sort']['field'];
        $Order = $_GET['sort']['sort'];
        if (isset($field) && isset($Order)) {
            $preferences = DB::table('tb_personalized_services')
                ->select('ps_id','customer_id','first_name','adults','youth','children','toddlers','earliest_arrival','late_check_out','stay_time','note')
                ->orderBy('ps_id',$Order)
                ->where('customer_id',$user->id)        
                ->get();   
        }
        else{
            $preferences = DB::table('tb_personalized_services')
                ->select('ps_id','customer_id','first_name','adults','youth','children','toddlers','earliest_arrival','late_check_out','stay_time','note')
                ->where('customer_id',$user->id)
                ->get();    
        }
        return $preferences;
    }

    public function getreservations()
    {
        $user = User::find(Auth::user()->id);
        
        $reserveData = DB::table('tb_reservations')
                ->select('id','checkin_date','checkout_date','adult','junior','baby','booking_number')
                ->where('user_id', Auth::user()->id)       
                ->get();
        // echo "<pre>";print_r($reserveData);exit;   
        
        return $reserveData;
    }

}
