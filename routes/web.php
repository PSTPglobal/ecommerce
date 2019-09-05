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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard','AdminController@index')->name('catAdmin');
Route::get('/admin/add-product/store','AdminController@addProdIndex')->name('addProdIndex');
Route::get('/admin/see-products/all','AdminController@productindex')->name('productindex');
Route::post('/add/product/store', 'AdminController@addProduct')->name('addProduct');
Route::post('/add/comment/product', 'ProductsController@addComment')->name('addComment');
