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
        return redirect(route('product.index'));
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
