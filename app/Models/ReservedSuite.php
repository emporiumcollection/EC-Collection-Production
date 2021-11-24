<?php

namespace App\Models;

use App\Models\PropertyCategoryTypes;
use Illuminate\Database\Eloquent\Model;

class ReservedSuite extends Model
{
    protected $table = 'tb_reserved_suites';


    public function suite()
    {
        return $this->belongsTo(PropertyCategoryTypes::class, 'suite_id');
    }
}
    