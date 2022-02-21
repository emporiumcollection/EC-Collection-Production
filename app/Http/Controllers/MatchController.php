<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\properties;
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
        
        $this->data['category'] = \DB::table('tb_categories')->get();
        $file_name = 'match.matchhotels'; 
             
        return view($file_name,$this->data);
    }

    public function machDestination(Request $request){

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
                        $dest_id =  $this->getProperties($val->dest_id);            
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
            $exthotels = [];
            $inthotels = [];
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
                        // print $searchValue;exit;
                        //$searchValue = str_replace(' ', ' +', $searchValue);
                        $property = properties::whereRaw("MATCH(property_name)AGAINST('\"" . $searchValue . "\"' IN BOOLEAN MODE)")->first();
                        //where('property_name','like', "%$value->hotel_name%")->first();
                        if(!empty($property) && !in_array($property->id, $matched)){
                            $matched[] = $property->id;
                            $exthotels[] = $value->hotel_name;
                            $inthotels[] = $property->property_name;
                            // print $value->hotel_name . '==' . $property->property_name."\n";
                        }
                    }
                    print_r($exthotels);exit;
                    return redirect('/search/destination')->with('exthotels','hdfghfd');
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

       
}
