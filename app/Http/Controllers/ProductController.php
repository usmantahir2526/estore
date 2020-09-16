<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use App\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('admin.product.product',compact('category','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->feature= $request->feature;
        $product->sale= $request->sale;
        $product->body = $request->body;
        $product->short_desc = $request->short_desc;
        $product->save();

        if($product->save())
        {
            if(count($request->file('image')))
            {
                $images = $request->file('image');
                foreach ($images as $image) {
                    $product_image = new ProductImage;
                    $new_name = rand().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('images'), $new_name);
                    $product_image->product_id = $product->id;
                    $product_image->image = $new_name;
                    $product_image->save();
                }
            }
        }

        return response()->json([
            'message' => 'Successfully Inserted...!!',
            'class' => 'alert-success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('admin.product.edit',compact('product','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->feature= $request->feature;
        $product->sale= $request->sale;
        $product->body = $request->body;
        $product->short_desc = $request->short_desc;
        $product->save();
        // dd($product);

        if($product->save())
        {
            if($request->file('image') && count($request->file('image')) > 0)
            {
                $images = $request->file('image');
                foreach ($images as $image) {
                    $product_image = new ProductImage;
                    $new_name = rand().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('images'), $new_name);
                    $product_image->product_id = $product->id;
                    $product_image->image = $new_name;
                    $product_image->save();
                }
            }
        }

        return response()->json([
            'message' => 'Successfully Inserted...!!',
            'class' => 'alert-success',
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Product::find($id)->delete();
        return back()->with('status','Successfully Deleted');
    }
}
