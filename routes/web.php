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

Route::get('/users/export/','TestController@export');

Route::any('/model/add' , 'TestController@add');
Route::get('/model/del' , 'TestController@del');
Route::get('/model/update' , 'TestController@update');
Route::get('/model/query' , 'TestController@query');

Route::get('/look' , 'TestController@look');
