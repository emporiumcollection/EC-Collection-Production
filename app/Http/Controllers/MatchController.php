<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\properties;
use App\Models\categories;
use App\Models\Review;
use App\Models\Seasons;
use App\Models\SeasonDates;
use App\Models\PropertyRooms;
use App\Models\PropertyCategoryTypes;
use DB;
use ZipArchive;
use Redirect;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchDestination()
    {
        if (!\Auth::check())
            return Redirect::to('user/login');
        $config_root_destinations = explode(',',\Config::get('app.root_destinations'));
        
        $this->data['category'] = \DB::table('tb_categories')->orderBy('category_name','asc')->get();

        $this->data['approvedhotels'] = \DB::table('tb_matched_hotels')->get();
        $this->data['allprops'] = properties::select(['id', 'property_name'])
        ->orderBy('property_name', 'asc')
        ->get();
        
        $file_name = 'match.matchhotels'; 

        return view($file_name,$this->data);    
    }

    public function matchHotels(Request $request)
    {
        if (!\Auth::check())
            return Redirect::to('user/login');
        $this->data['category'] = \DB::table('tb_categories')->orderBy('category_name','asc')->get();

        $destinationId = 0;
        $keyword = $request->selcat;

        $destinations = categories::select(['id'])
            ->where('category_name', '=', $keyword)
            ->get()
            ->toArray();

        if(!empty($destinations)){
            foreach($destinations as $destination){
                $destinationId = $destination['id'];
            }
        }

        $this->data['allprops'] = properties::select(['id', 'property_name'])
        ->whereRaw(" (country = '$keyword' or city = '$keyword' or FIND_IN_SET('".$destinationId."',`property_category_id`) <> 0) ")
        ->orderBy('property_name', 'asc')
        ->get();
        
        $curl = curl_init();
        $rep = str_replace(" ", "+", $request->selcat);
        $bar = ucfirst($rep);
        $bar = ucfirst(strtolower($bar));
        
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/locations?locale=en-gb&name=".$bar,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            
            if(!empty($response)){
                foreach($response as $val){
                    if(trim($val->dest_type) == 'city'){
                        $res =  $this->getProperties($val->dest_id,$keyword, $destinationId);
                        $this->data['hotels'] = $res['hotels'];
                        $this->data['matched'] = $res['matched'];
                        $this->data['dest_id'] = $res['dest_id'];
                        return view('match.matchhotels')->with($this->data);
                    }
                }
            }else{
                return redirect('/search/destination');
            }
        }
    }

    private function getProperties($dest_id,$keyword, $destinationId){

        if(\DB::table('tb_booking_hotel_response')->where('dest_id',$dest_id)->where('destination',$keyword)->exists()){
            $fetchedData = \DB::table('tb_booking_hotel_response')->where('dest_id',$dest_id)->where('destination',$keyword)->get();
            
            $matchedIds = [];
            $matched = [];
            $hotels = [];

            foreach ($fetchedData as $key => $hotelData) {
                $DecodedData = json_decode($hotelData->response);
                 foreach ($DecodedData->result as $value) {
                    $searchValue = addslashes($value->hotel_name);
                    $searchValue = str_replace("Hotel", "", $searchValue);
                    $searchValue = str_replace("$keyword", "", $searchValue);
                    $searchValue = preg_replace('/[^A-Za-z0-9\-]/', ' ', $searchValue);
                    $searchValue = str_replace("-", "", $searchValue);
                    $parts = explode(" ", $searchValue);
                    $parts = $this->clearArray($parts);
                
                    if(count($parts)>=2){
                        $searchValue = "$parts[0] $parts[1]";
                        if(isset($parts[2])){
                            $searchValue = $parts[0] . ' ' . $parts[1] . ' ' . $parts[2];
                        }
                        if(isset($parts[3])){
                            $searchValue = $parts[0] . ' ' . $parts[1] . ' ' . $parts[2] . ' ' . $parts[3];
                        }
                    }else{
                        $searchValue = $parts[0];
                    }
                    $searchValue = str_replace(' ', ' +', trim($searchValue));
                    $property = properties::whereRaw("MATCH(property_name)AGAINST('" . $searchValue . "' IN BOOLEAN MODE)")
                    ->whereRaw(" (country = '$keyword' or city = '$keyword' or FIND_IN_SET('".$destinationId."',`property_category_id`) <> 0) ")
                    ->first();
                    
                    // where('property_name','like', "%$value->hotel_name%")->first();
                    $hotels[] = [
                        'hotel_id' => $value->hotel_id,
                        'hotel_name' => $value->hotel_name . ' (' . $value->class . ' Star)',
                        
                    ];
                    if(!empty($property)){ // && !in_array($property->id, $matchedIds)
                        $matchedIds[] = $property->id;
                        $matched[] = [
                            'property_id' => $property->id,
                            'dest_id' => $dest_id,
                            'hotel_name' => $value->hotel_name,
                            'hotel_id' => $value->hotel_id,
                            'matched_property' => $property->property_name,
                            'booking_hotel_id' =>$property->booking_hotel_id
                        ];
                    }
                }

            }
            return ['hotels' => $hotels, 'matched' => $matched,'dest_id' => $dest_id];
        }
        else
        {
            $response = $this->getHotelDetail(0,$dest_id);
            
            if (!$response['status'] == 'success') {
                echo "cURL Error #:".$response['err'];
            } else {
                $matchedIds = [];
                $matched = [];
                $hotels = [];
                $pages_no = $response['response']->count / 20;
                for($i=0; $i <=$pages_no; $i++){
                    $response = $this->getHotelDetail($i,$dest_id);
                    
                    if (!$response['status'] == 'success') {
                        echo "cURL Error #:" . $response['err'];
                    } else {
                        foreach ($response['response']->result as $value) {
                            $searchValue = addslashes($value->hotel_name);
                            $searchValue = str_replace("Hotel", "", $searchValue);
                            $searchValue = str_replace("$keyword", "", $searchValue);
                            $searchValue = preg_replace('/[^A-Za-z0-9\-]/', '', $searchValue);
                            $parts = explode(" ", $searchValue);
                        
                            if(count($parts)>=2){
                                $searchValue = "$parts[0] $parts[1]";
                                if(isset($parts[2])){
                                    $searchValue = "$parts[0] $parts[1] $parts[2]";
                                }
                                if(isset($parts[3])){
                                    $searchValue = "$parts[0] $parts[1] $parts[2] $parts[3]";
                                }
                            }else{
                                $searchValue = $parts[0];
                            }
                            $searchValue = str_replace(' ', ' +', trim($searchValue));
                            $property = properties::whereRaw("MATCH(property_name)AGAINST('" . $searchValue . "' IN BOOLEAN MODE)")
                            ->whereRaw(" (country = '$keyword' or city = '$keyword' or FIND_IN_SET('".$destinationId."',`property_category_id`) <> 0) ")
                            ->first();
                            
                            // where('property_name','like', "%$value->hotel_name%")->first();
                            $hotels[] = [
                                'hotel_id' => $value->hotel_id,
                                'hotel_name' => $value->hotel_name . ' (' . $value->class . ' Star)',
                                
                            ];
                            if(!empty($property)){ // && !in_array($property->id, $matchedIds)
                                $matchedIds[] = $property->id;
                                $matched[] = [
                                    'property_id' => $property->id,
                                    'dest_id' => $dest_id,
                                    'hotel_name' => $value->hotel_name,
                                    'hotel_id' => $value->hotel_id,
                                    'matched_property' => $property->property_name
                                ];
                                // print $value->hotel_name . '==' . $property->property_name."\n";
                            }
                        }
                    }    
                }
                return ['hotels' => $hotels, 'matched' => $matched,'dest_id' => $dest_id];
            }
        }    
    }

    private function getHotelDetail($pages_no,$dest_id){
        if(\DB::table('tb_booking_hotel_response')->where('dest_id',$dest_id)->where('page_no',$pages_no)->exists()){

            $fetchedData = \DB::table('tb_booking_hotel_response')->where('dest_id',$dest_id)->where('page_no',$pages_no)->first();

            if (empty($fetchedData->response)) {
                $array['status'] = 'failed' ;
                $array['err'] = "Hotel Data Not Found.";
                return $array;
            } else {
                $response = json_decode($fetchedData->response);
                $array['status'] = 'success' ;
                $array['fetchFrom'] = 'database' ;
                $array['response'] = $response;
                return $array;
            }
        }else{
            $array = array();

            $checkin_date = date ('Y-m-d', strtotime ('+28 day'));
            $checkout_date = date ('Y-m-d', strtotime ('+30 day'));
            $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/search?checkin_date=".$checkin_date."&checkout_date=".$checkout_date."&room_number=1&filter_by_currency=USD&dest_type=city&locale=en-gb&adults_number=2&order_by=popularity&units=metric&dest_id=".$dest_id."&children_number=2&page_number=".$pages_no,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "x-rapidapi-host: booking-com.p.rapidapi.com",
                        "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
                    ],
                ]);

                $response = curl_exec($curl);
                $destination = json_decode($response);

                if(\DB::table('tb_booking_hotel_response')->where('dest_id',$dest_id)->where('page_no',$pages_no)->exists()){

                }else{
                    $addResponse = \DB::table('tb_booking_hotel_response')->insert([
                        'page_no' => $pages_no,
                        'dest_id' => $dest_id,
                        'destination' => isset($destination->result[0]->city)?$destination->result[0]->city:'',
                        'response' => $response
                    ]);
                }
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                    $array['status'] = 'failed' ;
                    $array['err'] = $err;
                    return $array;
                } else {
                    $response = json_decode($response);
                    $array['status'] = 'success' ;
                    $array['response'] = $response;
                    return $array;
                }    
        }
        

    }

    public function getDetailFromDatabse($dest_id){

        $response = \DB::table('tb_booking_hotel_response')
            ->where('dest_id',$dest_id)
            ->count();

        for($i=0; $i <= $response;$i++){
            $getHotelDetail = \DB::table('tb_booking_hotel_response')
                    ->where('dest_id',$dest_id)
                    ->where('page_no',$i)
                    ->first();
            // $response = json_decode()                    
        // print_r($getHotelDetail->response);exit;
        }
        $array['status'] = 'success' ;
        $array['response'] = $response;
        return $array;
    }

    public function getHotelReviews(Request $request){
        $property_id = $this->checkAndGetPropertyId($request);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/reviews?locale=en-gb&sort_type=SORT_MOST_RELEVANT&hotel_id=".$request->hotel_id."&customer_type=solo_traveller%2Creview_category_group_of_friends&language_filter=en-gb%2Cde%2Cfr",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $reviews = [];
            $response = json_decode($response);
            
            if(isset($response->result) && !empty($response->result)){
            
                foreach($response->result as $value){
                    if(trim($value->pros) && trim($value->cons)){
                        $insert = review::insert([
                            'hotel_id' => $request->hotel_id,
                            'property_id' => $property_id,
                            'fname' => $value->author->name,
                            'comment' => 'Pros : '.$value->pros . '<br>Cons : '.$value->cons,
                            'is_approved' => 1
                        ]);
                    }
                }
                if($insert){
                    return response()->json(['status' => true]);
                }else{
                    return response()->json(['status' => true]);
                }
            }    
        }

    }

    public function getHotelPolicy(Request $request)
    {
        $property_id = $this->checkAndGetPropertyId($request);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/policies?locale=en-gb&hotel_id=" . $request->hotel_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $policies = '';
            $type = '';
            $response = json_decode($response);
            
            if(isset($response->policy)){
                foreach ($response->policy as $key => $value) {
                    $policies .= PHP_EOL;
                    $type .= str_replace("_"," ",$value->type).PHP_EOL;
                    if (isset($value->content[0]->cribs_and_extra_beds)) {
                        foreach($value->content[0]->cribs_and_extra_beds as $key => $data){

                            if($key == 0){
                                $policies .= PHP_EOL;
                                $policies .='Cribs and extra beds : '. $data->text.PHP_EOL;
                            }else{
                                $policies .= $data->text.PHP_EOL;
                            }    
                        }
                    }

                    if (isset($value->content[0]->children_at_the_property)) {    
                        foreach($value->content[0]->children_at_the_property as $key => $data){
                            if($key == 0){
                                $policies .= PHP_EOL;
                                $policies .='Children at the property : '. $data->text.PHP_EOL;
                            }else{
                                $policies .= $data->text.PHP_EOL;   
                            }    
                        }
                    }
                    if (isset($value->content[0]->ruleset)) {
                        foreach ($value->content[0]->ruleset as $key => $data) {
                            foreach($data->rule as $key => $rules){
                                if ($key == 0) {
                                    $policies .= PHP_EOL;
                                    $policies .= str_replace("_"," ",$data->name) .':'.$rules->content.PHP_EOL;
                                }else{
                                    $policies .= $rules->content.PHP_EOL;    
                                }
                                
                            }
                        }
                    }
                    $insert = \DB::table('td_property_terms_n_conditions')
                    ->insert([
                        'property_id' => $property_id,
                        'type' => $type,
                        'terms_n_conditions' => $policies     
                    ]);
                }
                return response()->json(['status' => true]);
            } 
        }

    }

    public function savematchhotels(Request $request)
    {
        $this->getHotelPolicy($request->hotel_id,$request->property_id);
        $this->getHotelReviews($request->hotel_id,$request->property_id);

        if( \DB::table('tb_matched_hotels')
            ->where('property_id',$request->property_id)
            ->exists() ){

            return redirect('/search/destination');
        }else{
            $insert = \DB::table('tb_matched_hotels')
            ->insert([
                'hotel_id' => $request->hotel_id,
                'property_id' => $request->property_id,
                'is_approved' => 1
            ]);
            return response()->json(['status' => true]);
        }

    }

    public function getroomdetail($hotel_id){
        $checkin_date = date ('Y-m-d', strtotime ('+15 day'));
        $checkout_date = date ('Y-m-d', strtotime ('+17 day'));
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/room-list?currency=AED&adults_number_by_rooms=3%2C1&checkin_date=".$checkin_date."&hotel_id=".$hotel_id."&units=metric&checkout_date=".$checkout_date."&locale=en-gb&children_number_by_rooms=2%2C1&children_ages=5%2C0%2C9",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            if(!empty($response[0]->block)){
                $rooms = $response[0]->block;

                $roomsdetail = view('match.roomdetail', [
                'rooms' => $rooms
                ])->render();

                return json_encode([
                    'roomdetail' => $roomsdetail
                ]);
            }else
            {
                $error = "Rooms not found!";
                $roomsdetail = view('match.roomdetail', [
                'error' => $error
                ])->render();

                return json_encode([
                    'roomdetail' => $roomsdetail
                ]);
            }

        }
    }


    public function importhoteldetail($hotel_id)
    {
        $hotelDetail =  $this->getHotelData($hotel_id);
        if(isset($hotelDetail->description_translations[0]->description)){
            $description = $hotelDetail->description_translations[0]->description;
        }else{
            $description = " ";
        }
        properties::insert([
            'booking_hotel_id' => $hotelDetail->hotel_id,
            'property_name' => $hotelDetail->name,
            'property_slug' => str_slug($hotelDetail->name),
            'city' => $hotelDetail->city,   
            'country' => $hotelDetail->country,
            'hotel_currency' => $hotelDetail->currencycode,
            'latitude' => $hotelDetail->location->latitude,
            'longitude' => $hotelDetail->location->longitude,
            'address' => $hotelDetail->address,
            'checkin' => $hotelDetail->checkin->from,
            'checkout' => $hotelDetail->checkout->to,
            'detail_section1_description_box1' => $description,
            'created' => date("Y-m-d: H:i:s"),
            'updated' => date("Y-m-d: H:i:s"),
        ]);
    }

    public function importSuites(Request $request){

        $roomDetail = $this->blockDetail($request->hotel_id);
        
        if(empty($roomDetail[0]->block)){

            return response()->json(['status' => false]);

        }else{

            $property_id = $this->checkAndGetPropertyId($request);

            $this->insertSuite($property_id,$roomDetail);

            return response()->json(['status' => true]);
        }
    }

    public function insertSuite($property_id,$roomDetail){
        
        $policies = "";
        $facilities = "";
        foreach($roomDetail[0]->block as $rooms){
            foreach($rooms->block_text->policies as $policy){
                $policies .= PHP_EOL;
                $policies .= $policy->class.PHP_EOL;
                $policies .= $policy->content.PHP_EOL;
                $policies .= PHP_EOL;
            }

            $roomId = $rooms->room_id;
            
            foreach($roomDetail[0]->rooms->$roomId->facilities as $facility){
                $facilities .= $facility->facilitytype_name.',';
            }

            $room_name = $rooms->room_name;
            $room_id = $rooms->room_id;
            $benefits = "";
            foreach($roomDetail[0]->top_ufi_benefits as $value){
                $benefits .= $value->translated_name.',';
            }
            $highlights = "";
            foreach ($roomDetail[0]->rooms->$roomId->highlights as $key => $value) {
                $highlights .= $value->translated_name.',';
            }
            $room_desc = $roomDetail[0]->rooms->$roomId->description;
            $beds = isset($roomDetail[0]->rooms->$roomId->bed_configurations[0]->bed_types[0]->count)? $roomDetail[0]->rooms->$roomId->bed_configurations[0]->bed_types[0]->count:0;
            $bed_type = isset($roomDetail[0]->rooms->$roomId->bed_configurations[0]->bed_types[0]->name_with_count) ? $roomDetail[0]->rooms->$roomId->bed_configurations[0]->bed_types[0]->name_with_count:0;

            $guests_adults = $rooms->nr_adults;
            $guests_juniors = $rooms->nr_children;
            if(!PropertyCategoryTypes::where('category_name',$room_name)->where('property_id',$property_id)->exists()){
                $insert =  PropertyCategoryTypes::insert([
                    'property_id' => $property_id,
                    'category_name' => $room_name,
                    'cat_short_name' => $room_name,
                    'booking_policy' => $policies,
                    'bathroom' => $rooms->number_of_bathrooms,
                    'guests_adults' => $guests_adults,
                    'guests_juniors' => $guests_juniors,
                    'bads' => $beds,
                    'booking_facilities' => $facilities,
                    'room_desc' => $room_desc,
                    'bed_1_description' => $bed_type,
                    'status' => 0,
                    'show_on_booking' => 1,
                    'created' => date("Y-m-d: H:i:s"),
                    'updated' => date("Y-m-d: H:i:s"),
                ]);
                $lastId = DB::getPdo()->lastInsertId();

                DB::table('tb_properties_category_rooms')->insert([
                    'property_id' => $property_id,
                    'category_id' => $lastId,
                    'room_name' => $room_name,
                    'status' => 1,
                    'highlights' =>$highlights,
                    'benefits' =>$benefits,
                    'room_active_from' => date ('Y-m-d', strtotime ('+2 year')),
                    'room_active_to' => date ('Y-m-d', strtotime ('+2 year')),
                    'created' => date("Y-m-d: H:i:s"),
                    'updated' => date("Y-m-d: H:i:s")
                ]);
            }    
        }
    }

    public function DateViseSuiteImport(Request $request){

        $checkin_date = date ('Y-m-d', strtotime ($request->arrival_date));
        $checkout_date = date ('Y-m-d', strtotime ($request->departure_date));
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/room-list?currency=EUR&adults_number_by_rooms=3%2C1&checkin_date=".$checkin_date."&hotel_id=".$request->hotel_id."&units=metric&checkout_date=".$checkout_date."&locale=en-gb&children_number_by_rooms=2%2C1&children_ages=5%2C0%2C9",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            if(!empty($response[0])){

                $property_id = $this->checkAndGetPropertyId($request);

                $this->insertSuite($property_id,$response);

                return response()->json(['status' => true]);

            }    
        }
    }

    public function blockDetail($hotel_id){
        $checkin_date = date ('Y-m-d', strtotime ('+90 day'));
        $checkout_date = date ('Y-m-d', strtotime ('+91 day'));
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/room-list?currency=EUR&adults_number_by_rooms=3%2C1&checkin_date=".$checkin_date."&hotel_id=".$hotel_id."&units=metric&checkout_date=".$checkout_date."&locale=en-gb&children_number_by_rooms=2%2C1&children_ages=5%2C0%2C9",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            if(!empty($response[0])){
                return $response;
            }    
        }
    }

    public function displayroomimages(Request $request){
        $roomImages = $this->blockDetail($request->hotel_id);

        if(isset($roomImages[0]->block[0]->room_id)){
            $room_id = $roomImages[0]->block[0]->room_id;    
        }
        if(isset($roomImages[0]->rooms)){
            foreach ($roomImages[0]->rooms as $key => $value) {
                if($key == $room_id){
                    $roomsphotos = view('match.roomphotos', [
                    'photos' => $value->photos,
                    'hotel_id' => $request->hotel_id
                    ])->render();

                    return json_encode([
                        'roomphotos' => $roomsphotos
                    ]);
                }
            }

        }else{
            return response()->json(['status' => false]);
        }
    }

    public function surroundings(Request $request){
        $property_id = $this->checkAndGetPropertyId($request);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/location-highlights?hotel_id=".$request->hotel_id."&locale=en-gb",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

            if(DB::table('tb_surroundings')->where('property_id',$property_id)->exists()){
                return response()->json(['status' => false]); 
            }else{
                $response = json_decode($response);
                foreach($response as $key => $val){

                    $jsonData = json_encode($val);
                    $addResponse = \DB::table('tb_surroundings')->insert([
                        'property_id' => $property_id,
                        'hotel_id' => $request->hotel_id,
                        'type' => $key,
                        'info' => $jsonData
                    ]);
                }
                return response()->json(['status' => true]); 
            }
        } 
    }

    public function facilities(Request $request){
        $property_id = $this->checkAndGetPropertyId($request);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/facilities?hotel_id=".$request->hotel_id."&locale=en-gb",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if(DB::table('tb_booking_hotel_facilities')->where('hotel_id',$request->hotel_id)->exists()){
                return response()->json(['status' => false]);
            }else{
                $response = json_decode($response);
                foreach($response as $val){
                    $insData = DB::table('tb_booking_hotel_facilities')->insert([ 
                        'property_id' => $property_id,
                        'hotel_id' => $request->hotel_id,
                        'facility_name' => $val->facility_name,
                        'hotelfacilitytype_id' => $val->hotelfacilitytype_id,
                        'facilitytype_name' => $val->facilitytype_name  
                     ]); 
                }
                return response()->json(['status' => true]);
            }
        }
    }

    public function importdetailoption(Request $request){
        
        \DB::table('tb_properties')->where('id', $request->property_id)->update([
                    'booking_hotel_id' => $request->hotel_id
                ]);
        $importedentity = DB::table('tb_imported_entity')->get(); 
        $html = view('match.importhotel', [
            'hotel_id' => $request->hotel_id,
            'property_id' => $request->property_id,
            'dest_id' => $request->dest_id,
            'importedentity' => $importedentity
            ])->render();

            return json_encode([
                'html' => $html
            ]);        
    }

    public function makezipOfimages(Request $request){
        $roomImages = $this->blockDetail($request->id);

        if(isset($roomImages[0]->block[0]->room_id)){
            $room_id = $roomImages[0]->block[0]->room_id;    
        }
        if(isset($roomImages[0]->rooms)){
            foreach ($roomImages[0]->rooms as $key => $value) {
                if($key == $room_id){

                    $images = [];
                    foreach ($value->photos as $key => $value) { 
                        $images[] =  str_replace("640x200","1800x1200",$value->url_640x200);
                    }
                    // $files = json_decode($images);
                    # create new zip object
                    $zip = new ZipArchive();

                    # create a temp file & open it
                    $tmp_file = tempnam('.', '');
                    $zip->open($tmp_file, ZipArchive::CREATE);
                    # loop through each file
                    foreach ($images as $key => $file) {
                        # download file
                        $download_file = file_get_contents($file);
                        $ext = pathinfo(basename($file), PATHINFO_EXTENSION);
                        $ext = explode('?', $ext);
                        $n = "$key.$ext[0]";
                        #add it to the zip
                        $zip->addFromString($n, $download_file);
                    }

                    # close zip
                    $zip->close();
                    $random_code = md5(rand(10,10000).strtotime(date("YmdHis")));
                    # send the file to the browser as a download

                    header('Content-disposition: attachment; filename="'.$random_code.'.zip"');
                    header('Content-type: application/zip');
                    readfile($tmp_file);
                    unlink($tmp_file);
                }
            }

        }else{
            return response()->json(['status' => false]);
        }

    }
    public function faqs(Request $request){
        $property_id = $this->checkAndGetPropertyId($request);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/questions?locale=en-gb&hotel_id=".$request->hotel_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            $response = json_decode($response);
            if(DB::table('tb_faqs')->where('hotel_id',$request->hotel_id)->exists()){
                return response()->json(['status' => false]);
            }else{
                foreach ($response->q_and_a_pairs as $key => $value) {
                    DB::table('tb_faqs')->insert([
                        'hotel_id' => $request->hotel_id,
                        'property_id' => $property_id,
                        'question' => $value->question,
                        'answer' => $value->answer,
                    ]);
                }
                return response()->json(['status' => true]);   
            }
        }            
    }

    public function childrenPolicies(Request $request){
        $property_id = $this->checkAndGetPropertyId($request);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/children-policies?hotel_id=".$request->hotel_id."&locale=en-gb&children_age=5",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            if(DB::table('tb_children_policies')->where('property_id',$property_id)->exists()){
                return response()->json(['status' => false]);
            }else{
                foreach($response->props->children[0]->props->component->props->children as $value){
                    if(isset($value->props->children)){
                        foreach($value->props->children as $val){
                            DB::table('tb_children_policies')->insert([
                                'property_id' => $property_id,
                                'hotel_id' => $request->hotel_id,
                                'policy' => $val->props->text
                            ]);
                        }
                    }
                }
                return response()->json(['status' => true]);
            }
        }
    }

    public function tips(Request $request){
        $property_id = $this->checkAndGetPropertyId($request);
    
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/tips?hotel_id=".$request->hotel_id."&sort_type=SORT_MOST_RELEVANT&locale=en-gb&customer_type=solo_traveller%2Creview_category_group_of_friends&language_filter=en-gb%2Cde%2Cfr",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if(DB::table('tb_tips')->where('property_id',$property_id)->exists()){
                return response()->json(['status' => true]);

            }else{

                $response = json_decode($response);
                foreach($response->result as $val){
                    DB::table('tb_tips')->insert([
                        'property_id' => $property_id,
                        'hotel_id' => $request->hotel_id,
                        'tips' => $val->user_tip 
                    ]);
                }
                return response()->json(['status' => true]);
            }

        }

    }

    public function viewprice(Request $request){

        $fetchSession = Seasons::with(["dates"])
        ->where('property_id', $request->property_id)->get();
        
        $Seasondate = view('match.viewprice', [
            'seasondate' => $fetchSession,
            'hotel_id' => $request->hotel_id
        ])->render();

        return json_encode([
            'seasondate' => $Seasondate
        ]);

    }     


    public function getHotelData($hotel_id){
        
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/data?locale=en-gb&hotel_id=".$hotel_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: booking-com.p.rapidapi.com",
                "x-rapidapi-key: 4016c144e9msh77dd9511d4a3990p1a7da4jsnb74f29e0e60c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            return $response;
        }
    }

    private function checkAndGetPropertyId($request){

        if(!empty($request->hotel_id) && !empty($request->property_id)){
            properties::where('id',$request->property_id)
                ->update([
                    'booking_hotel_id' => $request->hotel_id
                ]);
            $property = properties::where('id',$request->property_id)->first();
            return $property->id;            
        }

        if(!properties::where('booking_hotel_id',$request->hotel_id)->exists()){
            $this->importhoteldetail($request->hotel_id);            
        }
        $property = properties::where('booking_hotel_id',$request->hotel_id)->first();
        return $property->id;   
    }

    private function clearArray($parts){
        $cleaned = [];
        foreach($parts as $a){
            if(trim($a) != ''){
                $cleaned[] = $a;
            }
        }

        return $cleaned;
    }
    public function addentity(Request $request){
           
        $property = properties::where('booking_hotel_id',$request->hotel_id)->first();
        if(isset($property->id) && !empty($property->id)){
            DB::table('tb_imported_entity')
            ->insert([
                'property_id' => $property->id ,
                'hotel_id' => $request->hotel_id ,
                'entity' => $request->entity
            ]);
        }
    }       
    public function searchwithid(Request $request){
        $importedentity = DB::table('tb_imported_entity')->get(); 
        $html = view('match.importhotel', [
            'hotel_id' => $request->hotel_id,
            'property_id' => $request->property_id,
            'dest_id' => $request->dest_id,
            'importedentity' => $importedentity
            ])->render();

            return json_encode([
                'html' => $html
            ]);  
    }

}    