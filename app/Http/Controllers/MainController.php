<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $computers = Product::where('category_id',6)->get();
        $electronics = Product::where('category_id',8)->get();
        $shoes = Product::where('category_id',9)->get();
        $features = Product::where('feature',1)->orderBy('id', 'DESC')->limit(10)->get();
    	$products = Product::orderBy('id', 'DESC')->get();
        $header_categories = Category::all();
        $hotproducts = Product::where('sale','Hot')->get();
        // dd(session()->put('header_categories','$header_categories'));
        // dd($header_categories);session()->put('data',$data);
    	return view('main.layouts.content',compact('products','computers','electronics','shoes','features','header_categories','hotproducts'));
    	// return view('main.home');
    }

    public function detail($id)
    {
    	$product = Product::find($id);
        $header_categories = Category::all();
        $hotproducts = Product::where('sale','Hot')->get();
        $reviews = Review::where('product_id',$id)->get();
        $count_reviews = Review::where('product_id','=',$id)->count();
        $sum_reviews = DB::table('reviews')->where('product_id',$id)->avg('star');
    	return view('main.detail',compact('product','header_categories','hotproducts','reviews','count_reviews','sum_reviews'));
    }

    public function category($id)
    {
        $header_categories = Category::all();
        $category_products = Category::find($id);
        return view('main.category',compact('header_categories','category_products'));
    }
}
