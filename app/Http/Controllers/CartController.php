<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Validators\CartItemValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
	public function index()
	{
		$header_categories = Category::all();
		$data = \Cart::getContent();
		//dd($data);
		session()->put('data',$data);
		return view('main.checkout',compact('data','header_categories'));
	}

	public function addItem($id)
	{
		$pro = Product::find($id);
			\Cart::add(array(
			    'id' => $pro->id, // inique row ID
			    'name' => $pro->title,
			    'price' => $pro->price,
			    'quantity' => 1,
			    'attributes' => array(
			    	'img' => $pro->images
			    )
			));


		$data = \Cart::getContent();
		// dd($data);
		// session()->put('data',$data);	
		 //return back('main.home');
		$output='';
		foreach ($data as $pro) {
		// dd($pro->attributes->img[0]->image);
		$output .= '<div class="col-xs-4"><div class="image"><a href="/detail/'.$pro->id.'"><img src="'.url('images/'.$pro->attributes->img[0]->image).'"alt=""></a></div></div><div class="col-xs-7"><h3 class="name"><a href="/detail/'.$pro->id.'">'.$pro->name.'</a></h3><div class="price">Rs.'.$pro->price.'</div></div>';
		}

		$data['output'] = $output;
		$data['total'] = \Cart::getTotal();
		$data['quantity'] = \Cart::getContent()->count();

		return json_encode($data);
	}

	public function remove($id)
	{
		\Cart::remove($id);
		return back();
	}

	public function update(Request $request)
	{
		$id = $request->id;
		$qty = $request->qty;
		\Cart::update($id, array(
		  'quantity' => array(
		      'relative' => false,
		      'value' => $qty
		  ),
		));
  		return response()->json([
  			'message' => 'Successfully Updated Your Cart',
  			'class' => 'alert-success',
  		]);
		
	}


  //   public function index($id)
  //   {
    	
  //   	$product = Product::find($id);
  //   	$rowId = rand(); // generate a unique() row ID
		// $userID = Auth::user()->id; // the user ID to bind the cart contents

		// // add the product to cart
		// $cart = \Cart::add(array(
		// 	    'id' => $product->id,
		// 	    // 'productid' => $product,
		// 	    'name' => $product->title,
		// 	    'price' => $product->price,
		// 	    'quantity' => $product->quantity,
		// 	    'attributes' => array(),
		// 	    'associatedModel' => 'Product'
		//     ));
		   
		// $data =	\Cart::getContent();
		// $products = Product::find($id)->images;
		// return view('main.checkout',compact('data','products'));
  //   }

  //   public function showcart()
  //   {
  //   	$data =	\Cart::getContent();
  //   	return view('main.checkout',compact('data'));
  //   }

  //   public function remove($id)
  //   {
  //   	$remove = \Cart::remove($id);
  //   	return back();
  //   }
}
