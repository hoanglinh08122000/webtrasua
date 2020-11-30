<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function login_customer()
    {
    	return view("user.login");
    }
    public function post_login_customer(Request $rq)
    {
    	if (Auth::guard('customer')->attempt([
            'email' => $rq->email,
            'password' => $rq->password
        ], $rq->get('remember'))) {
            return redirect()->route('view_product');
        } else
            return redirect()->route('login_customer');
     }
     public function register_customer()
     {
     	return view("user.register_customer");
     }
     public function post_register_customer(Request $rq)
     {
     	$customer = new Customer();

     	$customer->last_name = $rq->last_name;
     	$customer->first_name = $rq->first_name;
     	$customer->address = $rq->address;
     	$customer->phone = $rq->phone;
     	$customer->email = $rq->email;
     	$customer->password = bcrypt($rq->password);
     	if ($rq->hasFile('image')) {
			$file = $rq->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' . $extension;
			$file->move('user/',$filename);
			$customer->img = $filename;
		} else {
			return $rq;
			$customer->image = '';
		}

     	$customer->save();

     }
     public function add_img()
     {
     	return view("user.add_img");
     }
  //    public function post_add_img(Request $rq)
  //    {
     	
 	//    	if ($rq->hasFile('image')) {
		// 	$file = $rq->file('image');
		// 	$extension = $file->getClientOriginalExtension();
		// 	$filename = time(). '.' . $extension;
		// 	$file->move('user/',$filename);
		// 	$customer->img = $filename;
		// } else {
		// 	return $rq;
		// 	$customer->image = '';
		// }
  //    }
}
