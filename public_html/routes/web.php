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

use Illuminate\Support\Facades\Route;

Route::get('/menu', 'MenuController@index');
Route::get('/', 'MenuController@index')->name('home');
Route::get('/buy/{id}', 'CustomersOrderController@do')->name('buy');

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/orders', 'CustomersOrderController@index')->name('orders');
});

Auth::routes();
