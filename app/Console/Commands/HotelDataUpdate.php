<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\properties;
// use App\Models\properties;
use DB;

class HotelDataUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'amadeus-fetch-hotel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process to get data from amadeus by hotelId and update local database';


    private $access_token;

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->authenticate();

        $current_date = strtotime(date("Y-m-d"));
        $week_before = strtotime("-1 week", $current_date);
        $week_before = date("Y-m-d", $week_before);

        $properties = properties::select(['id', 'amadeus_hotel_id', 'property_name', 'isin_amadeus', 'season_year'])
        ->where('amadeus_hotel_id', '!=', '')
        ->where('price_update_date', '<', $week_before)
        ->orWhereNull('price_update_date')
        ->limit(5)
        ->get();

        foreach($properties as $property){
            $seasons = $this->createSeasons();
            $seasons = $this->insertSeasons($property->id, 
                $property->season_year, 
                $seasons);

            $foundPrices[$property->id] = false;
            
            foreach($seasons as $season){
                print $hotelUrl = 'https://api.amadeus.com/v2/shopping/hotel-offers?hotelIds='.$property->amadeus_hotel_id.'&checkInDate='.$season['start'].'&checkOutDate=' . $season['end'];
                print "\n";

                $getHeaders = array('Authorization' => 'Bearer '.$this->access_token);
                $hotels = Requests::get($hotelUrl, $getHeaders);

                $hotels = json_decode($hotels->body);
                // print_r($hotels);exit();
                if(isset($hotels->data) && !empty($hotels->data)){
                    foreach($hotels->data as $hotel){
                        $category_name = '';
                        $category_bed_type = '';
                        if (isset($hotel->offers[0]->room->typeEstimated->category )) {
                            $category_name = $hotel->offers[0]->room->typeEstimated->category;
                        }        
                        if (isset($hotel->offers[0]->room->type )) {
                            $category_name = $hotel->offers[0]->room->type;
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
                        $rack_rate = 0;
                        if(isset($hotel->offers[0]->price->variations->average->base)){
                            $rack_rate = $hotel->offers[0]->price->variations->average->base;
                        }
                        $dayPrices = [];
                        $changes =  $hotel->offers[0]->price->variations->changes;
                        foreach ($changes as $key => $value) {
                            if(count($dayPrices)>=7) break;
                            $dayPrices = $this->getDayPrices($value, $dayPrices);
                        }
                        $foundPrices[$property->id] = true;
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

            if(!$foundPrices[$property->id]){
                DB::table('tb_properties')->where('id', '=', $property->id)->update(['amadeus_nodata'=> 1]);
            }else{
                DB::table('tb_properties')->where('id', '=', $property->id)->update(['price_update_date'=> date('Y-m-d')]);                
            }
        }
    }
    private function authenticate(){
        $data = [];
        //Requests::register_autoloader();
        $url = 'https://api.amadeus.com/v1/security/oauth2/token';
        $auth_data = [
            'client_id'=>'AFyom8EGe57mEOAqDXwOAvQEbK9CZEb9',
            'client_secret'=>'NTgXgybvwSwlRtpm',
            //'client_id'=>'slzhKT0uHLVWZrkWakAs6IktoD6sAB5K',
            //'client_secret'=>'dF0008AIlsZGQrqc',
            'grant_type'=>'client_credentials'
        ];
        $headers = array('Content-Type' => 'application/x-www-form-urlencoded');
        $requests_response = Requests::post($url, $headers, $auth_data);
        $body = json_decode($requests_response->body);
        $this->access_token = $body->access_token;
    }
    private function insertSeasons($property_id, $season_year, $seasons){
        $current_season_year = date("Y");
        $yearExists = DB::table('tb_properties')->where('id', '=', $property_id)->update(['season_year'=> $current_season_year]);

        /*DB::table('tb_seasons')->where('property_id', '=', $property_id)->delete();
        DB::table('tb_seasons_dates')->where('property_id', '=', $property_id)->delete();*/
        DB::table('tb_properties_category_rooms_price')
        ->where('property_id', '=', $property_id)
        ->delete();
        foreach($seasons as $key => $val){
            $start_date = $val['start'];
            $end_date = $val['end'];
            if($season_year != $current_season_year){
                DB::table('tb_seasons')->insert([
                    'season_name' => 'Season '.$key,
                    'property_id' => $property_id,
                ]);
                $lastId = DB::getPdo()->lastInsertId();
                DB::table('tb_seasons_dates')->insert([
                    'season_id' => $lastId,
                    'property_id' => $property_id,
                    'season_from_date' => $start_date,
                    'season_to_date' =>$end_date,
                ]);
                $season_id = $lastId;
            }else{
                $seasonDates = DB::table('tb_seasons_dates')
                    ->select('season_id')
                    ->where('season_from_date','=', $start_date)    
                    ->where('season_to_date','=', $end_date)    
                    ->get();
                $season_id = $seasonDates[0]->season_id;
            }
            $seasons[$key]['season_id'] = $season_id;
         }
         return $seasons;
    }
    private function getDayPrices($value, $dayPrices){
        $from = $value->startDate;
        $to = $value->endDate;        
         while(strtotime($from) <= strtotime($to) ){
                $start_date = strtotime($from);
                $day = date('D', $start_date);
                if(!isset($dayPrices[$day])){
                    if(isset($value->base)){
                        $dayPrices[$day] = $value->base;
                    }else{
                        $dayPrices[$day] = 0;
                    }
                }                
                $from = strtotime("+1 day", $start_date);
                $from = date('Y-m-d', $from);
        }
        return $dayPrices;
    }

    private function insertRates($property_id,$seasons_id,$rack_rate, $dayPrices,$rooms_id){
        DB::table('tb_properties_category_rooms_price')
            ->insert([
                'category_id'       => $rooms_id,
                'property_id'       => $property_id,
                'season_id'         => $seasons_id,
                'rack_rate'         => $rack_rate,
                'monday_price'      => $dayPrices['Mon'],
                'tuesday_price'     => $dayPrices['Tue'],
                'wednesday_price'   => $dayPrices['Wed'],
                'thursday_price'    => $dayPrices['Thu'],
                'friday_price'      => $dayPrices['Fri'],
                'saturday_price'    => $dayPrices['Sat'],
                'sunday_price'      => $dayPrices['Sun'],
            ]);
    }
    private function createSeasons(){
        //fetch property
        $threshold_date = strtotime(date("Y").'-01-01');  
        $threshold_date = strtotime("+1 year", $threshold_date);  
        $threshold_date = date('Y-m-d', $threshold_date);
        $start_date = date("Y").'-01-01';
        $date = strtotime($start_date);
        $year=date("Y",$date);  
        $date = strtotime("+1 week", $date);
        $end_date = date('Y-m-d', $date);
        $seasons[] = [
            'start' => $start_date,
            'end' => $end_date, 
            'year' => $year,
        ];
        while(strtotime($end_date) < strtotime($threshold_date) ){
            $start_date = strtotime($end_date); 
            $start_date = strtotime("+1 day",$start_date);
            $end_date = strtotime("+1 week",$start_date);
            $end_date = date('Y-m-d', $end_date);   
            $seasons[] = [
                'start' => date("Y-m-d", $start_date),
                'end' => $end_date,
                'year' => $year,
            ];
        }
        return $seasons;
    }
}