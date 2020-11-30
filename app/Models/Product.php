<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'product';
   protected $primaryKey = 'id'; 
   protected $fillable = [
   	'name',
   	'price',
   	'description',
   	'img',
   	'id_product_type ',
   	'status',

   ];  
   public $timestamps = false; 
}
