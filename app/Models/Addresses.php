<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
   protected $table = 'tb_reservation_address';

   protected $fillable = ['id', 'reservation_id', 'title','first_name', 'last_name', 'email','telephone', 'country', 'address1','address2','city','state','zip_code'];
}
