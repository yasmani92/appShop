<?php

namespace App\Http\Controllers\Admin;

use App\CartDetail;
use App\Http\Controllers\Controller;

use App\ProductImage;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

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
      // validar
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'La descripción corta es un campo obligatorio.',
            'description.max' => 'La descripción corta solo admite hasta 200 caracteres.',
            'price.required' => 'Es obligatorio definir un precio para el producto.',
            'price.numeric' => 'Ingrese un precio válido.',
            'price.min' => 'No se admiten valores negativos.'
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);
      
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
      $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'La descripción corta es un campo obligatorio.',
            'description.max' => 'La descripción corta solo admite hasta 200 caracteres.',
            'price.required' => 'Es obligatorio definir un precio para el producto.',
            'price.numeric' => 'Ingrese un precio válido.',
            'price.min' => 'No se admiten valores negativos.'
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);
        // dd($request->all());
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
