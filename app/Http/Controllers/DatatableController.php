<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Companion;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Collection;
use DB;
class DatatableController extends Controller
{
    public function getDatatable()
    {
        $field = $_GET['sort']['field'];
        $Order = $_GET['sort']['sort'];
        if (isset($field) && isset($Order)) {
            $companions = DB::table('tb_companion')
                ->select('id','first_name','last_name','email','gender','preferred_language','preferred_currency')
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
        $field = $_GET['sort']['field'];
        $Order = $_GET['sort']['sort'];
        if (isset($field) && isset($Order)) {
            $companions = DB::table('tb_invitee')
                ->select('id','user_id','first_name','last_name','email','message','referral_code')
                ->orderBy('id',$Order)        
                ->get();   
        }
        else{
            $companions = DB::table('tb_invitee')
                ->select('id','user_id','first_name','last_name','email','message','referral_code')
                ->get();    
        }
        return $companions;
    }

    public function getPreferencesData()
    {
        $field = $_GET['sort']['field'];
        $Order = $_GET['sort']['sort'];
        if (isset($field) && isset($Order)) {
            $preferences = DB::table('tb_personalized_services')
                ->select('ps_id','customer_id','first_name','adults','youth','children','toddlers','earliest_arrival','late_check_out','stay_time','note')
                ->orderBy('ps_id',$Order)        
                ->get();   
        }
        else{
            $preferences = DB::table('tb_personalized_services')
                ->select('ps_id','customer_id','first_name','adults','youth','children','toddlers','earliest_arrival','late_check_out','stay_time','note')
                ->get();    
        }
        return $preferences;
    }

}
