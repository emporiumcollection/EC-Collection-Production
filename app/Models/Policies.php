<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_policies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'privacy_and_cookie_policy',
        'cookie_solution',
        'term_and_condition',
        'consent_solution'
    ];
}
