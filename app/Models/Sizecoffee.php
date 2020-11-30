<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sizecoffee extends Model
{
   protected $table = 'size_coffee';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name_size'];  
   public $timestamps = false; 
}
