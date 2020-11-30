<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sizecoffee;
use App\Models\Sizepizza;
use App\Models\Sizemilktea;
use DB;
use App\Models\Size;
use App\Models\TypeProduct;

class SizeController extends Controller
{
    // size coffee
    public function get_size(){
    	$sizes = Size::get();
        $typeproducts = TypeProduct::get();
    	return view("size.index",[
    		'sizes' => $sizes,
            'typeproducts' => $typeproducts,
    	]);
    }

    public function view_insert_size(){
        $typeproducts= TypeProduct::get();

    	return view("size.view_insert_size",[
            'typeproducts' => $typeproducts,
        ]);
    }
    public function post_size(Request $rq){
    	$name= $rq->name;
        $id_product = $rq->abc;
       
    	DB::table('size')->insert([
            'name' => $name,
            'id_product_type' => $id_product,
        ]);
    	return redirect()->route('get_size');
    }

    public function update_size(Request $rq){
    	$id = $rq->id;
    	$size = Size::find($id);
        $sizes = Size::all();
        $producttypes= TypeProduct::all();

    	return view("size.view_update_size",[
    		'size' => $size,
            'sizes' => $sizes,
            'producttypes' => $producttypes,
    	]);
    }
    
    public function post_update_size(Request $rq){
        $id=$rq->id;
        $name = $rq->name;
        $id_product_type= $rq->abc;

        DB::table('size')->where('id',$id)->update([
            'name'=> $name,
            'id_product_type'=> $id_product_type,

        ]);
        return redirect()->route('get_size');
    }    

    public function delete_size(Request $rq){
        $id=$rq->id;
        DB::table('size')->where('id',$id)->delete();
        return redirect()->route('get_size');
    }
}
