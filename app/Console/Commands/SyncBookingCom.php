<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\properties;
// use App\Models\properties;
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
        $this->getHotelReviews(1676161);
        exit;
        $this->getHotelPolicy(1676161);
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
            print_r($response);exit;
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
            $response = json_decode($response);
            print_r($response);exit;
        }
    }
}