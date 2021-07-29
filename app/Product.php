<?php

namespace App;

use Category;
// use ProductImage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }
}
