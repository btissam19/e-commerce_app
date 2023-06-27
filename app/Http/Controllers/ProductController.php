<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }
    public function create()
    {    return view('product.create');
    }
    public function store(StoreproductRequest $request)        
     {    
        $product= product::create([
            'product_name'=>$request->product_name,
            'product_description'=>$request->product_description,
            'price'=>$request->price,
            'quantity'=>$request->quantity ,
            'availability'=>$request->availability
        
        
        ]);
        $request->user()->product();

        return redirect(route('product.create'));
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
