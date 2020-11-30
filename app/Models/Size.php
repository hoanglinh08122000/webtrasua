<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
   protected $table = 'size';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name','id_product_type'];  
   public $timestamps = false; 
    public function TypeProduct()
    {
    	return $this->belongsTo('App\Models\TypeProduct', 'id_product_type');
    }
}
