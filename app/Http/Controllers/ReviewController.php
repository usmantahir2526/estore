<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
	// protected $id;
	// public function __constructor()
	// {
	// 	$id = 6;
	// }
    public function index(Request $request)
    {
    	$rules = $request->validate([
    		'star' => 'required',
    		'name' => 'required',
    		'summary' => 'required',
    		'review' => 'required',
    	]);
    	$review = new Review;
    	$id = $request->product_id;
    	$review->product_id = $request->product_id;
    	$review->star = $request->star;
    	$review->name = $request->name;
    	$review->summary = $request->summary;
    	$review->review = $request->review;
    	$review->save();
    	if($review->save())
    	{
    		$data['message'] = "Successfully Insert";
	    	$data['class'] = "alert-success";
	    	$data['rules'] = $rules;
	    	$data['output'] = Product::find($request->product_id)->reviews;

	    	return json_encode($data);
    	}
    }

    // public function show()
    // {

    // 	return $product_comment = Product::all();
    // }
}
