@extends('layouts.app')
@includeIf('inc.navbar', ['menu1' => 'Homepage1'], ['menu2' => 'About1'])
@section('title','index sayfasi')
@section('content')
    <h1>here is content in index</h1>
@endsection