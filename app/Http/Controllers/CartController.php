<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Catalog;
use App\Supplier;
use App\City;
use App\Customer;
use App\Bill;
use App\Bill_detail;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Validator;
class CartController extends Controller
{
    public function cart(){
        $cart = Cart::content();
        $catalogs = Catalog::get();
        $suppliers = Supplier::get();
        return view('shopping-cart', ['cart' => $cart, 'catalogs' => $catalogs,'suppliers' => $suppliers,] );
    }

    public function addToCart(Request $request){
     $id = $request->get('id');
     $data = Product::where('id', $id)->first();
     $add = Cart::add($data['id'],$data['name'],1,$data['price'],['image_link' => $data['image_link']]);
     return Response()->json([
        'status' => true,
        'data' => $add,
    ]);
 }
 public function cart_remove(Request $request){
    $id = $request->get('id');

    $rows = Cart::search(function($key, $id) {
        return $key->id;
    });
    $rowId = $rows->where('id', $id)->first()->rowId;
    Cart::remove($rowId);
    $subtotal = Cart::subtotal();
    return Response()->json([
        'status' => true,
        'data' => $rowId,
        'subtotal' => $subtotal,
    ]);
}

public function getCheckOut() {
    $data = Cart::content();
    $catalogs = Catalog::get();
    $suppliers = Supplier::get();
    $city = City::get();
    return view('checkout',[
        'catalogs' => $catalogs,
        'suppliers' => $suppliers,
        'data' => $data,
        'city' => $city,
    ]);
}

public function postCheckOut(Request $request){
    $data = $request->all();
    
    $customer = Customer::create($data);
    $data['note'] = null;
    $bill = array();
    $bill['customer_id'] = $customer['id'];
    $bill['total'] = Cart::subtotal();
    $bill['note'] = $data['note'];

    $bill = Bill::create($bill);
    $cart = Cart::content();
    if (count($cart) >0) {
        foreach ($cart as $key => $item) {
            $billDetail = new Bill_detail;
            $billDetail->bill_id = $bill->id;
            $billDetail->product_id = $item->id;
            $billDetail->quantily = $item->qty;
            $billDetail->price = $item->price;
            $billDetail->save();
        }
    }
    $catalogs = Catalog::get();
    $suppliers = Supplier::get();
    return view('thank', [  'catalogs' => $catalogs, 'suppliers' => $suppliers,
]);
    
}

public function addqty(Request $request){
    $order = Cart::get($request->rowId); 
    $rows = Cart::update($request->rowId, $order->qty +1);
    $price =number_format(Cart::get($request->rowId)->subtotal)." VNĐ" ;
    return Response()->json([
        'status' => true,
        'data' => $rows,
        'price' => $price,
    ]);
}

public function minusqty(Request $request){
    $rowId = $request->get('rowId');
    $qty = Cart::get($rowId)->qty;
    if($qty > 1){
        $qty = $qty - 1;
       $rows = Cart::update($rowId, $qty);
       $price =number_format(Cart::get($rowId)->subtotal)." VNĐ" ;
       return Response()->json([
        'status' => true,
        'data' => $rows,
        'price' => $price,
    ]);
   }else if($qty == 1){
     $rows = Cart::get($rowId);
        $price = number_format(Cart::get($rowId)->subtotal)." VNĐ" ;
     return Response()->json([
        'status' => true,
        'data' => $rows,
        'price' => $price,
          ]);
   } 
}
}

