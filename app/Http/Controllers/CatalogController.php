<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class CatalogController extends Controller
{
    public function show(){
     $catalogies =	Catalog::orderBy('id','DESC')->get()->all()  ;
     return view('admin\catalog', ['catalogies' => $catalogies]);
    }

    public function store(Request $request){
    	$data = $request->all();
    	Catalog::create($data);
    	return response()->json([
        'status' => true,
        'data' => $data,
    ]);
}


    public function edit(Request $request){
      $id = $request->id;
      $data = Catalog::find($id);
      return response()->json([
        'status' => true,
        'data' => $data,
      ]);
    }


    public function update(Request $request){
      $data = $request->all();
      Catalog::find($data['id'])->update($data);
      return response()->json([
        'status' => true,
        'data' => $data,
      ]);
    }

    public function delete(Request $request){
      $id = $request->id;
      Catalog::find($id)->delete();
      return response()->json([
        'status' => true
      ]);
    }
}
