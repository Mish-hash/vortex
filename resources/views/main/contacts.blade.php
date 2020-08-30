@extends('layouts.app')

@section('content')
    <div class="slider_main">
        
        @foreach ($products as $product)
            <div>
                <img src="{{$product->img_url}}" alt="">
            </div>
        @endforeach
        
    </div>

@endsection