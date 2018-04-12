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
    return view('auth.login');
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

//Subject routes
Route::get('/subject/create','subjectController@index');
Route::post('/subject/create','subjectController@create');
Route::get('/subject/list','subjectController@show');
Route::get('/subject/edit/{id}','subjectController@edit');
Route::post('/subject/update','subjectController@update');
Route::get('/subject/delete/{id}','subjectController@delete');
Route::get('/subject/getmarks/{subject}/{cls}','subjectController@getmarks');

//GPA Routes
Route::get('/gpa','gpaController@index');
Route::post('/gpa/create','gpaController@create');
Route::get('/gpa/list','gpaController@show');
Route::get('/gpa/edit/{id}','gpaController@edit');
Route::post('/gpa/update','gpaController@update');
Route::get('/gpa/delete/{id}','gpaController@delete');

//Student routes
Route::get('/student/getRegi/{class}/{session}/{section}','studentController@getRegi');
Route::get('/student/create','studentController@index');
Route::post('/student/create','studentController@create');
Route::get('/student/list','studentController@show');
Route::post('/student/list','studentController@getList');
Route::get('/student/view/{id}','studentController@view');

Route::get('/student/edit/{id}','studentController@edit');
Route::post('/student/update','studentController@update');
Route::get('/student/delete/{id}','studentController@delete');
Route::get('/student/getList/{class}/{section}/{shift}/{session}','studentController@getForMarks');