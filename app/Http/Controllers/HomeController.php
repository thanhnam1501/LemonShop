<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use App\Supplier;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_food = Product::orderBy('id','DESC')->where('catalog_id',1)->get();
        $products_food_best = Product::orderBy('qty_sold','DESC')->where('catalog_id',1)->get();
        $products_food_popular = Product::orderBy('view','DESC')->where('catalog_id',1)->get();

        $products_houseware = Product::orderBy('id','DESC')->where('catalog_id',3)->get();
        $products_houseware_best = Product::orderBy('qty_sold','DESC')->where('catalog_id',3)->get();
        $products_houseware_popular = Product::orderBy('view','DESC')->where('catalog_id',3)->get();
        $catalogs = Catalog::get();
        $suppliers = Supplier::get();
        return view('home', [
            'products_food'=> $products_food,
            'products_food_best'=> $products_food_best,
            'products_food_popular'=> $products_food_popular,
            'products_houseware'=> $products_houseware,
            'products_houseware_best'=> $products_houseware_best,
            'products_houseware_popular'=> $products_houseware_popular,
            'catalogs' => $catalogs,
             'suppliers' => $suppliers,
        ]);
    } 
    public function homeShowProduct(Request $request){
        $id = $request->get('id');
        $data = Product::find($id);
        $data['view'] = $data['view'] + 1;
        Product::find($id)->update(['view' => $data['view']]);
        $data['supplier_name'] = Supplier::find($data['supplier_id'])->name;
        $data['catalog_name'] = Catalog::find($data['catalog_id'])->name;
        $data['price'] = number_format($data['price']);
        $data['price_discount'] = number_format($data['price_discount']);
        return Response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }
    public function getProductByCatalog($slug){
        $catalog = Catalog::where('slug',$slug)->first();
        $products = Product::where('catalog_id', $catalog['id'])->get();
        $catalogs = Catalog::get(); 
        return view('catalog-view', ['products'=> $products, 'catalogs' => $catalogs] );
    }
    public function getProductBySupplier($slug){
        $supplier = Supplier::where('slug',$slug)->first();
        $products = Product::where('supplier_id', $supplier['id'])->get();
        $catalogs = Catalog::get();
        $suppliers = Supplier::get(); 
        return view('catalog-view', ['products'=> $products, 'catalogs' => $catalogs, 'suppliers' => $suppliers] );
    }
}
