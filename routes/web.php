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

Route::get('/', ['uses'=>'IndexController@show1Products', 'as'=>'index']);
Route::get('/shop', ['uses'=>'ShopController@show2Products', 'as'=>'shop']);
Route::get('/bads', ['uses'=>'BadsController@badsProducts', 'as'=>'bads']);
Route::get('/details/{id}', 'IndexController@viewProject');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
