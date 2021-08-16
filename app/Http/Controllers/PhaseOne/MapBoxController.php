<?php


namespace App\Http\Controllers\PhaseOne;
use Illuminate\Http\Request;
use App\Http\Controllers\ContainerController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Http\Controllers\Controller;
use App\User;
use DB,Validator, Input, Redirect, CommonHelper, Mail;

class MapBoxController extends Controller {
    function index(HotelController $hcontroller, Request $request) {
        $params = $request->all();
        $city = $params['s'];
        if (empty($city)) {
            return abort(404);
        }

        $all_hotels = \DB::table('tb_properties')->select('id')->where('city', $city)->count();
        if ($all_hotels == 0) {
            return abort(404);
        }

        $data = [
            'hotels' => [],
            'anchors' => [],
        ];
        $data['currency'] = \DB::table('tb_settings')->select('content')->where('key_value', 'default_currency')->first();
        $currency = $data['currency']->content;
        // print $currency; exit;

        $hotels = DB::table('tb_properties')
            ->join('property_categories_split_in_rows', 'property_categories_split_in_rows.id', '=', 'tb_properties.id')
            ->select('tb_properties.id', 'tb_properties.property_name as name', 'tb_properties.property_usp as usp', 'tb_properties.latitude' , 'tb_properties.longitude')
            ->where('city', $city)
            ->distinct()
            ->get();

        foreach($hotels as $hotel) {

            if (empty($hotel->longitude) || empty($hotel->latitude)) {
                continue;
            }

            // $query = "SELECT MIN(single_price) as price FROM empo_voyage.tb_properties_category_rooms_price
            // where property_id = " . $hotel->id;
            // $query_results = \DB::select($query);
            // $price = $query_results[0]->price ?? '';

            $price = 0;

            $images = $hcontroller->get_property_files($hotel->id, 'Property Images');
            $hotel_images = [];
            if (count($images) > 0) {
                for($i = 0; $i < 2; $i++){
                    $hotel_images[] = $images[$i]->imgsrc . $images[$i]->file_name;
                }
            }

            $data['hotels'][] = [
                'id' => $hotel->id,
                'name' => $hotel->name,
                'images' => $images,
            ];

            $lang = doubleval($hotel->longitude);
            $lat = doubleval($hotel->latitude);

            $coordinates[] = $lang;
            $coordinates[] = $lat;

            $data['anchors'][] = [
                'type' => 'Feature',
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [$lang, $lat]
                ],
                'properties' => [
                    'dataId' => 'hotel_' . $hotel->id,
                    'title' => $hotel->name,
                    'description' => $hotel->usp,
                    'price' =>  $currency . $price,
                    'images' => $hotel_images,
                ],
            ];
        }

        $data['city'] = $city;
        $min_coordinates = min($coordinates);
        $max_coordinates = max($coordinates);
        $min_coordinates = number_format((float)$min_coordinates, 2, '.', '');
        $max_coordinates = number_format((float)$max_coordinates, 2, '.', '');

        $data['min_coordinates'] = $min_coordinates;
        $data['max_coordinates'] = $max_coordinates;

        // dump($max_coordinates); die;

        return view('frontend.themes.EC.phaseone.mapbox', $data);
    }
}
