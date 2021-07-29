<?php

use App\Product;
use App\ProductImage;
use App\Category;
use Illuminate\Database\Seeder;



class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MODELS FACTORIES
        // factory(Category::class, 5)->create();
        // factory(Product::class, 25)->create();
        // factory(ProductImage::class, 5)->create();


        $categories = factory(Category::class, 3)->create();
        $categories->each(function ($category) {
            $products = factory(Product::class, 5)->make();
            $category->products()->saveMany($products);

            $products->each(function ($p) {
                $images = factory(ProductImage::class, 1)->make();;
                $p->images()->saveMany($images);
            });
        });

    }
}
