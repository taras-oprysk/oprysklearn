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


Route::get('/otest', function () {
    
	$name1 = request('input_name');

    return view('otest', ['o_name' => $name1]);

    //return view('otest', ['o_name' => request('input_name')]);
});