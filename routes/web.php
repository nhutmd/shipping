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

Route::get('demo', function () {
    return view('demo');
})->name('demo-template');

Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('users', function (){
    return view('users.index');
})->name('users');

Route::get('order', function (){
    return view('order.index');
})->name('order');

Route::get('pay', function () {
    return view('pay.index');
})->name('pay');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');