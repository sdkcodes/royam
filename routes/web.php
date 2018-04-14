<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', function(){
	return view('dashboard');
});


Route::post('admin/transactions', "TransactionController@store");
Route::get('admin/transactions', "TransactionController@index");
Route::get('admin/transactions/{transaction}', "TransactionController@index");
Route::put('admin/transactions/{transaction}', "TransactionController@update");
Route::delete('admin/transactions/{transaction}', "TransactionController@delete");

Route::get('admin/newuser', "UserController@new");
Route::post('admin/users', "UserController@store");
Route::get('admin/users', "UserController@index");
Route::get('admin/users/{user}', "UserController@index");
Route::put('admin/users/{user}', "UserController@update");
Route::delete('admin/users/{user}', "UserController@delete");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
