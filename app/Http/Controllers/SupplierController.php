<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
   	public function store(Request $request){
   		$data = $request->all();

   		$data = Supplier::create($data);

      return response()->json([
        'status' => true,
        'data' => $data,
      ]);
   		// $suppliers = Supplier::get()->all()	;
   		
   	}
   	 public function show(){
    	$suppliers = Supplier::orderBy('id','DESC')->get()->all()	;
    	return view('admin/supplier', ['suppliers' => $suppliers]);
    }

    public function edit(Request $request){
      $id = $request->id;
      $data = Supplier::find($id);
      return response()->json([
        'status' => true,
        'data' => $data,
      ]);
    }


    public function update(Request $request){
      $data = $request->all();
      Supplier::find($data['id'])->update($data);
      return response()->json([
        'status' => true,
        'data' => $data,
      ]);
    }

    public function delete(Request $request){
      $id = $request->id;
      Supplier::find($id)->delete();
      return response()->json([
        'status' => true
      ]);
    }
}
