<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function subcategory_products()
    {
    	return $this->hasMany(Product::class);
    }
}
