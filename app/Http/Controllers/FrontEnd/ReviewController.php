<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\reviews;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Traits\ReviewTrait;

class ReviewController extends Controller
{
    use ReviewTrait;

    public function addreviews(Request $request){
        $reviews_data = array(
                    'hotel_id' => $request->hotelid, 
                    'rating' => $request->rate, 
                    'fname' => $request->fname, 
                    'lname' => $request->lname, 
                    'country' => $request->country, 
                    'comment' => $request->comment
                    );

        $reviews = reviews::insert( ['hotel_id' => $request->hotelid, 'rating' => $request->rate, 'fname' => $request->fname, 'lname' => $request->lname, 'country' => $request->country, 'comment' => $request->comment]);
        return response()->json( $reviews_data);
    }

    public function getPropertyReviews($id){
        $this->data['reviews'] = $this->getReviews($id);
        return response()->json($this->data['reviews']);
    }
    
}
