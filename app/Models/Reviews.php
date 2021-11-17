<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
   protected $table = 'tb_reviews';

   protected $fillable = ['id', 'hotel_id', 'rating','fname', 'lname', 'country','comment'];
}
