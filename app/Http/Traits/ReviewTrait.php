<?php

namespace App\Http\Traits;

use App\Models\Review;
use App\Models\properties;
// use DB;

trait ReviewTrait {
    
    public function getReviews($id){
        
       
        $reviews = review::where('property_id', $id)
        ->where('is_approved', '=', '1')
        ->orderBy('id', 'DESC')
        ->get();
        return $reviews;
    }
}
