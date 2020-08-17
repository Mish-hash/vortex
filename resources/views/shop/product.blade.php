@extends('shop.layout')

@section('title', 'product -> ' . $product->name)


@section('content')
        

    <h1 class="text-center mb-3">Product => {{$product->name}}</h1>
    <a href="/category/{{$category->slug}}">Category => {{$category->name}}</a><br>
    <img src="{{$product->img_url}}" alt="{{$product->name}}" class="img-fluid">
    <p>{{$product->description}}</p>
    <p>Price: {{$product->price}}</p>
    
    
    <div class="row">
        @foreach ($crosselProducts as $crosselProduct)
            <div class="col-md-4 mb-5">
                <p>crosselProduct</p>
                <a href="/product/{{$crosselProduct->slug}}">
                    <img src="{{$crosselProduct->img_url}}" alt="{{$crosselProduct->name}}" class="img-fluid">
                    <h3>{{$crosselProduct->name}}</h3>
                    <p>Price: {{$crosselProduct->price}}</p>
                </a>
            </div>
        @endforeach
    </div>
    

@endsection


@section('footer')
    @parent <br>
    Реклама в магазине
@endsection