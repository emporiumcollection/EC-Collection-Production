<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\properties;
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
        $data = [];
        $hotelExists = [];
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

        $properties = properties::select(['id', 'amadeus_hotel_id', 'property_name', 'isin_amadeus'])
        ->whereNotNull('amadeus_hotel_id')
        ->get();

        $seasons[] = [
            'start' => date("Y").'-01-01',
            'end' => date("Y").'-01-31',
        ];
        $seasons[] = [
            'start' => date("Y").'-04-01',
            'end' => date("Y").'-06-30',
        ];
        $seasons[] = [
            'start' => date("Y").'-07-01',
            'end' => date("Y").'-07-30',
        ];
        $seasons[] = [
            'start' => date("Y").'-10-01',
            'end' => date("Y").'-12-31',
        ];

        foreach($properties as $property){
            foreach($seasons as $season){
//print                $hotelUrl = 'https://api.amadeus.com/v2/shopping/hotel-offers?hotelIds='.$property->amadeus_hotel_id.'&checkInDate='.$season['start'].'&checkOutDate=' . $season['end'];
//print "\n";
print                $hotelUrl = 'https://api.amadeus.com/v2/shopping/hotel-offers?hotelIds='.$property->amadeus_hotel_id.'&checkInDate=2021-10-01&checkOutDate=2021-10-24';

                $getHeaders = array('Authorization' => 'Bearer '.$body->access_token);
                $hotels = Requests::get($hotelUrl, $getHeaders);

                $hotels = json_decode($hotels->body);
                print_r($hotels->data);exit;
                if(isset($hotels->data) && !empty($hotels->data)){
                    foreach($hotels->data as $hotel){
                        print_r($hotel);
                        exit;
                    }
                }else{
                    echo 'NOT data ==' . $property->property_name;        
                }
            }
        }
    }
}