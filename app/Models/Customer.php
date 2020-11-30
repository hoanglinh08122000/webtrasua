<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $table = 'customer';
   protected $primaryKey = 'id'; 
   protected $fillable = [
   	'frist_name',
   	'last_name',
   	'phone',
   	'address',
      'img',
   	'email ',
   	'password',

   ];  
   public $timestamps = false; 
   // protected $attributes = [
   //      'img' => '',
        
   //  ];
}
