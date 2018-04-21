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

Route::match(['get', 'post'], '/test', function () {
    return 'matched';
});

Route::any('foo', function () {
    return 'any';
});

Route::get('/user','UserController@index');

Route::get('/route', function (){
    return view('user.user');
});

Route::get('/login', 'UserController@login');