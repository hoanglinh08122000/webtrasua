<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TypeProduct;
use DB;

class TypeProductController extends Controller
{
    public function index()
    {
    	$typeproducts = TypeProduct::all();
    	return view("typeproduct.index",[
    		'typeproducts' => $typeproducts,
    	]);
    }

    public function view_post(){
    	return view("typeproduct.store");
    }

    public function post_typeproduct(Request $rq){
    	$name= $rq->name;
    	DB::table('product_type')->insert([
    		'name_product_type' => $name,
    	]);
    	return redirect()->route('typeproduct.index');
    }

    public function update(Request $rq)
    {
    	$id= $rq->id;
    	$product_types = TypeProduct::find($id);
    	return view("typeproduct.view_update",[
    		'product_types' => $product_types,
    	]);
    }

    public function post_update(Request $rq)
    {
    	$id=$rq->id;
    	$name = $rq->name;
    	DB::table('product_type')->where('id',$id)->update([
    		'name_product_type'=> $name
    	]);
    	return redirect()->route('typeproduct.index');
    }

    public function delete(Request $rq)
    {
    	$id=$rq->id;
    	DB::table('product_type')->where('id',$id)->delete();
    	return redirect()->route('typeproduct.index');
    }
    
}
