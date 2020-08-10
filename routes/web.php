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


Route::get('table/a' , 'TestController@a');
Route::get('table/d' , 'TestController@d');
Route::get('table/u' , 'TestController@u');
Route::get('table/q' , 'TestController@q');

Route::get('/table/lookt' , 'TestController@lookt');

Route::any('/verification' , 'TestController@verification');

#表单验证
Route::get('post/create','PostController@create');

Route::any(	'post','PostController@store');

#文件上传
Route::any('/http/test','PostController@http');

#分页
Route::get('/paging','PostController@paging');

#增删改查 + 文件上传的练习


Route::any('/upload','PostController@upload');
Route::any('up','PostController@up');

#响应方式
Route::get('/response','PostController@response');
Route::get('/ajax','PostController@ajax');