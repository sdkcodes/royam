<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Prologue\Alerts\Facades\Alert;

class UserController extends Controller
{
    public function index($id=NULL){

    	if (!is_null($id)){
    		$data['user'] = User::findOrFail($id);
    		return view('edituser', $data);
    	}
    	$data['users'] = User::all();
    	return view('users', $data);
    }

    public function new(){
    	return view('adduser');
    }
    public function store(Request $request){
    	$this->validate($request, []);

    	$user = new User;
    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->address = $request->address;
    	$user->city = $request->city;
    	$user->state = $request->state;
    	$user->postal_code = $request->postal;
    	$user->save();
    	Alert::success("User created successfully")->flash();
    	return back();
    }

    public function update(Request $request, $id){
    	$user = User::findOrFail($id);
    	$user = new User;
    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->address = $request->address;
    	$user->city = $request->city;
    	$user->state = $request->state;
    	$user->postal_code = $request->postal;
    	$user->save();

    	return back();	
    }

    public function delete($id){
    	User::find($id)->delete();
    	return back();
    }
}
