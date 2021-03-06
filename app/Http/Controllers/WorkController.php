<?php

namespace App\Http\Controllers;

use App\Rules\Age;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Validator;
class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('work');
    }
    public function workInsert(Request $request){
        //return $request->all();
        //return $request->input();
        // echo $request->input('course_title');    echo "<br>";
        // echo $request->input('course_content');  echo "<br>";
        // echo $request->input('course_must');
        //   echo $request->course_must; echo "<br>";
        //   echo $request->course_content; echo "<br>";
        //   echo $request->course_must; echo "<br>";
        // echo $request->url();
        // if($request->isMethod('post')){
        //     echo 'post metodu';
        // }
        // else
        // echo 'get metodu';
        // return $request->except(['course_title']); //without course_title
        // return $request->only(['_token', 'course_title']); 

        //  $request->flash(); //formun icindeki verilerin form eksik gonderildiginde silinmesini onluyor
        //  if($request->filled('course_title')) //formda deger var mi filled ile anlasilir
        // {
        //        $request->all();
        //  }
        //  else{
        //      return back(); // form bosken ayni sayfaya geri donderme islemi yapiyor.
        //       }
        // $request->flashOnly('course_content','course_title'); //sadece burada yazili kisimlar sayfa yenilendiginde silinmez
        // $request->flashExcept('course_content'); //sadece burada yazili kisimlar sayfa yenilendiginde silinir
        // return $request->file('course_file');
            // if($request->hasFile('course_file'))
            // {
            //     echo 'calisti';
            // } else {
            //     return back()->with('status','Dosya eklemeyi mi unuttun');
            // }

        // $validatedData=$request->validate([
        //     'course_title' => 'required|min:5'
        // ]);
        // return $request->all();

            // $validator=Validator::make($request->all(),[
            //     'course_title'=>'required'
            // ])->validate(); //buradaki validate sayfaya geri döndertiyor
            //     if($validator->fails()){
            //         return "Dogrulama hatasi";
            //     }
        
        
            // $validator=Validator::make($request->all(),[
            //     'course_title'=>'required'
            // ]);
            // $validator->after(function($validator){
            //     $validator->errors()->add('dikkat',"dahil etsene ya ");
            // })->validate(); //buradaki validate sayfaya geri döndertiyor
        
            // $validator=Validator::make($request->all(),[
            //     'course_title'=>'required',
            //     'course_content'=>'required',
            // ])->validate(); //buradaki validate sayfaya geri döndertiyor
        
            // $messages=[
            //     'required'=>'Zorunlu alan :attribute',
            //     'min'=>'En kucuk deger :attribute'
            // ];
            // $validator = Validator::make($request->all(), [
            //     'course_title'=>'required',
            //     'course_content'=>'required|min:9'
            // ], $messages)->validate(); //buradaki validate sayfaya geri döndertiyor
        
        
            // $validator = Validator::make($request->all(), [
            //     'course_title'=>'required|active_url', //sadece url kabul ediyor
            //     'course_content'=>'required',
            //     'course_confirm'=>'accepted',
            // ])->validate(); 
        
            // $validator = Validator::make($request->all(), [
            //     'course_title'=>'required', 
            //     'course_date'=>'after:2/18/2020', // girilen tarihten once veya sonrasini kabul eder after/ before
            //     'course_content'=>'required',
            //     'course_confirm'=>'accepted',
            // ])->validate(); 

            $validator = Validator::make($request->all(), [
                'course_title'=>'required', 
                'course_date'=>'after:2/18/2020', // girilen tarihten once veya sonrasini kabul eder after/ before
                'course_content'=>'email|rfc,dns', //mail adresini dns baglantisini kontrol ederek mail adresinin gecerli olup olmadigini kontrol ediyo
                'course_confirm'=>'accepted',
            ])->validate(); 

        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
