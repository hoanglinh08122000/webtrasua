<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sizemilktea extends Model
{
   protected $table = 'size_milk_tea';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name_size'];  
   public $timestamps = false; 
}
