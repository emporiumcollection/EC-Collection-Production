<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\properties;
use App\Models\PropertyImages;
use App\Models\amenities;
use App\Models\reviews;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Traits\Property;

class HotelDetailController extends Controller
{
    use Property;
    
    public function hoteldetail()
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $this->data['reviews'] = $this->getReviews();

        $file_name = 'frontend.themes.EC.hotel.hotel_detail'; 
             
        return view($file_name, $this->data);
    }

    public function suites($property_id)
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $this->data['property'] = $this->getPropertyById($property_id);
        $this->formatPropertyRecords($this->data['property']);
        $this->data['property'] = $this->data['property'][0];
        $this->data['property_id'] = $property_id;

        $file_name = 'frontend.themes.EC.hotel.suites';      
        return view($file_name, $this->data);
    }

    private function formatPropertyRecord(&$property){
        if(!empty($property->suites)){
            foreach($property->suites as $sk => $suite){
                if(!empty($suite->rooms)){
                    foreach($suite->rooms as $rk => $room){
                        $roomImages = PropertyImages::with(['file' => function($query){
                            $query->select(['id', 'file_name']);
                        }])
                        ->where('property_id', '=', $room->property_id)
                        ->where('category_id', '=', $room->category_id)
                        ->get()
                        ->toArray();

                        $property->suites[$sk]->rooms[$rk]->images = $roomImages;
                        break;
                    }
                    foreach($suite->amenities as $ak => $amenity){
                        $suiteamenities = amenities::whereIn('id', explode(',', $amenity->amenity_ids))
                        ->get()->toArray();
                        $suiteamenitlist = [];
                        if(!empty($suiteamenities)){
                            foreach($suiteamenities as $amn){
                                $suiteamenitlist[] = $amn['amenity_title'];
                            }
                        }
                        if(!empty($suiteamenitlist)){
                            $property->suites[$sk]->suiteamenities = '<li>'.implode('</li><li>', $suiteamenitlist).'</li>';
                        }else{
                            $property->suites[$sk]->suiteamenities = '';
                        }
                    }
                }
            }
        }
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

    public function location($id)
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $this->data['property'] = $this->getPropertyById($id);
        $this->formatPropertyRecords($this->data['property']);
        $this->data['property'] = $this->data['property'][0];

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

    public function add_collection(Request $request){

        $collection_date = $request->start_date;
        $explode_date = explode("-",$collection_date);
        $start_date = $explode_date[0];
        $end_date =$explode_date[1];
        $collection_data = array(
                    'hotel_id'=>$request->id,
                    'collection_name' => $request->collection_name,
                    'start_date' => $start_date,
                    'end_date' => $end_date,                   
                );
        \DB::table('tb_collection')->insert($collection_data);
    }
    
}
