<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();

        if (!$product) {
            return redirect()->route('product.create');
        }
    
        return view('product.index', compact('product'));
    }
    public function create()
    {    return view('product.create');
    }
    public function store(StoreproductRequest $request)        
     {    
      

  
        $product = Product::create([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'availability' => $request->availability
        ]);

    return redirect()->route('product.index');
    }
    public function show(product $product)
    {
        
    }
    public function edit(product $product)
    {
        //
    }
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    public function destroy(product $product)
    {
        //
    }
}
