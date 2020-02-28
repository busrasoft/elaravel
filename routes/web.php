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
    return response()->HomeMessage('merhaba'); 
});

// Route::get('/', function () {
//     return response()->download('download/file.txt'); //direk indirme
// });

// Route::get('/', function () {
//     return response('busra')->header('Content-Type','text-plain'); //text gorunumu
// });

// Route::get('/', function () {
//     return response('busra')->header('Content-Type','application/pdf'); //pdf gorunumu
// });

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


//Route::get('/product', 'Frontend\ProductController@index');

Route::get('frontend', function() {
    return view('frontend.index');
});

Route::get('backend', function() {
    $data =[
        "name" => "busra",
        "surname" => "soft"
    ];
    return view('backend.index', compact('data'));
});

Route::get('app', function () {
    return view('index');
});

Route::get('contact', function(){
    return view('contact');
});

Route::any('work','WorkController@index');
Route::any('workInsert','WorkController@workInsert')->name('workInsert');


Route::get('collection',function(){
    //    $collection=collect([1,2,3,4,18,5,19]);
    // return $collection->all(); // tum diziyi verir
    // return $collection->avg(); // dizinin ortalamasini verir
    // return $collection->count(); // dizinin eleman sayisini verir
    // return $collection->min(); // dizinin en kucuk elemanini verir
    // return $collection->max(); //dizinin en buyun elemanini verir
    // return $collection->diff(3); //dizide index dekinden farkli olan degerleri verir
    // return $collection->duplicates(); // dizide tekrarlayan elemanlari verir
    // return $collection->except('0'); //isteneden indisi haric tutarak digerlerini verir
    // return $collection->only(0,3); //isteneden indisi verir
    /** 
    $filtered=$collection->filter(function($value){
        return $value<18; //18 yasindan kucuk olanlari cagiriyoruz
    });
    return $filtered->all();
   */
    /** 
        $filtered=$collection->filter(function($value){
            return $value<18; //18 yasindan kucuk olanlari cagiriyoruz
        });
    //    return $filtered->first();
    // return $filtered->last();
    */
     /** 
    $collection=collect([
        'name'=> 'busra',
        'lastname'=> 'soft',
        'school'=> 'schools',
    ]);
        return $collection->flatten(); //verileri cagiriyoruz
    */
        /** 
    $collection=collect([
        'name'=> 'busra',
        'lastname'=> 'soft',
        'school'=> 'schools',
    ]);
    $collection->forget('name'); //name degerini unutturuyoruz
        return $collection->all(); //kalan verileri cagiriyoruz
     */
/** 
    $collection=collect([
        'name'=> 'busra',
        'lastname'=> 'soft',
        'school'=> 'schools',
    ]);
    return $collection->get('name'); //get icerigindeki elamani getirir
  */
/** 
  $collection=collect([
    ]);
    return 'Sonuc '.$collection->isEmpty('name'); //isEmpty bosa true (1) degeri getirir
*/
/**
$collection=collect([
    'name'=> 'busra',
    'lastname'=> 'soft',
    'school'=> 'schools',
    ]);
    return 'Sonuc '.$collection->isNotEmpty('name'); //isNotEmpty doluysa true (1) degeri getirir
*/

/** 
$collection=collect([
    ['id'=>'1','name'=> 'busra'],
    ['id'=>'2','name'=> 'soft'],
    ['id'=>'3','name'=> 'schools'],
    ['id'=>'4','name'=> 'tree'],
    ]);
    $plucked=$collection->pluck('id','name'); //pluck cagrilan degeri getirir
    return $plucked->all();
*/
/**
    $collection=collect([
    ['id'=>'1','name'=> 'busra'],
    ['id'=>'2','name'=> 'soft'],
    ['id'=>'3','name'=> 'schools'],
    ['id'=>'4','name'=> 'tree'],
    ]);
    $collection->pop(); //pop son degeri siler digerlerini getirir
    return $collection->all();  
 */

// $collection=collect([
//     ['id'=>'1','name'=> 'busra'],
//     ['id'=>'2','lastname'=> 'soft'],
//     ['id'=>'3','lesson'=> 'schools'],
//     ['id'=>'4','person
//     '=> 'tree'],
//     ]);
//     $collection->pull('name'); //pop son degeri siler digerlerini getirir
//     return $collection->all();  

/** 
$collection=collect([1,2,3,4]);
    $collection->prepend('asdf'); //prepend 'lk basa yeni degeri ekler hepsini getirir
    return $collection->all();  
*/
/**
    $collection=collect([1,2,3,4]);
    $collection->prepend('asdf'); //prepend 'lk basa yeni degeri ekler hepsini getirir
    return $collection->all();  
 */

// $collection=collect([1,2,3,4,5,6,7,8,9,10]);
// return $collection->random(); //random rastgele diziden bir deger getirir

// $collection=collect([1,2,3,4,5,6,7,8,9,10]);
//  return $collection->search(2); //search icindeki degerin kacinci indisste oldugunu veriyor

// $collection=collect([1,2,3,4,5,6,7,8,9,10]);
// $arg=$collection->shuffle(); //shuffle dizideki degerlerin yerlerini karistiriyor
//  return $arg->all(2);

// $collection=collect([10,5,3,4,2,6,7,8,9,1 ]);
// return $collection->sort()->values()->all(); //sort dizideki degerlerin yerlerini value degerlerine gore siraliyor

// $collection=collect([10,5,3,4,2,6,7,8,9,1 ]);
// return $collection->sort()->values()->all(); //sort dizideki degerlerin yerlerini value degerlerine gore siraliyor

// $collection=collect([
//     ['id'=>'1','name'=> 'busra'],
//     ['id'=>'2','lastname'=> 'soft'],
//     ['id'=>'3','lesson'=> 'schools'],
//     ['id'=>'4','person'=> 'tree'],
// ]);
// return $collection->sortBy('id')->values()->all(); //sortBy dizideki degerleri sirayla siraliyor

// $collection=collect([
//     ['id'=>'1','name'=> 'busra'],
//     ['id'=>'2','lastname'=> 'soft'],
//     ['id'=>'3','lesson'=> 'schools'],
//     ['id'=>'4','person'=> 'tree'],
// ]);
// return $collection->sortByDesc('id')->values()->all();//sortByDesc dizideki degerleri testen siraliyor

// $collection=collect([10,5,3,4,2,6,7,8,9,1 ]);
// return $collection->sum(); // toplama islemi gerceklestirir

// $collection=collect([10,5,3,4,2,6,7,8,9,10,5 ]);
//  return $collection->unique(); // unique ayni olanlari cikarir 

 $collection=collect([10,5,3,4,2,6,7,8,9,10,5 ]);
 return $collection->unique(); // unique ayni olanlari cikarir 













});