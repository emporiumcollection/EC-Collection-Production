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

    public function suites()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.suites';      
        return view($file_name, $this->data);
    }
    
    public function detailsuite()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.detail-suite';      
        return view($file_name, $this->data);
    }
    public function architecture()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.architecture';      
        return view($file_name, $this->data);
    }
    public function spa()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.spa';      
        return view($file_name, $this->data);
    }

    public function restaurant()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.restaurant';      
        return view($file_name, $this->data);
    }

    public function detailrestaurant()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.detailrestaurant';      
        return view($file_name, $this->data);
    }

    public function location()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.location';      
        return view($file_name, $this->data);
    }

    public function experiences()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.experiences';      
        return view($file_name, $this->data);
    }

    public function social()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.social';      
        return view($file_name, $this->data);
    }
    public function faq()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $file_name = 'frontend.themes.EC.hotel.faq';      
        return view($file_name, $this->data);
    }
}
