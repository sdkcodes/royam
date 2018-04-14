<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;

class TransactionController extends Controller
{
    public function index($id=NULL){
    	if (!is_null($id)){
    		$data['transaction'] = Transaction::findOrFail($id);
    		return view('edittransaction', $data);
    	}

    	$data['transactions'] = Transaction::all();
    	return view('transactions', $data);
    }

    public function new(){
    	return view('addtransaction');
    }
    public function store(Request $request){
    	$this->validate($request, []);
    	$email = $request->email;
    	$t = new Transaction;
    	$t->user_id = User::where('email', $email)->first()->id;
    	$t->user_name = User::where('email', $email)->first()->name();
    	$t->class = $request->class;
    	$t->price = $request->price;
    	$t->departure_location = $request->departure;
    	$t->arrival_location = $request->arrival;
    	$t->departure_time = $request->departure_time;
    	$t->arrival_time = $request->arrival_time;
    	$t->adult_count = $request->adult_count;
    	$t->children_count = $request->children_count;
    	$t->infant_count = $request->infant_count;
    	$t->save();

    	Alert::success("Transaction created")->flash();
    	return back();
    }

    public function update(Request $request, $id){
    	$this->validate($request, []);
    	$t = Transaction::findOrFail($id);
    	
    	$t->class = $request->class;
    	$t->price = $request->price;
    	$t->departure_location = $request->departure;
    	$t->arrival_location = $request->arrival;
    	// $t->departure_time = $request->departure_time;
    	// $t->arrival_time = $request->arrival_time;
    	$t->adult_count = $request->adult_count;
    	$t->children_count = $request->children_count;
    	$t->infant_count = $request->infant_count;
    	$t->save();	

    	Alert::success("Transaction updated")->flash();
    	return back();
    }

    public function delete($id){

    	Transaction::where('id', $id)->delete();
    	Alert::info("Transaction deleted")->flash();
    	return back();
    }
}
