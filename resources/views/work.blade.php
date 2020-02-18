@extends('layouts.app')
@section('title','baslik')
    
@section('content')
<div class="container mt-4">
    <h1>Course Folder</h1>
    <hr>
   
    <div class="col-md-6">
        <h2>Kurs Ekle</h2>
        {{-- <p>{{$errors->first ()}}</p> --}}
        {{-- <p>{{$errors->first ('course_content')}}</p> --}}
{{-- 
        <p>
            @if ($errors->has('course_content'))
                <b>Content bos kalmis : </b>
                {{$errors->first ('course_content')}}
            @endif
        </p> --}}


        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {{-- <p>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
        </p> --}}
    
        <form action="{{route('workInsert')}}" method="POST">
            @csrf
            <div class="form-group">               
                <input class="form-control" type="file"  name="course_file" enctype="multipart/form-data">
            </div>
            <div class="form-group">               
                <input class="form-control" type="text" value="{{old('course_title')}}" name="course_title" placeholder="Title">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" value="{{old('course_content')}}" name="course_content" placeholder="Content">
            </div>
            <div class="form-group">
                <input class="form-control" type="number" value="{{old('course_must')}}" name="course_must" placeholder="Must">
            </div>
            <input class="form-control" type="submit" value="Kaydet">
        </form>


        

    </div>
</div>
@endsection