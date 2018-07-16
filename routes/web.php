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

Route::post('/', 'ItemsController@store');
Route::get('/items', 'ItemsController@index');

Route::post('/items', 'ItemsController@addToShoppingList');
Route::get('/items', 'ItemsController@showShoppingCart');

Route::post('/items/{sku}', 'ItemsController@remove');

Route::post('/items', 'ItemsController@addToShoppingList');
Route::get('/checkout', 'ItemsController@checkout')->name('checkout');
