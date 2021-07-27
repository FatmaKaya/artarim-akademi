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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', '\App\Http\Controllers\LoginController@index');
Route::post('/', '\App\Http\Controllers\LoginController@login');
Route::get('/admin/logout', '\App\Http\Controllers\LoginController@logout');
Route::post('/admin/general/upload', '\App\Http\Controllers\CoreController@upload');

//Modules
Route::get('/admin/modules', '\App\Http\Controllers\ModuleController@index');
Route::get('/admin/modules/add', '\App\Http\Controllers\ModuleController@show');
Route::post('/admin/modules/add', '\App\Http\Controllers\ModuleController@create');
Route::get('/admin/modules/edit/{id}', '\App\Http\Controllers\ModuleController@edit')->where('id', '[0-9]+');
Route::post('/admin/modules/edit/{id}', '\App\Http\Controllers\ModuleController@update')->where('id', '[0-9]+');
Route::get('/admin/modules/delete/{id}', '\App\Http\Controllers\ModuleController@destroy')->where('id', '[0-9]+');
Route::post('/admin/modules/order', '\App\Http\Controllers\ModuleController@order');

//Events
Route::get('/admin/events', '\App\Http\Controllers\EventController@index');
Route::get('/admin/events/add', '\App\Http\Controllers\EventController@show');
Route::post('/admin/events/add', '\App\Http\Controllers\EventController@create');
Route::get('/admin/events/edit/{id}', '\App\Http\Controllers\EventController@edit')->where('id', '[0-9]+');
Route::post('/admin/events/edit/{id}', '\App\Http\Controllers\EventController@update')->where('id', '[0-9]+');
Route::get('/admin/events/delete/{id}', '\App\Http\Controllers\EventController@destroy')->where('id', '[0-9]+');
Route::post('/admin/events/order', '\App\Http\Controllers\EventController@order');

//OpenPositions
Route::get('/admin/openPositions', '\App\Http\Controllers\OpenPositionController@index');
Route::get('/admin/openPositions/add', '\App\Http\Controllers\OpenPositionController@show');
Route::post('/admin/openPositions/add', '\App\Http\Controllers\OpenPositionController@create');
Route::get('/admin/openPositions/edit/{id}', '\App\Http\Controllers\OpenPositionController@edit')->where('id', '[0-9]+');
Route::post('/admin/openPositions/edit/{id}', '\App\Http\Controllers\OpenPositionController@update')->where('id', '[0-9]+');
Route::get('/admin/openPositions/delete/{id}', '\App\Http\Controllers\OpenPositionController@destroy')->where('id', '[0-9]+');
Route::post('/admin/openPositions/order', '\App\Http\Controllers\OpenPositionController@order');
