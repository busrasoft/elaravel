@extends('layouts.app')
@section('title','baslik')
    
@section('content')
<div class="container mt-4">
    <h1>Course Folder</h1>
    <hr>
   
    <div class="col-md-6">
        <h2>Kurs Ekle</h2>
        <form method="POST">
            <div class="form-group">
                @csrf
                <input class="form-control" type="text" name="course_title" placeholder="Title">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="course_content" placeholder="Content">
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="course_must" placeholder="Must">
            </div>
            <input class="form-control" type="submit" value="Kaydet">
        </form>


        

    </div>
</div>
@endsection