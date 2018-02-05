<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class CatalogController extends Controller
{
    public function show(){
     $catalogies =	Catalog::get()->all();
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
}
