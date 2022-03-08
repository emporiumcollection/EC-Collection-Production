<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\properties;
use App\Models\PropertyImages;
use App\Models\amenities;
use App\Models\Restaurant;
use App\Models\Bar;
use App\Models\Review;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Traits\Property;
use App\Http\Traits\Restaurants;
use Illuminate\Support\Facades\Session;
class HotelDetailController extends Controller
{
    use Property;
    use Restaurants;
    
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

    public function suites($slug,$suite)
    {
        
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';
        $this->data['property'] = $this->getPropertyByslug($slug);
        $this->setGalleryAndFormat($this->data['property']);
        $this->data['property'] = $this->data['property'][0];
        $this->data['property_id'] = $this->data['property']->id;

        if(Session::has('keyword')){
            $this->data['path'] = $this->getLocationPath(Session::get('keyword'));
        }else{
            $this->data['path'] = $this->getLocationPath($this->data['property']->city);
        }

        $this->setFitlerOptions();
        $this->data = $this->setFitlerOptions();
        
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
    
    public function architecture($slug)
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';
        $this->data['property'] = $this->getPropertyByslug($slug);
        $this->setGalleryAndFormat($this->data['property']);
        $this->data['property'] = $this->data['property'][0];
        $this->data['property_id'] = $this->data['property']->id;
        // print_r($this->data['property']);exit;
        if(Session::has('keyword')){
            $this->data['path'] = $this->getLocationPath(Session::get('keyword'));
        }else{
            $this->data['path'] = $this->getLocationPath($this->data['property']->city);
        }

        $this->setFitlerOptions();
        $this->data = $this->setFitlerOptions();

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

    public function restaurant($slug)
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';
        $this->data['property'] = $this->getPropertyByslug($slug);
        $this->setGalleryAndFormat($this->data['property']);
        $this->data['property'] = $this->data['property'][0];
        $this->data['property_id'] = $this->data['property']->id;
        // print_r($this->data['property']);exit;
        if(Session::has('keyword')){
            $this->data['path'] = $this->getLocationPath(Session::get('keyword'));
        }else{
            $this->data['path'] = $this->getLocationPath($this->data['property']->city);
        }

        $file_name = 'frontend.themes.EC.hotel.restaurant';      
        return view($file_name, $this->data);
    }

    public function restaurant_detail($property_slug,$title,$slug)
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $this->data['property'] = $this->getPropertyByslug($property_slug);
        $this->setGalleryAndFormat($this->data['property']);
        $this->data['property'] = $this->data['property'][0];
        
        $this->data['restaurant_detail'] = Restaurant::where('id',$this->data['property']->restaurant_ids)->first();
        $this->data['bar_detail'] = bar::where('id',$this->data['property']->bar_ids)->first();

        $restaurant_detail = Restaurant::where('title',$this->data['restaurant_detail']['title'])->first();
        $bar_detail = bar::where('title',$this->data['bar_detail']['title'])->first();

        if(request()->segment(3) == 'restaurant' AND isset($restaurant_detail->id)){
            $this->data['res_slider'] = $this->get_restaurant_files($restaurant_detail->id, 'res','slider');
            $this->data['res_menu'] = $this->get_restaurant_files($restaurant_detail->id, 'res', 'menu');
        }
        if(request()->segment(3) == 'bar' AND isset($bar_detail->id)){
            $this->data['res_slider'] = $this->get_restaurant_files($bar_detail->id, 'res','slider');
            $this->data['res_menu'] = $this->get_restaurant_files($bar_detail->id, 'res', 'menu');   
        }   

        if(Session::has('keyword')){
            $this->data['path'] = $this->getLocationPath(Session::get('keyword'));
        }else{
            $this->data['path'] = $this->getLocationPath($this->data['property']->city);
        }

        $file_name = 'frontend.themes.EC.hotel.detailrestaurant';      
        return view($file_name, $this->data);
    }

    public function getlocation($slug)
    {
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';
        $this->data['photos'] = '';

        $this->data['property'] = $this->getPropertyByslug($slug);
        $this->setGalleryAndFormat($this->data['property']);
        $this->data['property'] = $this->data['property'][0];
        $this->setFitlerOptions();
        $this->data = $this->setFitlerOptions();
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

    public function add_collection(Request $request)
    {

        $collection_date = $request->date;
        $explode_date = explode("-",$collection_date);
        $start_date = $explode_date[0];
        $end_date =$explode_date[1];
        $collection_data = array(
                    
                    'collection_name' => $request->name,
                    'start_date' => $start_date,
                    'end_date' => $end_date,                   
                );
        \DB::table('tb_collection')->insert($collection_data);
    }
    
}

