@extends('layouts.app')
@includeIf('inc.navbar', ['menu1' => 'Homepage1'], ['menu2' => 'About1'])
@section('title','index sayfasi')
@section('content')
    <h1>here is content in index</h1>

    computer @br hardware
    @addName(user)
    @custom(hr)

    @php
        $number=5;
    @endphp
    @if ($number>5)
    Number is greater than 5
    @elseif($number<5)
    Number is less than 5
    @else
    Number is equal 5
    @endif
    @br
  Number :  {{ $number }}


@endsection