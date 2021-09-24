<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotelDetailController extends Controller
{
    public function hoteldetail()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.hotel_detail';      
        return view($file_name, $this->data);
    }
}
