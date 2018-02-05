<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

	public function getIndex() {
		return view('admin/admin');
	}
	public function getProduct() {
		return view('admin/product');
	}
	public function store(Request $request){
		$data = $request->all(); 
		Admin::create($data);
		return redirect()->route('admin.dashboard');
	}
}
