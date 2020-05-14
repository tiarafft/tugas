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

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vendors', 'HomeController@vendors');
Route::get('/vendors/add', 'HomeController@vendors_add');
Route::post('/vendors/action', 'HomeController@vendors_action');
Route::get('/vendors/edit/{id}', 'HomeController@vendors_edit');
Route::put('/vendors/update/{id}', 'HomeController@vendors_update');
Route::get('/vendors/delete/{id}', 'HomeController@vendors_delete');

Route::get('/vendors','VendorsController@index');
Route::get('/vendors/{id}','VendorsController@show');
Route::post('/vendors/store','VendorsController@store');
Route::post('/vendors/update/{id}','VendorsController@update');
Route::post('/vendors/delete/{id}','VendorsController@destroy');