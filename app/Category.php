<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tb_categories';

      protected $fillable = ['id', 'parent_category_id', 'category_name','category_description', 'category_image', 'category_alias','category_custom_title', 'category_approved', 'category_published','category_featured','category_order_num','user_id','category_featured'];
}
