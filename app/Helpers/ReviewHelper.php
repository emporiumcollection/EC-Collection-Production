<?php
namespace App\Helpers;

use App\Models\properties;

class ReviewHelper
{
    public static function getHotelName($id)
    {
		
		$property = properties::select('property_name')->where("id", "=", $id)->first();
		 
		return $property->property_name;
    }
}