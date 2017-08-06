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

Route::get('/', 'HomeController@index');
Route::get('/home.html', 'HomeController@index');
Route::get('/listproduct/{id_categoryChild}-{name_categoryChild}.html', 'ProductController@getListProductByChild');
Route::get('/listproductpa/{id_categoryParent}-{name_categoryParent}.html', 'ProductController@getListProductByParent');
Route::get('/detailproduct/{id}-{alias}.html', 'ProductController@getDetailProduct');
Route::get('/preview/{id}-{alias}.html', 'ProductController@getPreview');
Route::get('/cart.html','CartController@index')->name('cart');
Route::get('/addcart/{id}-{alias}.html', 'CartController@addCart');
Route::post('/deletecartitem', 'CartController@deleteCartItem');
Route::post('/destroycart', 'CartController@destroyCart');
Route::get('/checkout.html','CartController@getCheckOut');