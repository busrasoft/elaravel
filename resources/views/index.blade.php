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

@custom(hr)
  @php($sayi=5)
{{$sayi==4 ? 'sayi 5 e esittir' : 'sayi 5 e esit degil'}}
@test()
@php($deger = false)
@unless ($deger)
    Deger false olduğu için döngü çalıştı.
@endunless

@isset($deger)
    tanimli
@endisset
@php($deger = false)
@empty($deger)
    Dolu
@endempty

@php($rakam=2)
@switch($rakam)
    @case(1)
        rakam 1 e esit
        @break
    @case(2)
        rakam 2 ye esit
        @break
    @default
        rakam farkli degerde
@endswitch

@for ($i = 0; $i<=10; $i++)
    {{$i}}
@endfor

@php ($arr = ['php','bootstrap','js'])
    
@foreach ($arr as $key)
    {{$key}}
@endforeach
@endsection