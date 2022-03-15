<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\properties;
use App\Models\categories;
use App\Models\Review;
use App\Models\PropertyCategoryTypes;
use DB;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function matchHotels(){
        $config_root_destinations = explode(',',\Config::get('app.root_destinations'));
        
        $this->data['category'] = \DB::table('tb_categories')->orderBy('category_name','asc')->get();

        $this->data['approvedhotels'] = \DB::table('tb_matched_hotels')->get();
        $this->data['allprops'] = properties::select(['id', 'property_name'])
        ->orderBy('property_name', 'asc')
        ->get();
        
        $file_name = 'match.matchhotels'; 

        return view($file_name,$this->data);    
    }

    public function machDestination(Request $request){
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

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/locations?locale=en-gb&name=".$request->selcat,
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

            foreach ($fetchedData as $key => $value) {
                $DecodedData = json_decode($value->response);
                 foreach ($DecodedData->result as $value) {
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
                        'hotel_name' => $value->hotel_name,
                        
                    ];
                    if(!empty($property)){ // && !in_array($property->id, $matchedIds)
                        $matchedIds[] = $property->id;
                        $matched[] = [
                            'property_id' => $property->property_id,
                            'dest_id' => $dest_id,
                            'hotel_name' => $value->hotel_name,
                            'hotel_id' => $value->hotel_id,
                            'matched_property' => $property->property_name
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
                                'hotel_name' => $value->hotel_name,
                                
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
                if(\DB::table('tb_booking_hotel_response')->where('page_no',$pages_no)->exists()){

                }else{
                    $addResponse = \DB::table('tb_booking_hotel_response')->insert([
                        'page_no' => $pages_no,
                        'dest_id' => $dest_id,
                        'destination' => $destination->result[0]->city,
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

    private function getHotelReviews($hotel_gds_id,$property_id){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/reviews?locale=en-gb&sort_type=SORT_MOST_RELEVANT&hotel_id=".$hotel_gds_id."&customer_type=solo_traveller%2Creview_category_group_of_friends&language_filter=en-gb%2Cde%2Cfr",
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
                if(review::where('hotel_id',$property_id)->exists()){
                    return redirect('/search/destination');
                }else{
                    foreach($response->result as $value){
                        if(trim($value->pros) && trim($value->cons)){
                            $insert = review::insert([
                                'hotel_id' => $property_id,
                                'fname' => $value->author->name,
                                'comment' => 'Pros : '.$value->pros . PHP_EOL.'Cons : '.$value->cons,
                                'is_approved' => 1
                            ]);
                        }
                    }
                }
            }    
        }
    }

    private function getHotelPolicy($hotel_gds_id,$property_id){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/policies?locale=en-gb&hotel_id=" . $hotel_gds_id,
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
            $response = json_decode($response);
            if(isset($response->policy)){
                foreach ($response->policy as $key => $value) {
                    $policies .= PHP_EOL;
                    $policies .= str_replace("_"," ",$value->type).PHP_EOL;
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
                }
                if(\DB::table('td_property_terms_n_conditions')
                    ->where('property_id', $property_id)->exists()) {
                    return redirect('/search/destination');
                }else{
                    $insert = \DB::table('td_property_terms_n_conditions')
                    ->insert([
                        'property_id' => $property_id,
                        'terms_n_conditions' => $policies     
                    ]);
                }    
            } 
        }
    }

    public function saveMatchHotels(Request $request)
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

    public function getRoomDetail($hotel_id){
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


    public function importHotelDetail(Request $request)
    {
        $hotelDetail =  $this->getHotelDetail(0,$request->dest_id);
        
            if(isset($hotelDetail['fetchFrom']) && $hotelDetail['fetchFrom'] == 'database'){
                foreach($hotelDetail['response']->result as $hotels){                    

                        if(isset($hotels->composite_price_breakdown->product_price_breakdowns[0]->items[0]->item_amount->value)){
                            $city_tax = $hotels->composite_price_breakdown->product_price_breakdowns[0]->items[0]->item_amount->value;
                        }

                        if($hotels->hotel_id == $request->hotel_id){
                            properties::insert([
                                'booking_hotel_id' => $request->hotel_id,
                                'property_name' => $hotels->hotel_name,
                                'city' => $hotels->city,
                                'hotel_currency' => $hotels->currencycode,
                                'latitude' => $hotels->latitude,
                                'longitude' => $hotels->longitude,
                                'address' => $hotels->address,
                                'hotel_time_zone' => $hotels->timezone,
                                'city_tax' => $city_tax,
                                'created' => date("Y-m-d: H:i:s"),
                                'updated' => date("Y-m-d: H:i:s"),
                            ]);
                            $property_id = DB::getPdo()->lastInsertId();

                            $roomDetail = $this->blockDetail($hotels->hotel_id);
                            $hotelReview = $this->getHotelReviews($hotels->hotel_id,$property_id);
                            $this->getHotelPolicy($hotels->hotel_id,$property_id);
                            $rooms_array = [];
                            $policies = "";
                            
                            foreach($roomDetail[0]->block as $rooms){
                                foreach($rooms->block_text->policies as $policy){
                                    $policies .= PHP_EOL;
                                    $policies .= $policy->class.PHP_EOL;
                                    $policies .= $policy->content.PHP_EOL;
                                    $policies .= PHP_EOL;
                                }

                                $room_name = $rooms->room_name;
                                $room_id = $rooms->room_id;
                                
                                PropertyCategoryTypes::insert([
                                    'property_id' => $property_id,
                                    'category_name' => $room_name,
                                    'booking_policy' => $policies,
                                    'bathroom' => $rooms->number_of_bathrooms,
                                    'bads' => $rooms->extrabed_available,
                                    'guests_adults' => $rooms->nr_adults,
                                    // 'cancelation_period' => $rooms->paymentterms->cancellation->timeline->stages[0]->limit_from .','. $rooms->paymentterms->cancellation->timeline->stages[0]->limit_until,
                                    'cancelation_duration' => $rooms->paymentterms->cancellation->timeline->stages[0]->text,
                                    'status' => 0,
                                    'created' => date("Y-m-d: H:i:s"),
                                    'updated' => date("Y-m-d: H:i:s"),
                                ]);
                            }
                             return response()->json(['status' => true]);
                        }
                    }    
            }
            else
            {
                foreach($hotelDetail['response']->result as $hotels){
                    
                    if(properties::where('booking_hotel_id',$request->hotel_id)->exists()){
                            return response()->json(['status' => false]);
                        }else{
                            $pages_no = $hotelDetail['response']->count / 20;
                            for($i=0; $i <=$pages_no; $i++){
                                $hotelDetail = $this->getHotelDetail($i,$request->dest_id);
                                foreach($hotelDetail['response']->result as $hotels){
                                    if(isset($hotels->composite_price_breakdown->product_price_breakdowns[0]->items[0]->item_amount->value)){
                                        $city_tax = $hotels->composite_price_breakdown->product_price_breakdowns[0]->items[0]->item_amount->value;
                                    }
                                    if($hotels->hotel_id == $request->hotel_id){
                                        properties::insert([
                                            'booking_hotel_id' => $request->hotel_id,
                                            'property_name' => $hotels->hotel_name,
                                            'city' => $hotels->city,
                                            'hotel_currency' => $hotels->currencycode,
                                            'latitude' => $hotels->latitude,
                                            'longitude' => $hotels->longitude,
                                            'address' => $hotels->address,
                                            'hotel_time_zone' => $hotels->timezone,
                                            'city_tax' => $city_tax,
                                            'created' => date("Y-m-d: H:i:s"),
                                            'updated' => date("Y-m-d: H:i:s"),
                                        ]);
                                        $property_id = DB::getPdo()->lastInsertId();

                                        $roomDetail = $this->blockDetail($hotels->hotel_id);
                                        
                                        $hotelReview = $this->getHotelReviews($hotels->hotel_id,$property_id);

                                        $this->getHotelPolicy($hotels->hotel_id,$property_id);
                                        $rooms_array = [];
                                        $policies = "";
                                        
                                        foreach($roomDetail[0]->block as $rooms){
                                            foreach($rooms->block_text->policies as $policy){
                                                $policies .= PHP_EOL;
                                                $policies .= $policy->class.PHP_EOL;
                                                $policies .= $policy->content.PHP_EOL;
                                                $policies .= PHP_EOL;
                                            }

                                            $room_name = $rooms->room_name;
                                            $room_id = $rooms->room_id;
                                            
                                            PropertyCategoryTypes::insert([
                                                'property_id' => $property_id,
                                                'category_name' => $room_name,
                                                'booking_policy' => $policies,
                                                'bathroom' => $rooms->number_of_bathrooms,
                                                // 'cancelation_period' => $rooms->paymentterms->cancellation->timeline->stages[0]->limit_from .','. $rooms->paymentterms->cancellation->timeline->stages[0]->limit_until,
                                                // 'cancelation_duration' => $rooms->paymentterms->cancellation->timeline->stages[0]->text,
                                                'status' => 0,
                                                'created' => date("Y-m-d: H:i:s"),
                                                'updated' => date("Y-m-d: H:i:s"),
                                            ]);
                                        }
                                         return response()->json(['status' => true]);
                                    }
                                }    
                            }
                        }    
                    }
                }
        
    }


    public function blockDetail($hotel_id){
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
            if(!empty($response[0])){
                $rooms = $response;
                return $rooms;
            }    
        }
    }

    public function DisplayRoomImages(Request $request){
        $roomImages = $this->blockDetail($request->hotel_id);
        if(isset($roomImages[0]->block[0]->room_id)){
            $room_id = $roomImages[0]->block[0]->room_id;    
        }
        
        foreach ($roomImages[0]->rooms as $key => $value) {
            if($key == $room_id){

                $roomsphotos = view('match.roomphotos', [
                'photos' => $value->photos
                ])->render();

                return json_encode([
                    'roomphotos' => $roomsphotos
                ]);
            }
        }
    }

}    
