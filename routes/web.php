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
// お問い合わせ入力ページ
Route::get('/','App\Http\Controllers\ContactsController@index')->name('contact');
Route::post('/', 'App\Http\Controllers\ContactsController@index')->name('contact');


// 確認ページ
Route::get('/confirm', 'App\Http\Controllers\ContactsController@confirm')->name('confirm');
Route::post('/confirm', 'App\Http\Controllers\ContactsController@confirm')->name('confirm');

// DB挿入
Route::post('/process', 'ContactsController@process')->name('process');

// 完了ページ
Route::get('/complete', 'App\Http\Controllers\ContactsController@complete')->name('complete');
