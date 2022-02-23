<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\properties;
use App\Models\Review;
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
        $file_name = 'match.matchhotels'; 
        
        // $this->data['matchHotels'] = \DB::table('tb_matched_hotels')->where('is_approved',0)->get();
        // $this->getHotelDetail($hotel_id);
        // print_r($this->data['matchHotels']);exit;


        return view($file_name,$this->data);
    }

    public function machDestination(Request $request){
        $this->data['category'] = \DB::table('tb_categories')->orderBy('category_name','asc')->get();
        $this->data['allprops'] = properties::select(['id', 'property_name'])
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
            echo "cURL Error #:" . $err;echo "here";
        } else {
            $response = json_decode($response);
            if(!empty($response)){
                foreach($response as $val){
                    
                    if(trim($val->dest_type) == 'city'){
                        $this->data['hotels'] =  $this->getProperties($val->dest_id);
                        return view('match.matchhotels')->with($this->data);
                    }
                }
            }else{
                return redirect('/search/destination');
            }
        }
    }


    private function getProperties($dest_id){
        $response = $this->getHotelDetail(0,$dest_id);
        
        if (!$response['status'] == 'success') {
            echo "cURL Error #:".$response['err'];
        } else {
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
                        $parts = explode(" ", $searchValue);
                    
                        if(count($parts)>=2){
                            $searchValue = "$parts[0] $parts[1]";
                        }else{
                            $searchValue = $parts[0];
                        }
                        //$searchValue = str_replace(' ', ' +', $searchValue);
                        $property = properties::whereRaw("MATCH(property_name)AGAINST('" . $searchValue . "' IN BOOLEAN MODE)")->first();
                        
                        //where('property_name','like', "%$value->hotel_name%")->first();
                        if(!empty($property) && !in_array($property->id, $matched)){
                            $matched[] = $property->id;
                            $hotels[] = [
                                'property_id' => $property->id,
                                'dest_id' => $dest_id,
                                'hotel_name' => $value->hotel_name,
                                'hotel_id' => $value->hotel_id,
                                'matched_property' => $property->property_name
                            ];
                            // print $value->hotel_name . '==' . $property->property_name."\n";
                        }
                    }
                    return $hotels;
                }    
            }
        }    
    }

    private function getHotelDetail($pages_no,$dest_id){ 
        $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/search?checkout_date=2022-08-06&room_number=1&filter_by_currency=AED&dest_type=city&locale=en-gb&checkin_date=2022-08-05&adults_number=2&order_by=popularity&units=metric&dest_id=".$dest_id."&children_number=2&categories_filter_ids=class%3A%3A2%2Cclass%3A%3A4%2Cfree_cancellation%3A%3A1&children_ages=5%2C0&include_adjacency=true&page_number=".$pages_no,
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
            $array = array();
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
        //$this->getRoomDetail($request->hotel_id);
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
            // echo $response;exit;
            $response = json_decode($response); 
            $rooms = $response[0]->rooms;
            
            $roomsdetail = view('match.roomdetail', [
                'rooms' => $rooms
            ])->render();

            return json_encode([
                'roomdetail' => $roomsdetail
            ]);
        }
    }


       
}
