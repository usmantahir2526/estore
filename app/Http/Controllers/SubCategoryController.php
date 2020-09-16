<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gender;
use App\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = Subcategory::all();
        return view('admin.subcategory.show',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $gender = Gender::all();
        return view('admin.subcategory.subcategory',compact('category','gender'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new Subcategory;
        $subcategory->subcategory = $request->subcategory;
        $subcategory->category_id = $request->category;
        $subcategory->gender_id = $request->gender;

        $subcategory->save();
        return redirect(route('sub.index'))->with('status','Successfully Inserted...!!!');
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
        $subcategory = Subcategory::find($id);
        $category = Category::all();
        $gender = Gender::all();
        return view('admin.subcategory.edit',compact('subcategory','category','gender'));
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
        $subcategory = Subcategory::find($id);
        $subcategory->subcategory = $request->subcategory;
        $subcategory->category_id = $request->category;
        $subcategory->gender_id = $request->gender;

        $subcategory->save();
        return redirect(route('sub.index'))->with('status','Successfully Updated...!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Subcategory::find($id)->delete();
        return back()->with('status','Delete Successfully..!!');
    }
}
