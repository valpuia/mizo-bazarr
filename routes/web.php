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
Route::get('/categories/{id}/{name}', 'HomeController@show');
Route::get('/{cat_name}/item/item-id/item-name', 'HomeController@item');
Route::get('/cart', 'HomeController@cart');
Route::get('/registration', 'HomeController@registration');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
