<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function store(Request $request) {
    $data = $request->all();
    $data['slug'] = str_slug($data['name']);
    if($request->hasFile('image_link')){
            $path = $request->file('image_link')->store('image_link');
            $data['image_link'] = $path;
        };
    Product::create($data);
    return redirect()->route('show_product');
    }

    public function show(){
    	$products = Product::get()->all();
    	return view('admin/product', ['products' => $products]);
    }

}
