<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('id','DESC')->get()->all();
        return view('home', ['data'=> $data]);
    }
}