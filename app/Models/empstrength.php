<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empstrength extends Model
{
    use HasFactory;
        protected $table="empstrength";
            protected $fillable = ['strength'];


}
