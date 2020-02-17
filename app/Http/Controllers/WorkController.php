<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
            if($request->hasFile('course_file'))
            {
                echo 'calisti';
            } else {
                return back()->with('status','Dosya eklemeyi mi unuttun');
            }

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
