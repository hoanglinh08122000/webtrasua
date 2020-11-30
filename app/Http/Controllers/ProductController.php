<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\TypeProduct;
use App\Models\Size;
use DB;

class ProductController extends Controller
{
	public function index()
	{
		$products = Product::get();
		$typeproducts = TypeProduct::get();
		return view("product.index",[
			'products' => $products,
			'typeproducts' => $typeproducts,
		]);
	}
    public function view_insert_product()
    {
    	$typeproducts = TypeProduct::all();
    	$sizes = Size::all();
   		return view("product.view_insert_product",[
   			'typeproducts' => $typeproducts,
   			'sizes' => $sizes,
   		]);
    }
    public function post_insert_product(Request $rq)
    {

    	// $name_product = $rq->name_product;
    	// $price = $rq->price;
    	// $description = $rq->description;
    	// $status = $rq->status;
    	// $product_type = $rq->product_type;
    	// $img = $rq->file('image');
    	// $filename = $img -> getClientOriginalName();
    	// $filename = time(). '.' . $filename;

    	// $path = $img -> move('.pubimages',$filename);

    	// DB::table('product')->insert([
    	// 	'name' => $name_product,
    	// 	'price' => $price,
    	// 	'description' => $description,
    	// 	'status' => $status,
    	// 	'id_product_type' => $product_type,
    	// 	'img' => $path,
    	// ]);

    	$product = new Product();
    	$product->name = $rq->input('name_product');
    	$product->price = $rq->input('price');
		$product->description = $rq->input('description');
		$product->status = $rq->input('status');
		$product->id_product_type = $rq->input('product_type');

		if ($rq->hasFile('image')) {
			$file = $rq->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' . $extension;
			$file->move('images/',$filename);
			$product->img = $filename;
		} else {
			return $rq;
			$product->image = '';
		}

		$product->save();

		return redirect()->route('view_product');
    }
    public function update_product(Request $rq)
    {
    	$id = $rq->id;
    	$status = Product::get('status');
    	$product = Product::find($id);
    	$typeproducts = TypeProduct::all();
    	return view("product.view_update_product",[
    		'product' => $product,
    		'typeproducts' => $typeproducts,
    		'status' => $status,
    	]);
    }

    public function post_update_product(Request $rq,$id)
    {
    	$a = $rq->product_type;
    	
    	$product = Product::find($id);

    	$product->name = $rq->input('name');
    	$product->price = $rq->input('price');
		$product->description = $rq->input('description');
		$product->status = $rq->input('status');
		$product->id_product_type = $a;

		if ($rq->hasFile('image')) {
			$file = $rq->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' . $extension;
			$file->move('images/',$filename);
			$product->img = $filename;
		} 

		$product->save();

		return redirect()->route('view_product');
    }

    public function delete_product($id)
    {
    	
    	Product::find($id)->delete();
    	
    	return redirect()->route('view_product');
    }	
}
