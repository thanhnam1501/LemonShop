<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show(){
    	$users = User::orderBy('id','DESC')->get();
    	return view('admin/user', ['users' => $users]);
    }
    public function store(Request $request){
    	$data = $request->all();
    	$data['password'] = bcrypt($data['password']);
    	$data = User::create($data);
    	return response()->json([
    		'status' => true,
    		'data' => $data,
    	]);
    }
    public function edit(Request $request){
      $id = $request->get('id');
      $data = User::find($id);
      return response()->json(['
        status' => true,
        'data' => $data
      ]);
    }

    public function update(Request $request){
      $data = $request->all();
      User::find($data['id'])->update($data);
      return response()->json([
        'status' => true,
        'data' => $data,
      ]);
    }

    public function delete(Request $request){
      $id = $request->id;
      User::find($id)->delete();
      return response()->json([
        'status' => true
      ]);
    }
}
