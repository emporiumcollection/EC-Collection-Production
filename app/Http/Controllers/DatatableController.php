<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Companion;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Collection;

class DatatableController extends Controller
{
    public function getDatatable()
    {
        $companions = Companion::all();

        return $companions;

        // $companions= collect($companions);
        // return Datatables::collection(Companion::all())->make(true)->toArray();

        return Datatables::of($companions)
            // ->addColumn('actions', function ($companions) {
            //     return $companions->first_name;
            //     // return (['companions' => $companions, 'companion_id' => $companions->id]);
            // })
            // ->escapeColumns('actions')
            ->editColumn('first_name', function ($companions) {
                return $companions->first_name;
            })
            ->editColumn('email', function ($companions) {
                return $companions->email;
            })
            ->editColumn('phone_number', function ($companions) {
                return $companions->phone_number;
            })
            ->make(true);
    }

}
