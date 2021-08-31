<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecurityQuestions extends Model
{
    protected $table = 'tb_security_questions';
    
		protected $fillable = ['id', 'question'];
}
