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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/category/{id}', 'HomeController@byCategory')->name('category');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@index')->name('admin.route')->middleware('admin');
Route::get('/create', 'HomeController@create')->name('create')->middleware('admin');
Route::post('/store', 'HomeController@store')->name('store')->middleware('admin');
Route::get('/show/{id}', 'HomeController@show')->name('show');
Route::put('/update/{id}', 'HomeController@update')->name('update')->middleware('admin');
Route::get('/destroy/{id}', 'HomeController@destroy')->name('destroy')->middleware('admin');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit')->middleware('admin');


