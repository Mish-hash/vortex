@extends('main.layout')

@section('title', $title)


@section('content')
        

    <h1>{{$title}}</h1>

    @foreach ($categories as $category)
        <h3>{{$category}}</h3><br>

    @endforeach
    {{-- Шаблон коментария --}}
    @isset($n)
        <h3>{{$n}}</h3>
    @endisset


@endsection

@section('footer')
    @parent <br>
    Реклама
@endsection