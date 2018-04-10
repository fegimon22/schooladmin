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

Route::get('admin', function () {
    return view('admin_template');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User Role Management
Route::get('/userrole/create', 'RoleController@create');

//Class routes
Route::get('/class/create','classController@index');
Route::post('/class/create','classController@create');
Route::get('/class/list','classController@show');
Route::get('/class/edit/{id}','classController@edit');
Route::post('/class/update','classController@update');
Route::get('/class/delete/{id}','classController@delete');
Route::get('/class/getsubjects/{class}','classController@getSubjects');