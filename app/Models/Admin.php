<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   protected $table = 'admin';
   protected $primaryKey = 'id'; 
   protected $fillable = [
   	'frist_name',
   	'last_name',
   	'phone',
   	'address',
   	'email ',
   	'password',

   ];  
   public $timestamps = false; 
}
