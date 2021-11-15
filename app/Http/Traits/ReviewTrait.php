<?php

namespace App\Http\Traits;

use App\Models\reviews;
use App\Models\properties;
// use DB;

trait ReviewTrait {
    
    public function getReviews($id){
        
       
        $reviews = reviews::where('hotel_id', '=', $id)->orderBy('id', 'DESC')->get();
        
        return $reviews;
    }
}
