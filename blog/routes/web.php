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
    return view('demo');
});

Route::get('/demo', 'DemoController@index');
// Route::get('login', 'DemoController@GetLogin');
// Route::post('login', 'DemoController@PostLogin');
//thêm
Route::get('/them', 'DemoController@getThem');
Route::post('/them', 'DemoController@postThem');
//Route::post('/them', 'DemoController@them');
//sửa
Route::get('/Edit/{id}', 'DemoController@getEdit');
Route::post('/Edit/{id}', 'DemoController@postEdit');
//xóa
Route::get('/Delete/{id}', 'DemoController@getDelete');
//validation
// Route::post('/them', 'DemoController@handleForm');

Route::get('', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
