<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
     protected $table = 'tb_companion';

      protected $fillable = ['first_name', 'last_name', 'email','avatar', 'phone_code', 'phone_number','gender', 'preferred_language', 'preferred_currency','status'];
}
