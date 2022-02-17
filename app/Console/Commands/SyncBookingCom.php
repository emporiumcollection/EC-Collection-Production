<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\properties;
use App\Models\Review;
use DB;

class SyncBookingCom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync-bookingcom-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process to get data from booking.com by hotelId and update local database';


    private $access_token;

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $this->getHotelReviews(1676161);
        $this->getProperties();
        exit;
        // $this->getHotelPolicy(1676161);
        $properties = properties::select(['id', 'gds_hotel_id', 'property_name'])
        ->whereNotNull('gds_hotel_id')
        ->where('id', '=', 2)
        ->get();

        foreach($properties as $property){
            $seasons = $this->createSeasons();
            $seasons = $this->insertSeasons($property->id, 
                $property->season_year, 
                $seasons);
            
            foreach($seasons as $season){
                print $hotelUrl = 'https://api.amadeus.com/v2/shopping/hotel-offers?hotelIds='.$property->amadeus_hotel_id.'&checkInDate='.$season['start'].'&checkOutDate=' . $season['end'];
                print "\n";

                $getHeaders = array('Authorization' => 'Bearer '.$this->access_token);
                $hotels = Requests::get($hotelUrl, $getHeaders);

                $hotels = json_decode($hotels->body);
                // print_r($hotels);exit();
                if(isset($hotels->data) && !empty($hotels->data)){
                    foreach($hotels->data as $hotel){
                        // print_r($hotel->offers[0]);exit;
                        if (isset($hotel->offers[0]->room->typeEstimated->category )) {
                            $category_name = $hotel->offers[0]->room->typeEstimated->category;
                        }        
                        if (isset($hotel->offers[0]->room->typeEstimated->bedType )) {
                            $category_bed_type = $hotel->offers[0]->room->typeEstimated->bedType; 
                        }
                        $fetch_types = DB::table('tb_properties_category_types')
                                ->select('id')
                                ->where('category_name','=', $category_name)    
                                ->where('property_id','=', $property->id)    
                                ->get();
                        // If doesn't exists insert
                        if (empty($fetch_types)) {
                            $insertTypes = DB::table('tb_properties_category_types')
                            ->insert([
                                'property_id' => $property->id,
                                'category_name' => $category_name
                            ]);
                            $category_type_id = DB::getPdo()->lastInsertId();
                        }else{
                            $category_type_id = $fetch_types[0]->id;
                        }
                        $merge_name = $category_name." ".$category_bed_type;
                        //Fetch Properties_id and Name 
                        $getdata = DB::table('tb_properties_category_rooms')
                        ->select('id','property_id','room_name')
                        ->where('property_id','=', $property->id)    
                        ->where('room_name','=', $merge_name)
                        ->get();
                        //if doesn't exists insert data
                        if (empty($getdata)) {
                            DB::table('tb_properties_category_rooms')->insert([
                                'property_id' => $property->id,
                                'category_id' => $category_type_id,
                                'room_name' => $merge_name  
                            ]);
                            $rooms_id = DB::getPdo()->lastInsertId();
                        }else{
                            $rooms_id = $getdata[0]->id;    
                        }
                        $property_id = $property->id;
                        $rack_rate = $hotel->offers[0]->price->variations->average->base;
                        $dayPrices = [];
                        $changes =  $hotel->offers[0]->price->variations->changes;
                        foreach ($changes as $key => $value) {
                            if(count($dayPrices)>=7) break;
                            $dayPrices = $this->getDayPrices($value, $dayPrices);
                        }
                        $this->insertRates($property_id,
                            $season['season_id'], 
                            $rack_rate, 
                            $dayPrices,
                            $rooms_id );
                    }                    
                }else{
                    echo 'NOT data ==' . $property->amadeus_hotel_id;
                    /*$hotelUrl = 'https://api.amadeus.com/v2/shopping/hotel-offers?hotelIds=EBMIAEBE&checkInDate=2021-09-08&checkOutDate=2021-10-01';

                    $getHeaders = array('Authorization' => 'Bearer '.$this->access_token);
                    $hotels = Requests::get($hotelUrl, $getHeaders);

                    $hotels = json_decode($hotels->body);
                    print_r($hotels);
                    exit;*/
                }
            }
            exit;
        }
    }
    
    private function getProperties(){

        $response = $this->getHotelDetail(0);
        
        if (!$response['status'] == 'success') {
            echo "cURL Error #:".$response['err'];
        } else {
            $matched = [];
            print_r($response['response']);exit;
            $pages_no = $response['response']->count / 20;
            for($i=0; $i <=$pages_no; $i++){
                
                $response = $this->getHotelDetail($i);
                if (!$response['status'] == 'success') {
                    echo "cURL Error #:" . $response['err'];
                } else {
                    foreach ($response['response']->result as $value) {
                        $searchValue = addslashes($value->hotel_name);
                        $parts = explode(" ", $searchValue);
                        print_r($parts);exit;
                        if(count($parts)>=2){
                            $searchValue = "$parts[0] $parts[1]";
                        }else{
                            $searchValue = $parts[0];
                        }
                        print $searchValue;exit;
                        //$searchValue = str_replace(' ', ' +', $searchValue);

                        $property = properties::whereRaw("MATCH(property_name)AGAINST('\"" . $searchValue . "\"' IN BOOLEAN MODE)")->first();
                        //where('property_name','like', "%$value->hotel_name%")->first();
                        if(!empty($property) && !in_array($property->id, $matched)){
                            $matched[] = $property->id;
                            print $value->hotel_name . '==' . $property->property_name."\n";
                        }
                    }
                }    
            }
        }    
    }

    private function getHotelDetail($pages_no){
        $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://booking-com.p.rapidapi.com/v1/hotels/search?checkout_date=2022-08-06&room_number=1&filter_by_currency=AED&dest_type=city&locale=en-gb&checkin_date=2022-08-05&adults_number=2&order_by=popularity&units=metric&dest_id=-1456928&children_number=2&categories_filter_ids=class%3A%3A2%2Cclass%3A%3A4%2Cfree_cancellation%3A%3A1&children_ages=5%2C0&include_adjacency=true&page_number=".$pages_no,
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
    private function getHotelReviews($hotel_gds_id){
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
            $response = json_decode($response);
            foreach($response->result as $value){
                $insert = review::insert([
                    'hotel_id' => 2,
                    'fname' => $value->author->name,
                    'comment' => 'Pros : '.$value->pros . PHP_EOL.'Cons : '.$value->cons,
                    'is_approved' => 1
                ]);
            }
        }
    }

    private function getHotelPolicy($hotel_gds_id){
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

            $insert = \DB::table('td_property_terms_n_conditions')->insert([
                'property_id' => $hotel_gds_id,
                'terms_n_conditions' => $policies     
            ]);
        }
    }
}

