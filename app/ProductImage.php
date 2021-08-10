<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

     public function getUrlAttribute()
    {
        if (substr($this->image, 0, 4) === "http") {
            return $this->image;
        }
        return '/img/storages/' . $this->image;
    }
}
