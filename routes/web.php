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

Route::get('/', 'IndexController@show')->name('homepage');;

Route::get('/category/show/{id}', 'ReceiptController@showFromCategory')->name('showFromCategory');
Route::get('receipts', 'ReceiptController@all');
Route::get('receipt/{id}', 'ReceiptController@show')->name('showReceipt');