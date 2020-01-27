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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'ScholarController@home')->name('home');
Route::get('/dashboard/add', 'ScholarController@add_view')->name('add');
Route::get('/dashboard/edit/{id}','ScholarController@edit')->name('edit');
Route::get('/dashboard/send/email','SendController@sendEmail');
Route::post('/dashboard/store', 'ScholarController@store')->name('store');
//Route::post('/dashboard/delete/{id?}','ScholarController@delete')->name('delete');
Route::get('/dashboard/delete/{id?}','ScholarController@delete')->name('delete');
Route::post('/dashboard/update/{id}','ScholarController@update')->name('update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
