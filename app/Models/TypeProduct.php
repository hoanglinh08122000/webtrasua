<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
   protected $table = 'product_type';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name_product_type'];  
   public $timestamps = false; 
}
