<?php


namespace App\Http\Controllers\PhaseOne;
use Illuminate\Http\Request;
use App\Http\Controllers\ContainerController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Http\Controllers\Controller;
use App\User;
use DB,Validator, Input, Redirect, CommonHelper, Mail;

class MapBoxController extends Controller {
    function index(HotelController $hcontroller) {
        $data = [
            'hotels' => [],
            'anchors' => [],
        ];
        $data['currency'] = \DB::table('tb_settings')->select('content')->where('key_value', 'default_currency')->first();
        
        $hotels = DB::table('tb_properties')
            ->join('property_categories_split_in_rows', 'property_categories_split_in_rows.id', '=', 'tb_properties.id')
            ->select('tb_properties.id', 'tb_properties.property_name as name', 'tb_properties.property_usp as usp', 'tb_properties.latitude' , 'tb_properties.longitude')
            ->where('property_categories_split_in_rows.category_id', 494)
            ->get();
        
        foreach($hotels as $hotel){
            $images = $hcontroller->get_property_files($hotel->id, 'Property Images');
            $hotel_images = [];
            for($i = 0; $i < 3; $i++){
                // $hotel_images[] = [$images[$i]->imgsrc.$images[$i]->file_name];
                $hotel_images[] = ['https://develio.us/ec2-html/images/53511811337-49267444221.jpg'];
               
            }

            $data['hotels'][] = [
                'id' => $hotel->id,
                'name' => $hotel->name,
                'images' => $images,
            ];

            $data['anchors'][] = [
                'type' => 'Feature',
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [$hotel->longitude, $hotel->latitude]
                ],
                'properties' => [
                    'dataId' => 'hotel_'.$hotel->id,
                    'title' => $hotel->name,
                    'description' => $hotel->usp,
                    'price' => '€269',
                    'images' => $hotel_images,
                ],
            ];
        }

        // var_dump($data['anchors']);
        // die;
        
        return view('frontend.themes.EC.phaseone.mapbox', $data);
    }
}