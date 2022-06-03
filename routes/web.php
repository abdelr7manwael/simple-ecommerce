<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/products');
});


//products
Route::get('/products','\App\Http\Controllers\ProductController@index');
Route::get('/products/filter','\App\Http\Controllers\ProductController@filter');

//customers
Route::get('/customers','\App\Http\Controllers\CustomerController@index');
Route::get('/customers/filter','\App\Http\Controllers\CustomerController@filter');
