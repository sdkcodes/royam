<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index($id=NULL){
    	if (!is_null($id)){
    		$data['transaction'] = Transaction::findOrFail($id);
    		return view('transaction', $data);
    	}

    	$data['transactions'] = Transaction::all();
    	return view('transactions', $data);
    }

    public function store(Request $request){

    }

    public function update(Request $request, $id){

    }

    public function delete($id){
    	Transaction::where('id', $id)->delete();
    	return back();
    }
}
