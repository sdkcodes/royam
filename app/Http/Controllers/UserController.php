<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id=NULL){
    	if (!is_null($id)){
    		$data['user'] = User::findOrFail($id);
    		return view('user', $data);
    	}
    	$data['users'] = User::all();
    	return view('users', $data);
    }

    public function store(Request $request){

    }

    public function update(Request $request, $id){

    }

    public function delete($id){
    	User::find($id)->delete();
    	return back();
    }
}
