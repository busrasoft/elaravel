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

Route::get('newpage', function() {
    return view('newpage');
});

/** 
Route::post('post', function() {
    return $_SERVER['REQUEST_METHOD'];
});

Route::match(['get', 'post'], 'post', function() {
    return view('newpage');
});

Route::any('post', function() {
    return view('newpage');
});
*/

Route::get('newpage/{bus}/{ra}', function($name, $lastname) {
    return view('newpage');
});