<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sizepizza extends Model
{
   protected $table = 'size_pizza';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name_size'];  
   public $timestamps = false; 
}
