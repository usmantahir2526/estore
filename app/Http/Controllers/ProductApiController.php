<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductApiController extends Controller
{
    public function index()
    {
    	$product = Product::all();

    	// return $iid = $this->$product->id;
	    return response()->json([
	    	'product' => $product,
	    ]);
    }

    public function show($id)
    {
    	$singleproduct = Product::find($id);
    	$productreviews = Review::where('product_id',$id)->get();
    	$productimages = Product::find($id)->images;
    	$totalreviews = Review::where('product_id',$id)->count();
    	$rating = DB::table('reviews')->where('product_id',$id)->avg('star');
    	return response()->json([
    		'singleproduct' => $singleproduct,
    		'totalreviews' => $totalreviews,
    		'ratings' => $rating,
    		'reviews' => $productreviews,
    		'images' => $productimages,
    	]);
    }
}
