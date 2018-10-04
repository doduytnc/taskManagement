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

Route::prefix('/customer')->group(function () {

    Route::get('/index', 'CustomerController@index')->name('index_customer');

    Route::get('/create', 'CustomerController@create')->name('add_customer');

    Route::post('/store', 'CustomerController@store')->name('store');

    Route::get('/{id}/show', 'CustomerController@show');

    Route::get('/{id}/edit', 'CustomerController@edit')->name('edit_customer');

    Route::post('/{id}/edit', 'CustomerController@update')->name('update');

    Route::get('/delete/{id}', 'CustomerController@destroy')->name('delete_customer');

});