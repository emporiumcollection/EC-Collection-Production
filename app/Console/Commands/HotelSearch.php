<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\properties;
use DB;

class HotelSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'amadeus-search-hotel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backend process to collect hotel data and rates';

    protected $cityCodes = [
        'AAL',
        'ABZ',
        'MAD',
        'ALC',
        'AMS',
        'BCN',
        'BRI',
        'BFS',
        'BEG',
        'BGO',
        'SXF',
        'TXL',
        'BLL',
        'BHX',
        'BOO',
        'BLQ',
        'BOD',
        'KBP',
        'BOH',
        'BRE',
        'BRS',
        'BRU',
        'CRL',
        'BUD',
        'BOJ',
        'CAG',
        'CWL',
        'CTA',
        'CDG',
        'CIA',
        'CGN',
        'CPH',
        'WRO',
        'ORK',
        'DME',
        'DTM',
        'DRS',
        'DUB',
        'DUS',
        'EMA',
        'EDI',
        'EIN',
        'ATH',
        'BSL',
        'EXT',
        'PMO',
        'FAO',
        'OPO',
        'FRA',
        'GDN',
        'GVA',
        'GOA',
        'BHD',
        'GLA',
        'GOT',
        'LPA',
        'GRV',
        'HAM',
        'HAJ',
        'HEL',
        'OTP',
        'HER',
        'LIS',
        'BGY',
        'PDL',
        'FKB',
        'KTW',
        'KZN',
        'KEF',
        'HRK',
        'KRK',
        'KUF',
        'SPC',
        'TER',
        'LBA',
        'LEJ',
        'TLL',
        'FCO',
        'LGG',
        'LPL',
        'LJU',
        'LGW',
        'LHR',
        'LTN',
        'STN',
        'LLA',
        'LUX',
        'LYS',
        'BTS',
        'AGP',
        'MMX',
        'MXP',
        'MLA',
        'MAN',
        'MRS',
        'LIN',
        'MSQ',
        'WMI',
        'MUC',
        'FMO',
        'NAP',
        'NCL',
        'NCE',
        'NWI',
        'NUE',
        'ODS',
        'OSL',
        'PMI',
        'ORY',
        'PSA',
        'ROV',
        'TGD',
        'POZ',
        'PRN',
        'LED',
        'AKT',
        'BZZ',
        'FFD',
        'LKZ',
        'MHZ',
        'RMS',
        'RIX',
        'DSA',
        'SCQ',
        'SJJ',
        'SNN',
        'SVO',
        'SIP',
        'SKP',
        'AER',
        'SOF',
        'SOU',
        'SVG',
        'ARN',
        'STR',
        'TFN',
        'TFS',
        'SKG',
        'TIA',
        'TLS',
        'TSF',
        'TOS',
        'TRD',
        'TRN',
        'UFA',
        'PRG',
        'VAR',
        'VCE',
        'VRN',
        'VIE',
        'VNO',
        'VKO',
        'WAW',
        'KJA',
        'ZAG',
        'ZIA',
        'ZRH',
    ];

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

        //$this->searchCityCodes();
        $this->processUsingLatLong();
        exit;

        $properties = properties::select(['id', 'cityCode', 'property_name', 'isin_amadeus'])
        ->where('is_checked', '=', 0)
        ->whereNotNull('cityCode')
        ->get();

        //$properties[0]->isin_amadeus = 1;
        //$properties[0]->save();

        foreach($properties as $property){
            print $property->id."\n";
            print $hotelUrl = 'https://api.amadeus.com/v2/shopping/hotel-offers?cityCode='.$property->cityCode;
            print "\n";

            DB::table('tb_properties')->where('id', '=', $property->id )->update(array('is_checked' => 1));

            if(!isset($property->cityCode)){
                $getHeaders = array('Authorization' => 'Bearer '.$body->access_token);
                $hotels = Requests::get($hotelUrl, $getHeaders);

                $hotels[$property->cityCode] = json_decode($hotels->body);
            }
            //$hotels = json_decode($hotels->body)->data;
            if(isset($hotels[$property->cityCode]->data) && !empty($hotels[$property->cityCode]->data)){
                foreach($hotels[$property->cityCode]->data as $hotel){
                    //if(strtolower($hotel->hotel->name) == strtolower($property->property_name)){
                    $apiHotelName = str_replace('hotel','', strtolower($hotel->hotel->name));
                    $dbHotelName = str_replace('hotel','', strtolower($property->property_name));

                    $perc = 0;
                    similar_text($apiHotelName, $dbHotelName, $perc);

                    if($apiHotelName == $dbHotelName or $perc > 90){
                        echo 'matched' . $hotel->hotel->name;
                        DB::table('tb_properties')->where('id', '=', $property->id )->update(array('isin_amadeus' => 1));

                        /*if($perc > 90){
                            DB::table('tb_properties')->where('id', '=', $property->id )->update(array('is_parsial_match' => 1));
                        }*/
                    }
                }
            }else{
                echo 'NOT matched' . $property->property_name;        
            }
        }
    }

    private function processUsingLatLong()
    {
        $data = [];

        $properties = properties::select(['id', 'latitude', 'longitude', 'property_name', 'isin_amadeus'])
        ->where('id', '=', 2)
        ->where('is_checked', '=', 0)
        ->get();

        foreach($properties as $property){
            if(!$property->longitude or !$property->latitude) continue;

            print $property->id."\n";
            print $hotelUrl = 'https://api.amadeus.com/v2/shopping/hotel-offers?latitude='.$property->latitude.'&longitude='.$property->longitude;
            print "\n";

            DB::table('tb_properties')->where('id', '=', $property->id )->update(array('is_checked' => 1));

            $getHeaders = array('Authorization' => 'Bearer '.$this->access_token);
            $hotels = Requests::get($hotelUrl, $getHeaders);
            $hotels = json_decode($hotels->body);

            //$hotels = json_decode($hotels->body)->data;
            if(isset($hotels->data) && !empty($hotels->data)){
                foreach($hotels->data as $hotel){
                    //if(strtolower($hotel->hotel->name) == strtolower($property->property_name)){
                    $apiHotelName = str_replace('hotel','', strtolower($hotel->hotel->name));
                    $dbHotelName = str_replace('hotel','', strtolower($property->property_name));

                    $perc = 0;
                    similar_text($apiHotelName, $dbHotelName, $perc);

                    if($apiHotelName == $dbHotelName or $perc > 90){
                        echo 'matched' . $hotel->hotel->name.'='.$hotel->hotel->hotelId;
                        DB::table('tb_properties')->where('id', '=', $property->id )->update(array('isin_amadeus' => 1, 'amadeus_hotel_id' => $hotel->hotel->hotelId));

                        /*if($perc > 90){
                            DB::table('tb_properties')->where('id', '=', $property->id )->update(array('is_parsial_match' => 1));
                        }*/
                    }
                }
            }else{
                echo 'NOT matched' . $property->property_name;
                print "\n";        
            }
        }
    }

    private function searchCityCodes(){
        $properties = properties::select(['city'])
        ->groupBy(['city'])
        ->whereNull('cityCode')
        //->limit(50)
        ->get()->toArray();

        $citiesFound = [];

        foreach($properties as $property){
            if(!$property['city']) continue;
            
            $originalCityName = trim($property['city']);
            $cityName = strtoupper($property['city']);

            print $property['city'] = trim($property['city']);
            /*
            $property['city'] = str_replace(' ', '', $property['city']);
            $property['city'] = strtoupper(substr($property['city'], 0, 3));
            */

            $cityApiUrl = 'https://api.amadeus.com/v1/reference-data/locations?subType=CITY&keyword='.$property['city'].'&page%5Blimit%5D=10&page%5Boffset%5D=0&sort=analytics.travelers.score&view=FULL';

            $getHeaders = array('Authorization' => 'Bearer ' . $this->access_token);
            $results = Requests::get($cityApiUrl, $getHeaders);
            $results = isset(json_decode($results->body)->data)?json_decode($results->body)->data:[];
            
            foreach($results as $result){
                if(strtolower(trim($cityName)) == strtolower(trim($result->name))){
                    DB::table('tb_properties')->where('city', 'like', '%'.$originalCityName.'%' )->update(array('cityCode' => $result->address->cityCode));
                }
            }
        }

        print 'city code updated';
    }
}