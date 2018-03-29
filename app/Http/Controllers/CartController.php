<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Catalog;
use App\City;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    public function cart(){
        $cart = Cart::content();
        $catalogs = Catalog::get();
        return view('shopping-cart', ['cart' => $cart, 'catalogs' => $catalogs] );
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
    $city = City::get();

    return view('checkout',[
        'catalogs' => $catalogs,
         'data' => $data,
         'city' => $city,
     ]);
}

public function postCheckOut(Request $request){
    $data = $request->all();
    dd($data);
}

//     public function cart()
//     {
//      if (Request::isMethod('post')) {
//         $this->data['title'] = 'Giỏ hàng của bạn';
//         $product_id = Request::get('product_id');
//         $product = Product::find($product_id);
//         $cartInfo = [
//             'id' => $product_id,
//             'name' => $product->name,
//             'price' => $product->price,
//             'qty' => '1'
//         ];
//         Cart::add($cartInfo);
//     }

//          //increment the quantity
//     if (Request::get('product_id') && (Request::get('increment')) == 1) {
//         $rows = Cart::search(function($key, $value) {
//             return $key->id == Request::get('product_id');
//         });
//         $item = $rows->first();
//         Cart::update($item->rowId, $item->qty + 1);
//     }

//         //decrease the quantity
//     if (Request::get('product_id') && (Request::get('decrease')) == 1) {
//         $rows = Cart::search(function($key, $value) {
//             return $key->id == Request::get('product_id');
//         });
//         $item = $rows->first();
//         Cart::update($item->rowId, $item->qty - 1);
//     }


//   $cart = Cart::content();
//   $this->data['cart'] = $cart;
//   return view('shopping-cart', $this->data);

// }



// public function getCheckOut() {
//     $this->data['title'] = 'Check out';
//     $this->data['cart'] = Cart::content();
//     $this->data['total'] = Cart::total();
//     return view('checkout', $this->data);
// }

// public function postCheckOut(Request $request) {
//     $cartInfor = Cart::content();
//         // validate
//     $rule = [
//         'fullName' => 'required',
//         'email' => 'required|email',
//         'address' => 'required',
//         'phoneNumber' => 'required|digits_between:10,12'

//     ];

//     $validator = Validator::make(Input::all(), $rule);

//     if ($validator->fails()) {
//         return redirect('/checkout')
//         ->withErrors($validator)
//         ->withInput();
//     }

//     try {
//             // save
//         $customer = new Customer;
//         $customer->name = Request::get('fullName');
//         $customer->email = Request::get('email');
//         $customer->address = Request::get('address');
//         $customer->phone_number = Request::get('phoneNumber');
//             //$customer->note = $request->note;
//         $customer->save();

//         $bill = new Bill;
//         $bill->customer_id = $customer->id;
//         $bill->date_order = date('Y-m-d H:i:s');
//         $bill->total = str_replace(',', '', Cart::total());
//         $bill->note = Request::get('note');
//         $bill->save();

//         if (count($cartInfor) >0) {
//             foreach ($cartInfor as $key => $item) {
//                 $billDetail = new BillDetail;
//                 $billDetail->bill_id = $bill->id;
//                 $billDetail->product_id = $item->id;
//                 $billDetail->quantily = $item->qty;
//                 $billDetail->price = $item->price;
//                 $billDetail->save();
//             }
//         }
//           // del
//         Cart::destroy();

//     } catch (Exception $e) {
//         echo $e->getMessage();
//     }
// }
}
