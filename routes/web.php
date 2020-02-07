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
})->name('welcome');

/** 
Route::post('post', function() {
    return $_SERVER['REQUEST_METHOD'];
});

//match metodu: 3 paramatreden oluşuyor. get ve post kısıtlamalarını izne çevirmek için kullanılır kendisiyle eşleşenlere izin verir.
Route::match(['get', 'post'], 'post', function() {
    return view('newpage');
});

// any: bütün istekleri kabul eder. get post put delete ayırt etmez.
Route::any('post', function() {
    return view('newpage');
});

// parametreli uzantı kullanımı, bu şekilde mecbur parametre kullanılmalı http://127.0.0.1:8000/newpage/bus/ra
Route::get('newpage/{bus}/{ra}', function($name, $lastname) {
    return view('newpage');
});

// parametreli uzantı kullanımı, bu şekilde parametre ister kullanılır isterse kullanılmaz.
Route::get('newpage/{bus?}/{ra?}', function($name=null, $lastname=null) {
    return view('newpage');
});


// parametre RAKAM, /busra/123 gibi kullanım için http://127.0.0.1:8000/newpage/busra/123
Route::get('newpage/{name}/{number}', function($name, $number) {
    return $name." ".$number;
})->where(['name' => '[a-z]+', 'number' => '[0-9]+']);

// parametre BÜYÜKHARF, /busra/BUSRA gibi kullanım için http://127.0.0.1:8000/newpage/busra/BUSRA
Route::get('newpage/{name}/{uppercase}', function($name, $uppercase) {
    return $name." ".$uppercase;
})->where(['name' => '[a-z]+', 'uppercase' => '[azA-z]+']);
*/
// ROUTE takma isim verme
Route::get('post', function() {
    return view('routeName');
})->name('homepage');

Route::get('/page', 'PageController@index');
Route::get('/show', 'PageController@show');

Route::group(['namespace'=>'Backend'],function(){
    Route::get('/table1', 'Table1Controller@index')->name('backend.table1');
    Route::get('/table2', 'Table2Controller@index');
    Route::get('/table3', 'Table3Controller@index');
    Route::get('/table3/{name}/{lastname}', 'Table3Controller@index');
    Route::get('/invoke', 'SingleController');
        
});


Route::get('/product', 'Frontend\ProductController@index');