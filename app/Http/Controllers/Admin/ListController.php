<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

class ListController extends Controller
{
   public function index()
    {
    	$products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));
    }



    public function create()
    {
       return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
         $product->category_id = $request->input('category_id');
        $product->save(); //CREATE

        return redirect('/admin/products');

    }

    public function edit($id)
    {
       $product =  Product::find($id);
        return view('admin.products.edit')->with(compact('product'));
       
    }
   

   
    public function update(Request $request, $id)
    {
        // $product = new Product();
        $product =  Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->save(); //UPDATE

        return redirect('/admin/products');
    }


    public function delete($id)
    {
       
        $product =  Product::find($id);
        $product->delete(); // DELETE
        return back();
    }



}
