<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    public function subcategories()
    {
    	return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }

    public function images()
    {
    	return $this->hasMany('App\ProductImage','product_id','id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
