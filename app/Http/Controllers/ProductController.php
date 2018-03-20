<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getAddProduct() {
        $data['status'] = '0';
        $data = Product::create($data);
        $catalogs = Catalog::get();
        return view('admin/AddProduct', ['catalogs' => $catalogs]);
    }

    public function store(Request $request) {
         $validatedData = $request->validate([
        'name' => 'required|max:255',
    ]);
    $data = $request->all();
    $data['slug'] = str_slug($data['name']);
    if($request->hasFile('image_link')){
            $path = $request->file('image_link')->store('image_link');
            $data['image_link'] = $path;
        };
        // dd($data);
    $products = Product::create($data);
    return redirect()->route('show_product');
    // return view('admin/EditProduct', ['products' => $products, 'catalogs' => $catalogs]);
    }

    public function show(){
    	$products = Product::orderBy('id','DESC')->get();
        $catalogs = Catalog::get();
    	return view('admin/product', ['products' => $products, 'catalogs' => $catalogs]);
    }

    public function edit(Request $request,$id){
        $products = Product::find($id);
        $data = Catalog::find($products['catalog_id']);
        $products['catalog_name'] = $data['name'];
        $catalogs = Catalog::get();
        return view('admin/Editproduct', ['products' => $products, 'catalogs' => $catalogs]);
    }  
      public function delete(Request $request){
      $id = $request->id;
      Product::find($id)->delete();
      return response()->json([
        'status' => true
      ]);
    } 
}
