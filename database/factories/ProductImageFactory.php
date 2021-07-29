<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'image' => $faker->image('public/img/storages',250,250, null, false),
        'product_id' => $faker->numberBetween(1, 5),
        

    ];

});
